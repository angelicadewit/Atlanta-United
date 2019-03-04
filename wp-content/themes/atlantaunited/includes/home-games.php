<h2>Calendar</h2>
<div class="Calendar">
    <?php 
        $args = array(
            "post_type" => "games",
            "category_name" => get_field('games_display_category'),
            "posts_per_page" => 3,
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

        <?php
            $field = get_field_object('other_team');
            $value = $field['value'];
            $label = $field['choices'][ $value ];
        ?>
        
        <div class=".<?php get_field('game_status') ?>">
            <span class="time"><?php get_field('time') ?></span>
            <span class="location">At <?php get_field('location') ?></span>
            <img src="<?php echo get_template_directory_uri()?>/dist/images/logos/<?php echo value ?>.gif')">
            <span class="otherteam"><?php echo label ?>.</span>

        </div>
            

            
    <?php endwhile; wp_reset_postdata(); endif; ?>
