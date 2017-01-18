<?php get_header(); ?>

<div class="row">

        <?php
            $args = array(
                'type' => 'post',
                'posts_per_page' => 3,
            );
            $lastBlogPost = new WP_Query($args);

            if($lastBlogPost->have_posts()):
                    while($lastBlogPost->have_posts()): $lastBlogPost->the_post(); ?>

                        <div class="col-xs-12 col-sm-4">
                            <?php  get_template_part('content','featured') ?>
                        </div>

                <?php endwhile;
            endif;

            // prevent the new object from affecting the original WP query
            wp_reset_postdata();
        ?>
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

        // Present another two posts, the second and third oldest from the category named "tutorials"
        // (skipping the first with the offset set to 1)
        $args = array(
            'type' => 'post',
            'posts_per_page' => 2,
            'offset' => 1,
            'category_name' => 'tutorials'
        );
        $lastBlogPost = new WP_Query($args);

        // the following line produces the same result but it is harder to read
        // $lastBlogPost = new WP_Query('type=post&posts_per_page=2&offset=1&category_name=tutorials');

        if($lastBlogPost->have_posts()):
                while($lastBlogPost->have_posts()): $lastBlogPost->the_post(); ?>

                    <?php  get_template_part('content', get_post_format()) ?>

            <?php endwhile;
        endif;

        // prevent the new object from affecting the original WP query
        wp_reset_postdata();

        ?>
    </div>

    <div class="col-xs-12 col-sm-4">
        <?php get_sidebar(); ?>
    </div>

</div>

<?php get_footer(); ?>
