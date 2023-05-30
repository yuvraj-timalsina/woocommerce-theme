<?php
/**
 * This template is for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Uv Woo
 */

get_header();
?>
    <div class="content-area">
        <main>
            <div class="container">
                <div class="row">
					<?php
					the_archive_title( '<h1 class="article-title">', '</h1>' );
					if ( have_posts() ) :
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content', 'archive' );
						endwhile;
						the_posts_pagination( [
							'prev_text' => 'Prev',
							'next_text' => 'Next'
						] );
					else:
						?>
                        <p>No Posts Found!</p>
					<?php endif; ?>
                </div>
            </div>
        </main>
    </div>

<?php get_footer();