<?php

//define variables and set to empty values
$firstNameError = '';
$lastNameError = '';
$emailError = '';
$phoneNumberError ='';
$selectError = '';
$messageError = '';
$numberError = 0;


    //start validation
    if (empty($_POST['firstName'])) 
    {
        $numberError++;
        $firstName = $_POST["firstName"];
        $firstNameError = 'Your first name is required';
    }

    if (empty($_POST['lastName'])) 
    {
        $numberError++;
        $lastName = $_POST['lastName'];
        $lastNameError = 'Your last name is required';
    }

    if (!filter_var ($_POST['email'], FILTER_VALIDATE_EMAIL)) 
    {
        $numberError++;
        $email = $_POST['email'];
        $emailError = 'Email is required';
    } 
    
    if (empty($_POST['phone'])) 
    {
        $numberError++;
        $phoneNumber = $_POST['phone'];
        $phoneNumberError = 'Your phone number is required';
    }

    if (empty($_POST['topic'])) 
    {
        $numberError++;
        $select = $_POST['topic'];
        $selectError = "Please select a topic";
    } 

    if (empty($_POST['message'])) 
    {
        $numberError++;
        $message = $_POST['message'];
        $messageError = 'Your message is required';
    }

echo $firstNameError .'<br>';
echo $lastNameError .'<br>'; 
echo $emailError .'<br>'; 
echo $phoneNumberError .'<br>'; 
echo $selectError .'<br>';
echo $messageError .'<br>';

if ($numberError === 0)
{
    
    header('Location:thanks.php?firstName=' . $_POST['firstName'] .' '. '&lastName=' . $_POST['lastName'] .' '. '&topic=' . $_POST['topic'] .' '. '&email=' . $_POST['email'] .' '. '&phone=' . $_POST['phone'] .' '. '&message=' . $_POST['message']);

}

?>