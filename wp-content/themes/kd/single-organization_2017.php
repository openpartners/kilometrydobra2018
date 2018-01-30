<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php
        $organization = $container['organization.service']
            ->getOrganization($post->ID, LANG);

    ?>
  <?php if(get_post_meta($post->ID, '_background_img', true)): ?>
    <div id="jumbotron" style="background:url('<?= wp_get_attachment_image_src(get_post_meta($post->ID, '_background_img', true), 'normal')[0] ?>')">
  <?php else: ?>
    <div id="jumbotron">
  <?php endif; ?>

    <div class="container">
      <div class="row">
        <div class="twelve columns">
            <div class="goal">
              <h1><?= $organization['organizationName'] ?></h1>
              <p>Cel zbiórki:</p>
              <p><?= $organization['organizationGoal'] ?></p>
            </div>
            <div class="logo" style="background: url('<?= $organization['organizationLogo'] ?>') no-repeat center top; background-size: contain;">
            </div>
        </div>
      </div>

      <div class="row">
        <div class="twelve columns center">
          <p>Zebraliśmy już:</p>
          <p><span id="fPrice"></span> zł</p>
          <p>czyli <span id="kDobra"></span> metrów Dobra!</p>
          <?php if ($organization['organizationLogo'] || $organization['organizationBmServiceId']): ?>
          <a href="<?php bloginfo('wpurl');?>/wplac/?id=<?= $organization['organizationId'] ?>" id="payButtonBig" style="display:none;"><img src="<?php bloginfo('template_url'); ?>/images/pay.png"></a><br><br><br>
          <?php else: ?>
          <a id="payButtonBig" style="display:none;"><img src="<?php bloginfo('template_url'); ?>/images/pay.png"></a><br><br><br>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <article id="organization">

    <div class="bottom">
      <a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/bottom.png"></a>
    </div>

    <div class="container">
      <div class="row">
        <div class="twelve columns">
          <h2><span>O organizacji</span></h2>
          <?= $organization['pageContent'] ?>
        </div>
      </div>

      <?php $pid = $post->ID; ?>

      <?php if(get_post_meta($post->ID, '_org_gallery', true)[0]['_org_gallery_item'] > 0): ?>
        <div class="row">
          <div class="mainGallery">
            <?php foreach (get_post_meta($post->ID, '_org_gallery', true) as $item): ?>
                <?php if (!empty($url = wp_get_attachment_image_src($item['_org_gallery_item'], 'news')[0])): ?>
                  <div data-original-image="<?= wp_get_attachment_image_src($item['_org_gallery_item'], 'normal')[0] ?>">
                    <img src="<?= $url ?>">
                  </div>
                <?php endif ?>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endif; ?>

    </div>
    <div id="photo-modal">
        <div class="photo-wrapper">
            <div class="close">X</div>
            <img src="" />
        </div>
    </div>
  </article>
  <div id="list">

    <div class="bottom">
      <a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/bottom.png"></a>
    </div>

    <div id="tableList" class="container">
        <h2><span>Darczyńcy</span></h2>
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
        <div class="row">
            <div class="twelve columns summary"></div>
        </div>
    </div>
  </div>
   <div id="cta">
    <div class="bottom">
      <a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/bottom.png"></a>
    </div>


    <div class="container">
      <div class="twelve columns">

        <?php if ($organization['organizationLogo'] || $organization['organizationBmServiceId']): ?>
        <a href="<?php bloginfo('wpurl');?>/wplac/?id=<?= $organization['organizationId'] ?>" style="display:none;"><img src="<?php bloginfo('template_url'); ?>/images/cta.png"></a>
        <?php else: ?>
        <a style="display:none;"><img src="<?php bloginfo('template_url'); ?>/images/cta.png"></a>
        <?php endif; ?>

      </div>
    </div>
  </div>
  <div id="news">

    <div class="bottom">
      <a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/bottom.png"></a>
    </div>

    <div class="container">
      <h2><span>Aktualności</span></h2>

      <div class="row">


        <?php $my_query = new WP_Query('category_name=' . $post->ID . '&showposts=3'); ?>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

        <div class="four columns article">
          <?php if(has_post_thumbnail()): ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('news'); ?></a>
          <?php else: ?>
            <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/article.png"></a>
          <?php endif; ?>

          <div>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="date"><?php the_time('d M Y'); ?></p>
            <p class="teaser"><?php the_content(''); ?></p>
            <a href="<?php the_permalink(); ?>" class="more">Czytaj dalej</a>
          </div>
        </div>

       <?php endwhile; wp_reset_query();  ?>

      </div>
      <div class="row">
        <div class="twelve columns"  id="olderButton">
          <a href="<?php bloginfo('wpurl'); ?>/category/<?php echo $pid; ?>"><img src="<?php bloginfo('template_url'); ?>/images/older.png"></a>
        </div>
      </div>
    </div>
  </div>


  <?php if(get_post_meta($post->ID, '_org_partners', true)[0]['_org_partners_item'] > 0): ?>
   <div id="partners">

    <div class="bottom">
      <a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/bottom.png"></a>
    </div>

    <div class="container">
      <h2><span>Partnerzy</span></h2>

      <div class="row">
        <div class="mainLogos">


            <?php foreach (get_post_meta($post->ID, '_org_partners', true) as $item): ?>
              <div>
                <a href="<?= $item['_org_partners_url'] ?>" target="_blank">
                    <img src="<?php echo wp_get_attachment_image_src($item['_org_partners_item'], 'partners-logo')[0]; ?>">
                </a>
              </div>
            <?php endforeach; ?>


        </div>
      </div>

    </div>
  </div>
  <?php endif; ?>

<?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<script>
$.ajax({
    url: '<?php bloginfo('wpurl'); ?>/wp-admin/admin-ajax.php',
    type: 'GET',
    data: {
        action: 'get-o-stats',
        id: <?= $organization['organizationId']; ?>
    },
    complete: function (result) {
        var data = $.parseJSON(result.responseText);
        var fullPrice = 0;
        for(var i = 0; i < data.length; i++){
          var entry = data[i];
          var id = entry.ID;
          var date = entry.post_date;
          var price = entry.price;
          var name = entry.name;
          var surname = entry.surname;
          var target = entry.target;
          var row = '<div class="row"><div class="one columns">'+ id +'</div><div class="two columns from">' + name + ' ' + surname + '</div><div class="two columns">' + priceFormat(price) + ' zł</div><div class="two columns">' + date + '</div><div class="five columns">' + target + '</div></div>';
          $('#organizationData').append(row);
          var p = parseFloat(price);
          fullPrice = fullPrice + p;
        }
        var fp = fullPrice.toFixed(2);
        var kd = (fp / 44).toFixed(2);
        $('#fPrice').append(priceFormat(fp));
        $('#kDobra').append(priceFormat(kd));

        if (data.length > 15) {
            $('#tableList .summary').html('więcej...');
        } else if (data.length == 0) {
            $('#tableList .summary').html('brak wpłat');
        }
    }
});

$('#tableList .summary').on('click', function(){
    $('#organizationData .row').fadeIn('slow');
    $(this).remove();
});
</script>
<?php get_footer(); ?>
