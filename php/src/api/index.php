<?php
require_once '../connect.php';
$database = new DatabaseConnection();
$pdo = $database->getPdo();
// echo json_encode($_POST);
// exit;

switch ($_GET['type']) {
    case 'prename':
        // $data = array($_POST['prename']);
        $sql = "SELECT * FROM `Prename`";
        $result = $database->fetch($sql);
        echo json_encode($result);
        break;
    case 'position':
        $sql = "SELECT * FROM `Position`";
        $result = $database->fetch($sql);
        echo json_encode($result);
        break;
    case 'employee':
        $sql = "SELECT * FROM `Employee`";
        $result = $database->fetch($sql);
        echo json_encode($result);
        break;

    default:

        break;
}

// INSERT INTO `Position`(`pos_name`, `pos_detail`) VALUES ('Developer','Frontend dev');
// INSERT INTO `Employee` (`emp_id`, `emp_prename`, `emp_fname`, `emp_lname`, `emp_salary`, `emp_birth`, `emp_start`, `emp_idcard`, `pos_id`) VALUES ('0001', '1', 'Thawatchai', 'Khamai', '100', '1998-03-07', '2023-03-23', '1010101010101', '1');