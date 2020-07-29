<?php require 'header.php'; ?>
   <!-- =======================================================================
                                        START CONTENT
        ======================================================================= -->
<?php 
$BatasAwal = $contact['paging'];
    if (!empty($_GET['page'])) {
        $hal = $_GET['page'] - 1;
        $MulaiAwal = $BatasAwal * $hal;
    } else if (!empty($_GET['page']) and $_GET['page'] == 1) {
        $MulaiAwal = 0;
    } else if (empty($_GET['page'])) {
        $MulaiAwal = 0;
    }

if(empty($_GET['thiscategory'])){
    $pr=mysqli_query($con,"SELECT * FROM produk where stok>0 order by tanggal desc LIMIT $MulaiAwal , $BatasAwal ");
    $pg=mysqli_query($con,"SELECT * FROM produk where stok>0 ");
    $npr=mysqli_num_rows($pg);
} 
else{
    $tc=base64_decode($_GET['thiscategory']);
    $pr=mysqli_query($con,"SELECT * FROM produk where id_kat_produk='$tc' and stok>0 order by tanggal desc LIMIT $MulaiAwal , $BatasAwal ");
    $pg=mysqli_query($con,"SELECT * FROM produk where id_kat_produk='$tc' and stok>0 ");
    $npr=mysqli_num_rows($pg);
    $jp=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM rkat_produk where id_kat_produk='$tc' "));
    $cat=$jp['kat_produk'];
}
?>
<div class="content">
<!-- =====================================================================
                                             START THE SLIDER
            ====================================================================== -->
            <div class="container">
                <div class="the-slider" data-tesla-plugin="slider" data-tesla-item=".slide" data-tesla-next=".slide-right" data-tesla-prev=".slide-left" data-tesla-container=".slide-wrapper">
                    <div class="slide-arrows">
                        <div class="slide-left"></div>
                        <div class="slide-right"></div>
                    </div>
                    <ul class="slide-wrapper">
<?php $sli=mysqli_query($con,"SELECT * FROM slider order by id_slider desc limit 7");while($der=mysqli_fetch_array($sli)){ ?>
                        <li class="slide"><img style="width:1300px;height:580px;" st src="control/<?php echo $der['gambar']; ?>" alt="slider image"></li>
<?php } ?>
                    </ul><!--   -->
                </div>
            </div>
            <br>
            <br>
            <!-- =====================================================================
                                             END THE SLIDER
            ====================================================================== -->
 <p>&nbsp;</p>
        <div class="container">
            <div class="wrapper">
                <div class="row">
                   <div class="col-md-5"><div>
                       <div class="ck ck-editor-project"><div>
                          <img src="images/logo-psj2.png" style="display:block; margin: auto; width:55%; height: auto;">
                                    </div></div></div></div>
                                    <p>&nbsp;</p>
                                <div class="col-md-6 section-people-two-box" >
                        <h3><b>We are Putri Sindi Jaya</b></h3><br>
                        <p style="text-align: left;"><strong>PT. Putri Sindi Jaya</strong> adalah penyedia layanan yang bergerak di bidang jasa penyewaan Tenda dan Peralatan Pesta, membantu menyediakan segala kebutuhan anda dalam pelaksanaan sebuah acara seperti Pameran, Event, Peluncuran produk, Peresmian gedung, perkantoran, Konser, Pernikahan, Khitanan, Ulang tahun atau kegiatan yang berhubungan dengan pesta baik di dalam gedung (indoor) maupun luar gedung (outdoor).</p>

                    <i class="fa fa-check-circle">&nbsp;&nbsp;Pengalaman puluhan tahun dalam berbagai industri.</i><br>
                    <i class="fa fa-check-circle">&nbsp;&nbsp;Melayani client antar negara.</i><br>
                    <i class="fa fa-check-circle">&nbsp;&nbsp;Fokus pada solusi digital untuk era milenial saat ini.</i>
                        </div></div></div></div></div></div></div>
        <p>&nbsp;</p>
            <div class="container" style="border-bottom: 2px solid #eaeaea;">
                <div class="site-title">
                    <div class="site-inside">
                        <span>Product</span>
                    </div>
                </div>
                <div class="all-products-details" style="padding: 20px 0;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                    <?php while($dui=mysqli_fetch_array($pr)) { ?>
                                <div class="col-md-3 col-xs-4">
                                    <div class="product">
                                        <div class="product-cover">
                                            <div class="product-cover-hover"><span><a href="detailproduct?thisproduct=<?php echo base64_encode($dui['id_produk']) ?>&nameproduct=<?php echo $dui['nama']; ?>">Detail</a></span></div>
                                            <img style="width:300px;height:200px;" src="control/<?php echo $dui['gambar']; ?>" alt="product name" />
                                        </div>    
                                        <div class="product-details">    
                                            <a href="detailproduct?thisproduct=<?php echo base64_encode($dui['id_produk']) ?>&nameproduct=<?php echo $dui['nama']; ?>"><h1 style="font-size:90%;"><?php echo $dui['nama']; ?></h1></a>
                                        </div>
                                    </div>
                                </div>
                    <?php } ?>            
</div>
</div></div></div></div>
   <!-- =======================================================================
                                        END CONTENT
        ======================================================================= -->
<?php require 'footer.php'; ?>