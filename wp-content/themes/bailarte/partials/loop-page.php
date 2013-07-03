<div data-layout='blog-list' class="wideContent single-page">
  <?php if( have_posts() ) : ?>
    <?php the_post(); ?>
      <article class='blog-entry'>
        <div class='innerSection contentHolder'>
          <div class="blog-entry-heading">
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
          </div>
          <div class="search-meta">
              <?php get_search_form();?>
          </div>
          <div class="entry-preview">
            <?php the_content();?>
          </div>
        </div>
      </article>
  <?php else: ?>
    <h2>Page not found.</h2>
  <?php endif;?>
</div>
<!-- end div data-layout='blog-list' class="wideContent" -->