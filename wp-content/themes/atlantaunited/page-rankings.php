<div class="last-game-wrapper">
    <?php 
        $args = array(
            "post_type" => "rankings",
            // "category_name" => get_field('games_display_category'),
            "posts_per_page" => -1,
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); 
        
        ?>

        <div class="rank-wrapper">
            <p class="rank"><?php echo the_field('rank') ?>
        </div>

    <?php endwhile; wp_reset_postdata(); endif; ?>
</div>