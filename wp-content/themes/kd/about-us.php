<?php /* Template Name: About Us */ ?>
<?php get_header('new'); ?>


<div class="header about-us" style="height:400px;">
    <div class="overlay-wrapper">
        <div class="container text-white text-bold text-center mt-50">
            <h1 class="container-head">
                <?= getLangByKey('aboutUsTitle') ?>
            </h1>
            <?= getLangByKey('aboutUsCaption') ?>



        </div>


    </div>
</div>
<div class="full-width-container background-white pt-100 pb-100">
    <div class="container about-us-items">
        <div class="itemm">
            <img class="pull-auto mb-25" src="/wp-content/themes/kd/images/icon-pencil.png" style="display:none;" />
            <span><?= getLangByKey('aboutUsItem1Caption') ?></span>
        </div>

        <div class="itemm" style="display:none;">
            <img class="pull-auto mb-25" src="/wp-content/themes/kd/images/icon-thumb.png" />
            <span><?= getLangByKey('aboutUsItem2Caption') ?></span>
        </div>

        <div class="item">
            <img class="pull-auto mb-25" src="/wp-content/themes/kd/images/icon-globe.png" style="display:none;" />
            <span><?= getLangByKey('aboutUsItem3Caption') ?></span>
        </div>
    </div>

    <div class="container font-size-1.2em">
        <div class="mt-100 text-center">
            <?= getLangByKey('aboutUsBottomCaption') ?>
            <a href="/zglos-sie" class="custom-button maroon pull-auto mt-50">
                <div>
                    <span><?= getLangByKey('joinUsButton') ?></span>
                </div>
            </a>
        </div>
    </div>
</div>



<?php get_footer('new'); ?>
