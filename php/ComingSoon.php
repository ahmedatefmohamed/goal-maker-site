<?php

	session_start();
	
	//connect to database
	$db = mysqli_connect("localhost" , "root" , "" , "goalmakersdb");
	
	if(isset($_POST['subscribes'])){
		$mail = mysql_real_escape_string($_POST['email']);
		$sql = "INSERT INTO viewers(customer_email) VALUES('$mail')";
		mysqli_query($db , $sql);
	}


?>


<!DOCTYPE html>
<html>
    <head>
        <title>Goal Makers Trailer</title>
        <meta charset="UTF-8">
        <meta name="description" content="About goal makers team">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../resources/css/Coming soon.css">
    </head>
    <body background="../resources/images/rocket.gif">
<!--the header of page-->
        <header id="sec1">
            <div id="title">
                <img class="logo" src="..resources/images/GMs Logo.png" alt="GMs Team Logo">
                <h3 class="name">Goal Makers</h3>
            </div>
            <div id="nav_elem">
                <ul class="nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#footer">Subscribe</a></li>
                </ul>
            </div>
        </header>
<!--social media part-->
        <div class="socialMedia">
            <a href="http://www.facebook.com" target="_blank"><img src="../resources/images/facebook.png" alt="facebook logo"></a>
            <a href="http://www.twitter.com" target="_blank"><img src="../resources/images/Twitter.png" alt="twitter logo"></a>
            <a href="http://www.youtube.com" target="_blank"><img src="../resources/images/youtube.png" alt="youtube logo"></a>
        </div>
        <div style="width: 527px; height: 527px;" title="" data-is-responsive="false" data-display-mode="fill" data-content-padding-horizontal="0" data-content-padding-vertical="0" data-exact-height="527" class="ca1" id="comp-jhoz1k88">
            <div style="width: 527px; height: 527px;" id="comp-jhoz1k88link" class="ca1link">
                <div style="width: 527px; height: 527px; position: relative; top: 0px; left: 0px;" data-has-bg-scroll-effect="" data-style="" data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-jhoz1k8x&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;mua1n&quot;,&quot;isPreset&quot;:true,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;&quot;,&quot;uri&quot;:&quot;84770f_a8e9f0928bf844718bc0a55d46c54f56~mv2.gif&quot;,&quot;description&quot;:&quot;&quot;,&quot;width&quot;:515,&quot;height&quot;:515,&quot;alt&quot;:&quot;&quot;},&quot;displayMode&quot;:&quot;fill&quot;}" class="ca1img" id="comp-jhoz1k88img">
                        <img id="comp-jhoz1k88imgimage" style="object-position: 50% 50%; width: 527px; height: 527px; object-fit: cover;" alt="" data-type="image" itemprop="image" src="https://static.wixstatic.com/media/84770f_a8e9f0928bf844718bc0a55d46c54f56~mv2.gif">
                </div>
            </div>
        </div>
<!--coming soon middle part in page-->
        <section id="middle">
                <h2 class="font_6" style="text-align:center;">
                    <span style="letter-spacing:0.2em;">OUR NEW SITE IS</span>
                </h2>
                <div data-packed="true" style="width: 538px; pointer-events: none;" class="txtNew" id="comp-ir243rba">
                    <h2 class="font_3" style="line-height:1.2em; text-align:center;">
                        <span style="letter-spacing:0.25em;">COMING<br>SOON</span>
                    </h2>
                </div>
                <div data-packed="true" style="width: 304px; pointer-events: none;" class="txtNew" id="comp-irarbd0i">
                    <h2 class="font_6" style="text-align:center;">
                        <span style="letter-spacing:0.2em;">STAY TUNED!</span>
                    </h2>
                </div>
                <!--<div style="left:0;margin-left:0;width:100%;min-width:initial;top:;bottom:;right:;height:21px;position:" class="AutoWidthAnchorSkin" id="comp-ir243raz"></div>
                <div style="top:;bottom:;left:;right:;width:50px;height:50px;position:" class="ImageButton_1" data-state="supports_opacity transition_none prepare_hda  " id="comp-irp1dkxh">
                        <a href="#footer" target="_self" data-keep-roots="true" data-anchor="dataItem-ir243raz1" title="" style="width:50px;height:50px" id="comp-irp1dkxhlink" class="ImageButton_1link"><div class="ImageButton_1_correct-positioning">
                            <div style="width: 50px; height: 50px; position: relative; top: 0px; left: 0px;" data-has-bg-scroll-effect="" data-style="" data-image-info="{&quot;imageData&quot;:{&quot;alt&quot;:&quot;&quot;,&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-irp1dkxs1&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;mua1n&quot;,&quot;isPreset&quot;:true,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;Arrow_white_frame.png&quot;,&quot;uri&quot;:&quot;84770f_f8c65cc524cc4a1f80630d3aacf55ee6~mv2.png&quot;,&quot;description&quot;:&quot;&quot;,&quot;width&quot;:50,&quot;height&quot;:50},&quot;displayMode&quot;:&quot;full&quot;}" class="ImageButton_1defaultImage" id="comp-irp1dkxhdefaultImage">
                                <img id="comp-irp1dkxhdefaultImageimage" style="width: 50px; height: 50px; object-fit: contain;" alt="" data-type="image" itemprop="image" src="https://static.wixstatic.com/media/84770f_f8c65cc524cc4a1f80630d3aacf55ee6~mv2.png/v1/fill/w_50,h_50,al_c,q_80/84770f_f8c65cc524cc4a1f80630d3aacf55ee6~mv2.webp">
                            </div>
                </div>-->
        </section>
<!--footer of the web page-->
       
		
	   <div id="footer">
			<form action="ComingSoon.php" method="post">
				<span class="subscribe">Subscribe to be the first to know about our launch</span><br>
				<input type="email" name="email" value="" placeholder="ahmed@gmail.com" />
				<input type="submit" name="subscribes" value="Subscribe" />
				<span class="foot">2019 Goal Makers</span>
			</form>
		</div>
        
    </body>
</html>