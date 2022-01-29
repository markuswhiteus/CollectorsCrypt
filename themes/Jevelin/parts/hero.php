<nav class="bg-white px-5 py-5 mx-auto fixed z-40 w-full -mt-16 md:-mt-10">
        <div class="container flex flex-row items-center">
            <div class="mr-auto w-1/3 justify-start">
                <a href="#" class="py-4 px-2 items-left">
                    <img src="wp-content\themes\boilerplate\assets\Jevelin_logo_dark.png" alt="Logo" class="" />
                </a>
            </div>
            <div class="mx-auto hidden md:flex items-center w-1/3 justify-center">
                <?php  	
                    wp_nav_menu( 
                    array( 
                        'menu_class' => 'flex flex-row font-bold pt-3' ,
                        'before' => '<div class= "py-2 px-5 hover:text-orange-500">' ,
                        'after' => '</div>'
                        )
                    );
                ?>
            </div>
            <div class="hidden md:flex flex-row pt-3 items-center w-1/3 justify-end">
                    <a href="#" class="px-1">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="px-1">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="px-1">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="px-1">
                        <i class="fas fa-search"></i>
                    </a>
                    <a href="#" class="pl-1">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
            </div>
            <div class="burgermenu space-y-2 md:hidden">
                <div class="w-8 h-0.5 bg-gray-600"></div>
                <div class="w-8 h-0.5 bg-gray-600"></div>
                <div class="w-8 h-0.5 bg-gray-600"></div>
            </div>    
        </div>
    <div class="w-full flex items-center text-center md:hidden">
        <div class="mobilemenu mx-auto w-full hidden">
            <?php  	
                wp_nav_menu( 
                    array( 
                        'menu_class' => 'flex flex-col font-bold pt-3' ,
                        'before' => '<div class= "py-2 px-5 hover:text-orange-500 border-b w-full">' ,
                        'after' => '</div>'
                        )
                    );
                ?>
        </div>
    </div>
</nav>