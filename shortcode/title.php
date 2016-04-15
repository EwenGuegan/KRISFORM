<?php 
	function title_shortcode($atts, $content){
		$atts = shortcode_atts(array(
			"type" => "h1",
			"color" => "#000",
			"size" => "20px"
		), $atts);

		return
			'<'.$atts["type"].' style="color: '.$atts["color"].'; font-size: '.$atts["size"].';">'.
				do_shortcode($content).
			'</'.$atts["type"].'>';

	} add_shortcode("title", "title_shortcode");
 ?>