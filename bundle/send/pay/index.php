<?php
    session_start();
    // if(isset($_GET['info'])){
    //     $_SESSION['code_bundle']=$_GET['code'];
    //     $_SESSION['nom_bundle']=$_GET['nom'];
    //     $_SESSION['prix_bundle']=$_GET['prix'];
    //     $_SESSION['description_bundle']=$_GET['description'];
    //     $_SESSION['detail_bundle']=$_GET['detail'];
    //     $_SESSION['img_bundle']=$_GET['img'];
    // }

    // //on va creer un id de transaction
    // if(!isset($_SESSION['order_id_bundle'])){
    //     $_SESSION['order_id_bundle']=(int)time().rand(0,9).rand(0,9);
    // }
    // echo $_SESSION['order_id_bundle'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../ressource/css/css.css?v=3322221">
    <meta name="description" content="Cashdire food, a product cashdirek">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta name="author" content="Cashdirek food">  
    <title>Cashdirek food | pay bundle</title>
</head>
<body> 
    <div class="container-fluid">
        <!-- <div class="row"> -->
         <?php
            //include '../../ressource/file/header.inc.php';
         ?>
        <!-- </div> -->
        <div class="row" id="header-bundle"> 
            <div class="col-12">
                Pay package 
            </div> 
        </div> <br> <br>
        <div id="send-bundle-pay">
            <div class="row">
                <div class="col-12 " >
                    <h4>You are about to pay for your cart with Order ID : <a href="../"><?php echo$_SESSION['order_id_bundle'];?></a> </h4> <br>
                    <div id="term-pay">
                        <p>
                            ldsnf dsnfdsmfn mds,fds nf,mdsnf dsfdsn fdsnf dsfndsf 
                            dsmnfdsm fdsnfds fndsf,m dsfndsf ,mdsnds
                            ldsnf dsnfdsmfn mds,fds nf,mdsnf dsfdsn fdsnf dsfndsf 
                            dsmnfdsm fdsnfds fndsf,m dsfndsf ,mdsnds
                            ldsnf dsnfdsmfn mds,fds nf,mdsnf dsfdsn fdsnf dsfndsf 
                            dsmnfdsm fdsnfds fndsf,m dsfndsf ,mdsnds
                            ldsnf dsnfdsmfn mds,fds nf,mdsnf dsfdsn fdsnf dsfndsf 
                            dsmnfdsm fdsnfds fndsf,m dsfndsf ,mdsnds
                        </p>
                        <div class="row">
                            <div class="col ">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">I have read and accept the terms and conditions</label>
                            </div>
                            </div>
                        </div>
                    </div> <br>
                    <a href="" class="  btn-lg btn-primary">  Pay $500.00 US with Cashdirek</a> 
                </div>
            </div>
        </div> 
        <?php
            // include '../../../ressource/file/footer.inc.php';
            include '../../../ressource/file/commune.inc.php'
        ?>
    </div>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 
</body>
</html>