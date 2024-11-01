<?php
/**
 * Plugin Name: Transliterate Arabic
 * Author: little-wolf
 * Version: 1.0.7
 * Description: A simple plugin for the transliteration of Arabic words in posts.
 */

add_filter( 'content_save_pre', 'transliterate_ar' );

function transliterate_ar($content) {
	$patterns = array(
		'/,,/',
		'/AA/',
		'/aa/',
		'/EE/',
		'/ee/',
		'/OO/',
		'/oo/',
		'/HH/',
		'/hh/',
		'/KH/',
		'/kh/',
		'/DH/',
		'/dh/',
		'/SH/',
		'/sh/',
		'/SS/',
		'/ss/',
		'/DD/',
		'/dd/',
		'/TT/',
		'/tt/',
		'/ZZ/',
		'/zz/',
		'/cc/',
		'/GH/',
		'/gh/',
		'/saw/',
		'/bsm/'
	 );
	$replacements = array(
    	'ʾ',
    	'Ā',
    	'ā',
    	'Ī',
    	'ī',
    	'Ū',
    	'ū',
    	'Ḥ',
    	'ḥ',
    	'Ḵ',
    	'ḵ',
    	'Ḏ',
    	'ḏ',
    	'Š',
    	'š',
    	'Ṣ',
    	'ṣ',
    	'Ḍ',
    	'ḍ',
    	'Ṭ',
    	'ṭ',
    	'Ẓ',
    	'ẓ',
    	'ʿ',
    	'Ġ',
    	'ġ',
    	'ﷺ',
    	'﷽'
	);

	foreach($patterns as $pattern) {
		$patterns_quoted[] = '#'.preg_quote($pattern,true).'#';
	};

	$content = preg_replace($patterns_quoted, $replacements, $content);
	
	return $content;	
};

?>
