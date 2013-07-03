<?php get_template_part("partials/header");?>

    <div id="content">
      
      <?php get_template_part("partials/loop",'index');?>

      <div class="slimContent">
        <section class='widget'>
          <?php get_search_form();?>
        </section>
        <?php get_template_part("partials/anunturi");?>
      </div>

  </div>

<?php get_template_part("partials/footer");?>
