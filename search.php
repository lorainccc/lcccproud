<?php
/**
 * The template for displaying search results pages.
 *
 * @package LCCCProud
 */


get_header(); ?>
<div class="row mainborder">
<div id="content" class="site-content">
   <div class="row">
   	<div class="small-12 medium-12 large-12 columns topsection">   
   			<div class="small-12 large-4 columns site-branding show-for-large-only">
					<img src="<?php echo get_template_directory_uri(); ?>/images/LCCCProudLogo302by65.png"/>
   			</div>
            <div class="small-12 large-4 columns site-branding show-for-medium-only">
            	<div class="small-12 medium-6 columns">
					<img src="<?php echo get_template_directory_uri(); ?>/images/LCCCProudLogo302by65.png"/>
   				</div>
                <div class="small-12 medium-6 columns">
                	<ul>
         				<?php
		 					date_default_timezone_set('America/New_York');  
						 	$todaysdate = date('l, F j Y');
		 				?>
         				<h5 class="todaysdateonwhite"><?php echo $todaysdate;?></h5>
         			</ul>
                </div>
            </div>
               <div class="small-12 large-4 columns mobilesite-branding show-for-small-only">
            	<div class="small-12 columns">
					<img src="<?php echo get_template_directory_uri(); ?>/images/LCCCProudLogo302by65.png"/>
         			<div class="mobiledate">
                    <ul>	
						<?php
		 					date_default_timezone_set('America/New_York');  
						 	$todaysdate = date('l, F j Y');
		 				?>
         				<h5 class="mobiletodaysdate"><?php echo $todaysdate;?></h5>
         			</ul>
                    </div>
                </div>
            </div>
            <div class="small-12 large-8 columns banner show-for-large-up">
            </div>
            <div class="small-12 large-8 columns mobilebanner hide-for-large-up">
            </div>
		</div>
    </div>
<div class="row">
<div class="small-12 medium-12 large-12  columns midsection" data-equalizer>
	
	<div class="large-8 large-push-4 columns content-area" data-equalizer-watch>
		<main id="main" class="site-main" role="main">
        <div id="primary" class="content-area">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'lcccproud' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );
				?>

			<?php endwhile; ?>

			<?php lcccproud_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

	</div><!-- #primary -->
    <div class="featuredgreenbar show-for-medium-up">
    </div>
<div class="mobilefeaturedcategories show-for-small-only">
       <ul class="small-block-grid-2">
    <li>
    <div class="featuredcategoryheader">
    <h5>Community</h5>
    </div>
    <?php

$my_query = new WP_Query('category_name=community&posts_per_page=1');
if( $my_query->have_posts() ) {
  while ($my_query->have_posts()) : $my_query->the_post(); ?>
	<div class="featurecategorythumb">
           <a href="<?php the_permalink()?>"><?php the_title(); ?></a>
    	</div>    	 
     <div class="featurecategoryexcerpt">
        	<?php
			/* translators: %s: Name of current post */
			echo '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
			?>
        </div>
     <?php
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>
     
    </li>
   <li>
    <div class="featuredcategoryheader">
    <h5>Economic Development</h5>
    </div>
     <?php

$econdev_query = new WP_Query('category_name=Economic Development&posts_per_page=1');
if( $econdev_query->have_posts() ) {
  while ($econdev_query->have_posts()) : $econdev_query->the_post(); ?>
	<div class="featurecategorythumb">
           <a href="<?php the_permalink()?>"><?php the_title(); ?></a>
    	</div>
    	
     <div class="featurecategoryexcerpt">
        	<?php
			/* translators: %s: Name of current post */
			echo '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
			?>
        </div>
     <?php
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>
   		
    </li>
  <li>
   <div class="featuredcategoryheader">
    <h5>Education</h5>
    </div>
      <?php

$education_query = null;
$education_query = new WP_Query('category_name=Education&posts_per_page=1');
if( $education_query->have_posts() ) {
  while ($education_query->have_posts()) : $education_query->the_post(); ?>
 	<div class="featurecategorythumb">
           <a href="<?php the_permalink()?>"><?php the_title(); ?></a>
    	</div>
     <div class="featurecategoryexcerpt">
        	<?php
			/* translators: %s: Name of current post */
			echo '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
			?>
        </div>
     <?php
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>
    
   </li>
  <li>
   <div class="featuredcategoryheader">
    <h5>Culture</h5>
    </div>
      <?php
$culture_query = new WP_Query('category_name=Culture&posts_per_page=1');
if( $culture_query->have_posts() ) {
  while ($culture_query->have_posts()) : $culture_query->the_post(); 
    ?>
    	<div class="featurecategorythumb">
           <a href="<?php the_permalink()?>"><?php the_title(); ?></a>
    	</div>
     <div class="featurecategoryexcerpt">
        	<?php
			/* translators: %s: Name of current post */
			echo '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
			?>
        </div>
     <?php
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>
    
  </li>  
    </ul>
    </div>
 <!--Feature Categories code for screens Medium also known as tablet and up-->   
    <div class="featuredcategories show-for-medium-up">
    <ul class="small-block-grid-2">
    <li>
    <div class="featuredcategoryheader">
    <h5>Community</h5>
    </div>
    <?php

$my_query = new WP_Query('category_name=community&posts_per_page=1');
if( $my_query->have_posts() ) {
  while ($my_query->have_posts()) : $my_query->the_post(); ?>
    	 <div class="featurecategorythumb">
	<?php
	// check if the post has a Post Thumbnail assigned to it.
			if ( has_post_thumbnail() ) {
			?> <a href="<?php the_permalink()?>"><?php the_post_thumbnail('thumbnail', array( 'align' => 'left', 'hspace' => '5' ) );?></a><?php
			} 
			?>
           <a href="<?php the_permalink()?>"><?php the_title(); ?></a>
     </div>
     <div class="featurecategoryexcerpt">
        	<?php
			/* translators: %s: Name of current post */
			the_excerpt();
			echo '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
			?>
        </div>
     <?php
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>
     
    </li>
   <li>
    <div class="featuredcategoryheader">
    <h5>Economic Development</h5>
    </div>
     <?php

$econdev_query = new WP_Query('category_name=Economic Development&posts_per_page=1');
if( $econdev_query->have_posts() ) {
  while ($econdev_query->have_posts()) : $econdev_query->the_post(); ?>

    	 <div class="featurecategorythumb">
	<?php
	// check if the post has a Post Thumbnail assigned to it.
			if ( has_post_thumbnail() ) {
			?> <a href="<?php the_permalink()?>"><?php the_post_thumbnail('thumbnail', array( 'align' => 'left', 'hspace' => '5' ) );?></a><?php
			} 
			?>
           <a href="<?php the_permalink()?>"><?php the_title(); ?></a>
     </div>
     <div class="featurecategoryexcerpt">
        	<?php
			/* translators: %s: Name of current post */
			the_excerpt();
			echo '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
			?>
        </div>
     <?php
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>
   		
    </li>
  <li>
   <div class="featuredcategoryheader">
    <h5>Education</h5>
    </div>
      <?php

$education_query = null;
$education_query = new WP_Query('category_name=Education&posts_per_page=1');
if( $education_query->have_posts() ) {
  while ($education_query->have_posts()) : $education_query->the_post(); ?>
 
    	 <div class="featurecategorythumb">
	<?php
	// check if the post has a Post Thumbnail assigned to it.
			if ( has_post_thumbnail() ) {
			?> <a href="<?php the_permalink()?>"><?php the_post_thumbnail('thumbnail', array( 'align' => 'left', 'hspace' => '5' ) );?></a><?php
			} 
			?>
           <a href="<?php the_permalink()?>"><?php the_title(); ?></a>
     </div>
     <div class="featurecategoryexcerpt">
        	<?php
			/* translators: %s: Name of current post */
			the_excerpt();
			echo '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
			?>
        </div>
     <?php
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>
    
   </li>
  <li>
   <div class="featuredcategoryheader">
    <h5>Culture</h5>
    </div>
      <?php
$culture_query = new WP_Query('category_name=Culture&posts_per_page=1');
if( $culture_query->have_posts() ) {
  while ($culture_query->have_posts()) : $culture_query->the_post(); 
    ?>
    	 <div class="featurecategorythumb">
	<?php
	// check if the post has a Post Thumbnail assigned to it.
			if ( has_post_thumbnail() ) {
			?> <a href="<?php the_permalink()?>"><?php the_post_thumbnail('thumbnail', array( 'align' => 'left', 'hspace' => '5' ) );?></a><?php
			} 
			?>
           <a href="<?php the_permalink()?>"><?php the_title(); ?></a>
     </div>
     <div class="featurecategoryexcerpt">
        	<?php
			/* translators: %s: Name of current post */
			the_excerpt();
			echo '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
			?>
        </div>
     <?php
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>
    
  </li>  
    </ul>
    </div>
		
        </main><!-- #main -->
        
	</div><!-- #primary -->
    <div class="large-4 large-pull-8 columns content-area sidebarsection" data-equalizer-watch>
    		<div class="randomimage show-for-large-up">
    			<img src="<?php echo get_template_directory_uri(); ?>/images/the-giftstatue-rotate.jpg"/>
    		</div>
			<div class="sidebarholder">
				<?php get_sidebar(); ?>
			</div>
	</div>
    </div>
</div>
<?php get_footer(); ?>
