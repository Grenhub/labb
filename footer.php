</main>
<footer id="footer">
    <div class="container">
        <div class="row top">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <?php
                dynamic_sidebar('footerleft');
                ?>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <?php
                 dynamic_sidebar('footermiddle');   
                ?>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
            <?php 
            /* Menu meta data*/
            $menuData = wp_get_nav_menu_object("Sociala medier" );
            
            ?>
                <h2>
                <?php
                echo $menuData->name;
                ?>
                </h2>
                <ul class="social">
                <?php
                $footerArray = [
                    'theme_location' => 'footermenu'
                ];
                /* Menu for social media */
                wp_nav_menu($footerArray);
                ?>
                </ul>
            </div>
        </div>
        <div class="row bottom">
            <div class="col-xs-12">
                <p>Copyright &copy; Grupp X, 2016</p>
            </div>
        </div>
    </div>
</footer>
</div>
<?php
/* Allows wordpress functions */
wp_footer();
?>
</body>
</html>