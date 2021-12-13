<?php
define('DS',DIRECTORY_SEPARATOR);
define('dir_root','C:'.DS.'xampp'.DS.'htdocs'.DS.'cms'.DS.'BugdetHome');
define('Models_path',dir_root.DS.'admin'.DS.'Models');
define('admin_path',dir_root.DS.'admin');

require_once admin_path.DS.'config.php';
require_once Models_path.DS.'Database.php';
require_once Models_path.DS.'Budget.php';
require_once Models_path.DS.'User.php';
require_once Models_path.DS.'Session.php';


?>