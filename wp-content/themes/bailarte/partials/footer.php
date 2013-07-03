
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