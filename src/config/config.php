<?php
//---------------------------------------------------------
// Debug ?
define('DEBUG_MODE', false);
//---------------------------------------------------------
// Database parameters
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_PORT', '8889');
define('DB_NAME', 'tp_eden_news');
define('DB_USER', 'root');
define('DB_PASS', 'root');
//---------------------------------------------------------
// Website directory
define('URL', '/TP/PHP-MVC-Blog/src/');
//---------------------------------------------------------
// Login tentatives
define('MAXIMUM_LOGINS', 3);
//---------------------------------------------------------
// Set values for Pagination 
define('ACTIVE_PAGE', 0);
define('CARDS_PER_PAGE', 6);
//---------------------------------------------------------
// Site name
define('SITENAME', 'EDEN News');
//---------------------------------------------------------
// Default images directory
define('DEFAULT_IMG', URL . 'public/img/default.jpg');
//---------------------------------------------------------
//	Images constants
define('IMAGE_UPLOADS_PATH', 'uploads/images');
define('IMAGE_DEFAULT_EXT', '.jpg');
define('IMAGE_THUMB_EXT', '-thumb');
define('IMAGE_THUMB_WIDTH', 200);
define('IMAGE_THUMB_HEIGHT', 200);