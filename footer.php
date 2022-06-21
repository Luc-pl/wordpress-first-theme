<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">
    <footer class="footer">
        <div class="container">
            <div class="row footer-row">
                <div class="col-lg-3 col-sm-6">
                    <h5>About Us</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p> 
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div>
                        <p>Bussiness hours:</p>
                        <p>Monday to Saturday 9:30 am - 4:30 pm</p>
                    </div>
                    <div>
                        <p>Address:</p>
                        <p>A-67 south Ex Delhi-11002</p>
                    </div>
                    <div>
                        <p>E-mail:</p>
                        <p>abc@abc.com</p>
                    </div>
                    <div>
                        <p>Phone:</p>
                        <p>1800 - 458495-4455</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 footer-social">
                    <h5>Stay Connected</h5>
                    <a href="#">Facebook</a>
                    <a href="#">Twitter</a>
                    <a href="#">Google</a>
                    <a href="#">Instagram</a>
                    <a href="#">Youtube</a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h5>Newsletter</h5>
                    <p>Lorem Ipsum is simply <br />dummy text of the printing <br />and typesetting industry.</p> 
                    <form>
                        <input type="email" id="email" placeholder="Enter Email"/>
                        <input type="submit" id="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>    
    </footer>

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

