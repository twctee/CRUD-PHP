<?php
require_once '../connect.php';
$database = new DatabaseConnection();
$pdo = $database->getPdo();
echo $pdo;


// INSERT INTO `Prename`(`pre_name`) VALUES ('นาย');
// INSERT INTO `Position`(`pos_name`, `pos_detail`) VALUES ('Developer','Frontend dev');
// INSERT INTO `Employee` (`emp_id`, `emp_prename`, `emp_fname`, `emp_lname`, `emp_salary`, `emp_birth`, `emp_start`, `emp_idcard`, `pos_id`) VALUES ('0001', '1', 'Thawatchai', 'Khamai', '100', '1998-03-07', '2023-03-23', '1010101010101', '1');