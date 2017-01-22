<?php get_header(); ?>

<div class="row">

    <div class="col-xs-12 col-sm-8">
        <?php

                while(have_posts()): the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <header class="entry-header">
                        <?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url(get_permalink())),'</a></h1>'); ?>
                        <h4 ><?php the_category(' '); ?></h4>
                        <p> <?php the_tags(); ?></p>
                        <p><sall>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></small></p>
                        <p> <?php edit_post_link(); ?></p>
                    </header>

                    <div class="row">
                            <div class="col-xs-12">
                                <div class="thumbnail"><?php the_post_thumbnail('large') ?></div>
                            </div>
                            <div class="col-xs-12">
                                <p><?php the_content(); ?></p>
                            </div>
                            <div>
                                <?php if (comments_open()) {
                                    comments_template();
                                } else {
                                    echo '<h5 class="text-center">Comments are closed for this post.</h5>';
                                }
                                 ?>
                            </div>
                    </div>

                </article>
            <?php endwhile;

        ?>
    </div>

    <div class="col-xs-12 col-sm-4">
        <?php get_sidebar(); ?>
    </div>

</div>

<?php get_footer(); ?>
