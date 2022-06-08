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

<section class="services">
    <div class="container">
        <div class="row d-flex justify-content-around">
            <div class="col-lg-3 card-services">
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/icon1.png" alt=""/>
                <div class="card-services-text">
                    <p class="card-title">Stomatologia profilaktyczna</p>
                    <p class="card-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="col-lg-3 card-services">
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/icon2.png" alt=""/>
                <div class="card-services-text">
                    <p class="card-title">Leczenie Zachowawcze</p>
                    <p class="card-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="col-lg-3 card-services">
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/icon3.png" alt=""/>
                <div class="card-services-text">
                    <p class="card-title">Chirurgia specjalistyczna</p>
                    <p class="card-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="col-lg-3 card-services">
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/icon4.png" alt=""/>
                <div class="card-services-text">
                    <p class="card-title">Stomatologia estetyczna</p>
                    <p class="card-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="education">
    <div class="circle-edu"></div>
    <div class="container edu-container">
        <div class="row">
            <div class="col-lg-6">
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/pacjent1.png" alt=""/>
            </div>
            <div class="col-lg-6">
                <div class="edu-title">
                    <h3>Relax your dentist knows best</h3>
                    <div class="edu-list">
                        <h4>Dental hygiene never forget!</h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>    
                    </div>
                    <div class="edu-list">
                        <h4>Don’t rush when you brush!</h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>    
                    </div>
                    <div class="edu-list">
                        <h4>Visit your dentist once in 6 months</h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
get_footer();