<?php 
/* Template Name: RChoo */
get_header();   
?>


<div id="content" class="widecolumn">

    <?php if (have_posts()) : while (have_posts()) : the_post();?>

    <h2 id="post-<?php the_ID(); ?>"><?php the_title();?></h2>

    <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
    <?php endwhile; endif; ?>
</div>


<?php get_footer(); ?>