

<?php get_header(); ?>



  <div id="jumbotron" style="min-height: 400px;">
  </div>


  <div id="news">

    <div class="bottom">
      <a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/bottom.png"></a>
    </div>

    <div class="container" style="padding-bottom: 100px;">
      <h2><span>Aktualności</span></h2>

      <div class="row">


		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
       <?php if (is_search() && ($post->post_type != 'post' )) continue; ?> 

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

		<?php endwhile; else : ?>
		  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>

      </div>

    </div>
  </div>






<?php get_footer(); ?>
