<?php get_header(); ?>


<section id="services" class="emerald">
        <div class="container">
            <div class="row">


                    <div class="col-md-12">

                                                <?php while ( have_posts() ) : the_post(); ?>
                                                  <div class="content">
                                                 <a href="<?php the_permalink(); ?>"> <h3 class="media-heading"><?php the_title(); ?></h3></a>
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