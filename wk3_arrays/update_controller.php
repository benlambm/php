<?php include_once '../header.php';
require_once '../model/Employee.php';
require_once '../model/load_users.php';

$employee = $_SESSION[trim($_POST['employee_role'])];

function update_user($emp)
{
    $emp->setBioInfo($_POST['bio']);
    $emp->setDegree($_POST['degree']);
    $emp->setInterests($_POST['interests']);
    $emp->setFavBook($_POST['fav_book']);
}

update_user($employee);

include $employee->getHomepageUrl();