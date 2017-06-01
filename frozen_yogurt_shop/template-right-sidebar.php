<?php
/*
* Template name: Right Sidebar
*/
?>

<?php get_header() ?>

		<div id="body" class="home">
			<div class="header">

			<?php
            		if (have_posts()):
            			while (have_posts()):
            				the_post();
            ?>		<div>
						<?php
					get_sidebar('right');
					?>
					</div>

					
				<?php 
endwhile;
endif;
			?>
			</div>
		</div>

<?php get_footer() ?>

