<?php /* 

Template Name: Suporte

*/ get_header(); ?>

<section id="services" class="emerald">
        <div class="container">
            <div class="row">


                    <div class="col-md-12">


                                                <?php while ( have_posts() ) : the_post(); ?>
                                                  <div class="content">
                                                  <h3 class="media-heading">SUPORTE</h3>
                                                      <?php the_content(); ?>
                          
                                                  </div>

                                                  <?php endwhile; // end of the loop. ?> 

                    </div>

               



                    </div>
                </div><!--/.col-md-4-->
            </div>
        </div>
    </section>


   <?php get_footer(); ?>