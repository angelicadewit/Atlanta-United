<div class="last-game-wrapper">
    <?php 
        $args = array(
            "post_type" => "games",
            // "category_name" => get_field('games_display_category'),
            "posts_per_page" => 1,
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); 
        
            $exploded = explode(' ', get_field('date_and_time'));
            // print_r($exploded);
            $date = $exploded[0] . ' ' . $exploded[1];
            $time = $exploded[3] . ' ' . $exploded[4];
        ?>

        <?php if( get_field('kind_of_game') == 'past' ): ?>
        <div class="header">
        <h3>Last Game</h3>
            <div class="date-wrapper">
                <p class="date"><?php echo $date ?>
                <span class="time"><?php echo $time ?></span></p>
            </div>
        </div>
        <div class="score-wrapper">

            <div class="opponent-div">
                <div class="mid-wrapper">
                    <div class="img-wrapper">
                        <img src="<?php echo get_template_directory_uri() ?>/dist/images/logos/<?php echo get_field('other_team')['value'] ?>.gif')">
                    </div>
                    <span class="score"><?php echo get_field('opponent_score') ?>-</span>
                </div>
                <span class="other-team"><?php echo get_field('other_team')['label'] ?></span>
            </div>
            <div class="atl-div">
                <div class="mid-wrapper">
                    <span class="score"><?php echo get_field('atl_score') ?></span>
                    <div class="img-wrapper">
                        <img src="<?php echo get_template_directory_uri() ?>/dist/images/logos/atlantaunited.gif">
                    </div>
                </div>
                <span class="atl-team">Atlanta United</span>
            </div>
            </div>
            <div class="bottom-info">
                <span class="location"><?php echo get_field('location') ?></span>
                <button class="game-btn">Matchcenter</button>
            </div>
        <?php endif; ?>
    <?php endwhile; wp_reset_postdata(); endif; ?>
</div>