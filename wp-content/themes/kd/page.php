<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php if (get_the_ID() == 223): ?>
<style>

@media (max-width: 975px){
    #subpage-banner {
        background-position-x: 5%;
    }
}

</style>

<?php endif ?>

<?php
    $headerBackground = wp_get_attachment_image_src(get_post_meta( get_the_ID(), '_header_background', true ), 'normal')[0];
?>
    <div id="subpage-banner" <?= ($headerBackground !== null)?'style="background-image: url(\''.$headerBackground.'\')"':'class="default-background"'?>>
        <div class="title"><span><?= the_title() ?></span></div>
    </div>

    <div id="subpage-article">
        <div class="bottom">
            <a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/bottom.png"></a>
        </div>
        <?php if (get_the_ID() == 191) : ?>
        <div class="tableList container">
            <h2><span>Darczyńcy</span></h2>
            <div id="tableList" class="container">
                <div class="row header">
                    <div class="one columns">
                        Nr
                    </div>
                    <div class="two columns">
                        Darczyńca
                    </div>
                    <div class="two columns">
                        Kwota
                    </div>
                    <div class="two columns">
                        Data
                    </div>
                    <div class="five columns">
                        Pieniądze dla
                    </div>

                </div>
                <div id="organizationData">


                </div>
                <div class="row"><div class="twelve columns summary">więcej...</div></div>
            </div>
        </div>
        <?php else: ?>
        <div class="container">
            <div class="row">
                <div class="twelve columns">
                    <?= the_content() ?>
                </div>
            </div>
        </div>

        <?php if (get_the_ID() == 223) :?>
            <div class="container">
                <div class="row" style="margin-top: 30px;">
                    <div class="twelve columns">
                        <a class="pay-button download-file pull-auto cursor-pointer" style="width: 640px;" href="/wp-content/uploads/kd/KD_logo.zip">
                            <span style="display: inline;">
                                <i class="fa fa-download" aria-hidden="true"></i>POBIERZ LOGO KILOMETRÓW DOBRA
                            </span>
                        </a>
                    </div>
                </div>
                <div class="row" style="margin-top: 50px; margin-bottom: 70px;">
                    <div class="twelve columns">
                        <a class="pay-button download-file pull-auto cursor-pointer" href="/wp-content/uploads/documents/Informator_KD_2017.pdf">
                            <span>
                                <i class="fa fa-download" aria-hidden="true"></i>POBIERZ BIULETYN
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container crew">
                <div class="row mb-50">
                    <div class="twelve columns">
                        <h1 style="text-align: center;"> W roku 2017 <br>zespół kampanii tworzyli</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="six columns">
                        <div class="contact-data">
                                <img src="/wp-content/themes/kd/images/crew/robert-kawalko.jpg" alt="Robert Kawałko" />
                                <p>
                                    Robert Kawałko<br>
                                    Prezes Polskiego Instytutu Filantropii<br>
                                    Twórca Kampanii Kilometry Dobra
                                </p>
                                <p>
                                    email: r.kawalko@pif.org.pl<br>
                                    tel.: +48 605 259 388
                                </p>
                        </div>
                    </div>
                    <div class="six columns">
                        <div class="contact-data">
                                <img src="/wp-content/themes/kd/images/crew/jacek-mech.png" alt="Jacek Mech" />
                                <p>
                                    Jacek Mech<br>
                                    Manager Polskiego Instytutu Filantropii<br>
                                    Koordynator kampanii Kilometry Dobra
                                </p>
                                <p>
                                    email: j.mech@pif.org.pl<br>
                                    tel.: +48 535 868 530
                                </p>
                        </div>
                    </div>
                </div>

                <div class="row mt-50">
                    <div class="six columns">
                        <div class="contact-data">
                                <img src="/wp-content/themes/kd/images/crew/agata-pasek.png" alt="Agata Pasek" />
                                <p>
                                    Agata Pasek<br>
                                    Asystentka kampanii Kilometry Dobra
                                </p>
                                <p>
                                    email: a.pasek@pif.org.pl
                                </p>
                        </div>
                    </div>
                    <div class="six columns">
                        <div class="contact-data">
                                <img src="/wp-content/themes/kd/images/crew/katarzyna-meus.png" alt="Katarzyna Meus" />
                                <p>
                                    Katarzyna Meus<br>
                                    Asystentka kampanii Kilometry Dobra
                                </p>
                                <p>
                                    email: k.meus@pif.org.pl
                                </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-100 former-managers">
                <div class="row mb-50">
                    <div class="twelve columns">
                        <h1 class="text-center">Poprzedni managerowie Kilometrów Dobra</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="twelve columns">
                        <div class="row">
                            <div class="six columns text-right">
                                <img src="/wp-content/themes/kd/images/crew/justyna-kinasz.jpg" style="width: 90px; height: 125px;" alt="Justyna Kinasz" />
                            </div>
                            <div class="six columns">
                                <p class="text-bold">Justyna Kinasz<br>manager w roku 2014</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="six columns text-right">
                                <img src="/wp-content/themes/kd/images/crew/jakub-howaniec.jpg" style="width: 90px; height: 125px;" alt="Jakub Howaniec" />
                            </div>
                            <div class="six columns">
                                <p class="text-bold">Jakub Howaniec<br>manager w latach 2014-2015</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-150">
                <div class="row">
                    <div class="twelve columns">
                        <p class="text-bold text-center">Autorem logotypu kampanii Kilometry Dobra jest Mateusz Grzelkiewicz.</p>
                    </div>
                </div>
            </div>
        <?php endif ?>
        <?php endif ?>
    </div>

<?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php if (get_the_ID() == 191) : ?>
<script>
    $.ajax({
        url: '<?php bloginfo('wpurl'); ?>/wp-admin/admin-ajax.php',
        type: 'GET',
        dataType: 'json',
        data: {
            action: 'get-all-donations',
            limit: 100
        },
        success: function (data) {
            $.each(data, function(index, value){
                $('#organizationData').append('<div class="row"><div class="one columns">'+ value.id +'</div><div class="two columns from">' + value.donor + '</div><div class="two columns">' + priceFormat(value.donation) + ' zł</div><div class="two columns">' + value.date + '</div><div class="five columns">' + value.donatory + '</div></div>')
            });
        }
    });

    $('#tableList .summary').on('click', function(){
        $.ajax({
            url: '<?php bloginfo('wpurl'); ?>/wp-admin/admin-ajax.php',
            type: 'GET',
            dataType: 'json',
            data: {
                action: 'get-all-donations',
                offset: 100
            },
            success: function (data) {
                $.each(data, function(index, value){
                    $('#organizationData').append('<div class="row"><div class="one columns">'+ value.id +'</div><div class="two columns from">' + value.donor + '</div><div class="two columns">' + priceFormat(value.donation) + ' zł</div><div class="two columns">' + value.date + '</div><div class="five columns">' + value.donatory + '</div></div>')
                });
                $('#tableList .summary').parent().remove();
            }
        });
    });
</script>
<?php endif ?>
<?php get_footer(); ?>
