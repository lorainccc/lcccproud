<?php
/**
 * @package LCCCProud
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="mainstory-header"><h1 class="entry-title">
		<?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?></h1>

	</header><!-- .entry-header -->

	<div class="entry-content">
		   <div class="featuredpostimage hide-for-small-only">
            <?php
			// check if the post has a Post Thumbnail assigned to it.
			if ( has_post_thumbnail() ) {
			?> <a href="<?php the_permalink()?>"> <?php the_post_thumbnail('article-thumb-medium');?></a><?php
			} 
		?>
			</div>
            <div class="mobilefeaturedpostimage show-for-small-only">
            <?php
			// check if the post has a Post Thumbnail assigned to it.
			if ( has_post_thumbnail() ) {
			?> <a href="<?php the_permalink()?>"> <?php the_post_thumbnail('article-thumb');?></a><?php
			} 
		?>
			</div>
		<?php
			/* translators: %s: Name of current post */
			the_excerpt();
			echo '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
			?>
         
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'lcccproud' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
<?php edit_post_link('edit article', '<p>', '</p>'); ?>
</article><!-- #post-## -->
