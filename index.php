<?php
	require_once 'magpierss-0.72/rss_fetch.inc';

	$url = 'http://vojo.co/en/node/12989/feed';
	$rss = fetch_rss($url);
	$signatureCount = count($rss->items);

	$voicefilename = $_GET['voice'];
	if ($voicefilename){
		$idx = 0;
		foreach ($rss->items as $item) {

			if ($item[enclosure_url] != null){ 
				if (strstr($item[enclosure_url], $voicefilename)){
					$idx--;
					break;
				}
			}
			$idx++;
		}
	}
	
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Erase the Border: A petition of <?= $signatureCount ?> voices against the US-Mexico border fence on the Tohono O’odham Indian Reservation</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta charset="utf-8">
           
       <script type="text/javascript" charset="utf-8" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
       <script src="http://use.edgefonts.net/seaweed-script.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
         <link href="images/css-social-buttons/social-buttons.css" rel="stylesheet">
       
        <script type="text/javascript" src="audio/recorder.js"></script>
        <style>
        	html { 
				background: url(images/fence-1985.jpg) no-repeat center center fixed; 
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}
			.slide{
				margin:0px auto;
				width:50%;
				color: white;
				background-color: rgba(0,0,0,0.2);
				padding:10px;
				display:none;
			}
			.enter,#welcome{
				margin:0px auto;
				display:none;
				width:50%;
				padding: 100px;
				text-align: center;
			}
			.anchor{
				position:relative; top:-125px;
			}
			body{
				background-color: transparent;
			}
			#skip, #slide-progress-bar{
				position:absolute;
				bottom:40px;
				
			}
			#slide-progress-bar{
				left:44%
			}
			#slide-progress-bar i{
				margin-right:3px;
			}
			#skip{
				right:40px;
			}
			#page{
				display:none;
				
				margin: auto 80px;
				padding-top:100px;
			}
			.background-block{
				padding: 10px;
				background-color: rgba(255, 255, 255, 0.4);
				margin-bottom: 50px;
			}
			#page > h1, #page > h2, header h1{
				border-bottom: 1px solid black;
				margin: 0;
				background-color: rgba(0, 0, 0, 0.6);
				color: white;
				border-top: 1px solid black;
				padding: 10px;
			}
			#add-form-div,#thanks,#audio-petition-files{
				display:none;
			}
			#description{
				float:right;
				width:46%;
			}
			#left-col{
				width: 48%;
				float:left;
				margin-right:25px;
			}
			#signatures{
				margin-top:10px;
				-webkit-box-shadow: inset 2px 2px 2px 2px rgba(0, 0, 0, 0.5);
				box-shadow: inset 2px 2px 2px 2px rgba(0, 0, 0, 0.5);
				
				line-height: 67px;
				font-weight: normal;
				color: #333;
				text-align: center;
				display: none;
				
				background-color: rgba(255, 255, 255, 0.8);
				font-size: 50px;
				font-family: seaweed-script, serif;
				
				
				height:350px;
				padding:10px;
				
			}
			footer{
				padding: 5%;
				text-align: center;
				color: #333;
				clear: all;
				float: none;
				margin-top: 20px;
			}
			footer img{
				height:75px;
				margin-right:10px;
			}
			footer h5{
				padding:0 150px;
			}
			.clearfix:after {
			   content: " "; /* Older browser do not support empty content */
			   visibility: hidden;
			   display: block;
			   height: 0;
			   clear: both;
			}
			#add-your-voice{
				margin-top: 25px;
				padding: 26px 100px;
				font-size: 29px;
			}
			header h1{
				white-space: nowrap;
				padding: 30px;
				font-size: 125px;
				text-align: center;
				color: rgba(255, 255, 255, 0.3);
				background-color: rgba(0, 0, 0, 0.9);
			}
			header{
				position:fixed;
				width:100%;
				display: none;
			}
			.thumbnail {
				background-color: rgba(255, 255, 255, 0.8);
				border:1px solid #CCC;
				padding: 4px 14px;
			}

        </style>
    </head>
	<body>
		<span id="voice-requested-from-url" style="display:none"><?= $idx ?></span>
		<div class="slide">
			<h1>This border fence divides the Tohono O'odham community into two sides.</h1>
		</div>
		<div class="slide">
			<h1>Like, imagine your town cut in half with a fence.</h1>
		</div>
		<div class="slide">
			<h1>And some of your family live on one side, and some on the other.</h1>
		</div>
		<div class="slide">
			<h1>Your doctor lives on the other side, and you really need dialysis.</h1>
		</div>
		<div class="slide">
			<h1>It takes a long time to cross. Lots of checks.</h1>
		</div>
		<div class="slide">
			<h1>It used to take twenty minutes to visit your father on the other side. Now it takes five hours.</h1>
		</div>
		<div class="slide">
			<h1>You get arrested for trying to cross.</h1>
		</div>
		
		<div class="slide">
			<h1>Your spiritual leaders are arrested too.</h1>
		</div>
		<div class="slide">
			<h1>Your ancestors' remains are confiscated.</h1>
		</div>
		<div class="slide">
			<h1>A soldier holds a gun to your head and demands that you declare your allegiance to one side.</h1>
		</div>
		<div class="slide">
			<h1>This border should be erased. Your life is on both sides.</h1>
		</div>
		<div class="slide">
			<h1>In May 2012, activists, artists and youth erased this border.</h1>
		</div>
		<div class="slide">
			<h1>It was a symbolic action using our bodies to press against the fence.</h1>
		</div>
		<div class="slide">
			<h1>Now we need your help - we want to really erase the border.</h1>
		</div>
		<div class="slide">
			<h1>Will you add your voice?</h1>
		</div>
		<div>
			<button id="skip" class="btn btn-small btn-mini" type="button">skip intro</button>
		</div>
		<div id="slide-progress-bar">
			<i class="icon-certificate"></i><i class="icon-certificate"></i><i class="icon-certificate"></i><i class="icon-certificate"></i><i class="icon-certificate"></i><i class="icon-certificate"></i><i class="icon-certificate"></i><i class="icon-certificate"></i><i class="icon-certificate"></i><i class="icon-certificate"></i><i class="icon-certificate"></i><i class="icon-certificate"></i><i class="icon-certificate"></i><i class="icon-certificate"></i><i class="icon-certificate"></i>
		</div>
		<div class="enter">
			<button id="cross" class="btn btn-large btn-danger" type="button" style="padding: 20px 100px;
font-size: 28px;">Cross</button>
		</div>
		<div id="welcome">
			<button id="welcome-button" class="btn btn-large btn-danger" type="button" style="padding: 20px 100px;
font-size: 28px;">Here is the story</button>
		</div>
		<header>
			<h1>ERASE THE BORDER</h1>
		</header>
		<div id="page">
			
			<div class="background-block" style="padding-top: 30px;">
				<div id="left-col">
					<div id="signatures">
					<?php
						foreach ($rss->items as $item) {
							
							if ($item[enclosure_url] != null){ 
								
								?>
								<div class="signature">
									<p class="signature-text"><?= $item[title] ?></p>
									<audio class="signature-audio" preload="auto">
										<source src="<?= $item[enclosure_url] ?>" type="<?= $item[enclosure_type] ?>" duration="<?= $item[enclosure_length] ?>">
										<source src="<?= $item[enclosure2_url] ?>" type="<?= $item[enclosure2_type] ?>" duration="<?= $item[enclosure2_length] ?>">
									</audio>
								</div>
								<?php
							} //end if enclosure != null
							
						} //end foreach items
					?>

					</div>
					<button class="btn btn-mini" type="button" id="pause-button"><i class="icon-pause"></i> Pause</button>
					<button class="btn btn-mini" type="button" id="play-button" style="display:none"><i class="icon-play"></i> Play</button>
					<br/>
					
					 
					<!-- Modal -->
					<div id="add-your-voice-modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					    <h3 id="myModalLabel">Record Your Voice Right Here</h3>
					  </div>
					  <div class="modal-body">
					    <form id="add-form" enctype="multipart/form-data">
							<fieldset>
							    
							    
							    <input type="text" style="font-size:25px;height:50px;padding:5px 0 0 10px" class="input-block-level" name="signature" id="signature" placeholder="Your name, title, affiliation, location">
							    <a href="javascript:record()"  id="record"><button class="btn btn-danger" type="button">Start Recording</button></a> 
							   	<a href="javascript:play()"  id="play" style="display:none"><button class="btn btn-danger" type="button">Play</button></a> 
							   	<a href="javascript:stop()"  id="stop" style="display:none"><button class="btn btn-danger" type="button">Stop Recording</button></a>
							   	
							   	<a href="javascript:startOver()"  id="start-over" style="display:none"><button class="btn btn-danger" type="button">Start Over</button></a> 
							   	<a href="javascript:upload()"  id="upload" style="display:none"><button class="btn btn-primary pull-right" type="button">Submit</button></a>
							    
							   
							   <button class="btn btn-inverse" type="button" id="time" style="font-size:30px;display:none">0:00</button>
					            
					            
								
							    
							   

							    
							  </fieldset>
						</form>
						<div class="progress progress-striped" style="display:none">
						  <div class="bar" style="width: 60%;"></div>
						</div>
						<div id="thanks">
							<h2 class="error"></h2>
							<p>Copy this link to listen to your voice and share it with others. Note that your voice is being processed on the server for about the next two minutes. After that, the link will work perfectly.</p>
							<input type="text" style="font-size:14px;height:50px;padding:5px 0 0 10px" class="input-block-level" id="signature-link" value="">
							<h3>Share your voice with your friends</h3>
							<p>
								<a id="twitter-link" href="" target="_blank" class="sb large twitter">Tweet your voice</a> 
								<a id="facebook-link" href="" target="_blank" class="sb large facebook">Share your voice on Facebook</a>
							</p>
						</div>
					  </div>
					  <div class="modal-footer">
					  	<legend>No mic? No Adobe Flash? No Problem.</legend>
						<p>Call the Erase the Border hotline at (888) 821-7563 ext. 2843 to record your voice directly to the petition or email your signature and audio file to dignazio AT mit DOT edu.</p>
					    
					    
					  </div>
					</div>

					<!-- Button to trigger modal -->
					<a href="#add-your-voice-modal" role="button" data-toggle="modal"><button id="add-your-voice" class="btn btn-large btn-danger" type="button" style="padding: 20px 100px;
	font-size: 25px;">Add Your Voice to the Petition</button></a>

					
					
					
				</div><!--end left col-->

				<div id="description"><h2>A petition of <?= $signatureCount ?> voices against the US-Mexico border fence on the Tohono O’odham Indian Reservation</h2>
				<h3 style="margin-top:25px">The border fence divides the community, prevents tribe members from receiving critical health services and subjects O'odham to racism and discrimination. 
					<a href="#more">Learn more...</a></h3>
				<h4 style="margin-top:25px;line-height:25px">Your voices will be recorded together, remixed as songs, and sent to legislators. Read more about <a href="#whereyourvoicewillgo">where your voice will go and how you can use this archive</a>.</h4>
			</div>
			<div class="clearfix"></div>
				
				<audio id="ofelia-song" height="1" width="1" preload="auto">
				  <source src="audio/ofelia.mp3" type="audio/mp3">
				  <source src="audio/ofelia.ogg" type="audio/ogg">
				  <embed height="1" width="1" src="audio/ofelia.mp3">
				</audio>
			</div>
			
		<h2><a class="anchor" name="whereyourvoicewillgo">&nbsp;</a>Where does my voice go?</h2>
		<div class="background-block">
			<ul class="thumbnails">
				  <li class="span5">
				    <div class="thumbnail">
				     <img src="images/legislators.jpg" alt="To Legislators">
				      <h3>To Legislators</h3>
				      <p>We will deliver your voices to legislators who have the power to erase the border. We will call their phone lines and play your voices. We will mail them CDs with your voices compiled. We will stage listening parties on their steps.</p>
				    </div>
				  </li>
				  <li class="span5">
				    <div class="thumbnail">
				     <a href="audio/erasethat.mp3"><img src="images/toremixes.jpg" alt="Remix the voices"></a>
				      <h3>To Remixes</h3>
				      <p>Click above to listen to a short remix of the Erase the Border petition by musician <a href="http://www.facebook.com/RubikonUSA">Dave Raymond</a>. Want to make your own? <a href="#download-modal" data-toggle="modal">Download the archive!</a></p>
				    </div>
				  </li>
				  <li class="span5">
				    <div class="thumbnail">
				     <a href="#download-modal" data-toggle="modal"><img src="images/dante.jpg" alt="Download"></a>
				      <h3>To You</h3>
				      <p>Download our <?= $signatureCount ?> voices. We are open source. We want you to come up with creative ways to put these voices to work. 
				      	Remix them into a song, use them as a beat, host a listening party, call your legislator, 
				      	play the archive outside a detention center. Share your work with us and we'll feature it here.</p>
				    </div>
				  </li>
				  
				</ul>
		</div>
		<h2><a class="anchor" name="more">&nbsp;</a>More information</h2>
		<div class="background-block">
			<div id="more-info">
				
				<ul class="thumbnails">
				  <li class="span5">
				    <div class="thumbnail">
				      <a href="images/oodham_map_revised.png"><img src="images/oodham_map_revised_thumb.png" alt="Map of O'odham lands"></a>
				      <h3>Map</h3>
				      <p>Map of traditional O'odham lands by Forest Purnell based on information collected by George Barnett</p>
				    </div>
				  </li>
				  <li class="span5">
				    <div class="thumbnail">
				     <a href="http://www.nytimes.com/2010/01/25/us/25border.html?pagewanted=all"><img src="http://graphics8.nytimes.com/images/2010/01/25/us/25border_CA0span/articleLarge.jpg"  style="width:350px;height:200px" alt="New York Times article"></a>
				      <h3>New York Times article</h3>
				      <p>In Drug War, Tribe Feels Invaded by Both Sides. By Erik Eckholm for the series War Without Borders. Above photo by Chris Hinkle for the New York Times.</p>
				    </div>
				  </li>
				  <li class="span5">
				    <div class="thumbnail">
				      <a href="http://alpha.zeega.org/42635" target="_blank"><img src="images/erasing.jpg" alt="Erasing the Border"></a>
				      <h3>We erased the border with our bodies and hands</h3>
				      <p>Artists Ofelia Rivas and Catherine D'Ignazio worked with Tohono O'odham youth on a symbolic action to erase the border fence by 
				      	pressing and painting. This is a Zeega presentation - a multimedia presentation with sound and video that tells our story.</p>
				    </div>
				  </li>
				  
				  
				</ul>
			</div>
		</div>
		<h2>Credits</h2>
		<div class="background-block">
			<footer>
				<a href="http://tiamatpublications.com/"><img src="http://tiamatpublications.com/sitebuilder/images/O_odham_solidarity_project2-165x218.jpg"></a>
				<a href="http://www.infinitelysmallthings.net"><img src="http://www.ikatun.org/institute/infinitelysmallthings/institutelogo.png"></a>
				<a href="http://www.artistsincontext.org"><img src="http://www.artistsincontext.org/images/yootheme/AIClogo.02.png" style="margin-right:0"></a>
				<a href="http://civic.mit.edu"><img src="http://civic.mit.edu/sites/civic.mit.edu/themes/c4cmtheme/logo.png"></a>
				<a href="http://vojo.co/en/groups/erase-border"><img src="http://vojo.co/sites/all/themes/vojo_generic/images/vojo/logo-top-header.png" style="height:25px"></a>
				<h5>Erase the Border is a project by <a href="http://www.kanarinka.com">Catherine D'Ignazio</a> and <a href="http://www.infinitelysmallthings.net">the Institute for Infinitely Small Things</a>, 
				<a href="http://tiamatpublications.com/">Ofelia Rivas and O'odham Voice Against the Wall</a>, and Tohono O'odham youth. Produced with the support of <a href="http://www.artistsincontext.org">Artists in Context</a> 
				and the <a href="http://civic.mit.edu">MIT Center for Civic Media</a>. Powered with <a href="http://vojo.co/en/groups/erase-border">Vojo</a>. </h5>

				
				<h5><a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/deed.en_US"><img alt="Creative Commons License" style="border-width:0;height:15px" src="http://i.creativecommons.org/l/by-sa/3.0/80x15.png" /></a>This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/deed.en_US">Creative Commons Attribution-ShareAlike 3.0 Unported License</a>.</h5>

				<h5>Questions? Email dignazio AT mit DOT edu. </h5>
			</footer>
		</div>
	</div>
	
	 
	<!-- Modal -->
	<div id="download-modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="download-modal-label" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3 id="download-modal-label">Download our voices</h3>
	  </div>
	  <div class="modal-body">
	    <p class="pull-left" style="margin-right:30px"><a href="http://vojo.co/en/node/12989/feed" class="sb rss" target="_blank">RSS</a> Get the RSS Feed</p>
	     <p> <a href="audio/erasetheborder.zip"><button class="btn"><i class="icon-briefcase"></i> Get a zip file</button> </p></a>
	  </div>
	  <div class="modal-footer">
	    <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Done</button>
	    
	  </div>
	</div>

	</body>
	<script type="text/javascript">
	$(document).ready(function() {
		$('#recorderFlashContainer').css('z-index','2000');

		if (window.location.href.indexOf('?voice=') >= 0){
			
			skipIntro();

		}
		else{
			$('#welcome').fadeIn();
			document.getElementById('ofelia-song').volume = 0.3;
			document.getElementById('ofelia-song').play();
			$('#welcome-button').click(function(){ 
				startIntro();
				$('#welcome').fadeOut();

			});
			
		}
		$('#cross,#skip').click(skipIntro);
		$('#pause-button').click(pauseSignatures);
		$('#play-button').click(playSignatures);
		$('#add-your-voice-modal').on('show', function () {
		  pauseSignatures();
		});
		$('#add-your-voice-modal').on('hidden', function () {
		  playSignatures();
		});
				
		

	});
	function startIntro(){
		window.showingIntro=true;	
		$('#slide-progress-bar').show();
		nextSlide(0);
	}
	function skipIntro(){
		$('#welcome').hide();
		$('#slide-progress-bar').hide();
		$('#skip').hide();
		$('.slide').hide();
		$('.enter').fadeOut();
		$('header,#page').fadeIn();
		document.getElementById('ofelia-song').pause();
		window.showingIntro=false;
		$('#signatures').fadeIn();
		$('.signature').hide();
		window.playingSignatures = true;

		//If passed in a voice= param then play the requested voice first
		if (parseInt($('#voice-requested-from-url').text()) > 0 ){
			nextSignature(parseInt($('#voice-requested-from-url').text()));
		} else {
			nextSignature(0);
		}
	}
	function playSignatures(){
		window.playingSignatures = true;
		nextSignature(window.lastSignature + 1);
		$('#play-button').hide();
		$('#pause-button').show();
	}
	function pauseSignatures(){
		window.playingSignatures = false;

		$('#pause-button').hide();
		$('#play-button').show();
	}
	function nextSlide(i){
		if (window.showingIntro){

			if (i< $('.slide').length){
				$('.slide:eq('+i+')').show().delay(6000).fadeOut(function(){ nextSlide(i+1); });
				$('#slide-progress-bar>i:eq('+i+')').addClass('icon-white');
			}else{
				$('#skip').fadeOut();
				$('.enter').fadeIn('slow');
			}
		}
	}
	function nextSignature(i){
		if (!window.showingIntro && window.playingSignatures){
			
			if (i< $('.signature').length){
				window.lastSignature = i;
				$('.signature:eq('+i+')').find('.signature-audio').get(0).play();
				$('.signature:eq('+i+')').show().delay( Math.max(4000, parseInt($('.signature:eq('+i+')').find('.signature-audio').get(0).duration * 1000)) ).fadeOut(function(){ nextSignature(i+1); });
			}else{
				nextSignature(0);
			}
		}
	}
	
	</script>
	<script>
      function timecode(ms) {
        var hms = {
          h: Math.floor(ms/(60*60*1000)),
          m: Math.floor((ms/60000) % 60),
          s: Math.floor((ms/1000) % 60)
        };
        var tc = []; // Timecode array to be joined with '.'
        if (hms.h > 0) {
          tc.push(hms.h);
        }
        tc.push((hms.m < 10 && hms.h > 0 ? "0" + hms.m : hms.m));
        tc.push((hms.s < 10  ? "0" + hms.s : hms.s));
        return tc.join(':');
      }
    

      Recorder.initialize({
        swfSrc: "audio/recorder.swf"
      });

      function record(){
      	if ($('#signature').val().length == 0 ){
      		alert('Please enter your signature in the text field');
      	} else {
	        Recorder.record({
	          start: function(){
	          	$('#record').hide();
	          	$('#time').show();
	      		$('#stop').show();
	      		$('#play').hide();
	      		$('#upload').hide();
	            //alert("recording starts now. press stop when youre done. and then play or upload if you want.");
	          },
	          progress: function(milliseconds){
	            document.getElementById("time").innerHTML = timecode(milliseconds);
	          }
	        });
    	}
      }
      
      function play(){
        Recorder.stop();
        
        Recorder.play({
          progress: function(milliseconds){
            document.getElementById("time").innerHTML = timecode(milliseconds);
          }
        });
      }
      
      function stop(){
      	
        $('#stop').hide();
      	
  		$('#play').show();
  		$('#upload').show();
  		$('#start-over').show();
        Recorder.stop();
        
      }
      function startOver(){
        Recorder.stop();
        Recorder.clear();
        $('#record').show();
        $('#stop').hide();
      	$('#time').hide();
  		$('#play').hide();
  		$('#upload').hide();
  		$('#start-over').hide();
      }
      function upload(){
      	$('form').hide();
  		$('.progress').show();
  		var uploaded_filename = $('#signature').val().toLowerCase().replace(/[^a-zA-Z0-9]/mg,'');
      	
      	Recorder.upload({
		    method: "POST", // (not implemented) (optional, defaults to POST) HTTP Method can be either POST or PUT 
		    url: "form.php",   // URL to upload to (needs to have a suitable crossdomain.xml for Adobe Flash)
		   // audioParam: "audiofile",           // Name for the audio data parameter, default is "audio"
		    params: {                                  // Additional parameters (needs to be a flat object)
		      "name": uploaded_filename,
		      "signature":$('#signature').val(),
		      
		    },
		    success: function(responseText){           // will be called after successful upload
		    	$('.progress').hide();
		    	$('.error').html(responseText);
		    	
		    	var link = window.location.href.split('?')[0] + "?voice=" + uploaded_filename;

		    	$('#myModalLabel').text('Thanks for adding your voice!');
		    	$('#signature-link').val(link);
		    	$('#facebook-link').attr('href','http://www.facebook.com/sharer.php?'+'s=100&p[title]=Erase%20the%20Border&p[url]='+link+'&p[summary]=I%20signed%20a%20voice%20petition%20to%20Erase%20the%20US-Mexico%20Border.%20Listen%20up!%20');

		    	$('#twitter-link').attr('href','http://twitter.com/share?text=I%20signed%20a%20voice%20petition%20to%20Erase%20the%20Border.%20Listen%20up!%20&url=' + link);
		    	$('.modal-footer').html('<button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Done</button>');

		    	$('#thanks').show();
		    	$('#signature-link').click(function() {
			        $(this).select();
			    });


		    },
		    error: function(){                  // (not implemented) will be called if an error occurrs
		    	alert('error uploading');
		    },
		  });
      }
      </script>
</html>
