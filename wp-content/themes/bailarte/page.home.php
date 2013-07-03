<?php
/*
Template Name: Homepage
*/
?>
<?php get_template_part("partials/header");?>

	<div id="content">
      
	<?php query_posts( array (
		'meta_query' => array(
			array(
			'key' => '_in_slideshow',
			'value' => 'on'
			)
		),
		'posts_per_page' => 6,
		'post_type' => 'any'
	) ); ?>


      <section id="sliderSection">
        <div id="slider">
          <ul id='slidesList'>
          	<?php get_template_part("partials/loop",'slideshow');?>
            <!-- 
            <li class="slide">
              <a href="#">
              <img src="http://hdwallsize.com/wp-content/uploads/2013/03/Landscape-Nature-for-Wallpaper-Dekstop-.jpg" alt="another image"/>
              <div class='slide-meta'>
                  <h2>Inca un Blog Post Title</h2>
              </div>
              </a>
            </li>
            <li class="slide">
              <a href="#">
                <img src="https://lh5.googleusercontent.com/-ueCIAfXiY5M/UMBgRDBUaOI/AAAAAAAAAK8/gsKexGIT3wk/s0-d/perfect_landscape_915.jpg" alt="yet another one">
                <div class='slide-meta'>
                    <h2>Ceva titlu mai lung. Ar fi bine sa nu fie prea lungi.</h2>
                </div>
              </a>
            </li> -->
          </ul>
        </div>
        <!-- #slider -->
        <div class="rightSection">
          <?php get_search_form();?>
          <section class='widget anunturi'>
            <h2 class='sectionTitle'><i class="icon-megaphone"></i>Anunturi si Evenimente</h2>
            <?php get_template_part("partials/loop",'announcements');?>
          </section>
        </div>
      </section>
      <!-- sliderSection -->
      <section id="featuredSections">
      	<?php 
      		$latest_blog_posts = get_posts(  array( 'posts_per_page' => 3 ) ); 
  		?>

      	<?php foreach( $latest_blog_posts as $post ) : setup_postdata($post); ?>
			<article class="blog-entry">
	          <div class='innerSection contentHolder'>
	            <h2 class='sectionTitle'><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
	            <!-- <div class="imageHolderLandscape">
	              <img src="<?php echo $uploads['url']; ?>/salsaLandscape2.jpg" alt="">
	            </div> -->
	            <p>
	              <?php the_excerpt();?>
	            </p>
	            <div class="meta">
	              <a href="<?php the_permalink();?>"><i class="icon-right-open"></i> citeste mai departe</a>
	            </div>
	          </div>
	          
	        </article>
  		<?php endforeach;?>

      </section>
      <!-- section featuredSections -->

      <div id='mainLayout' class='twoCol'>
        <section class="contentCol">
          <div class="widget">
            <h2 class='sectionTitle'><i class="icon-calendar-empty"></i>Orarul cursurilor de dans</h2>
            <div id="magicTable">
              <div class="table">
                <div data-day='guide'>
                  <div class="dance-class" data-time-start='17:00' data-length='1'>17:00</div>
                  <div class="dance-class" data-time-start='17:30' data-length='1'>17:30</div>
                  <div class="dance-class" data-time-start='18:00' data-length='1'>18:00</div>
                  <div class="dance-class" data-time-start='18:30' data-length='1'>18:30</div>
                  <div class="dance-class" data-time-start='19:00' data-length='1'>19:00</div>
                  <div class="dance-class" data-time-start='19:30' data-length='1'>19:30</div>
                  <div class="dance-class" data-time-start='20:00' data-length='1'>20:00</div>
                  <div class="dance-class" data-time-start='20:30' data-length='1'>20:30</div>
                  <div class="dance-class" data-time-start='21:00' data-length='1'>21:00</div>
                  <div class="dance-class" data-time-start='21:30' data-length='1'>21:30</div>
                  <div class="dance-class" data-time-start='22:00' data-length='1'>22:00</div>
                  <div class="dance-class" data-time-start='22:30' data-length='1'>22:30</div>
                  <div class="dance-class" data-time-start='23:00' data-length='1'>23:00</div>
                </div>
                <div data-day='luni'>
                  <div class="dance-class" data-time-start='18:00' data-length='1.5'><div class='classTable'><div class='class-info'><span>Salsa - Intermediari-1</span></div></div></div>
                  <div class="dance-class" data-time-start='19:30' data-length='1.5'><div class='classTable'><div class='class-info'><span>Salsa - Intermediari-2</span></div></div></div>
                  <div class="dance-class" data-time-start='21:00' data-length='1.5'><div class='classTable'><div class='class-info'><span>Salsa - Avansati</span></div></div></div>
                </div>
                <div data-day='marti'>
                  <div class="dance-class" data-time-start='18:00' data-length='1.5'><div class='classTable'><div class='class-info'><span>Salsa - Incepatori</span></div></div></div>
                  <div class="dance-class" data-time-start='19:30' data-length='1.5'><div class='classTable'><div class='class-info'><span>Salsa - Intermediari-3</span></div></div></div>
                  <div class="dance-class" data-time-start='21:00' data-length='1.5'><div class='classTable'><div class='class-info'><span>Salsa - Avansati</span></div></div></div>
                </div>
                <div data-day='miercuri'>
                  <div class="dance-class" data-time-start='18:00' data-length='1.5'><div class='classTable'><div class='class-info'><span>Salsa - Intermediari-1</span></div></div></div>
                  <div class="dance-class" data-time-start='19:30' data-length='1.5'><div class='classTable'><div class='class-info'><span>Salsa - Intermediari-2</span></div></div></div>
                  <div class="dance-class" data-time-start='21:00' data-length='1.5'><div class='classTable'><div class='class-info'><span>Salsa - Avansati</span></div></div></div>
                </div>
                <div data-day='joi'>
                  <div class="dance-class" data-time-start='18:00' data-length='1.5'><div class='classTable'><div class='class-info'><span>Salsa - Incepatori</span></div></div></div>
                  <div class="dance-class" data-time-start='19:30' data-length='1.5'><div class='classTable'><div class='class-info'><span>Salsa - Intermediari-3</span></div></div></div>
                  <div class="dance-class" data-time-start='21:00' data-length='1.5'><div class='classTable'><div class='class-info'><span>Salsa - Avansati</span></div></div></div>
                </div>
                <div data-day='vineri'>
                  <div class="dance-class" data-empty='true'></div>
                </div>
                <div data-day='sambata'>
                  <div class="dance-class" data-empty='true'></div>
                </div>
                <div data-day='duminica'>
                  <div class="dance-class" data-time-start='18:00' data-length='1'><div class='classTable'><div class='class-info'><span>Kizomba - Incepatori</span></div></div></div>
                  <div class="dance-class" data-time-start='19:00' data-length='1'><div class='classTable'><div class='class-info'><span>Kizomba - Incepatori</span></div></div></div>
                  <div class="dance-class" data-time-start='20:00' data-length='1'><div class='classTable'><div class='class-info'><span>Kizomba - Incepatori</span></div></div></div>
                  <div class="dance-class" data-time-start='21:00' data-length='1'><div class='classTable'><div class='class-info'><span>Kizomba - Intermediari</span></div></div></div>
                </div>
              </div>
            </div>
          </div>
            <!-- widget orar -->
        </section>  
        <div class="sidebarCol">
          
        </div>
      </div>

	</div>

<?php get_template_part("partials/footer");?>
