<?php

echo 'Thank you ' . $_POST['firstName']. '' .$_POST['lastName'] . ' for getting in touch with us about: '. ''.$_POST['topic']; 
echo '<br>';
echo 'One of our team member will contact you shortly, either via your email address: ' . $_POST['email']. ', or via the phone number you\'ve provided: ' .$_POST['phone'] . ' about your request: ' . $_POST['message']; 

