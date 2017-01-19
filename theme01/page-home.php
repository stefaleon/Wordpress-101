<?php get_header(); ?>

<div class="row">

        <div id="theme01-carousel" class="carousel slide" data-ride="carousel" data-interval="2500">


          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">


              <?php

                  $args_cat = array(
                      'include' => '7, 8, 9'
                  );

                  $categories = get_categories($args_cat);
                  $count = 0;
                  $bullets = '';
                  $bulletsactive = '';

                  foreach($categories as $category):

                      $args = array(
                          'type' => 'post',
                          'posts_per_page' => 1,
                          'category__in' => $category->term_id,
                          'category__not_in' => array(1)          /* do not display the uncategorised */
                      );
                      $lastBlogPost = new WP_Query($args);

                      if($lastBlogPost->have_posts()):
                              while($lastBlogPost->have_posts()): $lastBlogPost->the_post(); ?>

                              <div class="item <?php if($count==0): echo 'active'; endif; ?>">
                                <?php the_post_thumbnail('thumbnail') ?>
                                <div class="carousel-caption">
                                  <?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url(get_permalink())),'</a></h1>'); ?>
                                  <small<?php the_category() ?></small>
                                </div>
                              </div>



                              <?php
                                if($count==0):  $bulletsactive = 'active'; endif;

                                $bullets .= '<li data-target="#theme01-carousel" data-slide-to="'.$count.'" class="'.$bulletsactive.'"></li>'
                              ?>

                          <?php endwhile;
                      endif;

                      // prevent the new object from affecting the original WP query
                      wp_reset_postdata();

                      $count++;
                      $bulletsactive = '';
                  endforeach;
              ?>

          </div>
          <!-- Indicators -->
          <ol class="carousel-indicators">
              <?php echo $bullets; ?>
          </ol>



          <!-- Controls -->
          <a class="left carousel-control" href="#theme01-carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#theme01-carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>






</div>

<div class="row">

    <!--  The good old loop with the default query -->

    <div class="col-xs-12 col-sm-8">
        <?php
        if(have_posts()):
                while(have_posts()): the_post(); ?>

                    <?php  get_template_part('content', get_post_format()) ?>

            <?php endwhile;
        endif;

        ?>
    </div>

    <div class="col-xs-12 col-sm-4">
        <?php get_sidebar(); ?>
    </div>

</div>

<?php get_footer(); ?>
