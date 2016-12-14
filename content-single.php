<?php
/**
 * @package LCCCProud
 */
?>

	<div class="mobilsinglepost show-for-small-only">
    <div class="CategoryHeader">
    <?php the_category('<h4>, </h4>'); ?> 
    </div>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
  <div class="mobilesinglepostfeatureimage">
            <?php
			// check if the post has a Post Thumbnail assigned to it.
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
		?>
		  <div class="caption">
       <?php the_post_thumbnail_caption(); ?>
		</div>
		<?php
		} 
		?>
			</div>
	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'lcccproud' ), 
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>
		
	</div><!-- .entry-content -->
    </article><!-- #post-## -->
    </div>
    <div class="tabletsinglepost show-for-medium-only">
    <div class="CategoryHeader">
    <?php the_category('<h4>, </h4>'); ?> 
    </div>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
  <div class="singlepostfeatureimage">
            <?php
			// check if the post has a Post Thumbnail assigned to it.
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			?>
			<div class="caption">
       <?php the_post_thumbnail_caption(); ?>
		</div> 
<?php
		} 
		?>
	</div>
	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'lcccproud' ), 
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>
		
	</div><!-- .entry-content -->
    </article><!-- #post-## -->
    </div>
    <div class="singlepost show-for-large-up">
    <div class="CategoryHeader">
    <?php the_category('<h4>, </h4>'); ?> 
    </div>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
  <div class="singlepostfeatureimage">
            <?php
			// check if the post has a Post Thumbnail assigned to it.
			if ( has_post_thumbnail() ) {
				the_post_thumbnail('article-thumb-medium');
				?>
        <div class="caption">
       <?php the_post_thumbnail_caption(); ?>
		</div>
 <?php
		} 
		?> 
	</div>
	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'lcccproud' ), 
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>
		
	</div><!-- .entry-content -->
    </article><!-- #post-## -->
    </div>
