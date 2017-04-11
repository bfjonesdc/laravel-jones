<!DOCTYPE html>

<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <meta name="description" content="Multimedia, Washington, DC">
  <meta name="author" content="Brandon Jones Web Development, Brandon F. Jones">
<title>Brandon F. Jones - Washington D.C.</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">


  <!-- Skeleton CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
 <link rel="stylesheet" href="/css/bootstrap.min.css">
 <link rel="stylesheet" href="/css/normalize.css">
 <link rel="stylesheet" href="/css/skeleton.css">
 <link rel="stylesheet" href="/css/github-prettify-theme.css">
<link rel="stylesheet" href="/css/custom.css">
<link rel="stylesheet" href="/css/animate.css">
<link rel="stylesheet" href="/css/jones.css">



<!-- Recaptcha Scripts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <script type="text/javascript">
    var captchaContainer = null;
    var loadCaptcha = function() {
      captchaContainer = grecaptcha.render('captcha_container', {
        'sitekey' : '6LfrLhATAAAAAAOktQMbV_nbgv1n09JY-3oR3LAd',
        'callback' : function(response) {
          console.log(response);
        }
      });
    };
    </script>
    
  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">


    <!-- OWL javascript gets loaded in the head -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('owlcarousel/assets/owl.carousel.js') }}"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-36482500-4', 'auto');
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->
  </head>

<body>
	@yield('content')
</body>

</html>