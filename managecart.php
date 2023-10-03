<?php
session_start();

if(isset($_POST['buy'])){
    if(isset($_SESSION['cart'])){
    $sameitem = array_column($_SESSION['cart'],"name");
    if(in_array($_POST['name'],$sameitem)){
        echo"
        <script>
        alert('item already added');
        window.location.href='home.php';
        </script>
      ";
    }else{
        $count= count($_SESSION['cart']);
        $_SESSION['cart'][$count]=array("name"=>$_POST['name'],"price"=>$_POST['price'],
        "Quantity"=>1);
        echo"
          <script>
          alert('item added');
          window.location.href='home.php';
          </script>
        ";
    }
}else{
        $_SESSION['cart'][0]=array("name"=>$_POST['name'],"price"=>$_POST['price'],
        "Quantity"=>1);
        echo"
          <script>
          alert('item added');
          window.location.href='home.php';
          </script>
        ";
}

}

if(isset($_POST['remove'])){
  foreach($_SESSION['cart'] as $key => $value){
    if($value['name'] == $_POST['name']){
      unset($_SESSION['cart'][$key]);
      $_SESSION['cart']=array_values($_SESSION['cart']);
      echo"
          <script>
          alert('item removed');
          window.location.href='home.php';
          </script>
        ";
    }
  }
}

if(isset($_POST['remove'])){
  $additem=$_POST['fname'];
  $same = array_column($_SESSION['cart'],"name");
  if(in_array($additem,$same)){
    $index = array_search($additem,$same);
    $_SESSION['cart'][$index]['Quantity']--;
  }
  if($_SESSION['cart'][array_search($additem,$same)]['Quantity']==0){
    unset($_SESSION['cart'][array_search($additem,$same)]);
    $_SESSION['cart'] = array_values($_SESSION['cart']);
  }
  header('Location: mycart.php');
}

if(isset($_POST['add'])){
  $additem = $_POST['fname'];
  $same = array_column($_SESSION['cart'],"name");
  if(in_array($additem,$same)){
    $index = array_search($additem,$same);
    $_SESSION['cart'][$index]["Quantity"]++;
  }
  header('Location: mycart.php');
}

