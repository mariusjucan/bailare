<div data-layout='blog-list' class="wideContent">
  <?php if( have_posts() ) : ?>
    <?php while( have_posts() ) : the_post(); ?>
      <article class='blog-entry'>
        <div class='innerSection contentHolder'>
          <h2 class='sectionTitle'><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
          <div class="meta">
            <span class='author'>
              <?php the_author();?>
            </span>
            <span class='date'>
              <i class='icon-calendar-empty'></i><?php the_date();?>
            </span>
            <?php $tags = get_the_tag_list("",", ","");?>
            <?php if($tags!='') : ?>
              <span class='tags'>
                <i class="icon-tags"></i><?php echo $tags; ?>
              </span>
            <?php endif;?>
          </div>
          <div class="entry-preview">
            <?php the_excerpt();?>
          </div>
          <a class='read-more' href="<?php the_permalink();?>"><i class="icon-right-open"></i> citeste mai departe</a>
        </div>
      </article>
    <?php endwhile;?>
    <div class="innerSection">
      <?php wp_pagenavi(); ?>
    </div>
  <?php else: ?>
    <h2>No posts</h2>
  <?php endif;?>
</div>
<!-- end div data-layout='blog-list' class="wideContent" -->