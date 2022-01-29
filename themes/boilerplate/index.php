<?php
    get_header();
?>

	<main class="site-content">
		<div class="container">
			<div class="copy">
				<?php if (have_posts()): while (have_posts()): the_post(); ?>

				<article class="post post--overview">
					<?php the_post_thumbnail('medium'); ?>
					<?php the_title('<h1>', '</h1>'); ?>
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>" class="btn btn--black">Continue reading</a>
				</article>
			
				<?php endwhile; endif; ?>

				<div class="prev-next">				
					<div class="prev"><?php previous_posts_link(); ?></div>
					<div class="next"><?php next_posts_link(); ?></div>		
		        </div>
			</div>			

			<aside class="sidebar sidebar--news">
				<?php get_sidebar(); ?>		
			</aside>
		</div>
	</main>

<?php get_footer(); ?>