<?php
 get_header();
?>
		<section>
				<div class="container">
					<div class="row">						
                            <?php
                            /* Loops all the posts */
                            while( have_posts()){
                            /* Retrieves a post and simultaneously removes it from the list */
                                the_post();
                            ?>	
                        <div class="col-xs-12 col-sm-8 col-md-6">
							<h1>
                            <?php
                            the_title();
                            ?>
                            </h1>
                            <?php
                            the_excerpt();
                            ?>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-6">
							<img src="
                            <?php
                            the_post_thumbnail_url();
                            ?>
                            " />
						</div>	
                        <?php
                        }
                        ?>
				</div>
			</section>			
<?php
/* Gets footer.php */
 get_footer();
?>