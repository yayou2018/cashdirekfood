<?php
    //on va afficher la liste des packages
    $url="https://lavil.co/api/v1/getBundleForCashDirect";
    $data= (file_get_contents($url));
    // echo gettype($data);
    $data_decode= json_decode(($data),true);  
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../ressource/css/css.css?v=331">
    <meta name="description" content="Cashdire food, a product cashdirek">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta name="author" content="Cashdirek food">  
    <title>Cashdirek food | list bundle</title>
</head>
<body> 
    <div class="container-fluid">
        <!-- <div class="row"> -->
         <?php
            include '../ressource/file/header.inc.php';
         ?>
        <!-- </div> -->
        <div class="row" id="header-bundle"> 
            <div class="col-12">
                Cashdir&egrave;k food 
            </div> 
        </div>
        <div id="list-product">
        <div class="container">
            <h2>Voye manje bay fanmi w <strong>AYITI</strong> </h2>
            <h4>Sa moun yo plis mande ―</h4> <br>
            <div class="row mb-5">
                <?php //$i=0;
                // for($i=0;$i<=4;$i++){
                     foreach ($data_decode as  $value) {
                         for($i=0;$i<=4;$i++){ 
                            $code=$value[$i]['code_item'];
                            $nom= $value[$i]['name'];
                            $img=$value[$i]['image'];
                            $prix= $value[$i]['real_price_dollards'];
                            $description= $value[$i]['descriptif_produits'];
                            $detail= substr($value[$i]['details_prod'],0,200).'...';
                            $detail_=$value[$i]['details_prod'];
                            echo "<div class='col-md-4 bundle' style='margin-bottom:20px;' id='bundle$i'>
                                <div class='card'>
                                    <img src='https://lavil.co/$img' class='card-img-top' alt='$description'>
                                    <div class='card-body'>
                                    <h5 class='card-title'>$nom</h5>
                                    <p class='card-text'>
                                        $detail
                                    </p>
                                    <p class='btn btn-danger'>$$prix US</p> <br/>
                                    <a href='send/?info&code=$code&img=$img&nom=$nom&prix=$prix&description=$description&detail=$detail_' class='btn btn-lg btn-primary'>Buy now</a> 
                                    </div>
                                </div>
                            </div>"; 
                        }
                        // die();
                        // $i++;
                    }
                ?> 
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="../ressource/img/back.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="../ressource/img/back.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="../ressource/img/back.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div> <br>
            <!-- row -->
            <h3>K&egrave;k l&ograve;t  ―</h3> <br>
            <div class="row mb-5 cstm-height-card">
                <div class="col-md-4">
                <div class="card">
                    <img src="../ressource/img/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="card">
                    <img src="../ressource/img/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="card">
                    <img src="../ressource/img/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                    </div>
                </div>
                </div>
            </div>  
            </div>
        </div> 
        <?php
            include '../ressource/file/footer.inc.php';
        ?>
    </div>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){ 
            for(i=0;i<=4;i++){
                $('#bundle'+i).hide();
            } 
        });
    </script>
</body>
</html>