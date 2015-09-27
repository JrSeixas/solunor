<?php  get_header(); ?>





<section id="services" class="emerald">
        <div class="container">
            <div class="row">


                    <div class="col-md-12">
                        <h3 class="media-heading">NOTÍCIAS</h3>
                          <?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


                                                        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 posts-blog"> 
                                                                <!--<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>-->
                                                                <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                                                
                                                        </div>

                                        <?php endwhile; ?>


              <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 pagination"><!--INÍCIO Pagination para os Posts-->
                                  <?php echo pagination(); ?>
              </div><!--FINAL Pagination para os Posts-->
          <?php endif; ?> 

                      </div> <!--Final Coluna Esquerda Serviços-->

                    </div>

               



                    </div>
                </div><!--/.col-md-4-->
            </div>
        </div>
    </section>
                   
    

    <?php get_footer(); ?>