<?php
/*
Template Name: Full Width
*/

//LOADING header.php + actions
get_header(); 
?>
<div id="middleWrapper" class="<?php echo apply_filters( 'middle_wrapper_section_class', ''); ?>" data-role="content">
    <div id="middleContainer" class="<?php echo apply_filters('middle_container_row_class', wlfw_grid_row_class(16)); ?>">
        <div id="contentColWide" class="<?php echo apply_filters('wlfw_content_col_class', wlfw_grid_col_class(16)); ?> content-primary">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    		<?php 
    			if($wp_query->found_posts > 1){ get_template_part( 'loop', get_post_type() ); } 
    			else { get_template_part( 'content', get_post_format() ); }
    		?>
    	<?php endwhile; ?>
        <?php comments_template( '', true ); ?>
        </div><!-- ./contentColWide -->
        <div class="clear"></div>
    </div><!-- #middleContainer -->
</div><!-- #middleWrapper -->
<?php get_footer(); ?>