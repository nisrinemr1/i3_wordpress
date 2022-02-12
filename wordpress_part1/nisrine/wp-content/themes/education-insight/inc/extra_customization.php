<?php 

	$education_insight_sticky_header = get_theme_mod('education_insight_sticky_header');

	$education_insight_custom_style= "";

	if($education_insight_sticky_header != true){

		$education_insight_custom_style .='.wrap_figure.fixed{';

			$education_insight_custom_style .='position: static;';
			
		$education_insight_custom_style .='}';
	}

	$education_insight_logo_max_height = get_theme_mod('education_insight_logo_max_height');

	if($education_insight_logo_max_height != false){

		$education_insight_custom_style .='.custom-logo-link img{';

			$education_insight_custom_style .='max-height: '.esc_html($education_insight_logo_max_height).'px;';
			
		$education_insight_custom_style .='}';
	}