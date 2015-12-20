<?php

function Index_SectionRetrieved($section){
	global $Sys;

	if($section == 'index'){
		$Sys->Main->register_template('index', __DIR__ . '/../sys-templates/index.php');
		$Sys->Main->load_template('index');
	}
}
$Handler->register_hook('section_retrieved', 'Index_SectionRetrieved');
