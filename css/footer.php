<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 copyright">
                Copyright <a href="http://acvateca">Acvateca</a> © 2015 <br> Всі права захищені!
            </div>
            <div class="col-xs-12 col-sm-6 navbar-footer">
                <?php wp_nav_menu( array(
                    'theme_location'=>'footer_menu',
                    'container' => 'false',
                    ));
                ?>
            </div>
            <div class="col-xs-12 col-sm-2 counts">
                <ul>
                    <li><img src="#" alt="count 88x31px"></li>
                    <li><img src="#" alt="count 88x31px"></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php wp_footer();?>
</body>
</html>