<?php get_header();?>
<div class="container">
<h2><?php bloginfo('name');?></h2>
<?php
while(have_posts()){
    the_post();?>
    <h2><a><?php the_title();?></a></h2>
    <?php the_content();?>
    <?php
}?>
</div>




<?php get_footer();?>