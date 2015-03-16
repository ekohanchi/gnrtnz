<?php
// Creation Date: May 21, 2011 5:20:09 PM
?>
<html>
<head>
<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" type="text/css" href="css/main.css" />
<link rel="stylesheet" href="nivo-slider/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo-slider/style.css" type="text/css" media="screen" />
<title>gnrtn Z coaching </title>
</head>
<body>
<?php
include("header.php");
?>

<div class="innertopborder">
<!-- Carousel -->
<div class="carousel">

    <div id="wrapper">

       <!--  <a href="http://dev7studios.com" id="dev7link" title="Go to dev7studios">dev7studios</a> -->

        <div id="slider-wrapper">

            <div id="slider" class="nivoSlider">
            	<a href="studentreg.php"><img src="nivo-slider/images/1basketballcoach.png" alt=""/></a>
            	<a href="studentreg.php"><img src="nivo-slider/images/2photocoach.png" alt=""/></a>
            	<a href="studentreg.php"><img src="nivo-slider/images/3guitarcoach.png" alt=""/></a>
            	<a href="studentreg.php"><img src="nivo-slider/images/4cookingcoach.png" alt=""/></a>
            	<a href="studentreg.php"><img src="nivo-slider/images/5surfcoach.png" alt=""/></a>
            	<a href="studentreg.php"><img src="nivo-slider/images/6pianocoach.png" alt=""/></a>            	
            <!--
                <img src="nivo-slider/images/toystory.jpg" alt="" />
                <a href="http://dev7studios.com"><img src="nivo-slider/images/up.jpg" alt="" title="This is an example of a caption" /></a>
                <img src="nivo-slider/images/walle.jpg" alt="" />
                <img src="nivo-slider/images/nemo.jpg" alt="" title="#htmlcaption" />
            -->
            </div>
                        
            <div id="htmlcaption" class="nivo-html-caption">
				<img src="images/find_a_coach.png"></img>            
                <!--  <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.-->
            </div>

        </div>

    </div>
    <script type="text/javascript" src="nivo-slider/scripts/jquery-1.6.1.min.js"></script>
    <script type="text/javascript" src="nivo-slider/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>

</div>
<div class="homemsg"><!--GREAT COACHES<br/><b>FOR GREAT STUDENTS</b><br/><br/>-->
<img src="images/great_coaches.png"></img><br/><br/>
We are an elite team of trusted young professionals and experts.<br/><br/>
Our mission is to teach, mentor and guide the next generation on their chosen path to success.<br/><br/>
We offer personalized coaching to students in the most popular and compelling extracurricular activities.</div>
<div class="howitworks"><img src="images/howitworks.png"></img></div>
</div>



<div class="benefitsbox"><img src="images/benefits_and_safety.png" align="middle"></img></div>

<div id="socialblock">
	<ul>
		<li><a href="http://www.facebook.com/gnrtnz" target="_blank"><img src="images/facebook.png"></img></a></li>
		<li><a href="http://www.twitter.com/gnrtnz" target="_blank"><img src="images/twitter.png"></img></a></li>
		<li><a href="http://www.youtube.com/gnrtnz" target="_blank"><img src="images/youtube.png"></img></a></li>
		<li><a href="http://www.gnrtnz.wordpress.com" target="_blank"><img src="images/wordpress.png"></img></a></li>
	</ul>
</div>


<?php
include("footer.php");

?>

</body>
</html>