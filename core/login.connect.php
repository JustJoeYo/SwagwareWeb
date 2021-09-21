<?php

/**
 * This is where the connection is initialized
 * 
 * This connection variable will be used in multiple files
 * to execute queries and do checks
 * 
 * @author Jake
 * @copyright 2019 N/A
*/

// The sql server host
$host = "localhost";

// The username of the sql user
$user = "root";

// The password of the sql user
$pass = "HastesYT1";

// The name of the database
$database = "maindb";

// Creating the connection
$connection = new mysqli($host, $user, $pass, $database);

