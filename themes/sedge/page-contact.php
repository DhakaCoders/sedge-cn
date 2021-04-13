<?php 
/*Template Name: Contact*/
get_header();
$thisID = get_the_ID();
?>
<?php  
  $intro = get_field('formsec', $thisID);
  $page_title = !empty($intro['titel']) ? $intro['titel'] : get_the_title();
?>

<div class="page-banner-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-entry-hdr clearfix">
          <a class="fl-blue-btn" href="#">CONTACT</a>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="contact-form-sec-wrp">
 <div class="container">
  <div class="row">
    <div class="col-md-12">
    <div class="contact-form-block clearfix">
      <div class="contact-form-lft">
        <div class="contact-form-wrp clearfix">
          <div class="page-entry-header">
            <h2 class="fl-h2">Lorem ipsum dolor</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque non nulla in lacus, a, nisl risus pulvinar id. Quis praesent at purus, id justo, enim tortor porttitor sit.</p>
            <div class="input-type-radio clearfix">
              <ul class="reset-list clearfix">
                <li class="wpforms-selected">
                  <label class="container">Bedrijf 
                    <input type="checkbox" checked>
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li class="wpforms-selected">
                  <label class="container">Particulier 
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                </li>
              </ul>
            </div>
          </div>
          <div class="wpforms-container">
            <form class="wpforms-form needs-validation" novalidate>
              
              <div class="wpforms-field-container">
                
                <div class="wpforms-field XsNameField">
                  <label class="wpforms-field-label">Voornaam</label>
                  <input type="text" name="name" placeholder="Tom" required>
                </div>
                <div class="wpforms-field NameField">
                  <label class="wpforms-field-label">Naam</label>
                  <input type="text" name="name" placeholder="Temmerman" required>
                </div>

                <div class="wpforms-field wpforms-has-error FullWidthField">
                  <label class="wpforms-field-label">Voornaam</label>
                  <input type="text" name="text" placeholder="mathias2.conversalbe" required>
                  <label class="wpforms-error"><img src="assets/images/error-msg-icon.svg"></label>
                </div>

                <div class="wpforms-field FullWidthField">
                  <label class="wpforms-field-label">Telefoon</label>
                  <input type="text" name="text" placeholder="0400 00 00 00" required>
                </div>

                <div class="wpforms-field wpforms-field-textarea">
                  <label class="wpforms-field-label">Bericht</label>
                  <textarea name="message" placeholder="Bericht"></textarea>
                </div>
              </div><!-- end of .wpforms-field-container-->

              <div class="wpforms-field-text">
                <p>Wij respecteren uw <a href="#"> privacy.</a> Jouw gegevens wor den altijd vertrouwelijk behandeld.</p>
              </div>

              <div class="wpforms-submit-container">
                <button type="submit" name="submit" class="wpforms-submit">VERZENDEN</button>
              </div>

            </form>
          </div>
        </div>
      </div>
      <div class="contact-form-rgt">
        <div class="contact-form-info-cntlr">
          <div class="contact-form-info">
            <h6 class="fl-h6 contact-form-info-title">Contact gegevens</h6>
            <ul class="reset-list clearfix">
              <li>
                <a href="#" target="_blank">
                  <i><svg class="map-marker-icon-svg" width="24" height="29" viewBox="0 0 24 29" fill="#78797B">
                    <use xlink:href="#map-marker-icon-svg"></use> </svg>
                  </i>
                  Adres Line 1, <br> Aalst, Belgium
                </a>
              </li>
              <li>
                <a href="tel:t-pleintje@skynet.be">
                <i><svg class="phone-call-icon-svg" width="32" height="32" viewBox="0 0 32 32" fill="#78797B">
                  <use xlink:href="#phone-call-icon-svg"></use> </svg>
                </i>
                info@sedge.be
               </a>
              </li>
              <li>
                <span>
                  <a href="tel:059 30 87 30">
                  <i><svg class="email-icon-svg" width="32" height="32" viewBox="0 0 32 32" fill="#78797B">
                    <use xlink:href="#email-icon-svg"></use> </svg>
                  </i>
                  053 222 333
                </a>
              </span>
              </li>
              </ul>
            </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<?php
get_template_part('templates/footer-top-form');
get_footer();
?>