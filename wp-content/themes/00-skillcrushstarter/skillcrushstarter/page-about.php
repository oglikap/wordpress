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


			<h2 class="entry-title"><?php the_title(); ?> <img src="../../wp-content/themes/00-skillcrushstarter/skillcrushstarter/img/rutger_round.jpg" alt="" class="portrait" /></h2>
			<article class="post-entry flex_container">
				<?php// the_content(); ?>
					<p>
	        	Besides web developer, I'm an actor and a writer. And besides that I'm a sailor, a drawer-of-smoking-gnomes and a parent of 3 real kids who - despite being descipted as 'mellow childeren' - still make noise.
	        </p>
					<figure>
						<img src="http://placehold.it/500x300" alt="" />
					</figure>

			</article>
		<?php endwhile; ?>
		<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 7 ); } ?>
	</div>

	<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>
