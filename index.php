<?php
 get_header();
?>
	<section>
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
							<div class="hero">
                            <?php
							/* Loops all the posts */
                            while( have_posts()){
								/* Retrieves a post and simultaneously removes it from the list */
                                the_post();  
							?>
							<img src="
							<?php  
							/* gets img-url */
							the_post_thumbnail_url(); 
							?>" />
								<div class="text">
									<h1>
										<?php 
										/* Shows title */
										the_title(); 
										?>
										</h1>
							<?php 
								/* Shows text */
								the_excerpt(); 
								?>
							</div>

						<?php 
                            }
                            ?>
						</div>
					</div>
				</div>
			</div>
	</section>
<?php
/* gets footer.php */
 get_footer();
?>