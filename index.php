<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package LCCCProud
 */

get_header(); ?>
<div class="row mainborder">
<div id="content" class="site-content">
   <div class="row">
   	<div class="small-12 medium-12 large-12 columns topsection">   
   			<div class="small-12 large-4 columns site-branding show-for-large-up">
					<img src="<?php echo get_template_directory_uri(); ?>/images/LCCCProudLogo302by65.png"/>
   			</div>
            <div class="small-12 large-4 columns tabletsite-branding show-for-medium-only">
            	<div class="small-12 medium-6 columns">
					<img src="<?php echo get_template_directory_uri(); ?>/images/LCCCProudLogo302by65.png"/>
   				</div>
                <div class="small-12 medium-6 columns">
                	<ul>
         				<?php
		 					date_default_timezone_set('America/New_York');  
						 	$todaysdate = date('l, F j, Y');
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
						 	$todaysdate = date('l, F j, Y');
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
        <div class="mobilefeaturedpost hide-for-medium-up">
		<?php 
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$query = new WP_Query('category_name=featured-articles&posts_per_page=1&paged=' . $paged);?>
        
        <?php	if ( $query-> have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', 'mainstory' );
				?>

			<?php endwhile; ?>

			<?php //lcccproud_paging_nav(); ?>
		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
	</div><!-- featured post div -->
       <div class="tabletfeaturedpost show-for-medium-only">
		<?php 
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$query = new WP_Query('category_name=featured-articles&posts_per_page=1&paged=' . $paged);?>
        
        <?php	if ( $query-> have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', 'mainstory' );
				?>

			<?php endwhile; ?>

			<?php lcccproud_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
	</div><!-- featured post div -->
	<div class="featuredpost show-for-large-up">
		<?php 
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$query = new WP_Query('category_name=featured-articles&posts_per_page=1&paged=' . $paged);?>
        
        <?php	if ( $query-> have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', 'mainstory' );
				?>

			<?php endwhile; ?>

			<?php lcccproud_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
	</div><!-- featured post div -->
    <div class="featuredgreenbar show-for-medium-up">
    </div>
<div class="mobilefeaturedgreenbar show-for-small-only">
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
				the_post_thumbnail('thumbnail', array( 'align' => 'left', 'hspace' => '5' ) );
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
				the_post_thumbnail('thumbnail', array( 'align' => 'left', 'hspace' => '5' ) );
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
				the_post_thumbnail('thumbnail', array( 'align' => 'left', 'hspace' => '5' ) );
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
				the_post_thumbnail('thumbnail', array( 'align' => 'left', 'hspace' => '5' ) );
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
        	<div class="othernews">
    	<div class="featuredcategoryheader">
    		<h5>Other News from LCCC</h5>
    	</div>
        <?php
			// WP_Query arguments
			$othernews = array (
			'category_name' => 'other-news',
			'tag' => 'show-on-homepage',
			'posts_per_page' => '5',
			'orderby' => 'modified',
			);
	
			// The Query
			$othernewsquery = new WP_Query( $othernews );
		?>
        <ul>
		<?php if ( $othernewsquery-> have_posts() ) : ?>
			<?php while ( $othernewsquery->have_posts() ) : $othernewsquery->the_post(); ?>
            <li><a href="<?php the_permalink()?>"><?php the_title(); ?></a></li>
            <?php 
			wp_reset_query();  // Restore global post data stomped by the_post().
			endwhile; 
			?>
    
			<?php endif; ?>
		</ul>
    </div> 	
    <div class="printfooter">
    <p>&copy; <?php echo date("Y") ?> Lorain County Community College | 1005 N Abbe Rd - Elyria, OH 44035 | 1-800-995-LCCC | <a href="mailto:webmaster@lorainccc.edu">Webmaster</a></p>
    </div>
	</div><!-- #primary -->
    <div class="large-4 large-pull-8 columns content-area sidebarsection" data-equalizer-watch>
    
			<div class="sidebarholder">
				<?php get_sidebar(); ?>
			</div>
	</div>
    </div>
</div>
<?php get_footer(); ?>
