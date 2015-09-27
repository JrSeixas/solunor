<?php  get_header(); ?>





<section id="services" class="emerald">
        <div class="container">
            <div class="row">


                    <div class="col-md-12 seminovos content">
                      <h3 class="media-heading">SEMINOVOS</h3>
                          <?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                                            <div class="col-md-3 col-sm-6 col-xs-12 col-lg-3"> 
                                                <a href="<?php the_permalink(); ?>"><h3 class="titulo-seminovos"><?php the_title(); ?></h3></a>
                                                <div class="thumb-seminovos pull-left"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
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