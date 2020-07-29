<!--<?php session_start(); date_default_timezone_set('Asia/Jakarta'); require 'php/config.php'; require 'php/function.php'; $contact=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM contact where id_contact='1' ")); ?>-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Putri Sindi Jaya - Tent Rental Services & Party Equipment.</title>
        <link rel="icon" href="favicon.ico">
        <link rel="shortcut icon" href="images/logo.png">
        <meta name="description" content="PT. Putri Sindi Jaya, tent rental services, and indoor and outdoor party equipment." />
        <meta name="author" content="PT. Putri Sindi Jaya, tent rental services, and indoor and outdoor party equipment." />
        <link rel="stylesheet" href="admin2/assets/css/bootstrap.min.css">
        <!-- ======================================================================
                                    Mobile Specific Meta
        ======================================================================= -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- ======================================================================
                                    Style CSS + Google Fonts
        ======================================================================= 
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400italic,700italic,400,600,700,800" rel="stylesheet" type="text/css"> -->
        <link rel="stylesheet" href="css/bootstrap.css" />    
        <link rel="stylesheet" href="css/style.css" />
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script type="text/javascript" src="php/ajax_daerah.js"></script>
    </head>
   
        <!-- ======================================================================
                                        START SCRIPTS
        ======================================================================= -->
        <div class="header">
            <div class="container">
                <div class="header-middle-info">
                     <div class="col-md-4">
                    <div class="header-logo">
                        <a href="index.php">
                          <img src="images/logo.png" alt="Putri Sindi Jaya"></a>
                                </div></div>

                <div class="menu">
                   <div class="repsonsive-menu"><i class="icon-406" title="406"></i> Menu</div><ul>
                        <li><a href="index">Home</a></li>
                        <li class="menu-item-has-children"><a href="#">Kategori</a>
                            <ul>
<?php //kategori produk
$tkp=mysqli_query($con,"SELECT * from rkat_produk order by kat_produk asc ");
while($rtkp=mysqli_fetch_array($tkp)) { $jp=mysqli_num_rows(mysqli_query($con,"SELECT * FROM produk where id_kat_produk='$rtkp[id_kat_produk]' and stok>0 ")); ?>
    <li><a href="product?thiscategory=<?php echo base64_encode($rtkp['id_kat_produk']); ?>"><?php echo $rtkp['kat_produk'].' ('.$jp.')'; ?></a></li>
    <?php }
?>                             
                            </ul>
                        </li>
                        <li><a href="product">Produk</a></li>
                        <li><a href="gallery">Gallery</a></li>
                        <li><a href="contact">About Us</a></li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
        </div>