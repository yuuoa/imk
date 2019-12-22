<!DOCTYPE html>
<html>
<body>
<!DOCTYPE html>
<html>
<head>
	<title>Millenial's Cake</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity=sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Pacifico|Satisfy&display=swap" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lakki+Reddy&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="http://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="jquery.nice-number.js"></script>
    <script type="text/javascript">
    $(function(){
        $('input[type="number"]').niceNumber();
    });
   </script>
</head>
<body>

<div class="container">
    <div class="container">
	   <div class="logo">
				<a href="./index.php">
            		<img src="img/cupcake1.png" alt="Logo" class="logoo">
            	</a>
            	<h1>Millenial's Cake</h1>
                  <p><button class="button"data-toggle="modal" data-target="#myModalca" width="40px"> <img src="./img/cart.png" alt="cart" width="20px"> Cart</button></p>
                  <p><button class="button"data-toggle="modal" data-target="#myModalem" width="40px">debug-menu</button></p>
            </div>
    </div>
    </div>

    <div class="makanan">
      <div class="container">
        <div class="row">
            <div class="Home col-lg-12">
              <div class="judul-makanan">
                <h3>This is section for our amazing cakes </h3>
                <hr width="20%" text-align="center" color="black"><br><br><br>
              </div>

              <div class="bagian-atas">

                <div class="container">
                  <div class="row">
                    <div class="col-lg-4">
                      <img src="img/cakes 2.jpg" alt="CDC" class="cdc" >
                      <div class="container">
                        <h2>Chocolate Drip Cake</h2>
                        <p><button class="button"data-toggle="modal" data-target="#myModalc" >Order</button></p>
                      </div>
                    </div>
  
                    <div class="col-lg-4">
                    <img src="img/cakes 3.jpg" alt="SFC" class="sfc" >
                    <div class="container">
                      <h2 style="text-align: center;">Summer Fruit Cake</h2> 
                      <p><button class="button"data-toggle="modal" data-target="#myModals" >Order</button></p>
                    </div>
                    </div>
              
  
                      <div class="col-lg-4">
                        <img src="img/cakes 4.jpg" alt="uc" class="uc" >
                        <div class="container">
                          <h2>Unicorn Cake</h2>
                          <p><button class="button"data-toggle="modal" data-target="#myModalu" >Order</button></p>
                        </div>
                      </div>
                  </div>
                </div>

              </div>
              
              <div class="bagian-bawah">

                <div class="container">
                  <div class="row">

                      <div class="col-lg-4">
                        <img src="img/cakes 5.jpg" alt="mc" class="mc" >
                        <div class="container">
                          <h2>Mermaid Cake</h2>
                          <p><button class="button"data-toggle="modal" data-target="#myModalm" >Order</button></p>
                        </div>
                      </div>
         
    
                      <div class="col-lg-4">
                        <img src="img/cakes 6.jpg" alt="bc" class="bc" >
                        <div class="container">
                          <h2>Bloomburrys Cake</h2>
                          <p><button class="button"data-toggle="modal" data-target="#myModalb" >Order</button></p>
                        </div>
                      </div>

                          <div class="col-lg-4">
                            <img src="img/cakes 7.jpg" alt="fc" class="fc" >
                            <div class="container">
                              <h2>Funfetti Cake</h2>
                              <p><button class="button"data-toggle="modal" data-target="#myModalf" >Order</button></p>
                            </div>
                          </div>
                  
                    </div>
                </div>

               
              </div>
                      
                    </div>
                    </div>
        
    </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                

                  <!-- The Modal -->
                  <div class="modal fade" id="myModalc">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
          
                        <!-- Modal Header -->
                          <button type="button" class="close" data-dismiss="modal" style="text-align:right; padding-top:10px;padding-right:15px;">&times;</button>
                          <img class="moco" src="img/cakes 2.jpg" style="align-items: center;">
            
                        <!-- Modal body -->
                        <div class="modal-body">
                            <h2 class="moco">Chocolate Drip Cake</h2>
                              <p>Rp. 750.000/pcs</p>
                              
                              <form method="post">
                              Notes : <input type="text" name="permintaana" style="width: auto; height: 30px;"><br>
                              <br>Quantity : <input type="number" name="kuantitasa"></p>
                              <input type="submit" style="width:100%; background-color:white; color:black; border: solid #ed9f5d" value="order">
                            </form>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12">
              

                <!-- The Modal -->
                <div class="modal fade" id="myModals">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
        
                      <!-- Modal Header -->
                      <button type="button" class="close" data-dismiss="modal" style="text-align:right; padding-top:10px;padding-right:15px;">&times;</button>
                          <img class="moco" src="img/cakes 3.jpg" style="align-items: center;">
          
                      <!-- Modal body -->
                      <div class="modal-body">
                          <h2 class="moco">Summer Fruit Cake</h2>
                          <p>Rp. 780.000/pcs</p>
                          <form method="post">
                              Notes : <input type="text" name="permintaanb" style="width: auto; height: 30px;"><br>
                              <br>Quantity : <input type="number" name="kuantitasb"></p>
                              <input type="submit" style="width:100%; background-color:white; color:black; border: solid #ed9f5d" value="order">
                            </form>
                      </div>          
                    </div>
                  </div>
                </div>
          </div>
    </div>
  </div>


  <div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            

              <!-- The Modal -->
              <div class="modal fade" id="myModalu">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
      
                    <!-- Modal Header -->
                    <button type="button" class="close" data-dismiss="modal" style="text-align:right; padding-top:10px;padding-right:15px;">&times;</button>
                          <img class="moco" src="img/cakes 4.jpg" style="align-items: center;">
        
                    <!-- Modal body -->
                    <div class="modal-body">
                        <h2 class="moco">Unicorn Cake</h2>
                        <p>Rp. 800.000/pcs</p>
                        <form method="post">
                              Notes : <input type="text" name="permintaanc" style="width: auto; height: 30px;"><br>
                              <br>Quantity : <input type="number" name="kuantitasc"></p>
                              <input type="submit" style="width:100%; background-color:white; color:black; border: solid #ed9f5d" value="order">
                            </form>
                    </div>
                  </div>
                </div>
              </div>
        </div>
  </div>
</div>

<div class="container">
  <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
          

            <!-- The Modal -->
            <div class="modal fade" id="myModalm">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
    
                  <!-- Modal Header -->
                  <button type="button" class="close" data-dismiss="modal" style="text-align:right; padding-top:10px;padding-right:15px;">&times;</button>
                          <img class="moco" src="img/cakes 5.jpg" style="align-items: center;">
      
                  <!-- Modal body -->
                  <div class="modal-body">
                      <h2 class="moco">Maermaid Cake</h2>
                      <p>Rp. 800.000/pcs</p>
                      <form method="post">
                        Notes : <input type="text" name="permintaand" style="width: auto; height: 30px;"><br>
                        <br>Quantity : <input type="number" name="kuantitasd"></p>
                        <input type="submit" style="width:100%; background-color:white; color:black; border: solid #ed9f5d" value="order">
                      </form>
                  </div>
                </div>
              </div>
            </div>
      </div>
</div>
</div>

<div class="container">
  <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
          

            <!-- The Modal -->
            <div class="modal fade" id="myModalb">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
    
                  <!-- Modal Header -->
                  <button type="button" class="close" data-dismiss="modal" style="text-align:right; padding-top:10px;padding-right:15px;">&times;</button>
                          <img class="moco" src="img/cakes 6.jpg" style="align-items: center;">
      
                  <!-- Modal body -->
                  <div class="modal-body">
                      <h2 class="moco">Bloomburrys Cake</h2>
                      <p>Rp. 800.000/pcs</p>
                      <form method="post">
                        Notes : <input type="text" name="permintaane" style="width: auto; height: 30px;"><br>
                        <br>Quantity : <input type="number" name="kuantitase"></p>
                        <input type="submit" style="width:100%; background-color:white; color:black; border: solid #ed9f5d" value="order">
                      </form>
                  </div>
                </div>
              </div>
            </div>
      </div>
</div>
</div>

<div class="container">
  <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
            <!-- The Modal -->
            <div class="modal fade" id="myModalf">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
    
                  <!-- Modal Header -->
                  <button type="button" class="close" data-dismiss="modal" style="text-align:right; padding-top:10px;padding-right:15px;">&times;</button>
                          <img class="moco" src="img/cakes 7.jpg" style="align-items: center;">
      
                  <!-- Modal body -->
                  <div class="modal-body">
                      <h2 class="moco">Funfetti Cake</h2>
                      <p>Rp. 800.000/pcs</p>
                      <form method="post">
                        Notes : <input type="text" name="permintaanf" style="width: auto; height: 30px;"><br>
                        <br>Quantity : <input type="number" name="kuantitasf"></p>
                        <input type="submit" style="width:100%; background-color:white; color:black; border: solid #ed9f5d" value="order">
                      </form>
                  </div>
                </div>
              </div>
            </div>
      </div>

</div>
<div class="row">
            <div class="Menu">
            <br>
                <a href="Contact.php"><button type="button" class="btn" style="backgroung-color:white; color: black; border: solid #ed9f5d;">Contact Us</button></a>
    		</div>
</div>
    <footer>
        <br><br>
        <div id="spoiler" style="display:none">
          <?php 
            $hargaa = 750000;
            $permintaana = $_POST["permintaana"];
            $kuantitasa = $_POST["kuantitasa"];
            $hargaat = $hargaa * $kuantitasa;

            $hargab = 780000;
            $permintaanb = $_POST["permintaanb"];
            $kuantitasb = $_POST["kuantitasb"];
            $hargabt = $hargab * $kuantitasb;
            
            $hargac = 800000;
            $permintaanc = $_POST["permintaanc"];
            $kuantitasc = $_POST["kuantitasc"];
            $hargact = $hargac * $kuantitasc;
            
            $hargad = 800000;
            $permintaand = $_POST["permintaand"];
            $kuantitasd = $_POST["kuantitasd"];
            $hargadt = $hargad * $kuantitasd;
            
            $hargae = 800000;
            $permintaane = $_POST["permintaane"];
            $kuantitase = $_POST["kuantitase"];
            $hargaet = $hargae * $kuantitase;
            
            $hargaf = 800000;
            $permintaanf = $_POST["permintaanf"];
            $kuantitasf = $_POST["kuantitasf"];
            $hargaft = $hargaf * $kuantitasf;

            $pesanan = "";

            if ($kuantitasa >= 0) {
              $pesanan = "Chocolate Drip Cake";
            }
            else if ($kuantitasb > 0) {
              $pesanan = "Summer Fruit cake";
            }
            else if ($kuantitasc > 0) {
              $pesanan = "Unicorn Cake";
            }
            else if ($kuantitasd > 0) {
              $pesanan = "Mermaid Cake";
            }
            else if ($kuantitase > 0) {
              $pesanan = "Bloomburrys Cake";
            }
            else if ($kuantitasf > 0) {
              $pesanan = "Funfetti Cake";
            }

            $harga = $hargaat + $hargabt + $hargact + $hargadt + $hargaet + $hargaft;

          ?>
        </div>
        <button title="Click to show/hide content" type="button" onclick="if(document.getElementById('spoiler') .style.display=='none') {document.getElementById('spoiler') .style.display=''}else{document.getElementById('spoiler') .style.display='none'}" style="opacity:0%; pointer-events:none;"></button>
        <h6 style="text-align: center">@Copyright Kelompok1 IMK 2019</h6>
    </footer>

                  <div class="modal fade" id="myModalca">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <!-- Modal Header -->
                        <button type="button" class="close" data-dismiss="modal" style="text-align:right; padding-top:10px;padding-right:15px;">&times;</button>
                        <div class="modal-header">
                          <h1 style="text-align:center;">Cart</h1>
                        </div>
            
                        <!-- Modal body -->
                        <div class="modal-body">

                          <?php
                            if( $kuantitasa > 0){
                                echo "Chocolate Drip Cake <br>";
                                print "note : " . $permintaana . "<br>";
                                print "jumlah : " . $kuantitasa . "<br>";
                                print "harga : Rp. " . $hargaat . "<br>";
                            }
                            else {
                              echo "";
                            }

                            if( $kuantitasb > 0){
                                echo "Summer Fruit Cake <br>";
                                print "note : " . $permintaanb . "<br>";
                                print "jumlah : " . $kuantitasb . "<br>";
                                print "harga : Rp. " . $hargabt . "<br>";
                            }
                            else {
                              echo "";
                            }

                            if( $kuantitasc > 0){
                                echo "Unicorn Cake <br>";
                                print "note : " . $permintaanc . "<br>";
                                print "jumlah : " . $kuantitasc . "<br>";
                                print "harga : Rp. " . $hargact . "<br>";
                            }
                            else {
                              echo "";
                            }

                            if( $kuantitasd > 0){
                                echo "Mermaid Cake <br>";
                                print "note : " . $permintaand . "<br>";
                                print "jumlah : " . $kuantitasd . "<br>";
                                print "harga : Rp. " . $hargadt . "<br>";
                            }
                            else {
                              echo "";
                            }

                            if( $kuantitase > 0){
                                echo "Bloomburrys Cake <br>";
                                print "note : " . $permintaane . "<br>";
                                print "jumlah : " . $kuantitase . "<br>";
                                print "harga : Rp. " . $hargaet . "<br>";
                            }
                            else {
                              echo "";
                            }

                            if( $kuantitasf > 0){
                                echo "Funfetti Cake <br>";
                                print "note : " . $permintaanf . "<br>";
                                print "jumlah : " . $kuantitasf . "<br>";
                                print "harga : Rp. " . $hargaft . "<br>";
                            }
                            else {
                              echo "";
                            }
                            ?>
                            <br>
                            <p><button class="button" data-toggle="modal" data-target="#myModalpe" width="40px">Check-out</button></p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="myModalpe">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <!-- Modal Header -->
                        <button type="button" class="close" data-dismiss="modal" style="text-align:right; padding-top:10px;padding-right:15px;">&times;</button>
                        <div class="modal-header">
                          <h1 style="text-align:center;">Check-out</h1>
                        </div>
            
                        <!-- Modal body -->
                        <div class="modal-body">
                            
                            <form method="post">
                              Nama Lengkap : <input type="text" name="nama" style="width: 100%; height: 30px;"><br>
                              Alamat : <input type="text" name="alamat" style="width: 100%; height: 30px;">
                              Kode Pos : <input type="text" name="pos" style="width: 100%; height: 30px;">
                              Nomor Telepon : <input type="text" name="telp" style="width: 100%; height: 30px;">
                              Alamat Email : <input type="text" name="email" style="width: 100%; height:30%;">

                              <div id="spoiler" style="display:none">
          
                            <?php 
                              $nama = $_POST["nama"];
                                $alamat = $_POST["alamat"];
                                $pos = $_POST["pos"];
                                $telp = $_POST["telp"];
                                $email = $_POST["email"];
                              ?>
                            </div>
                            <button title="Click to show/hide content" type="button" onclick="if(document.getElementById('spoiler') .style.display=='none') {document.getElementById('spoiler') .style.display=''}else{document.getElementById('spoiler') .style.display='none'}" style="opacity:0%; pointer-events:none;"></button>

                            <br>
                            <p><button type="submit" class="button" data-toggle="modal" data-target="#myModalpe" width="40px">Selesai</button></p>

                            <?php
                              $to = $email;
                              $subject = "Pesanan";

                              $message = "
                              <html>
                              <head>
                              <title>Pesanan</title>
                              </head>
                              <body>
                                pesanan " . $pesanan . "<br>
                                Atas nama : " . $nama . "<br>
                                Alamat : " . $alamat . "<br>
                                Kode pos : " . $pos . "<br>
                                Nomor Telepon : " . $telp . "<br>
                                silahkan transfer ke rekening bank x <br>
                                dengan nomor rekening: xxxx.xxxx.xxxx.xxxx
                              </body>
                              </html>
                              ";

                              // Always set content-type when sending HTML email
                              $headers = "MIME-Version: 1.0" . "\r\n";
                              $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                              // More headers
                              $headers .= 'From: <>' . "\r\n";
                              $headers .= 'Cc: ' . "\r\n";
                              mail($to,$subject,$message,$headers);

                            ?>

                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="myModalem">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
    
                  <!-- Modal Header -->
                  <button type="button" class="close" data-dismiss="modal" style="text-align:right; padding-top:10px;padding-right:15px;">&times;</button>      
                  <!-- Modal body -->
                  <div class="modal-body">
                      <h2 class="moco">Email Debug</h2>
                            <?php
                              print "pesanan " . $pesanan . "<br>
                              Atas nama : " . $nama . "<br>
                              Alamat : " . $alamat . "<br>
                              Kode pos : " . $pos . "<br>
                              Nomor Telepon : " . $telp . "<br>
                              silahkan transfer ke rekening bank x <br>
                              dengan nomor rekening: xxxx.xxxx.xxxx.xxxx <br>
                              sebesar Rp. " . $harga . "";
                              ?>
                    </div>
                </div>
              </div>
            </div>

</div>
<script src="js/1.js"></script>
</body>

</html>