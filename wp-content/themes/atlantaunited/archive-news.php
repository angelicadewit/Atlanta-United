<?php get_header(); ?>
<main id="content">
    <header class="header">
        <h1 class="entry-title"><?php single_term_title(); ?></h1>
        <div class="archive-meta"><?php if ( '' != the_archive_description() ) { echo esc_html( the_archive_description() ); } ?></div>
    </header>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <a href="<?php the_permalink();?>">
            <?php the_title();?>
        </a>

    <?php endwhile; endif; ?>
</main>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>