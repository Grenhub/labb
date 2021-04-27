<?php
 get_header();
?>
		<section>
				<div class="container">
					<div class="row">						
                            <?php
                            /* Loops all posts */
                            while( have_posts()){
                                /* Retrieves a post and simultaneously removes it from the list */
                                the_post();
                                /* Shows the content */
                                the_content();
                            }
                            ?>			
				</div>
			</section>			
<?php
/* Gets footer.php */
 get_footer();
?>