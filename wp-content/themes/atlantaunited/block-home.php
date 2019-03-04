<?php
use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make( 'Flight' )
    ->add_fields( [
         Field::make( 'map', 'from' ),
         Field::make( 'date_time', 'departure_timestamp' ),
         Field::make( 'map', 'destination' ),
         Field::make( 'date_time', 'arrival_timestamp' ),
     ] )
     ->set_render_callback( function( $flight ) {
         ?>
            <p>
                Flight departs
                from <?php echo esc_html( $flight['from']['address'] ) ?> at
                <?php echo $flight['departure_timestamp'] ?>
                and arrives
                to <?php echo esc_html( $flight['destination']['address'] ) ?> at
                <?php echo $flight['arrival_timestamp'] ?>
            </p>
         <?php
     });