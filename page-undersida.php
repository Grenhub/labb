<?php
 get_header();
?>
	<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
                        <?php
                        while( have_posts()){
                            the_post();
                            the_content();
                        }
                        ?>
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<ul class="side-menu">
							<?php
							$sidemenuArrayOne = [
								'theme_location' => 'sidemenu'
							];
							wp_nav_menu($sidemenuArrayOne);
							?>
							</ul>
						</aside>
					</div>
				</div>
			</section>
<?php
 get_footer();
?>