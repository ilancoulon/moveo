<?php
defined('ROOT') OR exit('No direct script access allowed');

###### définition
define('CKEDITOR',      PLUGINS.'ckeditor/other/ckeditor/');
define('KCFINDER',      PLUGINS.'ckeditor/other/kcfinder/');
define('IMAGES_FOLDER', UPLOAD. 'images/');
define('FILES_FOLDER',  UPLOAD. 'files/');
define('FLASH_FOLDER',  UPLOAD. 'flash/');

function ckeditorInstall(){
    if(!is_dir(IMAGES_FOLDER) && (!@mkdir(IMAGES_FOLDER) || !@chmod(IMAGES_FOLDER, 0777)));
    if(!is_dir(FILES_FOLDER) && (!@mkdir(FILES_FOLDER) || !@chmod(FILES_FOLDER, 0777)));
    if(!is_dir(FLASH_FOLDER) && (!@mkdir(FLASH_FOLDER) || !@chmod(FLASH_FOLDER, 0777)));
}

function ckeditorHead(){
	$core = core::getInstance();
    echo "\t".'<script src="'.CKEDITOR.'ckeditor.js"></script>'."\n";
	echo "\t".'<script src="'.CKEDITOR.'lang/'.$core->getConfigVal('siteLang').'.js"></script>'."\n"; 
	echo "\t".'<script src="'.CKEDITOR.'ckeditor.js"></script>'."\n";      
}

function ckeditorFoot(){
	$core = core::getInstance();
	echo "\t".'<!-- ckeditor plugin -->'."\n";
    echo "\t".'	<script>
$(".editor").each(function(){  
CKEDITOR.replace( this , {
    // customConfig: \''.CKEDITOR.'kcfinder_config.js\',
	language: \''.$core->getConfigVal('siteLang').'\',
	fullPage: false,
	allowedContent: false,
	filebrowserBrowseUrl : \''.KCFINDER.'browse.php?type=files\',
	filebrowserImageBrowseUrl : \''.KCFINDER.'browse.php?type=images\',
	filebrowserFlashBrowseUrl : \''.KCFINDER.'browse.php?type=flash\',
	filebrowserUploadUrl : \''.KCFINDER.'upload.php?type=files\',
	filebrowserImageUploadUrl : \''.KCFINDER.'upload.php?type=images\',
	filebrowserFlashUploadUrl : \''.KCFINDER.'upload.php?type=flash\'
});
});
	</script>'."\n";   
}

?>
