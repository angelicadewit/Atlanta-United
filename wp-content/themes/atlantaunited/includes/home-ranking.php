<div class="ranking">
        <?php 
            $args = array(
                "post_type" => "games",
                // "category_name" => get_field('games_display_category'),
                "posts_per_page" => -1,
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); 
            
            ?>

        <?php endwhile; wp_reset_postdata(); endif; ?>
    </ul>

</div>