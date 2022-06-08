<?php
/**
 * Template Name: Template Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<section class="hero">
    <div class="home-hero">
        <div class="hero-circle"></div>
        <div class="container">
            <div class="row hero-content">
                <div class="col-lg-6">
                    <p class="text-hero">Miło mi powitać Cię w </br>klinice dentystycznej Biały Ząbek</p>
                    <h1 class="text-hero-title">Przyjazna atmosfera oraz poczucie bezpieczeństwa</h1>
                    <p class="text-hero-description">Oddaj się pod fachową opiekę najlepszych specjalistów. Nasi stomatolodzy dołążą wszelkich starań, aby pomóc Ci nawet w najcięższych przypadkach</p>
                    <button type="button" class="btn">Umów termin wizyty</button>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/pacjent-hero.png" alt="Pacjent u dentysty"/>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta">
    <div class="container">
        <div class="row">
            <p>Potrzebujesz porady? Zadzwoń: </br><span><a href="tel:(32) 123 45 67">(32) 123 45 67</a></span></p>
        </div>
    </div>
</section>

<?php
get_footer();