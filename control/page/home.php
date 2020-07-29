        <div class="col-lg-4 col-md-5 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">

<?php $pro=mysqli_num_rows(mysqli_query($con,"SELECT * from produk")); $ksl=mysqli_fetch_array(mysqli_query($con,"SELECT sum(stok) as stok from produk")); ?>
              <h3><?php if($pro==NULL){echo "0";}else{echo rp($pro);} ?></h3>

              <p>PRODUK</p>
            </div>
            <div class="icon" style="margin-top:12px;">
              <i class="glyphicon glyphicon-book"></i>
            </div>
            <a href="main?thisaction=<?php echo base64_encode('listproduct'); ?>" class="small-box-footer">All Stock : <?php if($ksl['stok']==NULL){echo "0";}else{echo rp($ksl['stok']);} ?></a>
          </div>
        </div>
        <div class="col-lg-6 col-md-7 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
<?php $cont=mysqli_num_rows(mysqli_query($con,"SELECT * FROM control")); ?>
              <h3><?php if($cont==NULL){echo "0";}else{echo rp($cont);} ?></h3>

              <p>ADMIN</p>
            </div>
            <div class="icon" style="margin-top:10px;">
              <i class="glyphicon glyphicon-cog"></i>
            </div>
            <a href="main?thisaction=<?php echo base64_encode('akunadmin'); ?>" class="small-box-footer">All Admin</a>
          </div>
        </div>

       