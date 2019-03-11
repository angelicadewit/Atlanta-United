<?php
    /* Template Name: Home Page */
?>

<?php get_header(); ?>


<div class="page-wrap">
    <?php echo get_template_part('includes/home', 'hero') ?>

    <div class="side-by-side-container">
        <?php echo get_template_part('includes/home', 'past') ?>

        <?php echo get_template_part('includes/home', 'ranking') ?>
        
        <?php echo get_template_part('includes/home', 'current') ?>
    </div>


    <?php echo get_template_part('includes/home', 'games') ?>

    <div class="side-by-side-container">

        <?php echo get_template_part('includes/home', 'news') ?>

        <?php // echo get_template_part('includes/home', 'tweets') ?>
    </div>

    <?php // echo get_template_part('includes/home', 'store') ?>

    <?php // echo get_template_part('includes/home', 'instagram') ?>


    <?php get_footer(); ?>
</div>