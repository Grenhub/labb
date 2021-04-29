<?php
get_header();
?>
		<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1>Blogg</h1>
                            <?php
							/* Loops all posts */
                            while( have_posts()){
								/* Retrieves a post and simultaneously removes it from the list */
                                the_post();
                            ?>
							<article>
								<img src="<?php  the_post_thumbnail_url(); ?>" alt="">
								<h2>
									<a href="<?php  the_permalink_rss(); ?>">
									<?php 
									/* Gets post title */
									the_title(); 
									
									?> 
									</a>
									
								</h2>
								<ul class="meta">
									<li>
									<i class="fa fa-calendar"></i><?php  the_date();  ?>
									</li>
									<li>
									<i class="fa fa-user"></i><?php  the_author();  ?>
									</li>
									<li>
									<i class="fa fa-tag"></i><?php  the_category('<a>, ');  ?>
									</li>
								</ul>
								<?php the_excerpt();  ?>
							</article>
                            <?php
                            }
                            ?>
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								<ul>
									<li>
										<form id="searchform" class="searchform">
											<div>
											<?php
											get_search_form();
											?>
											</div>
										</form>
									</li>
								</ul>
								<ul role="navigation">
									<li class="pagenav">
										<h2>Sidor</h2>
										<?php
										$sidorArray = [
											'theme_location' => 'blogsidepage'
										];
										/* Shows sidebar */
										wp_nav_menu($sidorArray);
										?>
									</li>
									<li>
										<h2>Arkiv</h2>
										<?php
										$arkivArray = [
											'theme_location' => 'blogsidearchive'
										];
										/* Shows archive menu */
										wp_nav_menu($arkivArray);
										?>
									</li>
									<li class="categories">
										<h2>Kategorier</h2>
										<?php
										$categoryArray = [
											'theme_location' => 'blogsidecategory'
										];
										/* Shows category menu */
										wp_nav_menu($categoryArray);
										?>
									</li>
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</section>
            <?php
			/* Gets footer.php */
            get_footer();
            ?>