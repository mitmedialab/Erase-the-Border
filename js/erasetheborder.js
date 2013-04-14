$(document).ready(function() {
		$('#email-privacy').tooltip()
		$('.voices').tooltip();
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
				return false;
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
		$('#intro-oodham-map,#intro-oodham-video,#intro-oodham-video2').fadeOut('fast');
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
			//Play signatures in random order
			var random = Math.floor(( Math.random()* $('.signature').length - 1) ) ;
			nextSignature(random);
		}
	}
	function playSignatures(){
		window.playingSignatures = true;

		//Play signatures in random order
		var random = Math.floor(( Math.random()* $('.signature').length - 1) ) ;
		
		nextSignature( random );
		$('#play-button').hide();
		$('#pause-button').show();
	}
	function pauseSignatures(){
		window.playingSignatures = false;
		//$('.signature-text').html("");
		$('.signature:eq('+window.lastSignature+')').hide();
		$('.signature:eq('+window.lastSignature+')').find('.signature-audio').get(0).pause();
		$('#pause-button').hide();
		$('#play-button').show();
	}
	function nextSlide(i){
		if (window.showingIntro){
			if (i==1){
				$('#intro-oodham-map').fadeIn('slow');
			}
			else if (i==10){
				
				$('#intro-oodham-video2').fadeIn('slow');	
			}
			
			if (i< $('.slide').length){
				$('.slide:eq('+i+')').show().delay(6000).fadeOut(function(){ nextSlide(i+1); });
				$('#slide-progress-bar>i:eq('+i+')').addClass('icon-white');
			}else{
				$('#skip').fadeOut();
				$('.enter').fadeIn('slow');
				$('#intro-oodham-video2').fadeOut(10000);
			}
		}
	}
	function nextSignature(i){
		if (!window.showingIntro && window.playingSignatures){
			//Play signatures in random order
			var random = Math.floor(( Math.random()* $('.signature').length - 1) ) ;
			
			if (i< $('.signature').length){
				window.lastSignature = i;
				$('.signature:eq('+i+')').find('.signature-audio').get(0).play();
				$('.signature:eq('+i+')').show().delay( Math.max(4000, parseInt($('.signature:eq('+i+')').find('.signature-audio').get(0).duration * 1000)) ).fadeOut(function(){ nextSignature(random); });
			}else{
				nextSignature(0);
			}
		}
	}
	
	