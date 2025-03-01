<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package gnws
 */

get_header();
?>

<section id="search-page">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <header class="page-header">
                <?php
                printf(
                    /* translators: 1: search result title. 2: search term. */
                    '<h1 class="page-title my-10">%1$s <span>%2$s</span></h1>',
                    esc_html__( 'Kết quả tìm kiếm cho:', 'gnws' ),
                    get_search_query()
                );
                ?>
            </header><!-- .page-header -->

            <div class="grid lg:grid-cols-3 grid-cols-1 gap-6">
                <?php
                // Start the Loop.
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/content', get_post_type() );
                endwhile;
                ?>
            </div>

            <?php
            // Previous/next page navigation.
            gnws_pagination();

        else:
            // If no content is found, get the `content-none` template part.
            get_template_part( 'template-parts/content', 'none' );
        endif;
        ?>
    </div>
</section><!-- #primary -->

<?php
get_footer();