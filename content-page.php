<?php
/**
 * The template used for displaying page content.
 *
 * @package Sela-child
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header" style="display: none;">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="author">
			<?php trim( the_author() ); ?>
		</div>
		<div class="published">
			<?php the_date(); ?>
		</div>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sela' ),
				'after'  => '</div>',
			) );
		?>

	</div><!-- .entry-content -->
	<div class=""
	<?php edit_post_link( __( 'Edit', 'sela' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>

</article><!-- #post-## -->