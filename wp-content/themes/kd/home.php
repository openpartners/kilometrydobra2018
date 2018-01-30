<?php /* Template Name: Home old */ ?>
<?php get_header(); ?>
<?php

include('data.php');

$organizationList = $container['organization.service']
    ->getOrganizationRanking(EDITION, LANG);

usort($organizationList, function($a, $b) {
    if ($a['money'] == $b['money']) {
        $at = str_replace(['Ł'], ['L'], $a['cityName']);
        $bt = str_replace(['Ł'], ['L'], $b['cityName']);
        return strcmp($at, $bt);
    }
    return $b['money'] - $a['money'];
});

?>

<div id="banner" class="container full-width-container">
    <div class="partners" style="margin-top: 45px;">
        <span>
            Partnerzy
        </span>
        <div>
            <a href="https://www.tauron.pl/dla-domu" target="_blank">
                <img src="<?= bloginfo('template_url') ?>/images/tauron-logo.png?<?= APP_VERSION ?>" />
            </a>

        </div>
        <div>
            <a href="https://www.union-investment.pl/" target="_blank">
                <img src="<?= bloginfo('template_url') ?>/images/ui-logo.png?<?= APP_VERSION ?>" />
            </a>
            <a href="http://pl.samdex.pl/" target="_blank">
                <img src="<?= bloginfo('template_url') ?>/images/samdex-logo.png?<?= APP_VERSION ?>" />
            </a>
            <a href="https://www.sklepmartes.pl/" target="_blank">
                <img src="<?= bloginfo('template_url') ?>/images/martes-logo.png?<?= APP_VERSION ?>" />
            </a>
        </div>
    </div>
    <div id="counter">
        <div class="counter-top">
            W 2017 roku zebraliśmy
        </div>
        <div class="counter-middle">
            <?= number_format($totalPaid, 2, ',', ' ') ?> zł<br>
            czyli <?= number_format($totalPaid/(44*1000), 2, ',', ' ') ?> km dobra
        </div>
        <div class="counter-bottom">
            Dziękujemy<br />wszystkim Darczyńcom
        </div>
        <a href="/wplac" class="pay pay-button">
            Wpłać!
        </a>
    </div>

<div class="komunikat" style="display:block; padding: 10px; margin-top: 20px; color:#fff; padding-left: 27%; padding-right: 27%;"><center style="background-color:#2c4665;">Nowa kampania rozpocznie się 1 marca 2018 r.</center></div>

    <div class="search-summary">
        <span class="found"></span> z <span class="total"><?= count($organizations) ?></span> organizacji spełnia wybrane kryteria
    </div>
</div>
<div id="ranking" class="container full-width-container">
    <div class="bottom">
      <a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/bottom.png"></a>
    </div>
    <div class="container ranking">
        <div class="row caption">
            <div class="twelve columns">
                <span>Ranking kwot zebranych w miejscowościach</span>
            </div>
        </div>
        <div class="row search">
            <div class="twelve columns">
                <i></i>
                <input id="search" type="text" placeholder="Szukaj..."/>
            </div>
        </div>
        <div class="row header">
            <div class="one columns">
                Pozycja
            </div>
            <div class="two columns" data-key="city" data-type="text">
                Miasto
                <div class="sort asc"></div>
                <div class="sort desc"></div>
            </div>
            <div class="four columns" data-key="organization" data-type="text">
                Organizacja - Cel
                <div class="sort asc"></div>
                <div class="sort desc"></div>
            </div>
            <div class="two columns" data-key="money">
                Kwota
                <div class="sort asc"></div>
                <div class="sort desc"></div>
            </div>
            <div class="three columns">
                &nbsp;
            </div>
        </div>
        <div class="records">
            <div class="row noresult">
                <div class="twelve columns">
                    Brak wyników spełniających kryteria.
                </div>
            </div>
            <?php
                $i = 0;
                foreach ($organizationList as $organization):
                    $i++;
            ?>
            <div class="row sortable" data-city="<?= $organization['cityName'] ?>" data-organization="<?= str_replace(['\'', '"'], ['', ''], $organization['organizationName']) ?>" data-money="<?= $i ?>">
                <div class="one columns"><a href="<?= $organization['organizationPage'] ?>"><?= $i ?></a></div>
                <div class="two columns"><a href="<?= $organization['organizationPage'] ?>">
                    <?= $organization['cityName'] ?>
                    <?php if ($organization['organizationLogo']): ?>
                        <img class="logo" src="<?= $organization['organizationLogo'] ?>" />
                    <?php endif ?>
                </a></div>
                <div class="four columns"><a href="<?= $organization['organizationPage'] ?>"><?= $organization['organizationName'] ?><?= $organization['organizationGoal']?' - '.str_replace(['\'', '"'], ['', ''], $organization['organizationGoal']):'' ?></a></div>
                <div class="two columns"><a href="<?= $organization['organizationPage'] ?>"><?= $organization['money'] ?> zł</a></div>
                <div class="three columns"><a class="pay pay-button" href="/wplac/?id=<?= $organization['organizationId'] ?>" style="display:none;">Wpłacam!</a></div>
            </div> 
            <?php endforeach ?>
        </div>
    </div>
</div>
<div id="partners">
    <div class="bottom">
        <a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/bottom.png"></a>
    </div>
    <div class="container">
        <h2><span>Partnerzy</span></h2>
        <div class="row">
            <div class="mainLogos partners">
                <div>
                    <a href="https://www.tauron.pl/" target="_blank">
                        <img style="width:100%;" src="/wp-content/themes/kd/images/partners/tauron.png">
                    </a>
                </div>
                <div>
                    <a href="https://www.union-investment.pl/" target="_blank">
                        <img style="width:100%;" src="/wp-content/themes/kd/images/partners/union-investment.png">
                    </a>
                </div>
                <div>
                    <a href="http://biurorekordow.pl/" target="_blank">
                        <img style="width:100%;" src="/wp-content/themes/kd/images/partners/biuro-rekordow.jpg">
                    </a>
                </div>
                <div>
                    <a href="https://fundacja.orange.pl/" target="_blank">
                        <img style="width:100%;" src="/wp-content/themes/kd/images/partners/fundacja-orange.png">
                    </a>
                </div>
                <div>
                    <a href="http://media.k2.pl/" target="_blank">
                        <img style="width:100%;" src="/wp-content/themes/kd/images/partners/k2-media.jpg">
                    </a>
                </div>
                <div>
                    <a href="http://krakow.pl/" target="_blank">
                        <img style="width:100%;" src="/wp-content/themes/kd/images/partners/krakow.jpg">
                    </a>
                </div>
                <div>
                    <a href="http://www.lublin.eu/" target="_blank">
                        <img style="width:100%;" src="/wp-content/themes/kd/images/partners/lublin.jpg">
                    </a>
                </div>
                <div>
                    <a href="http://www.poznan.pl/" target="_blank">
                        <img style="width:100%;" src="/wp-content/themes/kd/images/partners/poznan.jpg">
                    </a>
                </div>
                <div>
                    <a href="http://www.rp.pl/" target="_blank">
                        <img style="width:100%;" src="/wp-content/themes/kd/images/partners/rzeczpospolita.jpg">
                    </a>
                </div>
                <div>
                    <a href="http://pl.samdex.pl/" target="_blank">
                        <img style="width:100%;" src="/wp-content/themes/kd/images/partners/samdex.png">
                    </a>
                </div>
                <div>
                    <a href="https://www.tvp.info/" target="_blank">
                        <img style="width:100%;" src="/wp-content/themes/kd/images/partners/tvp-info.jpg">
                    </a>
                </div>
                <div>
                    <a href="http://www.bluemedia.pl/" target="_blank">
                        <img style="width:100%;" src="/wp-content/themes/kd/images/partners/blue-media.png">
                    </a>
                </div>
                <div>
                    <a href="http://www.deon.pl/" target="_blank">
                        <img style="width:100%;" src="/wp-content/themes/kd/images/partners/deon.png">
                    </a>
                </div>
                <div>
                    <a href="http://fundacjawspomaganiawsi.pl/" target="_blank">
                        <img style="width:100%;" src="/wp-content/themes/kd/images/partners/fundacja-wspomagania-wsi.png">
                    </a>
                </div>
                <div>
                    <a href="http://www.poranny.pl/" target="_blank">
                        <img style="width:100%;" src="/wp-content/themes/kd/images/partners/kurier-poranny.png">
                    </a>
                </div>
                <div>
                    <a href="http://www.dziennikwschodni.pl/" target="_blank">
                        <img style="width:100%;" src="/wp-content/themes/kd/images/partners/dziennik-wschodni.png">
                    </a>
                </div>
                <div>
                    <a href="http://naszesprawy.eu/" target="_blank">
                        <img style="width:100%;" src="/wp-content/themes/kd/images/partners/nasze-sprawy.png">
                    </a>
                </div>
                <div>
                    <a href="http://newsrm.tv/" target="_blank">
                        <img style="width:100%;" src="/wp-content/themes/kd/images/partners/newsrmtv.png">
                    </a>
                </div>
                <div>
                    <a href="https://krakow.tvp.pl/" target="_blank">
                        <img style="width:100%;" src="/wp-content/themes/kd/images/partners/tvp3-krakow.png">
                    </a>
                </div>
                <div>
                    <a href="http://samorzad.pap.pl/" target="_blank">
                        <img style="width:100%;" src="/wp-content/themes/kd/images/partners/samorzad-pap.png">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="map" class="container full-width-container" data-edition="2017">
    <div class="bottom">
      <a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/bottom.png"></a>
    </div>
    <div id="map-modal-wrapper">
        <div class="organization-box">
            <div class="close"></div>
            <a href="">
                <img class="logotype" src="<?= (bloginfo('template_url') . $organization['logo']) ?>" />
            </a>
            <a href="">
                <p class="name">TEST</p>
            </a>
            <a href="">
                <p class="description">TEST</p>
            </a>
            <a href="#" class="pay pay-button">
                Wpłacam!
            </a>
        </div>
    </div>
    <div id="map-wrapper">
    </div>
</div>

<!-- enter main page content here -->
<?php get_footer(); ?>
