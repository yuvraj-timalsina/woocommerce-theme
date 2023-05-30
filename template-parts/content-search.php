<?php
/**
 * The template for displaying posts in search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Uv Woo
 */
?>
<article <?php post_class(); ?>>
	<h2>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h2>
	<div class="post-thumbnail">
		<?php
		if ( has_post_thumbnail() ) :
			the_post_thumbnail( 'uv-woo-blog', [ 'class' => 'img-fluid' ] );
		endif;
		?>
	</div>
	<div class="meta">
		<p>Author : <?php the_author_posts_link(); ?> | <?= get_the_date(); ?>
			<br>
			<?php if ( has_category() ) : ?>
				Categories : <span><?php the_category( ' ' ); ?></span>
			<?php endif; ?>
			<br>
			<?php if ( has_tag() ) : ?>
				Tags : <span><?php the_tags( '', ', ' ); ?></span>
			<?php endif; ?>
		</p>
	</div>
	<div><?php the_excerpt(); ?></div>
</article>