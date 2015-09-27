<?php /* 

Template Name: A Solunor

*/ get_header(); ?>

<section id="services" class="emerald">
        <div class="container">
            <div class="row">


                    <div class="col-md-12">

                                                <?php while ( have_posts() ) : the_post(); ?>
                                                  <div class="content">
                                                  <h3 class="media-heading">A SOLUNOR</h3>
                                                      <?php the_content(); ?>
                          
                                                  </div>

                                                  <?php endwhile; // end of the loop of WP. ?> 

                    </div>

               



                    </div>
                </div><!--/.col-md-4-->
            </div>
        </div>
    </section>


   <?php get_footer(); ?>