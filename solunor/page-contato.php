<?php /* 

Template Name: Contato

*/ get_header(); ?>

<section id="services" class="emerald">
        <div class="container">
            <div class="row">


                <div class="col-md-12 col-sm-6 col-lg-12">
                     <?php while ( have_posts() ) : the_post(); ?>
                    <div class="content-contato">
                    <h3 class="media-heading">CONTATO</h3>
                    <div class="col-md-6 col-sm-6 col-lg-6">
                    <?php the_content(); ?>
                    </div>

                    <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15556.841929257926!2d-38.447835!3d
                    -12.894183!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe7fa5cd15059166e!2sMotiva+M%C3%A1quinas!5e0!3m2!
                    1spt-BR!2sbr!4v1440566489180" width="100%" height="290" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <p>Teixeira de Freitas - BA: Rodovia BR 101, KM 879 - Ipiranga - CEP: 45.996-285</p>
                    <p>Aracaju - SE: Av. Chanceler Oswaldo Aranha, 2709 - Capucho - CEP: 49.085-100</p>
                    <p>Recife - PE: Rodovia BR 101 SUL, KM 71, S/N - Bairro - CEP: 50.780-627</p>
                    </div>

                </div>

                    <?php endwhile; // end of the loop. ?> 

                </div>

            </div><!--/.col-md-4-->



        </div>
                
</section>


   <?php get_footer(); ?>