<?php
// If Single or Archive (Category, Tag, Author or a Date based page).
if (is_single() || is_archive()):
	?>
</div><!-- /.col -->

<?php
	get_sidebar();
	?>

</div><!-- /.row -->
<?php
endif;
?>
</main><!-- /#main -->
<footer id="footer" class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p class="text-center text-md-start">
                    <?php printf(esc_html__('Copyright &copy; Your Website %1$s %2$s.'), wp_date('Y'), get_bloginfo('name', '')); ?>
                </p>
            </div>
            <div class="col-md-4 my-3 my-lg-0">
                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><svg
                        class="svg-inline--fa fa-twitter" aria-hidden="true" focusable="false" data-prefix="fab"
                        data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                        data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                        </path>
                    </svg><!-- <i class="fab fa-twitter"></i> Font Awesome fontawesome.com --></a>
                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><svg
                        class="svg-inline--fa fa-facebook-f" aria-hidden="true" focusable="false" data-prefix="fab"
                        data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                        data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                        </path>
                    </svg><!-- <i class="fab fa-facebook-f"></i> Font Awesome fontawesome.com --></a>
                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><svg
                        class="svg-inline--fa fa-linkedin-in" aria-hidden="true" focusable="false" data-prefix="fab"
                        data-icon="linkedin-in" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                        data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                        </path>
                    </svg><!-- <i class="fab fa-linkedin-in"></i> Font Awesome fontawesome.com --></a>
            </div>

            <?php
			if (has_nav_menu('footer-menu')): // See function register_nav_menus() in functions.php
				/*
										 Loading WordPress Custom Menu (theme_location) ... remove <div> <ul> containers and show only <li> items!!!
										 Menu name taken from functions.php!!! ... register_nav_menu( 'footer-menu', 'Footer Menu' );
										 !!! IMPORTANT: After adding all pages to the menu, don't forget to assign this menu to the Footer menu of "Theme locations" /wp-admin/nav-menus.php (on left side) ... Otherwise the themes will not know, which menu to use!!!
									 */
				wp_nav_menu(
					array(
						'container' => 'nav',
						'container_class' => 'col-md-4',
						//'fallback_cb'     => 'WP_Bootstrap4_Navwalker_Footer::fallback',
						'walker' => new WP_Bootstrap4_Navwalker_Footer(),
						'theme_location' => 'footer-menu',
						'items_wrap' => '<ul class="menu nav justify-content-center justify-content-md-end">%3$s</ul>',
					)
				);
			endif;

			if (is_active_sidebar('third_widget_area')):
				?>
            <div class="col-md-12">
                <?php
					dynamic_sidebar('third_widget_area');

					if (current_user_can('manage_options')):
						?>
                <span class="edit-link"><a href="<?php echo esc_url(admin_url('widgets.php')); ?>"
                        class="badge bg-secondary"><?php esc_html_e('Edit', 'test-lpage'); ?></a></span>
                <!-- Show Edit Widget link -->
                <?php
					endif;
					?>
            </div>
            <?php
			endif;
			?>
        </div><!-- /.row -->
    </div><!-- /.container -->
</footer><!-- /#footer -->
</div><!-- /#wrapper -->
<?php
wp_footer();
?>
</body>
<script>
document.addEventListener("DOMContentLoaded", function() {
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            document.getElementById('header').classList.add('fixed-top');
            // add padding top to show content behind navbar
            navbar_height = document.querySelector('.navbar').offsetHeight;
            document.body.style.paddingTop = navbar_height + 'px';
        } else {
            document.getElementById('header').classList.remove('fixed-top');
            // remove padding top from body
            document.body.style.paddingTop = '0';
        }
    });
});
</script>

</html>