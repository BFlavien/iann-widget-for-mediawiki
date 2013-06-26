<?php

class iAnnWidget {

	function createWidget($input, array $args, Parser $parser, PPFrame $frame ) {
		
		global $wgOut;
		
		$width = 720;
		$height = 700;
		$scrolling = 'auto';
		$frameborder = 0;
		
		// Example of the output :  <iframe width="720" height="700" scrolling="auto" frameborder="0" src="http://iann.pro/viewer/events.html"></iframe>
		
		if( isset($args['width']) && $args['width'] ){
			$width = $args['width'];
		}
		
		if( isset($args['height']) && $args['height'] ){
			$height = $args['height'];
		}
		
		if( isset($args['scrolling']) && $args['scrolling'] ){
			$scrolling = $args['scrolling'];
		}
		
		if( isset($args['frameborder']) && $args['frameborder'] ){
			$frameborder = $args['frameborder'];
		}
		
		$wgOut->addModules( 'iAnnWidget' );
		
		return '<iframe width="'.$width.'" height="'.$height.'" scrolling="'.$scrolling.'" frameborder="'.$frameborder.'" src="http://iann.pro/viewer/events.html"></iframe>';
	}
}
