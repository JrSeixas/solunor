<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="seguros, seguradora, corretora, seguro auto">
    <meta name="author" content="">

    <title>SOLUNOR Máquinas</title>


     <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo(template_url); ?>/css/bootstrap.css" rel="stylesheet">
    
     <!-- CSS Landing Page -->
    <link href="<?php bloginfo(template_url); ?>/style.css" rel="stylesheet">

     <!-- JavaScript -->
    <link href="<?php bloginfo(template_url); ?>/js/jquery-1.10.2.js" rel="">
    <link href="<?php bloginfo(template_url); ?>/js/bootstrap.js" rel="">
    <link href="<?php bloginfo(template_url); ?>/js/bootstrap.min.js" rel="">
    <link href="<?php bloginfo(template_url); ?>/fonts/glyphicons-halflings-regular.ttf" rel="">   
     

<?php wp_head(); ?>
</head>

<body>

  
    <header class="navbar navbar-default navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://localhost/solunor"><img src="<?php bloginfo(template_url); ?>/img/solunor-logo.png" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://localhost/solunor/a-solunor/">A Solunor</a></li>
                    <li><a href="http://www.sdlgla.com/pt-br/produtos" target="Blank">Produtos</a></li>
                    <li><a href="http://localhost/solunor/suporte">Suporte</a></li>
                    <li><a href="http://localhost/solunor/category/noticias">Notícias</a></li>
                    <li><a href="http://www.motiva-net.com.br/novo/produtos.php?tipo=0&local=0" target="Blank">Seminovos</a></li>
                    <li><a href="http://localhost/solunor/contato">Contato</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->

      
        <div class="container-fluid"> 
                <div class="row carousel-holder">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                           
                            <div class="carousel-inner">                    
                                                                <?php
                                                                   $the_query = new WP_Query(array(
                                                                    'category_name' => 'slider-home',
                                                                    'posts_per_page' => 1
                                                                    ));
                                                                   while ( $the_query->have_posts() ) :
                                                                   $the_query->the_post();
                                                                  ?>
 
 
 
 
                               
                                <div class="item active">
                                    
                                    <?php the_post_thumbnail('small'); ?>
                                   
                                </div>
 
                                                                <?php
                                                                   endwhile;
                                                                   wp_reset_postdata();
                                                                  ?>                                
                               
 
 
                                                                <?php
                                                                 $the_query = new WP_Query(array(
                                                                  'category_name' => 'slider-home',
                                                                  'posts_per_page' => 0,
                                                                  'offset' => 1
                                                                  ));
                                                                 while ( $the_query->have_posts() ) :
                                                                 $the_query->the_post();
                                                                ?>
                                <div class="item">
                                    
                                    <?php the_post_thumbnail('small'); ?>
 
                                </div>
 
                                                                <?php
                                                                 endwhile;
                                                                 wp_reset_postdata();
                                                                ?>                            
 
                               
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
 
                           
 
                        </div>
                    </div>
                   
                </div>
                   
        </div>
<!--/#main-slider-->

