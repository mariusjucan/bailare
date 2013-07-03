<?php
/*
Template Name: Blog Index
*/
?>
<?php get_template_part("partials/header");?>

    <div id="content">

      <?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>

      <?php get_template_part("partials/loop",'index');?>

      <div class="slimContent">
        <section class='widget'>
          <?php get_search_form();?>
        </section>
        <?php get_template_part("partials/anunturi");?>
      </div>

  </div>

<?php get_template_part("partials/footer");?>
