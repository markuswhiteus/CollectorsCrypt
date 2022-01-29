<?php
/**
 * The template for the homepage of the website.
 */
?>

<?php
    get_header();
?>
<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
    // do something
endwhile; else:
    // no posts found
endif;
?>

	<main class="md:p-8 lg:px-0 lg:flex flex-wrap mx-auto w-full">
		<div class="md:container mx-auto flex flex-col md:flex-row justify-center w-full">
			<div class="justify-center h-1/2 md:h-full md:w-1/2 leftcontent pt-48">
				<div class="flex flex-col gap-20 mx-8 md:mx-24 pb-20 md:pb-0">
					<div class="">
						<a href="" target="_self" class="bg-black topbutton rounded-full">
							<span class="text-white text-xs font-semibold">
								New collection 
							</span>
						</a>
					</div>
					<div class="">
						<h2 class="text-5xl md:text-6xl text-black font-bold"><?php the_field('hero-left-text'); ?></h2>
					</div>
					<div class="">
						<h3 class="text-xl text-gray-600 font-bold"><?php the_field('hero-left-sub-text'); ?></h3>
					</div>
					<div class="">
						<a href="" target="_self" class="hover:text-orange-500">
							<span class="text-black text-xs font-semibold  hover:text-orange-500">
								Explore 
							</span>
							<i class="fas fa-chevron-down font-fine"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="h-1/2 md:h-full md:w-1/2 md:overflow-hidden">
				<?php 
					$image = get_field('hero-right-image');
					if( !empty( $image ) ): ?>
						<img class="h-full md:max-w-none" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
			</div>
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
		<div class="flex flex-col md:gap-8 md:flex-row container py-6 mx-auto px:30 md:px-20 text-center">
			<div class="leftcat py-40 h-1/3 md:h-full md:w-1/3 md:ml-auto">
				<div class="flex flex-col items-center">
					<div class="">
						<a href="" target="_self" class="bg-black topbutton rounded-full">
							<span class="text-white text-xs font-semibold">
								New collection 
							</span>
						</a>
					</div>
					<div class="pt-8">
						<h2 class="cathead">Lights & Decor</h2>
					</div>
					<div class="pt-20">
						<a href="" target="_self" class="hover:text-orange-500">
								<span class="text-black text-xs font-semibold  hover:text-orange-500">
									Show More 
								</span>
								<i class="fas fa-chevron-right font-fine"></i>
							</a>
					</div>
				</div>
			</div>
			<div class="midcat py-40 h-1/3 md:h-full  md:w-1/3">
				<div class="flex flex-col items-center">
					<div class="pt-6">
					</div>
					<div class="pt-8">
						<h2 class="cathead">Kitchen Cutlery</h2>
					</div>
					<div class="pt-20">
						<a href="" target="_self" class="hover:text-orange-500">
							<span class="text-black text-xs font-semibold  hover:text-orange-500">
								Show More 
							</span>
							<i class="fas fa-chevron-right font-fine"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="rightcat py-40 h-1/3 md:h-full md:w-1/3 ">
				<div class="flex flex-col items-center">
					<div class="">
						<a href="" target="_self" class="bg-orange-500 topbutton rounded-full">
							<span class="text-white text-xs font-semibold">
								Sale
							</span>
						</a>
					</div>
					<div class="pt-8">
						<h2 class="cathead">Living Room</h2>
					</div>
					<div class="pt-20">
						<a href="" target="_self" class="hover:text-orange-500">
							<span class="text-black text-xs font-semibold  hover:text-orange-500">
								Show More 
							</span>
							<i class="fas fa-chevron-right font-fine"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container py-16 mx-auto ">
			<div class="flex flex-row mx-16 justify-evenly items-center">
				<div class="">
					<?php 
						$image = get_field('partner-1');
						if( !empty( $image ) ): ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				</div>
				<div class="">
					<?php 
						$image = get_field('partner-2');
						if( !empty( $image ) ): ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				</div>
				<div>
					<?php 
						$image = get_field('partner-3');
						if( !empty( $image ) ): ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				</div>
				<div class="">
					<?php 
						$image = get_field('partner-4');
						if( !empty( $image ) ): ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				</div>
				<div>
					<?php 
						$image = get_field('partner-5');
						if( !empty( $image ) ): ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				</div>
				<div class="">
					<?php 
						$image = get_field('partner-6');
						if( !empty( $image ) ): ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="w-full leftcontent pb-32 md:pb-0">
			<div class="container flex flex-col md:flex-row gap-20 md:gap-0 justify-evenly">
				<div class="mx-auto h-1/2 md:h-full md:w-1/2 flex justify-center">
					<img class="pt-20" src="wp-content\themes\boilerplate\assets\Ellipse-622-copy-3.png" alt="Pretty plant"/>
				</div>
				<div class="flex flex-col mx-20 md:m-auto h-1/2 md:h-full md:w-1/2">
					<div>
						<h2>Our Special Offer</h2>
					</div>
					<div class="pt-6 pb-20">
						<h1 class="text-3xl font-bold">Featured products with amazing color variety for your home </h1>
					</div>
					<div>
						<a href="" target="_self" class="bg-black py-4 px-8 rounded-md">
							<span class="text-white text-md font-semibold">
								Purchase 
							</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container pt-20">
			<div class="flex flex-col gap-32 md:gap-0 md:flex-row mx-auto justify-evenly py-16">
				<div class="flex md:border-r-2 h-1/3 md:h-full md:w-1/3 mx-auto items-center">
					<div class="flex flex-col gap-8 items-center  mx-12">
						<div class="">
							<i class="fa fa-clock-o fa-3x " aria-hidden="true"></i>
						</div>
						<div class="">
							<h2 class="text-center">24 h Shipping</h2>
						</div>
						<div class="">
							<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id neque vestibulum, congue elit quis, porta augue.</p>
						</div>
					</div>
				</div>
				<div class="flex md:border-r-2 h-1/3 md:h-full md:w-1/3 mx-auto items-center">
					<div class="flex flex-col gap-8 items-center mx-12">
						<div class="">
							<i class="fa fa-truck fa-3x fa-flip-horizontal" aria-hidden="true"></i>
						</div>
						<div class="">
							<h2 class="text-center">Free Returns</h2>
						</div>
						<div class="">
							<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id neque vestibulum, congue elit quis, porta augue.</p>
						</div>
					</div>
				</div>
				<div class="flex  h-1/3 md:h-full md:w-1/3 mx-auto items-center">
					<div class="flex flex-col gap-8 items-center mx-12">
						<div class="">
							<i class="fa fa-money fa-3x" aria-hidden="true"></i>
						</div>
						<div class="">
							<h2 class="text-center">100% Money Back Guarantee</h2>
						</div>
						<div class="">
							<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id neque vestibulum, congue elit quis, porta augue.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container flex flex-col mx-auto pb-16">
			<div class="flex py-16 md:items-center">
				<h2 class="text-5xl mx-auto text-center">Ideas for inspiration</h2>
			</div>
			<div>
				<img class="w-full"src="wp-content\themes\boilerplate\assets\Hue_Saturation-2.jpg" alt="Sofa"/>
			</div>	
		</div>
		<div class="container">
			<div class="mx-20 md:mx-0 flex flex-col gap-16 md:gap-0 md:flex-row">
				<div class="flex-col h-1/2 md:h-full md:w-1/2">
					<div>
						<h2 class="text-3xl">Find the closest store to your location </h2>
					</div>
					<div class=" h-1/2 md:h-full md:w-1/2 mt-12">
						<p class="text-sm">Quisque ut aliquam nunc, at finibus ante. Sed dignissim, nulla a fermentum egestas, odio</p>
					</div>
				</div>
				<div class="flex items-center md:ml-auto">
					<div>
						<a href="" target="_self" class="bg-black py-4 px-8 rounded-md">
							<span class="text-white text-md font-semibold">
								Find now 
							</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container flex flex-col gap-20 items-center py-32">
			<div class="mx-auto">
				<h2 class="text-4xl text-center">Great deals for great prices</h2>
			</div>
			<div>
				<div class="flex flex-col md:flex-row gap-16 items-center">
					<div class="flex flex-col">
						<div>
							<img src="wp-content\themes\boilerplate\assets\product1.jpg" alt="Product 1"/>
						</div>
						<div class="flex flex-row">
							<div>
								<h2 class="text-lg">A lovely product</h2>
							</div>
							<div>
								<i class="fas fa-shopping-cart"></i>
							</div>
						</div>
						<div>
							<h2>£3.99</h2>
						</div>
					</div>
					<div class="flex flex-col">
						<div>
							<img src="wp-content\themes\boilerplate\assets\product1.jpg" alt="Product 1"/>
						</div>
						<div class="flex flex-row">
							<div>
								<h2 class="text-lg">A lovely product</h2>
							</div>
							<div>
								<i class="fas fa-shopping-cart"></i>
							</div>
						</div>
						<div>
							<h2>£3.99</h2>
						</div>
					</div>
					<div class="flex flex-col">
						<div>
							<img src="wp-content\themes\boilerplate\assets\product1.jpg" alt="Product 1"/>
						</div>
						<div class="flex flex-row">
							<div>
								<h2 class="text-lg">A lovely product</h2>
							</div>
							<div>
								<i class="fas fa-shopping-cart"></i>
							</div>
						</div>
						<div>
							<h2>£3.99</h2>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</main>

<?php get_footer(); ?>