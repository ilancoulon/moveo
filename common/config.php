<?php
define('VERSION', '2.0.2 b');
define('COMMON',  ROOT.'common/');
define('LANG', COMMON.'lang/');
define('DATA', ROOT.'data/');
define('UPLOAD', ROOT.'data/upload/');
define('DATA_PLUGIN', ROOT.'data/plugin/');
define('THEMES', ROOT.'theme/');
define('PLUGINS', ROOT.'plugin/');
define('ADMIN_PATH', ROOT.'admin/');
define('CACHE_TIME', 0);
if(file_exists(DATA.'key.php')) include(DATA.'key.php');
?>