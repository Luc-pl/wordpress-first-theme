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

<section class="services-two">
    <div class="container">
        <h3 class="title-services">Our Umbrella of Services</h3>
        <p class="subtitle-services">Pain free procedures in dentistry</p>
        <div class="row">
            <div class="col-lg-4 category-services px-5">
                <h5 class="category-title">Teeth Whitening</h5>
                <p class="category-description">Lorem ipsum dolor amet, consectetur adipiscing elit. Mattis et sed nam sem tellus erat.</p>
                <button class="btn-services">Sprawdź <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/></svg>
                </button>
            </div>
            <div class="col-lg-4 category-services px-5">
                <h5 class="category-title">Teeth Cleaning</h5>
                <p class="category-description">Lorem ipsum dolor amet, consectetur adipiscing elit. Mattis et sed nam sem tellus erat.</p>
                <button class="btn-services">Sprawdź <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/></svg>
                </button>
            </div>
            <div class="col-lg-4 category-services px-5">
                <h5 class="category-title">Modern Anesthetic</h5>
                <p class="category-description">Lorem ipsum dolor amet, consectetur adipiscing elit. Mattis et sed nam sem tellus erat.</p>
                <button class="btn-services">Sprawdź <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/></svg>
                </button>
            </div>
            <div class="col-lg-4 category-services px-5">
                <h5 class="category-title">Quality Brackets</h5>
                <p class="category-description">Lorem ipsum dolor amet, consectetur adipiscing elit. Mattis et sed nam sem tellus erat.</p>
                <button class="btn-services">Sprawdź <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/></svg>
                </button>
            </div>
            <div class="col-lg-4 category-services px-5">
                <h5 class="category-title">Teeth Whitening</h5>
                <p class="category-description">Lorem ipsum dolor amet, consectetur adipiscing elit. Mattis et sed nam sem tellus erat.</p>
                <button class="btn-services">Sprawdź <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/></svg>
                </button>
            </div>
            <div class="col-lg-4 category-services px-5">
                <h5 class="category-title">Teeth Whitening</h5>
                <p class="category-description">Lorem ipsum dolor amet, consectetur adipiscing elit. Mattis et sed nam sem tellus erat.</p>
                <button class="btn-services">Sprawdź <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/></svg>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="btn-all">
                <button class="btn-services-all">Sprawdź wszystkie <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/></svg>
                </button>
        </div>
        </div>
    </div>
</section>

<section class="team">
    <h3 class="title-team">Our Distinguished Dental Specialists</h3>
    <div class="container">
        <div class="row mx-2">
            <div class="col-lg-3 team-box">
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/lekarz2.png" alt=""/>
                <div class="team-person">
                    <p>Jan Wiśniewski</p>
                    <p>Dentysta</p>
                </div>
            </div>
            <div class="col-lg-3 team-box">
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/lekarz3.png" alt=""/>
                <div class="team-person">
                    <p>Anna Nowak</p>
                    <p>Dentysta</p>
                </div>
            </div>
            <div class="col-lg-3 team-box">
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/lekarz4.png" alt=""/>
                <div class="team-person">
                    <p>Jeremi Przybyła</p>
                    <p>Dentysta</p>
                </div>
            </div>
            <div class="col-lg-3 team-box">
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/lekarz5.png" alt=""/>
                <div class="team-person">
                    <p>Monika Richards</p>
                    <p>Dentysta</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog">
  <div class="container">
    <h3 class="title-blog">Our Blog</h3>
    <p class="subtitle-blog">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc <br /> odio in et, lectus sit lorem id integer.</p>
    <div class="row">
        <article  <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <div class="blog-row">
                <?php $posts = get_posts( array( 'posts_per_page' => 3 ) );
                    foreach ( $posts as $_post ) {
                        if ( has_post_thumbnail( $_post->ID ) ) {
                            echo '<a href="' . get_permalink( $_post->ID ) . '" title="' . esc_attr( $_post->post_title ) . '">';
                            echo get_the_post_thumbnail( $_post->ID, 'medium' );
                            echo '</a>';
                            echo apply_filters( 'the_title', $_post->post_title, $post->ID );
                        }
                    }
                ?>
            </div>
        </article>
    </div>
  </div>
</section>     

<?php
get_footer();