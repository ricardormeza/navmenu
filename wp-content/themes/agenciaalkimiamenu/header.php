<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="contenedor barra-navegacion">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/alkimia-logo.webp" alt="imagen de logotipo">
            </div>
            <!-- menuhamburguesa -->
            <div class="burguer-menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="76" height="76" viewBox="0 0 24 24" stroke-width="1.5" stroke="#425cc7" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M4 6l16 0" />
                    <path d="M4 12l16 0" />
                    <path d="M4 18l16 0" />
                </svg>
            </div>
            <!-- navegacion principal -->
            <div class="contenedor-menu">
                <?php 
                    $args = array(
                        'theme_location' => 'menu-principal', //menu que se utiliza en esta
                        'container' => 'nav',
                        'container_class' => 'menu-principal',
                    );

                    wp_nav_menu($args);
                ?>
            </div>
            <!-- <nav>
            </nav> -->
        </div>
    </header>