<?php 
 get_header();
?>

<div id="main" style=" padding: 1%;">
    
    <div style=" margin-top: -20px; float: right; width: 30%;">
<h2 style=" font-family: fantasy; font-size: 17pt; text-align: center;">Webisodes</h2>
    <?php query_posts('category_name=webisodes&posts_per_page=6');
        if(have_posts()): while(have_posts()) : the_post();
    ?>    
<div style=" padding-bottom: 15px; ">
    
    <div style=" height: 75px;">
    
       <div style=" float: left; margin-right: 5px;"><?php the_post_thumbnail(array(75,75)); ?></div>
       <div id="thetitle"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </div>
    <p style=" margin-top: 5px;"> By: <?php the_author(); ?> </p>
    </div>
</div><br>
 <?php endwhile; wp_reset_query(); else: ?>
        <p><?php _e('Sorry, We have not posted any content at this time. Check back soon!'); ?></p>
          <?php endif; ?>
</div>

    <?php if(have_posts()) : the_post(); ?>
    <div id="content" style="width: 65%; padding-left: 3px; 
         border: groove 1px; background-color: white;">
        <h2><u> <?php the_title(); ?></u></h2>
        <a> By: <?php the_author(); ?> , </a><a><?php the_date();?></a>
         <div><?php  the_content(); ?></div>
    </div>
    <?php endif; ?>
</div>

<div id="delimiter">
    
</div> 
<?php get_footer(); ?>
