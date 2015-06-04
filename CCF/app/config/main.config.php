<?php 
/*
 *---------------------------------------------------------------
 * Main CCF configuration
 *---------------------------------------------------------------
 *
 * Take a look at the core main configuration file to see 
 * what options are around. .../CCF/vendor/clancats/core/config/main.config.php
 */
return array(
	
	/*
	 * URL configuration
	 */
	'url'	=> array(
		// if not in the root directory set the path offset.
		'path'		=> '/',
	),
	
	/*
	 * Security
	 */
	'security' => array(
		// it is really important that you choose your own one!
		'salt' => 'HdD21Ut/}�&:ÄhP�\ZB{�N}9{O?+$,+',
	),
);