<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div id="jumbotron" style="min-height: 400px;">
  </div>

  <article id="organization">

    <div class="bottom">
      <a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/bottom.png"></a>
    </div>

    <div class="container">
      <div class="row">
        <div class="twelve columns">
          <h2><span><?php the_title(); ?></span></h2>
          <?php the_content(); ?>
        </div>
      </div>

    </div>
  </article>



<?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
