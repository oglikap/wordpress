<?php
/**
 * The template for my about page
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>

<section class="default-page">
	<div class="main-content">
		<?php while ( have_posts() ) : the_post(); ?>


			<h2 class="entry-title"><?php the_title(); ?> </h2>
			<article class="post-entry flex_container">
				<?php// the_content(); ?>
					<p>
            In 2013 startten Peter Arends en Rutger Kroon het project Vortibach; een beeldnovelle over de gelijknamige, permanent aan lager wal verblijvende inspecteur.
	        </p>
					<figure>
            <img src="../wp-content/themes/00-skillcrushstarter/skillcrushstarter/img/diashow_small.jpg" alt="" />
					</figure>

			</article>
		<?php endwhile; ?>

	</div>

	<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>
