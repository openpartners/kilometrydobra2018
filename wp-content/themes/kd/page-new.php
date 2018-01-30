<?php /* Template Name: Page new */ ?>
<?php get_header('new'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div><br><br><br><br><br><br><br><br><br><br>
                    <h2 class="title"><a href="<?= the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="teaser"><?= the_content('') ?></div>
                </div>

<?php endwhile;  endif ?>
<script>
document.getElementsByClassName("pay").style.display = 'none';
document.getElementsByClassName("pay-button").style.display = 'none';
document.getElementsByClassName("ukryty").style.display = 'none';
</script>
<?php get_footer('new'); ?>
