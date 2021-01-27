<?php
require_once '../include/DB_manage.php';
require_once '../include/DB_Reports.php';

$db =new DB_Manage();      



$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data

// validate the variables ======================================================
// if any of these variables don't exist, add an error to our $errors array

if (empty($_POST['name']))
    $errors['name'] = 'Name is required.';

if (empty($_POST['address']))
    $errors['address'] = 'address is required.';

if (empty($_POST['phonenumber']))
    $errors['phonenumber'] = 'phonenumber alias is required.';

// return a response ===========================================================
$result = $db->insertintoclient($_POST['name'],$_POST['address'],$_POST['phonenumber']);
if(!$result){

    $errors['server'] = 'DataBase Error';


}




// if there are any errors in our errors array, return a success boolean of false
if ( ! empty($errors)) {

    // if there are items in our errors array, return those errors
    $data['success'] = false;
    $data['errors']  = $errors;
} else {

    // if there are no errors process our form, then return a message
    $data['name'] = $_POST['name'];
    $data['address'] = $_POST['address'];
    $data['phonenumber'] = $_POST['phonenumber'];
    // DO ALL YOUR FORM PROCESSING HERE
    // THIS CAN BE WHATEVER YOU WANT TO DO (LOGIN, SAVE, UPDATE, WHATEVER)

    // show a message of success and provide a true success variable
    $data['success'] = true;
    $data['message'] = 'Success!';
}

// return all our data to an AJAX call
echo json_encode($data);