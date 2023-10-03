<?php
   include 'connection.php';
   session_start();
   if(isset($_POST['submit'])){
      $cname= $_POST['cname'];
      $cemail= $_POST['cemail'];
      $cph= $_POST['cph'];
      $ccity= $_POST['ccity'];
      $country= $_POST['country'];
      $caddress= $_POST['caddress'];
      $cpayment= $_POST['payment'];
      $alltotal = $_POST['alltotal'];

      try{
         $sql = "INSERT INTO customerinfo(cname, cemail, cph, city, country, address, payment)
         VALUE('$cname','$cemail','$cph', '$ccity', '$country', '$caddress', '$cpayment')";
         $db->exec($sql);
         echo "Customer data Inserted"."<br>";
         echo $alltotal;
         function getUser($input) {
            include 'connection.php';
   
            $cus=$db->prepare("SELECT * FROM customerinfo");
            $cus->execute();
            while($row = $cus->fetch(PDO::FETCH_ASSOC)) {
               extract($row);
   
               if($input == $cname) {
                  $userData = array('cid' => $cid, 'cname' => $cname);
   
                  return $userData;
               }
            }
         }         
         $user = getUser($_POST['cname']);
         print_r($user);
         $cusID = $user['cid'];
         $cusName= $user['cname'];

            foreach($_SESSION['cart'] as $key => $value){
               echo "Order data inserted";
               $pname = $value['name'];
               $price = $value['price'];
               $quantity = $value['Quantity'];
               try{
                   $ordersql = "INSERT INTO orders(cid, cusName, productName, price, quantity, totalamount)
                                  VALUE('$cusID','$cusName','$pname','$price','$quantity','$alltotal')";
                   $db->exec($ordersql);
                   echo "Fuc**ing Orders added ";
                   
                   unset($_SESSION['cart']);}
                   catch(PDOException $e1){
                     echo $e1->getMessage();
                   }
         }
      } catch(PDOException $e){
         echo $e->getMessage();
      }

      
   
   }