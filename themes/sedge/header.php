<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head> 
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php $favicon = get_theme_mod('favicon'); if(!empty($favicon)) { ?> 
  <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
  <?php } ?> 
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <meta name="theme-color" content="#b4192b">
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->	



<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="bdoverlay"></div>

  <svg style="display: none;">
      <symbol id="comnined-shape-icon" width="78" height="89" viewBox="0 0 78 89" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M75.0138 26.8219C73.6671 26.8219 72.5754 25.7302 72.5754 24.3836C72.5754 23.0369 73.6671 21.9452 75.0138 21.9452C76.3605 21.9452 77.4521 23.0369 77.4521 24.3836C77.4521 25.7302 76.3605 26.8219 75.0138 26.8219ZM72.5752 2.43836C72.5752 3.78502 73.6669 4.87671 75.0136 4.87671C76.3602 4.87671 77.4519 3.78502 77.4519 2.43836C77.4519 1.09169 76.3602 0 75.0136 0C73.6669 0 72.5752 1.09169 72.5752 2.43836ZM50.6302 2.43836C50.6302 3.78502 51.7219 4.87671 53.0686 4.87671C54.4153 4.87671 55.5069 3.78502 55.5069 2.43836C55.5069 1.09169 54.4153 0 53.0686 0C51.7219 0 50.6302 1.09169 50.6302 2.43836ZM50.6302 24.3836C50.6302 25.7302 51.7219 26.8219 53.0686 26.8219C54.4153 26.8219 55.5069 25.7302 55.5069 24.3836C55.5069 23.0369 54.4153 21.9452 53.0686 21.9452C51.7219 21.9452 50.6302 23.0369 50.6302 24.3836ZM75.0138 47.548C73.6671 47.548 72.5754 46.4563 72.5754 45.1096C72.5754 43.7629 73.6671 42.6712 75.0138 42.6712C76.3605 42.6712 77.4521 43.7629 77.4521 45.1096C77.4521 46.4563 76.3605 47.548 75.0138 47.548ZM50.6302 45.1096C50.6302 46.4563 51.7219 47.548 53.0686 47.548C54.4153 47.548 55.5069 46.4563 55.5069 45.1096C55.5069 43.7629 54.4153 42.6712 53.0686 42.6712C51.7219 42.6712 50.6302 43.7629 50.6302 45.1096ZM75.0138 67.0548C73.6671 67.0548 72.5754 65.9631 72.5754 64.6164C72.5754 63.2698 73.6671 62.1781 75.0138 62.1781C76.3605 62.1781 77.4521 63.2698 77.4521 64.6164C77.4521 65.9631 76.3605 67.0548 75.0138 67.0548ZM50.6302 64.6164C50.6302 65.9631 51.7219 67.0548 53.0686 67.0548C54.4153 67.0548 55.5069 65.9631 55.5069 64.6164C55.5069 63.2698 54.4153 62.1781 53.0686 62.1781C51.7219 62.1781 50.6302 63.2698 50.6302 64.6164ZM75.0138 89C73.6671 89 72.5754 87.9083 72.5754 86.5616C72.5754 85.215 73.6671 84.1233 75.0138 84.1233C76.3605 84.1233 77.4521 85.215 77.4521 86.5616C77.4521 87.9083 76.3605 89 75.0138 89ZM50.6302 86.5616C50.6302 87.9083 51.7219 89 53.0686 89C54.4153 89 55.5069 87.9083 55.5069 86.5616C55.5069 85.215 54.4153 84.1233 53.0686 84.1233C51.7219 84.1233 50.6302 85.215 50.6302 86.5616ZM33.5617 4.87671C32.215 4.87671 31.1233 3.78502 31.1233 2.43836C31.1233 1.09169 32.215 0 33.5617 0C34.9084 0 36.0001 1.09169 36.0001 2.43836C36.0001 3.78502 34.9084 4.87671 33.5617 4.87671ZM31.1233 24.3836C31.1233 25.7302 32.215 26.8219 33.5617 26.8219C34.9084 26.8219 36.0001 25.7302 36.0001 24.3836C36.0001 23.0369 34.9084 21.9452 33.5617 21.9452C32.215 21.9452 31.1233 23.0369 31.1233 24.3836ZM33.5617 47.548C32.215 47.548 31.1233 46.4563 31.1233 45.1096C31.1233 43.7629 32.215 42.6712 33.5617 42.6712C34.9084 42.6712 36.0001 43.7629 36.0001 45.1096C36.0001 46.4563 34.9084 47.548 33.5617 47.548ZM31.1233 64.6164C31.1233 65.9631 32.215 67.0548 33.5617 67.0548C34.9084 67.0548 36.0001 65.9631 36.0001 64.6164C36.0001 63.2698 34.9084 62.1781 33.5617 62.1781C32.215 62.1781 31.1233 63.2698 31.1233 64.6164ZM33.5617 89C32.215 89 31.1233 87.9083 31.1233 86.5616C31.1233 85.215 32.215 84.1233 33.5617 84.1233C34.9084 84.1233 36.0001 85.215 36.0001 86.5616C36.0001 87.9083 34.9084 89 33.5617 89ZM9.17814 2.43836C9.17814 3.78502 10.2698 4.87671 11.6165 4.87671C12.9632 4.87671 14.0549 3.78502 14.0549 2.43836C14.0549 1.09169 12.9632 0 11.6165 0C10.2698 0 9.17814 1.09169 9.17814 2.43836ZM11.6165 26.8219C10.2698 26.8219 9.17814 25.7302 9.17814 24.3836C9.17814 23.0369 10.2698 21.9452 11.6165 21.9452C12.9632 21.9452 14.0549 23.0369 14.0549 24.3836C14.0549 25.7302 12.9632 26.8219 11.6165 26.8219ZM9.17814 45.1096C9.17814 46.4563 10.2698 47.548 11.6165 47.548C12.9632 47.548 14.0549 46.4563 14.0549 45.1096C14.0549 43.7629 12.9632 42.6712 11.6165 42.6712C10.2698 42.6712 9.17814 43.7629 9.17814 45.1096ZM11.6165 67.0548C10.2698 67.0548 9.17814 65.9631 9.17814 64.6164C9.17814 63.2698 10.2698 62.1781 11.6165 62.1781C12.9632 62.1781 14.0549 63.2698 14.0549 64.6164C14.0549 65.9631 12.9632 67.0548 11.6165 67.0548ZM9.17814 86.5616C9.17814 87.9083 10.2698 89 11.6165 89C12.9632 89 14.0549 87.9083 14.0549 86.5616C14.0549 85.215 12.9632 84.1233 11.6165 84.1233C10.2698 84.1233 9.17814 85.215 9.17814 86.5616ZM-9.10949 4.87671C-10.4562 4.87671 -11.5478 3.78502 -11.5478 2.43836C-11.5478 1.09169 -10.4562 0 -9.10949 0C-7.76283 0 -6.67113 1.09169 -6.67113 2.43836C-6.67113 3.78502 -7.76283 4.87671 -9.10949 4.87671ZM-11.5478 24.3836C-11.5478 25.7302 -10.4562 26.8219 -9.10949 26.8219C-7.76283 26.8219 -6.67113 25.7302 -6.67113 24.3836C-6.67113 23.0369 -7.76283 21.9452 -9.10949 21.9452C-10.4562 21.9452 -11.5478 23.0369 -11.5478 24.3836ZM-9.10949 47.548C-10.4562 47.548 -11.5478 46.4563 -11.5478 45.1096C-11.5478 43.7629 -10.4562 42.6712 -9.10949 42.6712C-7.76283 42.6712 -6.67113 43.7629 -6.67113 45.1096C-6.67113 46.4563 -7.76283 47.548 -9.10949 47.548ZM-11.5478 64.6164C-11.5478 65.9631 -10.4562 67.0548 -9.10949 67.0548C-7.76283 67.0548 -6.67113 65.9631 -6.67113 64.6164C-6.67113 63.2698 -7.76283 62.1781 -9.10949 62.1781C-10.4562 62.1781 -11.5478 63.2698 -11.5478 64.6164ZM-9.10949 89C-10.4562 89 -11.5478 87.9083 -11.5478 86.5616C-11.5478 85.215 -10.4562 84.1233 -9.10949 84.1233C-7.76283 84.1233 -6.67113 85.215 -6.67113 86.5616C-6.67113 87.9083 -7.76283 89 -9.10949 89ZM-31.0547 2.43836C-31.0547 3.78502 -29.9631 4.87671 -28.6164 4.87671C-27.2697 4.87671 -26.178 3.78502 -26.178 2.43836C-26.178 1.09169 -27.2697 0 -28.6164 0C-29.9631 0 -31.0547 1.09169 -31.0547 2.43836ZM-28.6164 26.8219C-29.9631 26.8219 -31.0547 25.7302 -31.0547 24.3836C-31.0547 23.0369 -29.9631 21.9452 -28.6164 21.9452C-27.2697 21.9452 -26.178 23.0369 -26.178 24.3836C-26.178 25.7302 -27.2697 26.8219 -28.6164 26.8219ZM-31.0547 45.1096C-31.0547 46.4563 -29.9631 47.548 -28.6164 47.548C-27.2697 47.548 -26.178 46.4563 -26.178 45.1096C-26.178 43.7629 -27.2697 42.6712 -28.6164 42.6712C-29.9631 42.6712 -31.0547 43.7629 -31.0547 45.1096ZM-28.6164 67.0548C-29.9631 67.0548 -31.0547 65.9631 -31.0547 64.6164C-31.0547 63.2698 -29.9631 62.1781 -28.6164 62.1781C-27.2697 62.1781 -26.178 63.2698 -26.178 64.6164C-26.178 65.9631 -27.2697 67.0548 -28.6164 67.0548ZM-31.0547 86.5616C-31.0547 87.9083 -29.9631 89 -28.6164 89C-27.2697 89 -26.178 87.9083 -26.178 86.5616C-26.178 85.215 -27.2697 84.1233 -28.6164 84.1233C-29.9631 84.1233 -31.0547 85.215 -31.0547 86.5616ZM-50.5616 4.87671C-51.9082 4.87671 -52.9999 3.78502 -52.9999 2.43836C-52.9999 1.09169 -51.9082 0 -50.5616 0C-49.2149 0 -48.1232 1.09169 -48.1232 2.43836C-48.1232 3.78502 -49.2149 4.87671 -50.5616 4.87671ZM-52.9999 24.3836C-52.9999 25.7302 -51.9082 26.8219 -50.5616 26.8219C-49.2149 26.8219 -48.1232 25.7302 -48.1232 24.3836C-48.1232 23.0369 -49.2149 21.9452 -50.5616 21.9452C-51.9082 21.9452 -52.9999 23.0369 -52.9999 24.3836ZM-50.5616 47.548C-51.9082 47.548 -52.9999 46.4563 -52.9999 45.1096C-52.9999 43.7629 -51.9082 42.6712 -50.5616 42.6712C-49.2149 42.6712 -48.1232 43.7629 -48.1232 45.1096C-48.1232 46.4563 -49.2149 47.548 -50.5616 47.548ZM-52.9999 64.6164C-52.9999 65.9631 -51.9082 67.0548 -50.5616 67.0548C-49.2149 67.0548 -48.1232 65.9631 -48.1232 64.6164C-48.1232 63.2698 -49.2149 62.1781 -50.5616 62.1781C-51.9082 62.1781 -52.9999 63.2698 -52.9999 64.6164ZM-50.5616 89C-51.9082 89 -52.9999 87.9083 -52.9999 86.5616C-52.9999 85.215 -51.9082 84.1233 -50.5616 84.1233C-49.2149 84.1233 -48.1232 85.215 -48.1232 86.5616C-48.1232 87.9083 -49.2149 89 -50.5616 89Z"/>
      </symbol>

      <symbol id="cart-icon" width="32" height="37" viewBox="0 0 32 37" xmlns="http://www.w3.org/2000/svg">
        <path d="M27.9626 36.7345H4.03739C3.49045 36.7352 2.94909 36.6344 2.44624 36.4384C1.94339 36.2424 1.48957 35.9553 1.11237 35.5945C0.735173 35.2337 0.44249 34.8067 0.252126 34.3396C0.0617624 33.8725 -0.0223033 33.375 0.00504395 32.8774L1.09378 11.7672C1.13884 10.8208 1.58348 9.92684 2.33486 9.27199C3.08625 8.61714 4.08627 8.25204 5.12612 8.25293H26.8739C27.9137 8.25204 28.9138 8.61714 29.6651 9.27199C30.4165 9.92684 30.8612 10.8208 30.9062 11.7672L31.995 32.8774C32.0223 33.375 31.9382 33.8725 31.7479 34.3396C31.5575 34.8067 31.2648 35.2337 30.8876 35.5945C30.5104 35.9553 30.0566 36.2424 29.5538 36.4384C29.0509 36.6344 28.5096 36.7352 27.9626 36.7345ZM5.12612 10.7142C4.76964 10.7142 4.42776 10.8432 4.17569 11.0728C3.92362 11.3024 3.782 11.6139 3.782 11.9386L2.69327 32.9998C2.68416 33.1657 2.71218 33.3316 2.77563 33.4873C2.83909 33.643 2.93665 33.7853 3.06238 33.9055C3.18811 34.0258 3.33939 34.1215 3.507 34.1869C3.67462 34.2522 3.85507 34.2858 4.03739 34.2856H27.9626C28.1449 34.2858 28.3254 34.2522 28.493 34.1869C28.6606 34.1215 28.8119 34.0258 28.9376 33.9055C29.0634 33.7853 29.1609 33.643 29.2244 33.4873C29.2878 33.3316 29.3158 33.1657 29.3067 32.9998L28.218 11.8897C28.218 11.5649 28.0764 11.2535 27.8243 11.0238C27.5722 10.7942 27.2304 10.6652 26.8739 10.6652L5.12612 10.7142Z"/>
        <path d="M24.0644 9.48978H21.3762V7.34693C21.3762 6.04791 20.8098 4.8021 19.8015 3.88355C18.7932 2.96501 17.4257 2.44898 15.9997 2.44898C14.5738 2.44898 13.2063 2.96501 12.198 3.88355C11.1897 4.8021 10.6233 6.04791 10.6233 7.34693V9.48978H7.93506V7.34693C7.93506 5.3984 8.78473 3.52968 10.2972 2.15187C11.8096 0.774049 13.8609 0 15.9997 0C18.1386 0 20.1899 0.774049 21.7023 2.15187C23.2148 3.52968 24.0644 5.3984 24.0644 7.34693V9.48978Z"/>
      </symbol>
      <symbol id="lock-price" width="14" height="17" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12.2336 16.0714H1.76636C1.52707 16.0716 1.29023 16.0276 1.07023 15.9418C0.850235 15.8561 0.651686 15.7304 0.486662 15.5726C0.321638 15.4147 0.19359 15.228 0.110305 15.0236C0.0270211 14.8192 -0.00975769 14.6016 0.00220673 14.3839L0.478527 5.14816C0.498241 4.7341 0.692773 4.34299 1.0215 4.05649C1.35023 3.77 1.78774 3.61027 2.24268 3.61066H11.7573C12.2123 3.61027 12.6498 3.77 12.9785 4.05649C13.3072 4.34299 13.5018 4.7341 13.5215 5.14816L13.9978 14.3839C14.0098 14.6016 13.973 14.8192 13.8897 15.0236C13.8064 15.228 13.6784 15.4147 13.5133 15.5726C13.3483 15.7304 13.1498 15.8561 12.9298 15.9418C12.7098 16.0276 12.4729 16.0716 12.2336 16.0714ZM2.24268 4.68744C2.08672 4.68744 1.93714 4.74388 1.82686 4.84435C1.71658 4.94482 1.65463 5.08108 1.65463 5.22316L1.17831 14.4374C1.17432 14.51 1.18658 14.5826 1.21434 14.6507C1.2421 14.7188 1.28478 14.7811 1.33979 14.8337C1.3948 14.8863 1.46098 14.9282 1.53431 14.9567C1.60765 14.9853 1.68659 15 1.76636 14.9999H12.2336C12.3134 15 12.3924 14.9853 12.4657 14.9567C12.539 14.9282 12.6052 14.8863 12.6602 14.8337C12.7152 14.7811 12.7579 14.7188 12.7857 14.6507C12.8134 14.5826 12.8257 14.51 12.8217 14.4374L12.3454 5.20173C12.3454 5.05965 12.2834 4.92339 12.1731 4.82292C12.0629 4.72245 11.9133 4.66601 11.7573 4.66601L2.24268 4.68744Z" fill="white"/>
        <path d="M10.5283 4.15178H9.35218V3.21428C9.35218 2.64596 9.10436 2.10092 8.66324 1.69905C8.22211 1.29719 7.62382 1.07143 6.99998 1.07143C6.37614 1.07143 5.77785 1.29719 5.33672 1.69905C4.8956 2.10092 4.64778 2.64596 4.64778 3.21428V4.15178H3.47168V3.21428C3.47168 2.3618 3.84341 1.54424 4.50509 0.941441C5.16678 0.338647 6.06422 0 6.99998 0C7.93574 0 8.83318 0.338647 9.49486 0.941441C10.1565 1.54424 10.5283 2.3618 10.5283 3.21428V4.15178Z" fill="white"/>
      </symbol>
      <symbol id="map-marker-icon-svg" width="24" height="29" viewBox="0 0 24 29" xmlns="http://www.w3.org/2000/svg">
      <path d="M11.9997 28.2933C11.8683 28.2939 11.7382 28.2683 11.6168 28.2179C11.4955 28.1675 11.3854 28.0934 11.2931 27.9999L3.61306 20.3199C1.95225 18.6608 0.820845 16.5464 0.361974 14.2442C-0.0968973 11.9419 0.137386 9.55533 1.03519 7.38627C1.93299 5.2172 3.45396 3.36316 5.40569 2.05869C7.35742 0.754222 9.6522 0.0579453 11.9997 0.0579453C14.3473 0.0579453 16.642 0.754222 18.5938 2.05869C20.5455 3.36316 22.0665 5.2172 22.9643 7.38627C23.8621 9.55533 24.0964 11.9419 23.6375 14.2442C23.1786 16.5464 22.0472 18.6608 20.3864 20.3199L12.7064 27.9999C12.6141 28.0934 12.504 28.1675 12.3827 28.2179C12.2613 28.2683 12.1311 28.2939 11.9997 28.2933ZM11.9997 2.06661C10.0493 2.06798 8.14301 2.64738 6.52171 3.73164C4.90042 4.8159 3.63685 6.35635 2.89063 8.1584C2.14442 9.96045 1.94904 11.9432 2.32917 13.8563C2.70931 15.7693 3.64791 17.5268 5.02639 18.9066L11.9997 25.8799L18.9731 18.9066C20.3515 17.5268 21.2901 15.7693 21.6703 13.8563C22.0504 11.9432 21.855 9.96045 21.1088 8.1584C20.3626 6.35635 19.099 4.8159 17.4777 3.73164C15.8564 2.64738 13.9502 2.06798 11.9997 2.06661Z"/>
      <path d="M12 16.3334C11.0111 16.3334 10.0444 16.0402 9.22214 15.4908C8.3999 14.9414 7.75904 14.1605 7.3806 13.2468C7.00217 12.3332 6.90315 11.3279 7.09608 10.358C7.289 9.38807 7.7652 8.49715 8.46446 7.79789C9.16372 7.09863 10.0546 6.62242 11.0245 6.4295C11.9944 6.23657 12.9998 6.33559 13.9134 6.71402C14.827 7.09246 15.6079 7.73333 16.1573 8.55557C16.7067 9.37782 17 10.3445 17 11.3334C17 12.6595 16.4732 13.9313 15.5355 14.869C14.5978 15.8066 13.3261 16.3334 12 16.3334ZM12 8.33342C11.4066 8.33342 10.8266 8.50937 10.3333 8.83901C9.83994 9.16866 9.45542 9.63719 9.22836 10.1854C9.0013 10.7336 8.94189 11.3368 9.05764 11.9187C9.1734 12.5006 9.45912 13.0352 9.87867 13.4547C10.2982 13.8743 10.8328 14.16 11.4147 14.2758C11.9967 14.3915 12.5999 14.3321 13.148 14.1051C13.6962 13.878 14.1647 13.4935 14.4944 13.0001C14.824 12.5068 15 11.9268 15 11.3334C15 10.5378 14.6839 9.77471 14.1213 9.2121C13.5587 8.64949 12.7956 8.33342 12 8.33342Z"/>
      </symbol>
      <symbol id="phone-call-icon-svg" width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
      <path d="M30.035 22.594C29.982 22.55 23.993 18.264 22.368 18.545C21.587 18.683 21.14 19.215 20.245 20.282C20.101 20.454 19.754 20.865 19.486 21.158C18.9203 20.9737 18.3686 20.7491 17.835 20.486C15.0805 19.145 12.855 16.9195 11.514 14.165C11.2509 13.6314 11.0263 13.0797 10.842 12.514C11.136 12.245 11.548 11.898 11.724 11.75C12.785 10.86 13.317 10.413 13.455 9.631C13.738 8.012 9.45 2.018 9.406 1.964C9.21072 1.68706 8.95639 1.45692 8.66137 1.29022C8.36635 1.12351 8.03799 1.02439 7.7 1C5.962 1 1 7.436 1 8.521C1 8.584 1.091 14.988 8.988 23.021C17.012 30.909 23.416 31 23.479 31C24.564 31 31 26.038 31 24.3C30.9756 23.9619 30.8764 23.6334 30.7095 23.3384C30.5426 23.0433 30.3122 22.7891 30.035 22.594ZM23.369 28.994C22.495 28.922 17.121 28.213 10.402 21.612C3.767 14.857 3.076 9.468 3.007 8.633C4.31778 6.57564 5.90079 4.70502 7.713 3.072C7.753 3.112 7.806 3.172 7.874 3.25C9.26383 5.14723 10.4611 7.17827 11.448 9.313C11.1271 9.63587 10.7878 9.94004 10.432 10.224C9.88019 10.6445 9.37348 11.121 8.92 11.646L8.677 11.986L8.749 12.397C8.96063 13.3137 9.28475 14.2008 9.714 15.038C11.2519 18.196 13.8038 20.7475 16.962 22.285C17.799 22.7149 18.6861 23.0393 19.603 23.251L20.014 23.323L20.354 23.08C20.881 22.6245 21.3595 22.1158 21.782 21.562C22.095 21.188 22.514 20.689 22.672 20.548C24.8128 21.534 26.849 22.7326 28.75 24.126C28.833 24.196 28.891 24.25 28.93 24.285C27.2972 26.0978 25.4266 27.6811 23.369 28.992V28.994Z"/>
      </symbol>
      <symbol id="email-icon-svg" width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
      <path d="M27.311 4H4.689C3.71094 4.00106 2.77324 4.39006 2.08165 5.08165C1.39006 5.77324 1.00106 6.71094 1 7.689V24.311C1.00106 25.2891 1.39006 26.2268 2.08165 26.9183C2.77324 27.6099 3.71094 27.9989 4.689 28H27.311C28.2891 27.9989 29.2268 27.6099 29.9183 26.9183C30.6099 26.2268 30.9989 25.2891 31 24.311V7.689C30.9989 6.71094 30.6099 5.77324 29.9183 5.08165C29.2268 4.39006 28.2891 4.00106 27.311 4ZM4.689 6H27.311C27.7588 6.00053 28.1881 6.17865 28.5047 6.49528C28.8214 6.81192 28.9995 7.24121 29 7.689V8.454L16 16.811L3 8.454V7.689C3.00053 7.24121 3.17865 6.81192 3.49528 6.49528C3.81192 6.17865 4.24121 6.00053 4.689 6ZM27.311 26H4.689C4.24121 25.9995 3.81192 25.8214 3.49528 25.5047C3.17865 25.1881 3.00053 24.7588 3 24.311V10.832L15.459 18.841C15.6203 18.9448 15.8082 19 16 19C16.1918 19 16.3797 18.9448 16.541 18.841L29 10.832V24.311C28.9995 24.7588 28.8214 25.1881 28.5047 25.5047C28.1881 25.8214 27.7588 25.9995 27.311 26Z"/>
      </symbol>
      <symbol id="home-btn-arrow" width="8" height="12" viewBox="0 0 8 12" 
        xmlns="ttp://www.w3.org/2000/svg">
        <path d="M0.940948 0.000206632C0.757525 -0.00369422 0.577403 0.0477192 0.425624 0.147378C0.273844 0.247037 0.157947 0.390016 0.0940481 0.556308C0.030149 0.722601 0.021422 0.903987 0.0690802 1.0753C0.116738 1.24661 0.218413 1.39923 0.35997 1.51209L5.76116 5.9862L0.35997 10.4587C0.262048 10.5283 0.180041 10.6167 0.119084 10.7183C0.0581275 10.82 0.0195343 10.9327 0.00572114 11.0495C-0.00809202 11.1662 0.00317275 11.2845 0.0388099 11.3968C0.074447 11.5091 0.133688 11.6132 0.212825 11.7024C0.291962 11.7915 0.389288 11.8639 0.49871 11.915C0.608131 11.9661 0.727291 11.9948 0.848725 11.9994C0.97016 12.0039 1.09125 11.9842 1.20442 11.9414C1.31759 11.8986 1.4204 11.8336 1.50641 11.7506L7.69028 6.63464C7.78739 6.55451 7.86537 6.45505 7.91884 6.34296C7.97231 6.23086 8 6.10886 8 5.98541C8 5.86197 7.97231 5.73996 7.91884 5.62787C7.86537 5.51578 7.78739 5.41622 7.69028 5.33609L1.50641 0.215205C1.35019 0.0810394 1.14983 0.00476303 0.940948 9.74702e-06V0.000206632Z"/>
      </symbol>
      <symbol id="hdr-cart-icon" width="18" height="22" viewBox="0 0 18 22" xmlns="http://www.w3.org/2000/svg">
        <path d="M15.2561 22H2.20275C1.90435 22.0003 1.60899 21.94 1.33464 21.8226C1.06029 21.7052 0.812691 21.5333 0.606897 21.3172C0.401102 21.1011 0.241418 20.8454 0.137557 20.5657C0.0336969 20.2859 -0.0121684 19.988 0.00275192 19.69L0.596752 7.04729C0.621336 6.4805 0.86393 5.94511 1.27388 5.55293C1.68382 5.16075 2.22942 4.9421 2.79675 4.94263H14.6621C15.2294 4.9421 15.775 5.16075 16.185 5.55293C16.5949 5.94511 16.8375 6.4805 16.8621 7.04729L17.4561 19.69C17.471 19.988 17.4251 20.2859 17.3213 20.5657C17.2174 20.8454 17.0577 21.1011 16.8519 21.3172C16.6461 21.5333 16.3985 21.7052 16.1242 21.8226C15.8498 21.94 15.5545 22.0003 15.2561 22ZM2.79675 6.41663C2.60226 6.41663 2.41573 6.49389 2.27821 6.63142C2.14068 6.76894 2.06342 6.95547 2.06342 7.14996L1.46942 19.7633C1.46445 19.8626 1.47973 19.962 1.51435 20.0552C1.54897 20.1484 1.6022 20.2337 1.6708 20.3057C1.7394 20.3777 1.82193 20.4351 1.91338 20.4742C2.00483 20.5133 2.10328 20.5334 2.20275 20.5333H15.2561C15.3556 20.5334 15.454 20.5133 15.5455 20.4742C15.6369 20.4351 15.7194 20.3777 15.788 20.3057C15.8566 20.2337 15.9099 20.1484 15.9445 20.0552C15.9791 19.962 15.9944 19.8626 15.9894 19.7633L15.3954 7.12063C15.3954 6.92614 15.3182 6.73961 15.1806 6.60208C15.0431 6.46456 14.8566 6.38729 14.6621 6.38729L2.79675 6.41663Z"/>
        <path d="M13.1293 5.68333H11.6627V4.4C11.6627 3.62203 11.3536 2.87593 10.8035 2.32582C10.2534 1.77571 9.50731 1.46667 8.72935 1.46667C7.95138 1.46667 7.20527 1.77571 6.65517 2.32582C6.10506 2.87593 5.79601 3.62203 5.79601 4.4V5.68333H4.32935V4.4C4.32935 3.23305 4.79292 2.11389 5.61808 1.28873C6.44324 0.46357 7.56239 0 8.72935 0C9.8963 0 11.0155 0.46357 11.8406 1.28873C12.6658 2.11389 13.1293 3.23305 13.1293 4.4V5.68333Z"/>
      </symbol>
      <symbol id="hdr-search-icon" width="22" height="22" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
        <path d="M6.07435 5.00671C5.75707 4.68917 5.2423 4.68917 4.92502 5.00671C3.74699 6.18474 3.16798 7.8258 3.33625 9.5094C3.37823 9.92882 3.73156 10.2415 4.14419 10.2415C4.1713 10.2415 4.19863 10.2401 4.22575 10.2374C4.67253 10.1927 4.99845 9.79412 4.95377 9.34763C4.83401 8.15116 5.2426 6.98778 6.07435 6.15599C6.39189 5.83876 6.39189 5.32395 6.07435 5.00671Z"/>
        <path d="M9.29311 0C4.16887 0 0 4.16887 0 9.29311C0 14.4173 4.16887 18.5862 9.29311 18.5862C14.4173 18.5862 18.5862 14.4173 18.5862 9.29311C18.5862 4.16887 14.4173 0 9.29311 0ZM9.29311 16.9606C5.06516 16.9606 1.62564 13.5211 1.62564 9.29311C1.62564 5.06516 5.06516 1.62564 9.29311 1.62564C13.5208 1.62564 16.9606 5.06516 16.9606 9.29311C16.9606 13.5211 13.5211 16.9606 9.29311 16.9606Z"/>
        <path d="M21.7619 20.6126L15.8554 14.7062C15.5379 14.3886 15.0236 14.3886 14.7061 14.7062C14.3886 15.0235 14.3886 15.5382 14.7061 15.8555L20.6125 21.7619C20.7713 21.9207 20.9791 22 21.1872 22C21.3953 22 21.6031 21.9207 21.7619 21.7619C22.0794 21.4446 22.0794 20.9298 21.7619 20.6126Z"/>
      </symbol>
  </svg>



<div class="comnined-shape-cntlr">
  <span class="comnined-shape">
    <i><svg class="comnined-shape-icon" width="78" height="89" viewBox="0 0 78 89" fill="#B3192A">
      <use xlink:href="#comnined-shape-icon"></use> </svg>
    </i>
  </span>
</div>


<?php 
$logoObj = get_field('hdlogo', 'options');
if( is_array($logoObj) ){
  $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
}else{
  $logo_tag = '';
}

$smedias = get_field('social_media', 'options');


?>

<header class="header">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="header-inr clearfix">
            <div class="hdr-language">
              <div class="fl-lang reset-slect">
                <div class="fl-lang-cntlr">
                  <ul class="reset-list hide-sm">
                    <li  class="lang-active"><a href="#">EN</a></li>
                    <li><a href="#">FR</a></li>
                    <li><a href="#">NL</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="hdr-lft">
              <?php if( !empty($logo_tag) ): ?>
              <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo $logo_tag; ?>
                </a>
              </div>
              <?php endif; ?>
            </div>
            <div class="hdr-rgt">
              <nav class="main-nav">
                <?php 
                  $menuOptions1 = array( 
                      'theme_location' => 'cbv_main_menu_1', 
                      'menu_class' => 'clearfix reset-list',
                      'container' => '',
                      'container_class' => ''
                    );
                  wp_nav_menu( $menuOptions1 ); 
                ?>

                <?php 
                  $menuOptions2 = array( 
                      'theme_location' => 'cbv_main_menu_2', 
                      'menu_class' => 'clearfix reset-list',
                      'container' => '',
                      'container_class' => ''
                    );
                  wp_nav_menu( $menuOptions2 ); 
                ?>
              </nav>
            </div>
            <div class="hambergar-cntlr show-md">
              <div class="hambergar-icon">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
            <?php if( is_social_show_hide() ){ ?>
            <div class="xs-hdr-srch-cart-cntlr">
              <div class="xs-hdr-srch-wrap">
                <div class="xs-hdr-srch">
                  <i><svg class="hdr-search-icon" width="22" height="22" viewBox="0 0 22 22" fill="#71867E">
                    <use xlink:href="#hdr-search-icon"></use> </svg>
                  </i>
                </div>

                <div class="xs-hdr-srch-btm">
                  <div class="xs-extra-srch">
                    <form action="">
                      <input type="text" placeholder="Zoeken">
                    </form>
                  </div>

                  <div class="xs-extra-link">
                    <ul class="reset-list">
                      <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                      <li><a href="#">Morbi sit amet mauris vitae magna</a></li>
                      <li><a href="#">Quisque imperdiet libero neque</a></li>
                      <li><a href="#">In aliquet nunc non risus placerat</a></li>
                      <li><a href="#">Donec tempus dignissim ligula</a></li>
                      <li><a href="#">Sed felis turpis, faucibus tincidunt sapien a, tincidunt porta odio.</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="xs-hdr-cart">
                <a href="#">
                  <span>2</span>
                  <i><svg class="hdr-cart-icon" width="22" height="22" viewBox="0 0 22 22" fill="#71867E">
                    <use xlink:href="#hdr-cart-icon"></use> </svg></i>
                </a>
              </div>
            </div>
            <?php }else{ ?>
              <?php if(!empty($smedias)):  ?>
              <div class="xs-hdr-socials show-md">
                <ul class="reset-list clearfix">
                   <?php foreach($smedias as $smedia): ?>
                  <li>
                    <a href="<?php echo $smedia['url']; ?>">
                      <?php echo $smedia['icon']; ?>
                    </a>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <?php endif; ?>
            <?php } ?>
          </div>
        </div>
      </div>
  </div>
</header>


<!-- xs mobile menu -->
<div class="xs-mobile-menu-cntlr">
  <div class="xs-mobile-menu">

    <div class="xs-menu-hdr">
      <div class="hambergar-cntlr show-md">
        <div class="hambergar-icon">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

      <?php if(!empty($smedias)):  ?>
      <div class="xs-hdr-socials show-md">
        <ul class="reset-list">
          <?php foreach($smedias as $smedia): ?>
          <li>
            <a href="<?php echo $smedia['url']; ?>">
              <?php echo $smedia['icon']; ?><span>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endif; ?>

      <div class="hdr-lft">
        <?php if( !empty($logo_tag) ): ?>
        <div class="logo">
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <?php echo $logo_tag; ?>
          </a>
        </div>
        <?php endif; ?>
      </div>
    </div>

    <div class="xs-menu-cntlr">
      <div class="xs-menu">
        <nav class="main-nav">
          <?php 
            $menuOptions_mobiel = array( 
                'theme_location' => 'cbv_main_mbmenu_mobiel', 
                'menu_class' => 'clearfix reset-list',
                'container' => '',
                'container_class' => ''
              );
            wp_nav_menu( $menuOptions_mobiel ); 
          ?>
        </nav>
      </div>
    </div>

    <div class="xs-mbl-footer">
      <div class="xs-mbl-link">
        <?php 
            $menuOptions_mobiel_copyright = array( 
                'theme_location' => 'cbv_copyright_mobiel', 
                'menu_class' => 'clearfix reset-list',
                'container' => '',
                'container_class' => ''
              );
            wp_nav_menu( $menuOptions_mobiel_copyright ); 
          ?>
      </div>

      <div class="xs-mbl-lan">
        <ul class="reset-list">
          <li class="active"><a href="#">Nl</a></li>
          <li><a href="#">fr</a></li>
          <li><a href="#">en</a></li>
        </ul>
      </div>
      <div class="xs-mbl-btn">
        <a class="fl-red-btn" href="#">Aanmelden</a>
      </div>
    </div>

  </div>
</div>


<!-- fixed --> 
<div class="cart-socials-cntlr">
  <div class="sitebar-add-cart">
    <a href="<?php echo wc_get_cart_url(); ?>">
        <?php 
        if( WC()->cart->get_cart_contents_count() > 0 ){
          echo sprintf ( '<span>%d</span>', WC()->cart->get_cart_contents_count() );
        }else{
          echo sprintf ( '<span>%d</span>', 0 );
        }  
        ?>
      <i><svg class="cart-icon" width="32" height="37" viewBox="0 0 32 37" fill="#fff">
        <use xlink:href="#cart-icon"></use></svg></i>
      </a>
    </div> 
    <?php if(!empty($smedias)):  ?>
    <div class="sitebar-socials">
      <ul class="reset-list">
        <?php foreach($smedias as $smedia): ?>
        <li>
          <a href="<?php echo $smedia['url']; ?>">
            <?php echo $smedia['icon']; ?>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
    <?php endif; ?>
</div>
<!-- fixed --> 