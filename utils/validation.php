<?php
// Define an array to store the error messages
$errors = array();

function validatePhoneNumber($phoneNumber) {
  // Remove any non-digit characters from the phone number
  $phoneNumber = preg_replace('/\D/', '', $phoneNumber);
  
  // Check if the phone number matches the desired pattern
  $pattern = '/^\d{11}$/'; // Assumes a 10-digit phone number
  
  if (preg_match($pattern, $phoneNumber)) {
      // Valid phone number
      return true;
  } else {
      // Invalid phone number
      return false;
  }
}
function isDateValid($formDate) {
  $currentDate = new DateTime();
  $inputDate = new DateTime($formDate);
  
  if ($inputDate > $currentDate) {
      // Form date is valid (greater than current date)
      return true;
  } else {
      // Form date is not valid
      return false;
  }
}
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Validate the input fields
  $fullName = $_REQUEST['full-name'];
  $email = $_REQUEST['email'];
  $phone = $_REQUEST['phone'];
  $checkIn = $_REQUEST['check-in'];
  $checkOut = $_REQUEST['check-out'];
 
  $specialRequests = $_REQUEST['special-requests'];


  if (!isset($_REQUEST['terms'])) {
    $errors['terms'] = 'You must agree to the Terms and Conditions';
}

  // Validate full name
  if(empty($fullName)){
    $errors['full-name'] = 'Please enter your full name';

  }else if (strlen($fullName) < 3) {
    $errors['full-name'] = 'Please enter valid full name';
  }

  // Validate email
  if (empty($email)) {
    $errors['email'] = 'Please enter your email';
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Please enter a valid email address';
  }

  // Validate phone number
  if (empty($phone) ) {
    $errors['phone'] = 'Please enter your phone number';
  }else if(!validatePhoneNumber($phone)){
    $errors['phone'] = 'Please enter a valid phone number';

  }

  // Validate check-in and check-out dates
  if (empty($checkIn)) {
    $errors['check-in'] = 'Please select the check-in date';
  }else if(!isDateValid($checkIn)){
    $errors['check-in'] = 'Selec a valid date!';
    
  }

  if (empty($checkOut)) {
    $errors['check-out'] = 'Please select the check-out date';
  }else if($checkIn >= $checkOut){
    $errors['check-out'] = 'Checkout date must be greater than checkIn date';

  }

 

  $roomId = $_GET['id'];
  if (empty($errors)) {
    $queryParameters = http_build_query($_POST); // Convert the form data to a query string
    header('Location: success.php?id=' . $roomId . '&' . $queryParameters);
    exit();
  }
}
?>