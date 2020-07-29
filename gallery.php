<?php require 'header.php'; ?>
<!-- ======================================================================
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


            <div class="container" style="border-bottom: 2px solid #eaeaea;">
                <div class="site-title">
                    <div class="site-inside">
                        <span>Gallery</span>
                    </div>
                </div>
                <p>&nbsp;</p>
                    <?php while($dui=mysqli_fetch_array($pr)) { ?>
                                <div class="col-md-4">
                                    <div class="product">
                                        <div class="product-cover">
                                            <img style="width:450px;height:350px;" src="control/<?php echo $dui['gambar']; ?>" alt="product name" />
                                        </div></div></div><?php } ?>            
</div>
</div></div></div>
        <!-- ======================================================================
                                        END CONTENT
        ======================================================================= -->
<?php require 'footer.php'; ?>