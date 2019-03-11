<div class="news-wrapper">
    <ul class="news-articles">
        <?php 
        

            $args = array(
                "post_type" => "news",
                // "category_name" => get_field('games_display_category'),
                "posts_per_page" => 9,
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); 
            

                $exploded = explode(' ', get_field('date_and_time'));
                // print_r($exploded);
                $date = $exploded[0] . ' ' . $exploded[1];
                $time = $exploded[3] . ' ' . $exploded[4];
            ?>

            <li class="article">
                <div class="date-wrapper">
                    <p class="date"><?php echo $date ?></p>
                </div>
                <span class="time"><?php echo $time ?></span>
                <span class="otherteam"><?php echo get_field('other_team')['label'] ?></span>
                <div class="img-container">
                    <img src="<?php echo get_template_directory_uri()?>/dist/images/logos/<?php echo get_field('other_team')['value'] ?>.gif')">
                </div>
                <span class="location"><?php echo get_field('location') ?></span>
                <button class="game-btn">Tickets</button>
            </li>

        <?php endwhile; wp_reset_postdata(); endif; ?>
    </ul>

</div>