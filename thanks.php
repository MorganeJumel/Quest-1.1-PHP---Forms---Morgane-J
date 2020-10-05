<?php
   
   echo 'Thank you ' . $_GET['firstName'] .' '. $_GET['lastName'] . ' for getting in touch with us about: ' .$_GET['topic'] . '. <br> One of our team member will contact you shortly, either via your email address: ' . $_GET['userMail'] . ', or via the phone number you\'ve provided: ' .$_GET['userPhone'] .'
   <br> Your message:'.$_GET['userMessage']; 

