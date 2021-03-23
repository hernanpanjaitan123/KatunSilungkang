<?php 
include'koneksi.php';
  $keyword = $_GET['keyword'];
  session_start();
 ?>
 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Katun Silungkang</title>

    <link rel="icon" type="image/png" href="img/.png">
    <link rel="stylesheet" href="css/febi.css">

    <!-- Bootstrap-->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/jquery.bxslider.css">
  </head><!-- Bootstrap core CSS -->
    

    <!-- Custom styles for this template -->
    

    <!---Menubar-->
    <?php
      require_once(dirname(__FILE__).'/commons/menubar.php');
    ?>

    <!-- Core Style CSS -->
    

  <title>Pencarian</title>
</head>
<body>
<?php include('commons/header.php'); ?>

<br>
<br>

<div class="container-fluid" id="content-pencarian" >
  <div class="container">
    <div class="row">
     <h3 class="my-4">Hasil Pencarian :</h3>
      </div>
    </div> 
    <div class="container" id="produk">
    	 <?php 
    if(isset($keyword)){
      if($keyword == ''){
        echo '
        <div class="row">
        <div class="col-xs-12" style="background: #6cd83a;height: 10vh; color:white; line-height:10vh">
          <p>Produk yang anda cari tidak terdeteksi !</p>
        </div>
      </div>
      ';?>
  <?php }else{ ?>
  	<div class="row">

  	<?php 
  	$queryCari = "SELECT * FROM produk WHERE nama_produk LIKE '%$keyword%'";
        $query_cari = mysqli_query($koneksi, $queryCari);
        $jumlahCari = mysqli_num_rows($query_cari);
  	 ?>
  	 <?php 
  	 if($jumlahCari > 0){
        while($arrayCari = mysqli_fetch_array($query_cari)){ 
        ?>
        <!-- Single Product -->
                            <div class="col-12 col-sm-6 col-lg-4">

                                <div class="card">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img style="width: 350px; height: 400px;" src="foto_produk/<?php echo $arrayCari['foto_produk']; ?>" alt="">
                                        <!-- Hover Thumb -->
                                       

                                        <!-- Favourite -->
                                        <div class="product-favourite">
                                            <!-- <a href="#" class="favme fa fa-heart"></a> -->
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class="caption">
                                        <a href="detail.php?id=<?php echo $arrayCari['id_produk']; ?>">
                                            <h6><?php echo $arrayCari['nama_produk']; ?></h6>
                                        </a>
                                        <p class="product-price" style="color : ;">Rp. <?php echo number_format($arrayCari['harga_produk']);?></p>

                                        <!-- Hover Content -->
                                        <div class="Hoverer-content">
                                            <!-- Add to Cart -->
                                            <div class="add-to-cart-btn">
                                                <a href="keranjang.php?id=<?php echo $arrayCari['id_produk']; ?>" class="btn btn-primary">Beli</a>
                                                <a href="detail.php?id=<?php echo $arrayCari['id_produk']; ?>" class="btn btn-default">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

        
        <?php } ?>  
    <?php } ?>
    <?php } ?>    
     <?php } ?>
    </div>

</div>
  </div>
</div>	
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
