<?php
  
    if(empty($_POST['name']) && empty($_POST['email'])||empty($_POST['birthday'])||empty($_POST['gender'])||empty($_POST['country'])){
     
        echo " <br/> Please fill in the fields";
   
    }else{
        $name= $_POST['name'];
        $email= $_POST['email'];
        $birthday= $_POST['birthday'];
        $gender= $_POST['gender'];
        $country= $_POST['country'];
        echo ('Your Name is:     '. $name. '<br/>');
        echo ('Your Email is:'   . $email. '<br/>');
        echo ('Your birthday is:'   . $birthday. '<br/>');
        echo ('Your gender is:'   . $gender. '<br/>');
        echo ('Your country is:'   . $country. '<br/>');
    }
?>

