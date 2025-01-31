<?php 
/**
Template Name: Page with Sidebar

*/

get_header();
?>

<section id="post-section" class="blog-area inarea-blog-2-column-area three">
	<div class="container">
		<div class="row row-cols-1 gy-5 wow fadeInUp">
			<div class="col-md-9">
				<?php the_post(); ?>
				<article class="post-items">
					<div class="post-content">
						<?php
							the_content();
						?>
					</div>
				</article>
				<?php
					if( $post->comment_status == 'open' ) { 
						 comments_template( '', true ); // show comments 
					}
				?>
			</div>
            <?php  get_sidebar(); ?>
		</div>
	</div>
</section>
	
<?php get_footer(); ?>