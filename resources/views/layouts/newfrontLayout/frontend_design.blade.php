<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Photodesignexpertbd</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:100,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/newfrontend_css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newfrontend_css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/newfrontend_css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newfrontend_css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newfrontend_css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/newfrontend_css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css/newfrontend_css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/newfrontend_css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newfrontend_css/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" href="{{ asset('css/newfrontend_css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newfrontend_css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newfrontend_css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newfrontend_css/asif.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newfrontend_css/imgslider.css') }}">
    <link rel="stylesheet" href="https://cdn.knightlab.com/libs/juxtapose/latest/css/juxtapose.css">
  </head>
  <body>


    @include('layouts.newfrontLayout.frontend_header')
    
    @yield('content')     
    @include('layouts.newfrontLayout.frontend_footer')  

  <!-- loader -->
  


  <script src="{{ asset('js/newfrontend_js/js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/newfrontend_js/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('js/newfrontend_js/js/popper.min.js') }}"></script>
  <script src="{{ asset('js/newfrontend_js/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/newfrontend_js/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('js/newfrontend_js/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('js/newfrontend_js/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('js/newfrontend_js/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/newfrontend_js/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('js/newfrontend_js/js/aos.js') }}"></script>
  <script src="{{ asset('js/newfrontend_js/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('js/newfrontend_js/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('js/newfrontend_js/js/jquery.timepicker.min.js') }}"></script>
  <script src="{{ asset('js/newfrontend_js/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('js/newfrontend_js/js/google-map.js') }}"></script>
  <script src="{{ asset('js/newfrontend_js/js/main.js') }}"></script>
  <script src="https://cdn.knightlab.com/libs/juxtapose/latest/js/juxtapose.min.js"></script>
  <script src="{{ asset('js/newfrontend_js/js/asif.js') }}"></script>
  <script type="text/javascript">

    $('.slider').slider();
  
  </script>
  <script>
    $(document).ready(function() {
            console.log("js added");
            $(".services").click(function(e) {
              e.preventDefault();
                var name = $(this)
                    .find(".text h3")
                    .text();
                   
                name = name.split(" ");
                name = name[0]+'_'+name[1];
                console.log(name);
               
                
                $('.jx-left img').attr('src', 'img/category_images/' +name+'/0.jpg');
                $('.jx-right img').attr('src', 'img/category_images/' +name+'/1.jpg');
            }); 
        });
  </script>
  <script>
        $(document).ready(function() {
   
              var showChar = 10;  // How many characters are shown by default
              var ellipsestext = "...";
              var moretext = "Read more";
             
              

              $('.more').each(function() {
                  var content = $(this).html();

                  if(content.length > showChar) {

                      var c = content.substr(0, showChar);
                      var h = content.substr(showChar, content.length - showChar);

                      var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

                      $(this).html(html);
                  }

              });

            });
  </script>
    
  </body>
</html>