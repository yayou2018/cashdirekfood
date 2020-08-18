<?php
    session_start();
    if(isset($_GET['info'])){
        $_SESSION['code_bundle']=$_GET['code'];
        $_SESSION['nom_bundle']=$_GET['nom'];
        $_SESSION['prix_bundle']=$_GET['prix'];
        $_SESSION['description_bundle']=$_GET['description'];
        $_SESSION['detail_bundle']=$_GET['detail'];
        $_SESSION['img_bundle']=$_GET['img'];
    }

    //on va creer un id de transaction
    if(!isset($_SESSION['order_id_bundle'])){
        $_SESSION['order_id_bundle']=(int)time().rand(0,9).rand(0,9);
    }
    // echo $_SESSION['order_id_bundle'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../ressource/css/css.css?v=3321">
    <meta name="description" content="Cashdire food, a product cashdirek">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta name="author" content="Cashdirek food">  
    <title>Cashdirek food | send bundle</title>
</head>
<body> 
    <div class="container-fluid">
        <!-- <div class="row"> -->
         <?php
            include '../../ressource/file/header.inc.php';
         ?>
        <!-- </div> -->
        <div class="row" id="header-bundle"> 
            <div class="col-12">
                send package 
            </div> 
        </div> 
        <div id="send-bundle">
            <div>
                <div class="card mb-3">
                    <div class="row no-gutters align-items-center">
                    <div class="col-md-4">
                        <img src="https://lavil.co/<?php echo $_SESSION['img_bundle'];?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title"><?php echo $_SESSION['nom_bundle']?></h5>
                        <h4><?php echo $_SESSION['prix_bundle']?></h4>
                        <p class="card-text">
                            <?php echo $_SESSION['detail_bundle']?>
                        </p>
                        <p class="card-text"><small class="text-muted"><?php echo $_SESSION['description_bundle']?></small></p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <h2>Information sender</h2>
            <form action="https://lavil.co/api/v1/saveTransactionsCashDirec" method="POST">
                <div class="row">
                    <div class="col-lg-6 col-md-12 p-3">
                    <h5>Full name</h5>
                    <input type="text" class="form-control" required placeholder="Jhon Doe" name="txtnamesender" value="<?php if(isset($_POST['btnsendpackage'])){echo $_POST['txtnamesender']; } ?>">
                    </div>
                    <div class="col-lg-6 col-md-12 p-3">
                    <h5>Phone number</h5>
                    <input type="text" class="form-control"required  placeholder="56902378283" name="txtphonesender" value="<?php if(isset($_POST['btnsendpackage'])){echo $_POST['txtphonesender']; } ?>">
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-6 col-md-12 p-3">
                    <h5>Type document</h5>
                    <select name='txttypedocumentsender'  class='form-control'   >
                        <option value="Passport">Passport</option>
                        <option value="Carton">Carton</option>
                        <option value="RUT">RUT</option>
                        <option value="Driver license ">Driver license </option>
                        <option value="ID #">ID #</option>  
                    </select> 
                    </div>
                    <div class="col-lg-6 col-md-12 p-3">
                    <h5>No. Document</h5>
                    <input type="text" class="form-control" required placeholder="000-231-121"  name="txtnodocumentsender" value="<?php if(isset($_POST['btnsendpackage'])){echo $_POST['txtnodocumentsender']; } ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 p-3">
                    <h5>City</h5>
                    <input type="text" class="form-control" required placeholder="Santiago" name="txtcitysender" value="<?php if(isset($_POST['btnsendpackage'])){echo $_POST['txtcitysender']; } ?>">
                    </div>
                    <div class="col-lg-6 col-md-12 p-3">
                    <h5>Street</h5>
                    <input type="text" class="form-control" required placeholder="los daiyo"  name="txtstreetsender" value="<?php if(isset($_POST['btnsendpackage'])){echo $_POST['txtstreetsender']; } ?>">
                    </div>
                </div> <br>
                <h2>Information receiver</h2>
                <div class="row">
                    <div class="col-lg-6 col-md-12 p-3">
                    <h5>Full name</h5>
                    <input type="text" class="form-control" required placeholder="Jhon Doe"  name="txtnamereceiver" value="<?php if(isset($_POST['btnsendpackage'])){echo $_POST['txtnamereceiver']; } ?>">
                    </div>
                    <div class="col-lg-6 col-md-12 p-3">
                    <h5>Phone number</h5>
                    <input type="text" class="form-control" required  placeholder="50947238112" value="509"  name="txtphonereceiver" value="<?php if(isset($_POST['btnsendpackage'])){echo $_POST['txtphonereceiver']; } ?>">
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-lg-3 col-md-12 p-3">
                    <h5>Department</h5>
                    <select  class="form-control" name="txtdepartmentreceiver" id="departement"  onchange="selectdepartement()" >
                        <option value="Ouest">Ouest</option>
                        <option value="Nippes">Nippes</option>
                        <option value="Nord-Est">Nord-Est</option>
                        <option value="Nord-Ouest">Nord-Ouest</option>
                        <option value="Nord">Nord</option>
                        <option value="Sud">Sud</option>
                        <option value="Grand-Anse">Grand-Anse</option>
                        <option value="Sud-Est">Sud-Est</option>
                        <option value="Centre">Centre</option>
                        <option value="Artibonite">Artibonite</option> 
                    </select> 
                    </div>
                    <div class="col-lg-3 col-md-12 p-3">
                    <h5>City</h5>
                    <div id="commune"> 
                        <select name='communes' id='communes' class='form-control'   >
                        <option value='Arcahaie'>Arcahaie</option> 
                        <option value='Cabaret'>Cabaret</option> 
                        <option value='Croix-des-Bouquets'>Croix-des-Bouquets</option> 
                        <option value='Ganthier'>Ganthier</option> 
                        <option value='Thomazeau'>Thomazeau</option> 
                        <option value='Cornillon'>Cornillon</option> 
                        <option value='Fonds-Verrettes'>Fonds-Verrettes</option> 
                        <option value='Anse-a-Galets'>Anse-a-Galets</option> 
                        <option value='Pointe-a-Raquette'>Pointe-a-Raquette</option> 
                        <option value='Leogane'>Leogane</option> 
                        <option value='Petit-Goave'>Petit-Goave</option> 
                        <option value='Grand-Goave'>Grand-Goave</option> 
                        <option value='Port-au-Prince'>Port-au-Prince</option> 
                        <option value='Carrefour'>Carrefour</option> 
                        <option value='Delmas'>Delmas</option> 
                        <option value='Petion-ville'>Petion-ville</option> 
                        <option value='Port-au-Prince'>Port-au-Prince</option> 
                        <option value='Kenscoff'>Kenscoff</option> 
                        <option value='Cite Soleil'>Cite Soleil</option> 
                        <option value='Gressier'>Gressier</option> 
                        <option value='Tabarre'>Tabarre</option> 
                        </select>
                    </div> 
                    </div>
                    <div class="col-lg-3 col-md-12 p-3">
                    <h5>Street</h5>
                    <input type="text" class="form-control" required placeholder="# 12, delmas 95"  name="txtstreetreceiverr" value="<?php if(isset($_POST['btnsendpackage'])){echo $_POST['txtstreetreceiverr']; } ?>">
                    </div>
                    <div class="col-lg-3 col-md-12 p-3">
                    <h5>Locality</h5>
                    <input type="text" class="form-control" required placeholder="very close to unibank"  name="txtlocalityreceiver" value="<?php if(isset($_POST['btnsendpackage'])){echo $_POST['txtlocalityreceiver']; } ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 p-3">
                    <h5>Deputy beneficiary (Full name)</h5>
                    <input type="text" class="form-control" required placeholder="Jhon Doe"  name="txtnamebeneficiary" value="<?php if(isset($_POST['btnsendpackage'])){echo $_POST['txtnamebeneficiary']; } ?>">
                    </div>
                    <div class="col-lg-6 col-md-12 p-3">
                    <h5>Deputy beneficiary (Phone number)</h5>
                    <input type="text" class="form-control" required placeholder="50947231212" value="509"  name="txtphonebeneficiary" value="<?php if(isset($_POST['btnsendpackage'])){echo $_POST['txtphonebeneficiary']; } ?>">
                    </div>
                </div> 
                <div class="row">
                    <div class="col-lg-6 col-md-12 p-3">
                    <h5>Add memo</h5>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="txtdescription" rows="3" placeholder="Add a little description"></textarea>
                    </div>
                </div> <br>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <a href="../" class="btn btn-danger btn-lg">Cancel</a>
                        <input class="btn btn-primary btn-lg" type="submit" value="Send package" name="btnsendpackage"/>
                    </div>
                </div> 
            </form>
        </div> 
        <?php
            include '../../ressource/file/footer.inc.php';
            include '../../ressource/file/commune.inc.php'
        ?>
    </div>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 
</body>
</html>