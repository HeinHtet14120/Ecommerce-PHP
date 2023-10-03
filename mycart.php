<?php

include 'connection.php';
session_start();
?>
<html>
  <head>
    <title>Cart</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <style>
        .label1{
          display: inline-block;
          position: relative;
          bottom: 11px;
          right: 28px;
          font-size: 12px;
          color: #FCFFE7;
          font-weight: bold;
        }
        .minus, .plus{
          width: 20px;
          height: 20px;
          border-radius: 50%;
          padding: 0;
          background-color: #fff;
          border: 1px solid #fff;
        }
        .minus-img{
          height: 10px;
        }
        .plus-img{
          height: 10px;
        }

        .minus:hover{
          border: 1px solid red;
        }

        .plus:hover{
          border: 1px solid green;
        }
        .form-section:focus {
        background-color:#F5F5F5;
        border-color: #28a745;
        box-shadow: 0 0 0 0.1rem rgba(40, 167, 69, 0.25);
        }
        .form-section input{
          border: 0px none;
          background-color:#F5F5F5;
        }
        
    </style>
  </head>
  
  <body>
    <div class="top-container" style="width: 100%; height: 71px; background-color: grey;">
       <?php include 'header.php';?>
    </div>
    <div class="container" style="margin-top: 0%;">
      <div class="row">
        <div class="col-lg-12 text-center border rounded bg-light my-5" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
          <h1>My Cart</h1>
        </div>
<!-- table -->
        <div class="col-lg-9">
          <table class="table">
            <thead class="text-center">
              <tr>
                <th scope="col">Serial No.</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody class="text-center">
                 
                  <?php if(isset($_SESSION['cart'])){
                  foreach($_SESSION['cart'] as $key => $item){?>
                  <tr>
                  <td><?php echo $key+1?></td>
                  <td><?php echo $item['name']?></td>
                  <td><?php echo $item['price']?></td>
                  <td>
                    <form action="managecart.php" method="POST">
                      <button class="minus" name="remove"><img class="minus-img" src="https://cdn-icons-png.flaticon.com/512/860/860821.png" alt=""></button>
                      <?= $item['Quantity'];?>
                      <input type="hidden" name="fname" value="<?= $item['name'];?>">
                      <button class="plus" name="add"><img class="plus-img" src="https://cdn-icons-png.flaticon.com/512/1828/1828925.png" alt=""> </button>
                    </form>
                  </td>
                  <?php $total = $item['price']* $item['Quantity'];
                  if(isset($alltotal)){
                    $alltotal= $total+$alltotal ;
                  }else{
                    $alltotal=$total;
                  }
                          
                  ?>   
                  <td><?php echo $item['price']* $item['Quantity']?></td>
                  <td>
                    <form action="managecart.php" method="POST">
                      <input type="submit" name="remove" class="btn btn-outline-danger" value="Remove">
                      <input type="hidden" name="name" value="<?= $item['name']?>">
                    </form>
                  </td>
                  </tr>
                  <?php }?> 
                  <?php }?>   
                  <tr>
                    <td>Total : </td>
                    <!-- <?php if($alltotal!=0){ ?> -->
                      <td><?php echo $alltotal;?></td>
                    <?php } ?>                
                  </tr>      
            </tbody> 
          </table>
        </div>
<!-- box -->
        <div class="col-lg-3">
          <div class="border bg-light rounded text-center p-4">
            <h4>Total</h4>
            
            
            <h5 id="gtotal"><?php if(isset($alltotal)){ ?>
              <?=$alltotal?>
            <?php }?></h5>
            <form>
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Checkout</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel" style="height: 88%;">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Place Your Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body small" style="margin: auto; width:50%;">
        <form action="checkoutlast.php" class="form-section" style="margin: 10px auto 10px auto; " method="POST">
          <div>
            <div style="width: 45%; display: inline-block;"> 
              <label class="form-label">Your Name</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="cname" placeholder="Name" required>
            </div>
            <div style="width: 45%; display: inline-block;">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" name="cemail" placeholder="name@example.com" required>
            </div>
          </div>
          <div>
            <div style="width: 45%; display:inline-block; margin-top: 10px;">
              <label class="form-label">Phone Number</label>
              <input type="number" class="form-control" id="exampleFormControlInput1" name="cph" placeholder="Phone Number" required>
            </div>
            <div style="width: 45%; display: inline-block;">
              <label class="form-label">City</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="ccity" placeholder="City" required>
            </div>
            <select class="form-select form-select mb-3" aria-label=".form-select-lg example"s name="country" style="width: 91%;margin-top: 16px;" required>
              <option selected>Country</option>
              <option value="mm">Myanmar</option>
              <option value="sg">Singapore</option>
              <option value="th">Thailand</option>
            </select>
          </div>
          <div class="mb-3" >
            <label for="exampleFormControlInput1" class="form-label">Address</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Address" name="caddress" style=" width: 91%;" required>
          </div>
          <div>
            <h6 style="padding-bottom: 10px;">Payment Method</h6>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="inlineCheckbox1" value="kbzpay" name="payment" required>
              <label class="form-check-label" for="inlineCheckbox1">
                <img class="fit-image" src="AddDataImages/Kbzpay.png" width="50px" height="50px">
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="inlineCheckbox2" value="mastercart" name="payment" required>
              <label class="form-check-label" for="inlineCheckbox2">
                <img class="fit-image" src="AddDataImages/MasterCard_Logo.png" width="50px" height="38px"> 
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="inlineCheckbox2" value="visa" name="payment" required>
              <label class="form-check-label" for="inlineCheckbox2">
              <img class="fit-image" src="AddDataImages/visa.png" width="50px" height="50px">
              </label>
            </div> 
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio"  id="inlineCheckbox2" value="payapl" name="payment" required>
              <label class="form-check-label" for="inlineCheckbox2">
              <img class="fit-image" src="AddDataImages/paypal.png" width="40px" height="40px">
              </label>
            </div> 
          </div>  
          <input type="hidden" value="<?=$alltotal;?>" name="alltotal">
          <input class="btn btn-light" type="submit" name="submit" value="Confirm" style="margin-top: 30px;margin-left: 40%; color:black;">        

        </form>

        </div>  
    </div>
  </body>
</html>