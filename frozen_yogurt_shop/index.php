<?php get_header() ?>

		<div id="body" class="home">
			<div class="header">

			<?php
            		if (have_posts()):
            			while (have_posts()):
            				the_post();
            ?>
						<h2>
							<?php
							the_title();
							?>
						</h2>
					<div>
						<?php
						the_content();
						?>
					</div>
				<?php 
endwhile;
endif;
			?>
			</div>
			<?php
				get_sidebar('left');
			?>
		</div>

<?php get_footer() ?>

