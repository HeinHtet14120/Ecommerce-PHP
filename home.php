<?php
    include 'connection.php';
    session_start();
    
    $sql = $db -> prepare("SELECT * FROM item");
        $sql -> execute();
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa&family=Fruktur&display=swap" rel="stylesheet">
    <title>Home</title>


    <style>
        body{
            background-color: #474E68;
            margin: 0;
        }
        h1{
            font-family: 'Fruktur', cursive;
            font-size: 7rem;
        }
        h2{
            font-family: 'Changa', sans-serif;
        }
        header{
            background-image:-webkit-linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.7)), url(AddDataImages/KawsCover.jpg);
            background-image:linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.7)), url(AddDataImages/KawsCover.jpg);
            height: 100vh;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .header-box{
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%,-50%);
                    transform: translate(-50%,-50%);
            text-align: center;

        }

        .header-box-text{
            color: #FAF7F0;
            margin-bottom: 100px;
        }
        .container{
            padding-top: 6.5%;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            background-color: #ffff;
        }
    
        .switch1{
            margin-top: 5px;
            padding: 8px 10px;
            background-color: #ffff;
            color: black;
            border: none;
            border-radius: 10px;
            letter-spacing: 2px;
            overflow: hidden;
            transition: 0.5s;
            cursor: pointer;
            position: relative;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
        }
        .switch{
            padding: 8px 10px;
            background-color: #20262E;
            color: #E9E8E8;
            border: none;
            border-radius: 10px;
            letter-spacing: 1px;
            overflow: hidden;
            transition: 0.5s;
            cursor: pointer;
            position: relative;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
        }

        .switch:hover{
            background-color: #E9E8E8;
            transition: .1s;
            color:  black;
            box-shadow: 0 0 5px  #00ABB3;
            border: 1px solid;
            border-color:  #00ABB3;
            
        }

        .switch1:hover{
            /* padding: 10px 11px; */
            transition: .4s;
            /* background:#063a92; */
            /* letter-spacing: 3px; */
            box-shadow: 0 0 5px #063a92;
            border: 1px solid;
            border-color: #171717;
            
        }

        tr {
        display: block;
        float: left;
        margin-left: 8px;
        margin-bottom: 10px;
        }
        td {
        width: 250px;
        padding: 4px;
        display: block;
        border: 1px solid #ccc;
        margin-right: 5px;
        border-radius: 4px;
        background-color: #FAF7F0;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
        height: 235px;
        }
        .table-data{
            padding: 5px 5px;
            text-align: center;
        }

        .table-data p{
            text-align: left;
            font-size: 14px;
        }
        td div img {
            box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        footer{
            background-color: #333;
            font-size:80%;
            padding: 20px;
            color: #888;
        }

        .footer-nav{
            float: left;
        }

        .social-link{
            float: right;
        }

        .footer-nav li {
            list-style: none;
            display: inline-block;
            margin-right: 20px;
        }


        .social-link li a:link,
        .social-link li a:visited,
        .footer-nav li a:link,
        .footer-nav li a:visited{
            text-decoration: none;
            color: #888;
            -webkit-transition: color 0.2s;
            transition: color 0.2s;
        }

        .footer-nav li a:hover,
        .footer-nav li a:active{
            color: #fff;
        }

        .social-link li {
            list-style: none;
            display: inline-block;
            margin-left: 20px;
        }

        .social-link li a:link,
        .social-link li a:visited {
            font-size: 160%;
        }

        .fa-facebook-f,
        .fa-twitter,
        .fa-instagram,
        .fa-google-plus-g{
            -webkit-transition: color 0.2s;
            transition: color 0.2s;
        }

        .fa-facebook-f:hover {
            color:#3b5998 ;
        }

        .fa-twitter:hover {
            color:#00aced ;
        }

        .fa-instagram:hover {
            color:#F77737 ;
        }

        .fa-google-plus-g:hover {
            color:#dd4b39 ;
        }

        footer p{
            text-align: center;
            margin-top: 51px;
            line-height: 1.5;
        }

        .label1{
          display: inline-block;
          position: relative;
          bottom: 11px;
          right: 28px;
          font-size: 12px;
          color: #FCFFE7;
          font-weight: bold;
        }
        .table-para{
         margin-bottom: 0px;
        }

        /* startshopping */
        .bn54 {
            margin: auto;
            position: relative;
            outline: none;
            text-decoration: none;
            border-radius: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            text-transform: uppercase;
            height: 45px;
            width: 150px;
            opacity: 1;
            /* background-color: grey; */
            border: 1px solid rgba(0, 0, 0, 0.6);
            }

            .bn54 .bn54span {
            font-family: 'Changa', sans-serif;
            color: #000000;
            font-size: 15px;
            font-weight: bold;
            letter-spacing: 0.7px;
            }

            .bn54:hover {
            animation: bn54rotate 0.7s ease-in-out both;
            }

            .bn54:hover .bn54span {
            animation: bn54storm 0.7s ease-in-out both;
            animation-delay: 0.06s;
            }

            @keyframes bn54rotate {
            0% {
                transform: rotate(0deg) translate3d(0, 0, 0);
            }
            25% {
                transform: rotate(3deg) translate3d(0, 0, 0);
            }
            50% {
                transform: rotate(-3deg) translate3d(0, 0, 0);
            }
            75% {
                transform: rotate(1deg) translate3d(0, 0, 0);
            }
            100% {
                transform: rotate(0deg) translate3d(0, 0, 0);
            }
            }

            @keyframes bn54storm {
            0% {
                transform: translate3d(0, 0, 0) translateZ(0);
            }
            25% {
                transform: translate3d(4px, 0, 0) translateZ(0);
            }
            50% {
                transform: translate3d(-3px, 0, 0) translateZ(0);
            }
            75% {
                transform: translate3d(2px, 0, 0) translateZ(0);
            }
            100% {
                transform: translate3d(0, 0, 0) translateZ(0);
            }
            }

            .flexbox {
                background: linear-gradient(155deg, #55c7ed, #2bb3e0, #3bc1ed);
                width: 100%;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                }

                .search-box{
                margin: 10px auto;
                width: fit-content;
                height: fit-content;
                position: relative;
                }
                .input-search{
                height: 50px;
                width: 50px;
                border-style: none;
                padding: 10px;
                font-size: 18px;
                letter-spacing: 2px;
                outline: none;
                border-radius: 25px;
                transition: all .5s ease-in-out;
                background-color: black;
                padding-right: 40px;
                color:#fff;
                }
                .input-search::placeholder{
                color:rgba(255,255,255,.5);
                font-size: 18px;
                letter-spacing: 2px;
                font-weight: 100;
                }
                .btn-search{
                width: 50px;
                height: 50px;
                border-style: none;
                font-size: 20px;
                font-weight: bold;
                outline: none;
                cursor: pointer;
                border-radius: 50%;
                position: absolute;
                right: 0px;
                color:#ffffff ;
                background-color:transparent;
                pointer-events: painted;  
                }
                .btn-search:focus ~ .input-search{
                width: 300px;
                border-radius: 0px;
                background-color: black;
                border-bottom:1px solid rgba(255,255,255,.5);
                transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
                }
                .input-search:focus{
                width: 250px;
                border-radius: 25px;
                background-color: black;
                border-bottom:1px solid rgba(255,255,255,.5);
                transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
                }

                .search-bar{
                    border-radius: 10px;
                }




               

    </style>
</head>
<body>
<?php include 'header.php';?>
        <header id="home">
        
        <div class="header-box">
        <div class="header-box-text">
            <h1 style="font-size: 4rem;">4pf</h1><br>
            <h2>The one stop for all your digital solutions </h2> 
        </div>
          <!-- <button type="button" class="btn btn-outline-info"> -->
           <a class="nav-link" href="#shoppingpage" style="font-weight: bold;">
           <button class="bn54">
           <span class="bn54span">Start Shopping!</span>
           </button></a>
          <!-- </button> -->

        </div>
        
        
        </header> 

       
        <div id="carouselExampleFade" class="carousel slide carousel-fade">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="/AddData&ViewData/AddDataImages/hd-kaws-wallpaper-whatspaper-6.jpg" class="d-block w-100" alt="..." height="600vh">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="/AddData&ViewData/AddDataImages/matthew-hamilton-kbeIGiNWDaY-unsplash.jpg" class="d-block w-100" alt="..." height="600vh">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="/AddData&ViewData/AddDataImages/kaws-sculpture-under-sunset-f7l7ruw1sd4nc97u.jpg" class="d-block w-100" alt="..." height="600vh">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> 
        <!-- <div class="search-box">
            <button class="btn-search" type="submit" name="searchsub" action="searching.php"><i class="fas fa-search"></i></button>
            <input type="text" name="search" class="input-search" placeholder="Type to Search..." autocomplete="off">    
        </div> -->
         
        <div class="search-box">
        <form action="searching.php" class="search-bar" method="POST">
            <input type="search" name="search" class="input-search" placeholder="Type to Search..." required autocomplete="off">
            <button class="btn-search" type="submit" name="searchsub" formaction="searching.php">
            <i class="fas fa-search"></i>
            </button>
        </form>
        </div>
       
        <div class="container" style="max-width: 100%;padding-top: 15px;" id="shoppingpage">
        
        <table>
            <tr>
            <?php
                 while ($row=$sql-> fetch(PDO::FETCH_ASSOC)){
                    extract($row);
                ?>
                <td style="height:290px;">
                    <div class="table-data">
                        <form method="post" action="managecart.php">
                         <input type="hidden" name="id" value="<?=$Iid;?>">   
                        <img src="AddDataImages/<?= $image;?>" alt="Images" width="120px" height="140px">
                        <input type="hidden" name="name" value="<?= $name;?>">
                        <p class="table-para"><?= $name;?></p>
                        <input type="hidden" name="price" value="<?= $price;?>">
                        <p class="table-para"><?=$category;?></p>
                        <p class="table-para">$ <?= $price;?></p>
                        <!-- <p class="table-para">Description:<?= $description;?></p> -->
                        <input type="submit" value="Details" class="switch" data-bs-toggle="modal" data-bs-target="#exampleModal" style="font-weight: 450;" formaction="moredetailpage.php">
                        <input type="submit"  value="AddCart" class="switch1" name="buy" style="font-weight: 450;">
                        </form>
                        
                   
                    </div>
                </td>
            </tr>

            <?php   
        }
?>
        </table>
      
    </div>
        <footer>
        <div class="row">
            <div class="col span_1_of_2">
                <ul class="footer-nav">
                    <li><a href="about.php">About us</a></li>
                    <li><a href="#">Blogs</a></li>
                    <li><a href="#">Help & Support</a></li>
                </ul>
            </div>
            <div class="col span_1_of_2">
                <ul class="social-link">
                    <li><a href="#"><i class="fab fa-facebook-f "></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter "></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram "></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-g "></i></a></li>
                    
                </ul>
            </div>
        </div>

        <div class="row">
            <p>
                This webpage has been created for educational purpose by Hein Htet aka hforhiphop.
            </p>
            
        </div>
    </footer>

</body>
</html>