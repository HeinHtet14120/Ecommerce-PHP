<html>
<head>
<title>Searching</title>
<link rel="stylesheet" href="bootstrap.css" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap-theme.css" crossorigin="anonymous">
<style>
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
            margin-bottom: 4px;
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
			width: 100%;
			margin-top: 10px;
			bottom: 0px;
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
</style>
</head>

<body>
<?php

$con=new PDO("mysql:host=localhost; dbname=unibcecom","root","");
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$searchErr = '';
$employee_details='';
if(isset($_POST['searchsub']))
{
	if(!empty($_POST['search']))
	{
		$search = $_POST['search'];
		$stmt = $con->prepare("select * from item where name like '%$search%' ");
		$stmt->execute();
		$employee_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	else
	{
		$searchErr = "Please enter the information";
	} 
}
?>

	</div>
    </form>
	<?php include"header.php";?>
	<br/><br/>
	
	    <div class="row px-5" style="padding: 0px; width: 100%;">
		<?php
		    	 if(!$employee_details)
		    	 {
		    		echo '<tr>nothing found</tr>';
		    	 }
		    	 else{
					
		    	 	foreach($employee_details as $key=>$value)
		    	 	{
		    	 		?>
        <table>
            <tr>
                <td style="height:290px;">
                    <div class="table-data">
                        <form method="post" action="managecart.php">
                        <img src="AddDataImages/<?= $value['image'];?>" alt="Images" width="120px" height="150px">
                        <input type="hidden" name="id" value="<?=$value['Iid'];?>">
                        <input type="hidden" name="name" value="<?=$value['name'];?>">
						<input type="hidden" name="price" value="<?= $value['price'];?>">
                        <p class="table-para"><?php echo $value['name'];?></p>
                        <p class="table-para"><?php echo $value['category'];?></p>
                        <p class="table-para">$ <?= $value['price'];?></p>
                        <input type="submit" value="Details" class="switch" data-bs-toggle="modal" data-bs-target="#exampleModal" style="font-weight: 450;" formaction="moredetailpage.php">
                        <input type="submit"  value="AddCart" class="switch1" name="buy" style="font-weight: 450;">
                        </form>
                        
                   
                    </div>
                </td>
            </tr>


        </table>
		    	 		
		    	 		<?php
		    	 	}
		    	 	
		    	 }
		    	?>
		</div>
	    	
	    	
	     
	
	
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

<script src="jquery-3.2.1.min.js"></script>
<script src="bootstrap.min.js"></script>
</body>

</html>