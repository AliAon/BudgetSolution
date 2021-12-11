<?php
define('DS',DIRECTORY_SEPARATOR);
define('dir_root','C:'.DS.'xampp'.DS.'htdocs'.DS.'cms'.DS.'BugdetHome');
define('include_path',dir_root.DS.'admin'.DS.'includes');
define('admin_path',dir_root.DS.'admin');

require_once admin_path.DS.'config.php';
require_once include_path.DS.'database.php';
require_once include_path.DS.'Budget.php';


?>