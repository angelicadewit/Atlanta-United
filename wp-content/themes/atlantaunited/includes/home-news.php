<div class="news-wrapper">
    <ul class="news-articles">
        <?php 
        

            $args = array(
                "post_type" => "news",
                // "category_name" => get_field('games_display_category'),
                "posts_per_page" => -1,
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); 
            
        ?>


            <li class="article <?php the_field('classname') ?>">
                <div class="img-wrapper">
                    <img src="<?php the_field('image') ?>">
                </div>
                <div class="headline">
                    <span><?php the_field('headline') ?></span>
                </div>

            </li>

        <?php endwhile; wp_reset_postdata(); endif; ?>
    </ul>

</div>