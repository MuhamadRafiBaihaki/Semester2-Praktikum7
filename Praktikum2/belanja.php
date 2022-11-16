<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 2 - Semester 2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script>
        function dekor1() {
            dekor_1 = document.getElementById("home");
            dekor_1.style.color = "aqua";
        }

        function dekor2() {
            dekor_2 = document.getElementById("home");
            dekor_2.style.color = "black";
        }
    </script>
    <style>
        h2 {
            text-align: center;
        }

        a {
            text-decoration: none;
            color: black;
        }

        p {
            color: red;
            float: left;
            margin-left: 1.5em;
        }

        .flex {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <?php
    $ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
    $ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
    $ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
    $ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];

    $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
    
    
    ?>

    <a style="text-decoration: none;" href="" onmouseover="dekor1()" onmouseout="dekor2()" id="home"><h2>Welcome to Muhamad Rafi Baihaki's Online Shopping of Praktikum 2</h2></a>
    <hr>
    <br>

    <div class="container-fluid">
	    <div class="row">
		    <div class="col-md-6">
            <form method="post" action="">

                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Customer</label> 
                    <div class="col-8">
                        <input id="nama" name="namacs" placeholder="Nama Customer" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Pilih Produk</label> 
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="tv"> 
                            <label for="radio_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="kulkas"> 
                            <label for="radio_1" class="custom-control-label">KULKAS</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="mesincuci"> 
                            <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
                        </div>
                    </div>
                </div> 
                <div class="form-group row">
                    <label for="uts" class="col-4 col-form-label">Jumlah</label> 
                    <div class="col-8">
                        <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-success">Kirim</button>
                    </div>
                </div>
            </form>
		    </div>

            <div class="col-md-6">
                <div class="list-group">
                    <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
    Daftar Harga
                    </button>
                    <button type="button" class="list-group-item list-group-item-action">TV : 4.200.000</button>
                    <button type="button" class="list-group-item list-group-item-action">Kulkas : 3.100.000</button>
                    <button type="button" class="list-group-item list-group-item-action">Mesin Cuci : 3.800.000</button>
                    <button type="button" class="list-group-item list-group-item-action active">Harga Dapat Berubah Setiap Saat</button>
                </div>
            </div>
	    </div>
        <hr>
        <?php if( isset($_POST["submit"]) && isset($_POST["radio"]) ) : ?>

            Nama Customer : <?= $_POST["namacs"]; ?>
            <br>
            Produk Pilihan : <?= $_POST["radio"]; ?>
            <br>
            Jumlah Beli : <?= $_POST["jumlah"]; ?>
            <br>
            <?php 
            if( $_POST["radio"] == "tv" && $_POST["jumlah"] >= 1){
                $hasil = 4200000 * $_POST["jumlah"];
                echo "Total Belanja : ".number_format($hasil,0,".",".");
            } elseif ($_POST["radio"] == "kulkas" && $_POST["jumlah"] >=1){
                $hasil = 3100000 * $_POST["jumlah"];
                echo "Total Belanja : ".number_format($hasil,0,".",".");
            } elseif ($_POST["radio"] == "mesincuci" && $_POST["jumlah"] >=1){
                $hasil = 3800000 * $_POST["jumlah"];
                echo "Total Belanja : ".number_format($hasil,0,".",".");
            }
            ?>



            
        <?php endif; ?>
    </div>
 
</body>

</html>

