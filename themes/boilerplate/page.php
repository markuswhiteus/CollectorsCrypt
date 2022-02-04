<?php
    get_header();
?>

	<main class="container p-4 md:p-8 lg:flex flex-wrap flex-grow">

			<?php if (have_posts()): while (have_posts()): the_post(); ?>

				<article class="">
					<h1><?php the_field('h1'); ?></h1>
					<?php the_content(); ?>
				</article>

			<?php endwhile; endif; ?>

	</main>

<?php get_footer(); ?>