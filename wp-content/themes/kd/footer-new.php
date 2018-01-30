<!-- <div class="cookies-policy container pull-auto" style="display: none;">
    <div class="row" style="display: none;">
        <div class="ten columns" style="display: none;">
            Fundacja Polski Instytut Filantropii informuje, że na swoich stronach internetowych
            i w aplikacjach wykorzystuje pliki “cookies”. Korzystając ze strony
            wyrażasz zgodę na wykorzystywanie plików “cookies”, zgodnie z aktualnymi
            ustawieniami przeglądarki. W każdej chwili możesz zmienić ustawienia
            przeglądarki decydujące o ich użyciu.
        </div>
        <div class="two columns" style="display: none;">
            <a id="accept-cookies" class="pay-button pull-auto text-center" href="javascript:void(0)" style="display: none;">Rozumiem</a>
        </div>
    </div>
</div>-->
  <footer id="footer">
    <div class="container">

      <div class="row">
        <div class="four columns left">
            <?php if (LANG == 'en'): ?>
                <h4>Sign up for our newsletter</h4>
            <?php else: ?>
                <h4>Zapisz się do newslettera</h4>
            <?php endif ?>
          <div id="msg-form-wysija-shortcode56cf472637eb2-1" class="wysija-msg ajax"></div>
          <form id="form-wysija-shortcode56cf45a0da54d-1" class="widget_wysija shortcode_wysija" action="#wysija" method="post">
          <div class="letter">
            <input class="wysija-input validate[required,custom[email]]" type="email" value="" title="Email" name="wysija[user][email]" placeholder="<?= (LANG == 'en')?'Your e-mail address':'Wpisz adres e-mail' ?>" required>
          </div>
          <input type="checkbox" class="check" required>
          <?php if (LANG == 'en'): ?>
              <p>I hereby give consent for my personal data included in my application to be processed for the purposes of sending newsletter, in accordance with the Personal Data Protection Act dated 29.08.1997 (consolidated text: Journal of Laws of the Republic of Poland 2002 No 101, item 926 as amended).</p>
          <?php else: ?>
              <p>Wyrażam zgodę na przetwarzanie moich danych osobowych dla potrzeb niezbędnych do realizacji wysyłki newslettera (zgodnie z Ustawą z dnia 29.08.1997 roku o Ochronie Danych Osobowych; tekst jednolity: Dz. U. z 2002r. Nr 101, poz. 926 ze zm.).</p>
          <?php endif ?>
          <input class="wysija-submit wysija-submit-field custom-button transparent" src="<?php bloginfo('template_url'); ?>/images/subscribe.png" type="submit" value="<?= (LANG == 'en')?'Sign up!':'Zapisz się!' ?>">

<input type="hidden" name="form_id" value="1" />
    <input type="hidden" name="action" value="save" />
    <input type="hidden" name="controller" value="subscribers" />
    <input type="hidden" value="1" name="wysija-page" />


        <input type="hidden" name="wysija[user_list][list_ids]" value="1" />

          </form>
        </div>
        <div class="four columns center">
            <?php if (LANG == 'en'): ?>
                <h4>Contact</h4>
            <?php else: ?>
                <h4>Kontakt</h4>
            <?php endif ?>
<img src="http://kilometrydobra.pl/wp-content/uploads/2018/01/Jagódka-mini-mini.jpg"><br>
Jagoda Leśniewska <br>
manager Kampanii Kilometry Dobra <br>
          <a href="mailto:j.lesniewska@pif.org.pl">j.lesniewska@pif.org.pl</a>
          <p>tel. +48 725 785 898</p>
       
        </div>
        <div class="four columns right">
            <?php wp_nav_menu(array('menu' => 'menu_footer_' . LANG, 'container' => 'ul', 'menu_class' => 'nav')); ?>
            <div class="social mt-50">
                <a href="https://www.facebook.com/kilometrydobra" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/images/enrollment-layout/icon-facebook-black.png" />
                </a>
                <a href="https://twitter.com/KilometryDobra" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/images/enrollment-layout/icon-twitter-black.png" />
                </a>
                <!-- <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/enrollment-layout/icon-tumblr-black.png" /></a> -->
            </div>
        </div>
      </div>

    </div>

  </footer>
  <div class="social-bar">
    <div>
        <a href="https://www.facebook.com/kilometrydobra" target="_blank">
            <img src="<?php bloginfo('template_url'); ?>/images/icon-fb.png">
        </a>
    </div>
    <div>
        <a href="https://twitter.com/KilometryDobra" target="_blank">
            <img src="<?php bloginfo('template_url'); ?>/images/icon-twitter.png">
        </a>
    </div>
    <div>
        <a href="https://www.youtube.com/channel/UCyBjbthWkenCjZjwQ-tTMJA" target="_blank">
            <img src="<?php bloginfo('template_url'); ?>/images/icon-yt.png">
        </a>
    </div>
    <a class="pulse-icon-wrapper" href="https://www.youtube.com/watch?v=6qT9P4LDQ3k" target="_blank">
            <div class="pulse-icon"></div>
            <div class="caption-wrapper">
                <div class="caption">
                    Zobacz hymn kampanii
                </div>
            </div>
    </a>
 </div>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<?php wp_footer(); ?>
</body>
</html>
