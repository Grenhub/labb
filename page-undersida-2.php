<?php
get_header();
?>
<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9 col-md-push-3">
                        <?php
                        while( have_posts()){
                            the_post();
                            the_content();
                        }
                        ?>
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">
							<ul class="side-menu">
							
							<?php
							$sidemenuArrayTwo = [
								'theme_location' => 'sidemenu'
							];
							wp_nav_menu($sidemenuArrayTwo);
							?>
							</ul>
						</aside>
					</div>
				</div>
			</section>
<?php
get_footer();
?>