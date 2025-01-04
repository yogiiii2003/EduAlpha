<?php
   $db_name = 'mysql:host=localhost;port=3307;dbname=edualpha';
   $user_name = 'root';
   $user_password = 'yogi'; 
   try {
       $conn = new PDO($db_name, $user_name, $user_password);
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch (PDOException $e) {
       die("Connection failed: " . $e->getMessage());
   }
   
   function unique_id($length = 20) {
       $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
       $rand = '';
       $str_length = strlen($str);
       for ($i = 0; $i < $length; $i++) {
           $rand .= $str[random_int(0, $str_length - 1)];
       }
       return $rand;
   }
?>
