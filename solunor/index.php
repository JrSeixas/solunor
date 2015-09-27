<?php get_header(); ?>

<section id="services" class="emerald">
        <div class="container">
            <div class="row">


                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        
                        <div class="media-body">

							<a href="http://localhost/solunor/noticias"><h3 class="media-heading">NOTÍCIAS</h3></a>
                            <?php $the_query = new WP_Query(array('category_name' => 'noticias','posts_per_page' => 5));
                             	while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
                            <div class="pull-left img-noticias">
                            <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail(); ?>
                            </a>
                             </div>
                            <a href="<?php the_permalink(); ?>"><h3 class="media-heading-noticias"><?php the_title(); ?></h3></a>
							<?php endwhile;  wp_reset_postdata();?>  



                        </div>
                    </div>
                </div><!--/.col-md-4-->




                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        
                        <div class="media-body">
                        	
                        	<?php $the_query = new WP_Query(array('category_name' => 'maquina-destaque','posts_per_page' => 1));
                             	while ( $the_query->have_posts() ) :$the_query->the_post(); ?>

                            <a href="<?php the_permalink(); ?>"><h3 class="media-heading"><?php the_title(); ?></h3></a>
                            <p><?php the_excerpt_rereloaded(); ?></p>                        			
                        			<a href="<?php the_permalink(); ?>"><div class="img-post">
                        			<?php the_post_thumbnail('small'); ?>
                        			</div>
                        			</a>

							<?php endwhile;  wp_reset_postdata();?>  




                            </div>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6">
                    <div class="media">
                       
                        <div class="media-body">


                        	<?php $the_query = new WP_Query(array('category_name' => 'destaque-direita','posts_per_page' => 1));
                             	while ( $the_query->have_posts() ) :$the_query->the_post(); ?>

                            <a href="<?php the_permalink(); ?>"><h3 class="media-heading"><?php the_title(); ?></h3></a>
                            <p><?php the_excerpt_rereloaded(); ?></p>                        			
                        			<a href="<?php the_permalink(); ?>"><div class="img-post">
                        			<?php the_post_thumbnail('small'); ?>
                        			</div>
                        			</a>

							<?php endwhile;  wp_reset_postdata();?>  

                        </div>



                    </div>
                </div><!--/.col-md-4-->
            </div>
        </div>
    </section>


   <?php get_footer(); ?>