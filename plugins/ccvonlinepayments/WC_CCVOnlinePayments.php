<?php

class WC_CCVOnlinePayments {

    private $api;
    private $cachedMethods = null;

    public function __construct()
    {
        $pluginData = get_file_data(__DIR__."/ccvonlinepayments.php", ["Version" => "Version"]);
        $pluginVersion = $pluginData['Version'];

        $this->api = new \CCVOnlinePayments\Lib\CcvOnlinePaymentsApi(
            new WC_CCVOnlinePayments_Cache($pluginVersion),
            new WC_CCVOnlinePayments_Logger(),
            get_option("ccvonlinepayments_api_key")
        );

        global $wp_version, $woocommerce;
        $this->api->setMetadata([
            "CCVOnlinePayments" => $pluginVersion,
            "Wordpress"         => $wp_version,
            "Woocommerce"       => $woocommerce->version
        ]);
    }

    /**
     * @param $methodId
     * @return \CCVOnlinePayments\Lib\Method|null
     */
    public function getMethodById($methodId) {
        if($this->cachedMethods === null) {
            $this->cachedMethods = $this->api->getMethods();
        }

        foreach($this->cachedMethods as $method) {
            if("ccvonlinepayments_".$method->getId() === $methodId) {
                return $method;
            }
        }

        return null;
    }

    /**
     * @return \CCVOnlinePayments\Lib\CcvOnlinePaymentsApi
     */
    public function getApi() {
        return $this->api;
    }

    private static $ccvOnlinePaymentsSingleton;
    public static function initSingleton() {
        self::$ccvOnlinePaymentsSingleton = new WC_CCVOnlinePayments();
    }

    /**
     * @return WC_CCVOnlinePayments
     */
    public static function get() {
        return self::$ccvOnlinePaymentsSingleton;
    }

    public static function doWebhook() {
        $order = self::handleCallback();

        return "OK";
    }

    public static function doReturn() {
        $order = self::handleCallback();

        $gateway = wc_get_payment_gateway_by_order($order);
        wp_safe_redirect($gateway->get_return_url($order));
    }

    private static function handleCallback() {
        global $wpdb;

        $payment = $wpdb->get_row( $wpdb->prepare(
            'SELECT payment_reference, order_number FROM '.$wpdb->prefix.'ccvonlinepayments_payments WHERE payment_id=%s', $_GET['payment_id'])
        );

        if($payment === null) {
            throw new \Exception("Payment not found");
        }

        $orderNumber = $_GET['order'];
        if($payment->order_number != $orderNumber) {
            throw new \Exception("Invalid order number");
        }

        $order = wc_get_order($orderNumber);
        if(!$order->key_is_valid($_GET['key'])) {
            throw new \Exception("Invalid key");
        }

        $paymentStatus = self::get()->getApi()->getPaymentStatus($payment->payment_reference);
        if($paymentStatus->getStatus() === \CCVOnlinePayments\Lib\PaymentStatus::STATUS_SUCCESS) {
            $order->payment_complete($payment->payment_reference);
        }

        return $order;
    }
}
