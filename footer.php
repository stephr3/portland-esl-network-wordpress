<?php do_action('main_bottom'); ?>
</section> <!-- .main -->
<?php get_sidebar('primary'); ?>
<?php do_action('after_main'); ?>
</div><!-- .max-width -->
</div><!-- .primary-container -->

<?php
// Elementor `footer` location
if (!function_exists('elementor_theme_do_location') || !elementor_theme_do_location('footer')) :
?>
    <footer id="site-footer" class="site-footer" role="contentinfo">
        <div class="max-width">
            <?php do_action('footer_top'); ?>
        </div>
        <div class="design-credit">

            <nav class="nav-list">
                <ul>
                    <li><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
                    <li><a href="<?php echo site_url('/volunteer-with-us') ?>">Volunteer With Us</a></li>
                    <li><a href="#">Submit a New Class</a></li>
                </ul>
            </nav>
            <nav class="social-list">
                <ul>

                    <li><a href="https://www.facebook.com/PortlandEsl"><i class="fab fa-facebook-square fa-2x"> </i></a></li>
                    <li>for students</li>
                    <li><a href="https://www.facebook.com/groups/PortlandESLNetwork"><i class="fab fa-facebook-square fa-2x"> </i></a></li>
                    <li>for teachers</li>
                    <li><a href="https://www.youtube.com/channel/UC07ICj_72wCrsQ0mSpQ0bRg"><i class="fab fa-youtube fa-2x"></i></a></li>
                </ul>
            </nav>


            <p>Copyright &#169; 2021 Portland ESL Network</p>

        </div>
    </footer>
<?php endif; ?>
</div><!-- .overflow-container -->

<?php do_action('body_bottom'); ?>

<?php wp_footer(); ?>

</body>

</html>