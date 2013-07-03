<!doctype html>
<html>
<head>

<title><?php bloginfo("title")?></title>

<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,400italic,600italic' rel='stylesheet' type='text/css'>
<link href="<?php echo get_template_directory_uri();?>/stylesheets/styles.css" media="screen, projection" rel="stylesheet" type="text/css" />
<!-- <link href="<?php echo get_template_directory_uri();?>/stylesheets/responsiveslides.css" media="screen, projection" rel="stylesheet" type="text/css" /> -->

</head>
<body>

  <div id="viewport">
    <header id="header" role="header">
      <h1>Bailarte</h1>  
    </header>
    <nav id="navigation" role="navigation">
      <?php wp_nav_menu( $args ); ?> 
    </nav>
    <div id="content">
      <section id="sliderSection">
        <div id="slider">
          <ul id='slidesList'>
            <li class='slide'>
              <a href="#">
                <img src="http://hdwallsize.com/wp-content/uploads/2013/03/Beautiful-Beach-Landscape-Wallpaper-HD.png" alt='image'/>
                <div class='slide-meta'>
                  <h2>Page/Blog Post Title</h2>
                </div>
              </a>
            </li>
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
            </li>
          </ul>
        </div>
        <!-- #slider -->
        <div class="rightSection">
          <?php get_search_form();?>
          <section class='widget anunturi'>
            <h2 class='sectionTitle'><i class="icon-megaphone"></i>Anunturi si Evenimente</h2>
            <ul>
              <li><a href="#">Curs nou incepatori din 16 Septembrie 2013</a></li>
              <li><a href="#">Grupa de kizomba de la 18:00</a></li>
              <li><a href="#">Cabana la Remeti si inca ceva text ca sa mearga pe doua linii</a></li>
              <li><a href="#">Inca Ceva</a></li>
              <li><a href="#">Si inca ceva ceva</a></li>
            </ul>
          </section>
        </div>
      </section>
      <!-- sliderSection -->
      <section id="featuredSections">
        <?php $uploads = wp_upload_dir();?>
        <?php for( $i = 0 ; $i < 3; $i++ ) :?>
        <article class="blog-entry">
          <div class='innerSection contentHolder'>
            <h2 class='sectionTitle'><a href="#">Articol De Pe Blog Pe Mai Multe Liniii Titlu</a></h2>
            <!-- <div class="imageHolderLandscape">
              <img src="<?php echo $uploads['url']; ?>/salsaLandscape2.jpg" alt="">
            </div> -->
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget tristique enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec sed massa vitae neque blandit posuere. 
            </p>
            <div class="meta">
              <a href="#"><i class="icon-right-open"></i> citeste mai departe</a>
            </div>
          </div>
          
        </article>
        <?php endfor;?>

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
    <footer id="footer" role="footer">
      <p>Copyright material</p>
    </footer>
  </div>


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/js/responsiveslides.min.js"></script>
  <script>
    (function($){ 
    'use strict';  

      $(function () {
        var sliderNode = $("#slider");
        //http://responsiveslides.com/
        $("#slidesList").responsiveSlides({
          timeout : 30000,
          nav : true,
          nextText : '<i class="icon-right-open"></i>',
          prevText : '<i class="icon-left-open"></i>'
        });

      });

    }(jQuery));
  </script>
</body>
</html>