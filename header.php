<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa&family=Fruktur&display=swap" rel="stylesheet">
</head>
<style>
    .gocart-img{
        background-image:url(AddDataImages/bag.png);
        background-size: 40px;
        width: 40px;
        height: 40px;
        border: none;
        border-radius: 5px;
        background-repeat: no-repeat;
        background-color: #00ABB3
    }
   

</style>
<body>
 
  <!-- sticky-top -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark " style="background-color: #e3f2fd;">

      <a class="navbar-brand" href="#" style="font-family: 'Fruktur', cursive;">      
        <img src="/AddData&ViewData/AddDataImages/4PF.png" alt="Bootstrap" width="50" height="50">
      </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto" style="margin-right: 12px;">
                <li class="nav-item">
                    <a href="home.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                <div class="dropdown-center">
                  <a href="" class="nav-link" data-bs-toggle="dropdown" aria-expanded="false">Category</a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" style="min-width: 150px !important;">
                  <form action="" method="POST">
                    <li>
                      <div class="form-check dropdown-item">
                        <input class="form-check-input" type="checkbox" value="" name="" id="flexCheckIndeterminate">
                        <label class="form-check-label" for="flexCheckIndeterminate">
                          Toy
                        </label>
                      </div>
                    </li>
                    <li>
                      <div class="form-check dropdown-item">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                        <label class="form-check-label" for="flexCheckIndeterminate">
                          ASUS
                        </label>
                      </div>
                    </li>
                    <li>
                      <div class="form-check dropdown-item">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                        <label class="form-check-label" for="flexCheckIndeterminate">
                          Laptop
                        </label>
                      </div>
                    </li>
                    <li>
                      <div class="form-check dropdown-item">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                        <label class="form-check-label" for="flexCheckIndeterminate">
                          Laptop
                        </label>
                      </div>
                    </li>
                  </form>
                  </ul>
                </div>
                </li>
                <li class="nav-item" style="padding-top: 6px;">
                <div class="btn-group dropstart">
                  <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="AddDataImages/profilelog.png" alt="" width="30px" height="30px">
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" style="min-width: 50px !important; top: 40px; right:0px;">
                  
                    <?php 
                
                    if(! isset($_SESSION['uemail'])){ ?>
                        <li><a class="dropdown-item disabled">Not Logged in</a></li>
                        <hr style="margin:5%">
                        <li><a class="dropdown-item" href="signuplogin.php">Login</a></li>
                        <?php }?>
                        <?php if(isset($_SESSION['uemail'])){ ?>
                        <li><a class="dropdown-item disabled"><?php echo $_SESSION['uname']; ?></a></li>
                        <hr style="margin:5%">
                        <li><a class="dropdown-item" href="user-info.php">Account Information</a></li>
                        <li><a class="dropdown-item" href="order_information.php">Order Information</a></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        <?php } ?> <!-- End if -->
                  </ul>
                </div>
                
                        
                </li>
            </ul>
            <div class="gocart">
              <form action="mycart.php" style="margin-bottom:0px;">
                            <?php 
                              if(isset($_SESSION['cart'])){
                                $total = count($_SESSION['cart']);
                            }
                            else{
                              $total=null;
                            }
                              ?>
                            <input type="submit" name="submit" value=""class="gocart-img" onclick="window.location.href='mycart.php'">
                            <label class="label1"><?= $total?></label>
                            </form>
            </div>
        </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  // $(".navbar-collapse").click(function(){
  //   $(".navbar-collapse").collapse("hide");
  // });
</script>
</body>
</html>
