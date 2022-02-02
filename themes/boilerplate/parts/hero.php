<nav class="mb-10">
    <div class="hidden md:block">
        <div class="flex border-b-2 font-extrabold py-4">
            <div class="ml-auto pr-10 items-center">
                <ul class="flex flex-row gap-8 items-center">
                    <li><i class="fas fa-search fa-xl"></i></li>
                    <li><a href="<?php echo get_permalink( wc_get_page_id( 'myaccount' ) ); ?>"><i class="fas fa-user fa-xl"></a></i></li>
                    <li class="flex items-center gap-0.5">
                        <a href="<?php echo wc_get_cart_url() ?>">
                            <i class="fas fa-shopping-cart fa-xl cart-icon"></i>
                            <span class="text-white text-xs bg-black rounded-full p-0.5 px-1">
                            <?php echo WC()->cart->get_cart_contents_count(); ?>
                                 </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="border-b-2 ">
            <div class="container">
                <div class="flex flex-row mx-auto justify-between items-center">
                    <div class="">
                        <?php
                            wp_nav_menu( array( 
                                'theme_location' => 'nav-left', 
                                'container' => 'ul',
                                'menu_class' => 'flex flex-row font-bold text-xl gap-20 main-nav-bar',
                            ) ); 
                        ?>
                    </div>
                    <div class="mx-4">
                        <a href="<?php echo get_home_url() ?>">
                            <?php 
                                $image = get_field('site-logo', 'option');
                                if( !empty( $image ) ): ?>
                            <img class="h-full md:max-w-none mx-auto" src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </a>
                    </div>
                    <div class="">
                        <?php
                            wp_nav_menu( array( 
                                'theme_location' => 'nav-right', 
                                'container' => 'ul',
                                'menu_class' => 'flex flex-row text-xl font-bold gap-20 main-nav-bar',
                            ) ); 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="md:hidden flex flex-row justify-between items-center border-b">
        <div>
            <?php 
                        $image = get_field('site-logo', 'option');
                        if( !empty( $image ) ): ?>
            <img class="h-full md:max-w-none mx-auto" src="<?php echo esc_url($image['url']); ?>"
                alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
        <div class="burgermenu space-y-2 md:hidden ml-auto mr-10 p-4">
            <div class="w-8 h-0.5 bg-gray-600"></div>
            <div class="w-8 h-0.5 bg-gray-600"></div>
            <div class="w-8 h-0.5 bg-gray-600"></div>
        </div>
    </div>
    <div class="w-full flex items-center text-center md:hidden -mt-2">
        <div class="mobilemenu mx-auto w-full hidden">
            <?php  	
                wp_nav_menu( 
                    array(
                        'theme_location' => 'nav-mobile',  
                        'menu_class' => 'flex flex-col font-bold pt-3' ,
                        'before' => '<div class= "py-2 px-5 border-b w-full">' ,
                        'after' => '</div>'
                        )
                    );
            ?>
        </div>
    </div>
    </div>
</nav>