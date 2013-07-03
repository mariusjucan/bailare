<ul>
	<?php 
		$announcements = get_posts(  array( 'posts_per_page' => 6, 'post_type'=>'announcement' ) ); 
	?>
	<?php foreach( $announcements as $post ) : setup_postdata($post); ?>
		<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
	<?php endforeach;?>
</ul>