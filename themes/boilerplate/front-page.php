<?php
/**
 * The template for the homepage of the website.
 */
?>

<?php
    get_header();
    include locate_template('parts/hero.php');
?>

	<main class="container p-4 md:p-8 lg:px-0 lg:flex flex-wrap">
		<div class="flex md:hidden items-center mx-auto">
			<?php 
				$image = get_field('hero-image-mobile');
				if( !empty( $image ) ): ?>
					<img class="h-full md:max-w-none" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>
		</div>
		<div class="hidden md:flex items-center mx-auto">
		<?php 
			$image = get_field('hero-image');
			if( !empty( $image ) ): ?>
				<img class="h-full " src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		<?php endif; ?>
		</div>
		<?php
			if(get_field("discount_code_check")){
				echo '
					<div class="flex container py-6 border-b">
					<span class="mx-auto">
					<a style="color: #5a5a5a;" href="#">';
				the_field('discount_message');
				echo'
					</a>
					</span>
					</div>'
				;
			}
			else {
				echo '
				<div class="flex container py-6 border-b">
				</div>
				'
			;
			}
		?>
		<div class="container pt-20">
			<div class="flex flex-col gap-32 md:gap-0 md:flex-row mx-auto justify-evenly py-16">
				<div class="flex md:border-r-2 h-1/3 md:h-full md:w-1/3 mx-auto items-center">
					<div class="flex flex-col gap-8 items-center  mx-12">
						<div class="">
						<?php 
							$image = get_field('info_image_1');
							if( !empty( $image ) ): ?>
								<img class="h-full md:max-w-none" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
						</div>
						<div class="">
							<h2 class="text-center"><?php the_field('info_header_1'); ?></h2>
						</div>
						<div class="">
							<p class="text-center"><?php the_field('info_text_1'); ?>.</p>
						</div>
					</div>
				</div>
				<div class="flex md:border-r-2 h-1/3 md:h-full md:w-1/3 mx-auto items-center">
					<div class="flex flex-col gap-8 items-center mx-12">
						<div class="">
							<?php 
							$image = get_field('info_image_1');
							if( !empty( $image ) ): ?>
								<img class="h-full md:max-w-none" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
						</div>
						<div class="">
							<h2 class="text-center"><?php the_field('info_header_2'); ?></h2>
						</div>
						<div class="">
							<p class="text-center"><?php the_field('info_text_2'); ?></p>
						</div>
					</div>
				</div>
				<div class="flex  h-1/3 md:h-full md:w-1/3 mx-auto items-center">
					<div class="flex flex-col gap-8 items-center mx-12">
						<div class="">
						<?php 
							$image = get_field('info_image_1');
							if( !empty( $image ) ): ?>
								<img class="h-full md:max-w-none" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
						</div>
						<div class="">
							<h2 class="text-center"><?php the_field('info_header_2'); ?></h2>
						</div>
						<div class="">
							<p class="text-center"><?php the_field('info_text_3'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container border-b my-10">
		</div>
		<div class="container">
			<div class="flex flex-col">
				<div class="flex flex-col md:flex-row justify-evenly gap-8 items-center">
					<div>
						<a href="<?php the_field('category_1_link'); ?>">
						<?php 
							$image = get_field('category_1');
							if( !empty( $image ) ): ?>
							<img class="" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
						</a>
					</div>
					<div>
						<a href="<?php the_field('category_2_link'); ?>">
						<?php 
							$image = get_field('category_2');
							if( !empty( $image ) ): ?>
							<img class="" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
						</a>
					</div>
					<div>
						<a href="<?php the_field('category_3_link'); ?>">
						<?php 
							$image = get_field('category_3');
							if( !empty( $image ) ): ?>
							<img class="" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
						</a>
					</div>
				</div>
				<div class="flex flex-col md:flex-row justify-evenly mt-10 gap-8 items-center">
					<div>
						<a href="<?php the_field('category_4_link'); ?>">
						<?php 
							$image = get_field('category_4');
							if( !empty( $image ) ): ?>
							<img class="" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
						</a>
					</div>
					<div>
						<a href="<?php the_field('category_5_link'); ?>">
						<?php 
							$image = get_field('category_5');
							if( !empty( $image ) ): ?>
							<img class="" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
						</a>
					</div>
					<div>
						<a href="<?php the_field('category_6_link'); ?>">
						<?php 
							$image = get_field('category_6');
							if( !empty( $image ) ): ?>
							<img class="" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
						</a>
					</div>
				</div>
			</div>
			<div class="flex flex-col">
			</div>
		</div>
	</main>

<?php get_footer(); ?>