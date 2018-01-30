<?php /* Template Name: Home new */ ?>
<?php get_header('new'); ?>
<?php

    use KilometryDobra\ValueObject\ApplicationCounterVO;

    /**
     * @deprecated
     */
    // $organizationList = $container['organization.service']
    //     ->getOrganizationList(2017, LANG);
    // $organizationCount = $container['organization.service']
    //     ->getOrganizationCount(2017);
?>

<div class="video-box">
    <div class="container">
        <!-- <h1 class="container-head white"><?//= getLangByKey('homepageVideoBoxCaption') ?></h1>-->

    </div>
    <div id="mainpage-slider">
        <?php for($i=1; $i <= 18; $i++): ?>
            <div style="background-image: url('/wp-content/themes/kd/images/enrollment-layout/slider/<?= $i ?>.jpg')">
            </div>
        <?php endfor ?>

    </div>
</div>
<!-- <div class="header stars"> -->
<div class="results">
    <div class="container full-width-container pb-25 overlay-black-50">
        <h1 class="container container-head white">
            <span>
                <?= getLangByKey('homepageOurResultsBoxCaption') ?>
            </span>
        </h1>
    </div>
    <div class="container">
        <div class="row mt-50">
            <div class="four columns tile">
                <div class="caption"><?= getLangByKey('homepageOurResultsTile1Title') ?></div>
                <div class="spacer"></div>
                <div class="subcaption"><?= getLangByKey('homepageOurResultsTile1Caption') ?></div>
            </div>
            <div class="four columns tile">
                <div class="caption"><?= getLangByKey('homepageOurResultsTile2Title') ?></div>
                <div class="spacer"></div>
                <div class="subcaption"><?= getLangByKey('homepageOurResultsTile2Caption') ?></div>
            </div>
            <div class="four columns tile">
                <div class="caption"><?= getLangByKey('homepageOurResultsTile3Title') ?></div>
                <div class="spacer"></div>
                <div class="subcaption"><?= getLangByKey('homepageOurResultsTile3Caption') ?></div>
            </div>
        </div>
        <div class="row mt-25" style="padding-bottom: 20px;">
            <div class="twelve columns">
                <div>
                    <a href="/zglos-sie" class="custom-button black pull-auto">
                        <div>
                            <span><?= getLangByKey('homepageOurResultsBoxButton') ?></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="how-to-join-us">
    <div class="container">
        <h1 class="container-head mb-100"><?= getLangByKey('homepageHowToJoinBoxCaption') ?></h1>
        <div class="row">
            <div class="four columns step">
                <a href="https://www.youtube.com/watch?v=TY-2tZeQRbo"><img src="/wp-content/uploads/2017/11/play-e1511957103464.png" /></a>
                <p class="caption"><?= getLangByKey('homepageHowToJoinBoxStep1Caption') ?></p>
            </div>
            <div class="four columns step">
                <a href="/wp-content/uploads/2016/05/KD-2018-informator.pdf"><img src="/wp-content/uploads/2017/11/pobierz-e1511957082837.png" /></a>
                <p class="caption"><?= getLangByKey('homepageHowToJoinBoxStep2Caption') ?></p>
            </div>
            <div class="four columns step">
                <a href="/zglos-sie/"><img src="/wp-content/uploads/2017/11/uzupelnij-e1511957057500.png" /></a>
                <p class="caption"><?= getLangByKey('homepageHowToJoinBoxStep3Caption') ?></p>
            </div>
        </div>
        <div class="row mt-25">
            <div class="twelve columns">
                <div>
                    <a href="/zglos-sie" class="custom-button maroon pull-auto">
                        <div>
                            <span><?= getLangByKey('homepageHowToJoinBoxButton') ?></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>




<div id="map" class="container full-width-container" data-edition="2017">
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

<div class="campaigners">
    <div class="container">
        <h1 class="container-head">
            <?= getLangByKey('homepageCampaignersBoxCaption') ?>
        </h1>
        <div class="row head" style="display:none;">
            <div class="two columns">
                <?= getLangByKey('homepageCampaignersBoxCountry') ?>
            </div>
            <div class="two columns">
                <?= getLangByKey('homepageCampaignersBoxCity') ?>
            </div>
            <div class="two columns">
                <?= getLangByKey('homepageCampaignersBoxLogo') ?>
            </div>
            <div class="six columns">
                <?= getLangByKey('homepageCampaignersBoxGoal') ?>
            </div>
        </div>

        <?php foreach ($organizationList as $countryId => $organizations): ?>
            <div class="row organizations opened">
                <div class="two columns icons">
                    <img class="flag" src="<?= reset($organizations)['countryFlag'] ?>" />
                    <i class="toggle"></i>
                    <span class="country"><?= reset($organizations)['countryName'] ?></span>
                </div>
                <div class="ten columns organizations-list">
                    <i class="toggle"></i>

                    <?php foreach ($organizations as $organization): ?>

                    <?php if ($organization['organizationWebsite']): ?>
                    <a href="<?= $organization['organizationWebsite'] ?>" target="blank">
                    <?php endif ?>
                        <div class="row">
                            <div class="two columns city">
                                <?= $organization['cityName'] ?>
                            </div>
                            <div class="four columns logo">
                                <?php if ($organization['organizationLogo']): ?>
                                    <img src="<?= $organization['organizationLogo'] ?>" />
                                <?php else: ?>
                                    &nbsp;
                                <?php endif ?>
                            </div>
                            <div class="six columns goal">
                                <strong><?= $organization['organizationName'] ?></strong> - <?= $organization['cityName'] ?> <?= $organization['organizationGoal']?'-':'' ?> <?= $organization['organizationGoal'] ?>
                            </div>
                        </div>
			    
<div class="row">
                            <div class="two columns city">
                                <?= $organization['cityName'] ?>
                            </div>
                            <div class="four columns logo">
                                <?php if ($organization['organizationLogo']): ?>
                                    <img src="<?= $organization['organizationLogo'] ?>" />
                                <?php else: ?>
                                    &nbsp;
                                <?php endif ?>
                            </div>
                            <div class="six columns goal">
                                <strong><?= $organization['organizationName'] ?></strong> - <?= $organization['cityName'] ?> <?= $organization['organizationGoal']?'-':'' ?> <?= $organization['organizationGoal'] ?>
                            </div>
                        </div>
                    <?php if ($organization['organizationWebsite']): ?>
                    </a>
                    <?php endif ?>
                    <?php endforeach ?>

                </div>
            </div>
        <?php endforeach ?>
    </div>
    <div class="container">



<div class="header stars" style="height: 890px!important;">
    <div class="globe-wrapper">
        <!-- <img class="globe" src="/wp-content/themes/kd/images/enrollment-layout/globe.png" /> -->
<div style="z-index: -99;width: 100%;height: 100%;">
    <iframe frameborder="0" height="100%" width="100%" src="https://www.youtube.com/embed/7P7lIiu-VKs?autoplay=1&amp;controls=0&amp;showinfo=0&amp;loop=1&amp;playlist=7P7lIiu-VKs&amp;autohide=1"></iframe>
</div>
    </div>
    
    <div class="counter-wrapper" style="dislay:none;">
        <div class="counter-container pull-auto">
            <div class="caption text-bold text-center pb-10 mt-20">
                <?= getLangByKey('homepageGlobeBoxCaption') ?>
            </div>
            <div class="counter pb-20">
                <div>
                    <?php foreach(str_split(ApplicationCounterVO::getCounterString($organizationCount)) as $letter): ?>
                        <img class="counter-number" src="/wp-content/themes/kd/images/enrollment-layout/counter/3.png" /><img class="counter-number" src="/wp-content/themes/kd/images/enrollment-layout/counter/5.png" />
</br>
                    <?php endforeach ?>
                </div>
                <div class="mt-15 text-bold font-size-1.2em text-uppercase" style="color: #f00">
                   </br> <?= getLangByKey('homepageCounterCaption') ?>
                </div>
            </div>

            <div class="join-us">

<!-- Przycisk -->
<div class="wrapBtn" style="margin-top: 0px; text-align: center;">
<a href="/zglos-sie" class="btn1" style="display: inline-block !important; border-radius: 5px!important; text-align: center !important; font-size: 22px !important; line-height: 38px !important; padding: 17px 30px !important; background-color: #c40303 !important; color: white !important; text-decoration: none; font face="MuseoSansCyrl300" !important; text-transform: uppercase; letter-spacing: 1.32px; position: relative;">Przyłącz się</a>
</div>
<!--
                <a href="/zglos-sie" class="custom-button black pull-auto">
                    <div>
                        <span><?= getLangByKey('homepageGlobeBoxButton') ?></span>
                    </div>
                </a>
-->
            </div>
        </div>
    </div>
</div>






<br><br>

<div class="records" style="color: #000;">
	<div class="row sortable" data-city="Białystok" data-organization="Caritas Archidiecezji Białostockiej" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">1</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	    Białystok <img class="logo" src="http://kilometrydobra.pl/wp-content/uploads/2017/03/LOGO-NOWE_Caritas_duze_CMYK.jpg" style="height: 40px;display: block; margin: 10px auto 0;">
	                    </a>
</center> 
	                    </div>
	<div class="four columns"><a href="#" style="color: #000;">Caritas Archidiecezji Białostockiej</a></div>
</div> 

<hr>

<div class="row sortable" data-city="Zamość" data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">2</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Zamość <img class="logo" src="http://kilometrydobra.pl/wp-content/uploads/2017/04/logo-przezroczyste.png" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Polskie Stowarzyszenie na rzecz Osób z Niepełnosprawnością Intelektualną z Zamościa</a></div>
</div>

<hr>

<div class="row sortable" data-city="#" data-organization="Więcławice Stare" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">3</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Więcławice Stare <img class="logo" src="https://image.prntscr.com/image/17_qyIz8RF2lk5KtJZyGgg.png" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Fundusz Stypendialny im. św. Jakuba Więcławice Stare</a></div>
</div>

<hr>

<div class="row sortable" data-city="Bzinica Stara " data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">4</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Bzinica Stara  <img class="logo" src="http://kilometrydobra.pl/wp-content/uploads/2016/10/LOGOrozwoju-wsi.jpg" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Stowarzyszenie Rozwoju Wsi Bzinica Stara</a></div>
</div>

<hr>

<div class="row sortable" data-city="Polskie Stowarzyszenie na rzecz Osób z Niepełnosprawnością Intelektualną z Tomaszowa Lubelskiego" data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">5</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Tomaszów Lubelski  <img class="logo" src="http://kilometrydobra.pl/wp-content/uploads/2017/04/logo-przezroczyste.png" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Polskie Stowarzyszenie na rzecz Osób z Niepełnosprawnością Intelektualną z Tomaszowa Lubelskiego</a></div>

</div>

<hr>

<div class="row sortable" data-city="Stowarzyszenie 25+ Nasza Przyszłość" data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">6</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Staw  <img class="logo" src="http://kilometrydobra.pl/wp-content/uploads/2017/11/25chełm.jpg" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Stowarzyszenie 25+ Nasza Przyszłość</a></div>

</div>

<hr>

<div class="row sortable" data-city="Fundacja Patria" data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">7</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Imiołki <img class="logo" src="http://kilometrydobra.pl/wp-content/uploads/2017/11/Patria.jpg" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Fundacja Patria</a></div>

</div>

<hr>

<div class="row sortable" data-city="Fundacja Przyszłość dla dzieci" data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">8</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Olsztyn <img class="logo" src="http://kilometrydobra.pl/wp-content/uploads/2016/11/LOGOprzyszlosc2.jpg" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Fundacja Przyszłość dla dzieci</a></div>

</div>

<hr>

<div class="row sortable" data-city="Polskie Stowarzyszenie na rzecz Osób z Niepełnosprawnością Intelektualną z Iławy" data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">9</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Iława <img class="logo" src="http://kilometrydobra.pl/wp-content/uploads/2016/02/PSOUU_wl_-_logo.jpg" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Polskie Stowarzyszenie na rzecz Osób z Niepełnosprawnością Intelektualną z Iławy</a></div>

</div>

<hr>

<div class="row sortable" data-city="Zespół Placówek Opiekuńczo-Wychowawczych "Nasz Dom"" data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">10</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Ostrowiec Świętokrzyski <img class="logo" src="http://kilometrydobra.pl/wp-content/uploads/2018/01/logo-Nasz-Dom-małe.jpg" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Zespół Placówek Opiekuńczo-Wychowawczych "Nasz Dom"</a></div>

</div>

<hr>

<div class="row sortable" data-city="Portal DomyDziecka.org" data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">11</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Cała Polska <img class="logo" src="http://kilometrydobra.pl/wp-content/uploads/2017/12/logo_DomyDziecka_rgb.jpg" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Portal DomyDziecka.org</a></div>

</div>

<hr>


<div class="row sortable" data-city="Dolnośląska Fundacja Państwowej i Ochotniczej Straży Pożarnej Na Ratunek Chorym i Poszkodowanym „Płomyk Nadziei"" data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">12</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Długołęka <img class="logo" src="http://kilometrydobra.pl/wp-content/uploads/2017/12/LOGO-płomyk_nadziei-300x300.jpg" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Dolnośląska Fundacja Państwowej i Ochotniczej Straży Pożarnej Na Ratunek Chorym i Poszkodowanym „Płomyk Nadziei"</a></div>

</div>

<hr>


<div class="row sortable" data-city="Stowarzyszenie Eteka"" data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">13</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Tarnobrzeg <img class="logo" src="http://kilometrydobra.pl/wp-content/uploads/2017/02/L2_TGB.png" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Stowarzyszenie Esteka</a></div>

</div>

<hr>


<div class="row sortable" data-city="Oratorium św. Jana Bosko - Koalicja Kilometry Dobra w Żyrardowie 2018" data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">14</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Żyrardów <img class="logo" src="http://kilometrydobra.pl/wp-content/uploads/2017/12/logooratorium-żurardow.png" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Oratorium św. Jana Bosko - Koalicja Kilometry Dobra w Żyrardowie 2018</a></div>

</div>

<hr>


<div class="row sortable" data-city="Fundacja Z Miłości Do Dziecka - Koalicja Kilometry Dobra w Żyrardowie 2018" data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">15</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Żyrardów <img class="logo" src="http://kilometrydobra.pl/wp-content/uploads/2017/12/medium_logo_fundacja.jpg" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Fundacja Z Miłości Do Dziecka - Koalicja Kilometry Dobra w Żyrardowie 2018</a></div>

</div>

<hr>


<div class="row sortable" data-city="Polskie Stowarzyszenie na Rzecz Osób z Niepełnosprawnością Intelektualną Koło w Łęcznej" data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">16</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Janowica <img class="logo" src="http://kilometrydobra.pl/wp-content/uploads/2017/04/logo-przezroczyste.png" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Polskie Stowarzyszenie na Rzecz Osób z Niepełnosprawnością Intelektualną Koło w Łęcznej</a></div>

</div>


<hr>


<div class="row sortable" data-city="Polskie Stowarzyszenie na Rzecz Osób z Niepełnosprawnością Intelektualną Koło w Świdnicy" data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">17</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Świdnica <img class="logo" src="http://kilometrydobra.pl/wp-content/uploads/2017/04/logo-przezroczyste.png" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Polskie Stowarzyszenie na Rzecz Osób z Niepełnosprawnością Intelektualną Koło w Świdnicy</a></div>

</div>

<hr>


<div class="row sortable" data-city="Stowarzyszenie Przeszłość - Przyszłości" data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">18</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Puławy <img class="logo" src="http://kilometrydobra.pl/wp-content/uploads/2017/12/logo-przeszlosc-przyszlosci.png" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Stowarzyszenie Przeszłość - Przyszłości</a></div>

</div>

<hr>


<div class="row sortable" data-city="Fundacja Bread of Life" data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">19</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Kalisz <img class="logo" src="http://kilometrydobra.pl/wp-content/uploads/2017/12/Bread-of-life_logo.jpg" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Fundacja Bread of Life</a></div>

</div>

<hr>


<div class="row sortable" data-city="Fundacja Bread of Life" data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">20</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Murowana Goślina <img class="logo" src="http://kilometrydobra.pl/wp-content/uploads/2017/12/Bread-of-life_logo.jpg" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Fundacja Bread of Life</a></div>

</div>

<hr>


<div class="row sortable" data-city="Fundacja Dator Vitae" data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">21</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Bydgoszcz <img class="logo" src="http://kilometrydobra.pl/wp-content/uploads/2018/01/dator-vitae-logo.jpg" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Fundacja Dator Vitae</a></div>

</div>

<hr>


<div class="row sortable" data-city="Fundacja Rodzin Polskich im. św. Jana Pawła II " data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">22</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Świętochłowice <img class="logo" src="http://kilometrydobra.pl/wp-content/uploads/2018/01/logo_Fundacja_Rodzin_Polskich2.jpg.700x700_q80.jpg" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Fundacja Rodzin Polskich im. św. Jana Pawła II </a></div>

</div>

<hr>


<div class="row sortable" data-city="Stowarzyszenie Razem dla Konarzewa" data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">23</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Konarzew <img class="logo" src="http://kilometrydobra.pl/wp-content/uploads/2018/01/logo-razem-dla-konarzewa.jpg" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Stowarzyszenie Razem dla Konarzewa</a></div>

</div>

<hr>


<div class="row sortable" data-city="Polskie Stowarzyszenie na Rzecz Osób z Niepełnosprawnością Intelektualną Koło w Przemyślu" data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">24</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Przemyśl <img class="logo" src="http://kilometrydobra.pl/wp-content/uploads/2017/04/logo-przezroczyste.png" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Polskie Stowarzyszenie na Rzecz Osób z Niepełnosprawnością Intelektualną Koło w Przemyślu</a></div>

</div>

<hr>


<div class="row sortable" data-city="Fundacja Albatros" data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">25</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Dywity <img class="logo" src="http://kilometrydobra.pl/wp-content/uploads/2018/01/fundacjaalabatroslogo.png" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Fundacja Albatros</a></div>

</div>

<hr>


<div class="row sortable" data-city="Jarosławskie Kilometry Dobra" data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">26</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Jarosław <img class="logo" src="http://kilometrydobra.pl/wp-content/uploads/2017/02/logo-1.png" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Jarosławskie Kilometry Dobra</a></div>

</div>

<hr>


<div class="row sortable" data-city="Limanowska Akcja Charytatywna" data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">27</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Limanowa <img class="logo" src="/wp-content/uploads/2016/06/0.jpg" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Limanowska Akcja Charytatywna</a></div>

</div>

<hr>


<div class="row sortable" data-city="Polskie Stowarzyszenie na Rzecz Osób z Niepełnosprawnością Intelektualną Koło w Krośnie" data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">28</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Potok <img class="logo" src="http://kilometrydobra.pl/wp-content/uploads/2016/02/PSOUU_wl_-_logo.jpg" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Polskie Stowarzyszenie na Rzecz Osób z Niepełnosprawnością Intelektualną Koło w Krośnie</a></div>

</div>

<hr>


<div class="row sortable" data-city="Fundacja Pomoc Szkole" data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">29</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Mysłowice <img class="logo" src="http://kilometrydobra.pl/wp-content/uploads/2018/01/logo-pomoc-szkole1.png" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Fundacja Pomoc Szkole</a></div>

</div>

<hr>


<div class="row sortable" data-city="Stowarzyszenie Pomocy Dzieciom i Młodzieży Dom Aniołów Stróżów" data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">30</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Katowice <img class="logo" src="http://bazy.ngo.pl/rest/bazy/pliki/org/58950/logotyp/logotyp_organizacji.jpg" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Stowarzyszenie Pomocy Dzieciom i Młodzieży Dom Aniołów Stróżów</a></div>

</div>

<hr>


<div class="row sortable" data-city="Stowarzyszenie Harcerstwa Katolickiego "Zawisza" Federacja Skautingu Europejskiego" data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">31</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Bibice <img class="logo" src="http://kilometrydobra.pl/wp-content/uploads/2018/01/logotyp_organizacji-skauci-europy.jpg" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Stowarzyszenie Harcerstwa Katolickiego "Zawisza" Federacja Skautingu Europejskiego</a></div>

</div>

<hr>


<div class="row sortable" data-city="Katolickie Stowarzyszenie  Osób Niepełnosprawnych i Ich Przyjaciół - "Klika"" data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">32</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Kraków <img class="logo" src="http://kilometrydobra.pl/wp-content/uploads/2018/01/logo_klika.png" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Katolickie Stowarzyszenie  Osób Niepełnosprawnych i Ich Przyjaciół - "Klika"</a></div></div>

<hr>


<div class="row sortable" data-city="Stowarzyszenie Rodziców i Opiekunów Dzieci Niepełnosprawnych "Wspólna Troska"" data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">33</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Skierniewice <img class="logo" src="http://kilometrydobra.pl/wp-content/uploads/2017/01/logo_Skierniewice.jpg" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Stowarzyszenie Rodziców i Opiekunów Dzieci Niepełnosprawnych "Wspólna Troska"</a></div>
</div>
<hr>

<div class="row sortable" data-city="Ankizy Gasy Dzieci Madagaskaru" data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">34</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Ambohidratrimo, Madagaskar <img class="logo" src="http://kilometrydobra.pl/wp-content/uploads/2018/01/ankizy-logo.png" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Ankizy Gasy Dzieci Madagaskaru</a></div>
</div>
<hr>

<div class="row sortable" data-city="Polskie Stowarzyszenie na Rzecz Osób z Niepełnosprawnością Intelektualną Koło w Nidzicy" data-organization="#" data-money="#" style="margin: -30px; margin-left: 0px;">
	<div class="one columns"><a href="#" style="color: #000;">35</a></div>
	<div class="two columns">
	<center> 
	<a href="#" style="color: #000;">
	Napiwoda <img class="logo" src="http://kilometrydobra.pl/wp-content/uploads/2016/02/PSOUU_wl_-_logo.jpg" style="height: 40px;display: block; margin: 10px auto 0;">
	</a></center></div>
	<div class="four columns"><a href="#" style="color: #000;">Polskie Stowarzyszenie na Rzecz Osób z Niepełnosprawnością Intelektualną Koło w Nidzicy</a></div>

</div>
<hr>

</div>


       <!-- <strong>*</strong> Udział w projekcie "Polonia w kampanii Kilometry Dobra 2018". -->
    </div>
</div>


<!-- <div class="video-box"> -->




<script type="text/javascript">

$('#mainpage-slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    autoplay: true
});

$('.campaigners .organizations.row .toggle').on('click', function(){
    $(this).parent().parent().toggleClass('opened');
})

</script>
<script>
$("document").ready(
	function()
	{		
		//$("#map-wrapper").css("display", "none");
		//setZoom(zoom:2);

);

</script>

<!-- enter main page content here -->
<?php get_footer('new'); ?>
