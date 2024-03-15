        <footer class="footer contenido-footer">
            <hr>
            <h2>desde footer</h2>
            <?php 
                    $args = array(
                        'theme_location' => 'menu-principal', //menu que se utiliza en esta
                        'container' => 'nav',
                        'container_class' => 'menu-principal',
                    );

                    wp_nav_menu($args);
                ?>
                <p>Todos los derechos reservador. Alkimia <?php echo date('Y'); ?></p>
        </footer>
        <?php wp_footer(); ?>
</body>
</html>