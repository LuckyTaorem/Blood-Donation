<?php
session_regenerate_id(true);

require 'classes/user.php';
require 'classes/friend.php';
// Include the database connection class
require_once '../app/db.conn.php';

// USER OBJECT
$user_obj = new User($conn);
// FRIEND OBJECT
$frnd_obj = new Friend($conn);
?>