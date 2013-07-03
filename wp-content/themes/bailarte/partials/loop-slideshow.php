<?php if( have_posts() ) : ?>
	<?php while( have_posts() ) : the_post(); ?>
		<?php $featured_image = get_the_post_thumbnail($post->ID,'wide');?>
		<li class='slide'>
		  <a href="<?php the_permalink();?>">
		    <?php echo $featured_image;?>
		    <div class='slide-meta'>
		      <h2><?php the_title();?></h2>
		    </div>
		  </a>
		</li>
	<?php endwhile;?>
<?php else :?>
<h2>No Slideshow posts</h2>	
<?php endif;?>