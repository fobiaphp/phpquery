<?php

set_include_path(
	get_include_path()
		.PATH_SEPARATOR.dirname(__FILE__).'/src/'
		.PATH_SEPARATOR.dirname(__FILE__).'/src/plugins/'
);

// TODO move them into directory
// include  dirname(__FILE__) . '/test_1.php';
include  dirname(__FILE__) . '/test_2.php';
// include  dirname(__FILE__) . '/test_3.php';
include  dirname(__FILE__) . '/test_4.php';
include  dirname(__FILE__) . '/test_5.php';
include  dirname(__FILE__) . '/test_wrap.php';
include  dirname(__FILE__) . '/test_replace.php';
include  dirname(__FILE__) . '/test_multidoc.php';
?>