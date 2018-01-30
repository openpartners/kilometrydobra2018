<?php get_header(); ?>

<?php
    $headerBackground = wp_get_attachment_image_src(get_post_meta( get_the_ID(), '_header_background', true ), 'normal')[0];
?>
    <div id="subpage-banner" <?= ($headerBackground !== null)?'style="background-image: url(\''.$headerBackground.'\')"':'class="default-background"'?>>
        <div class="title"><span>Aktualności</span></div>
    </div>

    <div id="news" class="main-news">

        <div class="bottom">
            <a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/bottom.png"></a>
        </div>



        <div class="container" style="padding-bottom: 100px;">
    		<?php $i=0; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?= ($i == 0)?'<div class="row">':'' ?>
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

            <?php
                $i++;
                if ($i==3) {
                    echo'</div>';
                    $i=0;
                }
            ?>
    		<?php endwhile; else : ?>
    		  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    		<?php endif; ?>

            <?= ($i > 0 && $i%3 !== 0)?'</div>':'' ?>

        </div>
    </div>

<?php get_footer(); ?>
