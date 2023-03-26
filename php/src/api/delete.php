<?php
require_once '../connect.php';
$database = new DatabaseConnection();
$pdo = $database->getPdo();
// echo json_encode($_POST);
// exit;

switch ($_GET['type']) {
    case 'prename':
            $data = array($_POST['pre_id']);
            echo $database->query("DELETE FROM `Prename` WHERE `pre_id` = ?;",$data);
        break;
    case 'position':
            $data = array();
            array_push($data, $_POST['pos_id']);
            // print_r($data);
            // exit;
            $sql = "DELETE FROM `Position` WHERE `pos_id` = ?;";
            $database->query($sql, $data);
        break;
    case 'employee':
            $data = array();
            array_push($data, $_POST['emp_id']);
            array_push($data, $_POST['emp_prename']);
            array_push($data, $_POST['emp_fname']);
            array_push($data, $_POST['emp_lname']);
            array_push($data, $_POST['emp_salary']);
            array_push($data, $_POST['emp_birth']);
            array_push($data, $_POST['emp_start']);
            array_push($data, $_POST['emp_idcard']);
            array_push($data, $_POST['pos_id']);
            // print_r($data);
            // exit;
            $sql = "INSERT INTO `Employee` (`emp_id`, `emp_prename`, `emp_fname`, `emp_lname`, `emp_salary`, `emp_birth`, `emp_start`, `emp_idcard`, `pos_id`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
            print_r($database->query($sql, $data)); 
        break;
    
    default:
        
        break;
}

// INSERT INTO `Position`(`pos_name`, `pos_detail`) VALUES ('Developer','Frontend dev');
// INSERT INTO `Employee` (`emp_id`, `emp_prename`, `emp_fname`, `emp_lname`, `emp_salary`, `emp_birth`, `emp_start`, `emp_idcard`, `pos_id`) VALUES ('0001', '1', 'Thawatchai', 'Khamai', '100', '1998-03-07', '2023-03-23', '1010101010101', '1');