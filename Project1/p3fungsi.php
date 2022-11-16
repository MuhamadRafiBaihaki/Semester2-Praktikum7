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

        function validasi() {
            submit1 = document.getElementById("submit");
            nama_ = document.getElementById("nama").value;
            matkul = document.getElementById("matakuliah").value;
            uts_ = document.getElementById("uts").value;
            uas_ = document.getElementById("uas").value;
            tugas_ = document.getElementById("tugas").value;
            
            if(nama_ == "" && matkul == "" && uts_ == "" && uas_ == "" && tugas_ == "" ) {
                alert("Data Wajib Diisi");
            }else{
                document.getElementById("action").action = `p3hasil_nilai.php`;
            }
        }
    </script>
    <style>
        h2 {
            text-align: center;
        }

        h5 {
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
    

    <a style="text-decoration: none;" href="" onmouseover="dekor1()" onmouseout="dekor2()" id="home"><h2>Welcome to Muhamad Rafi Baihaki's Page of Praktikum 3</h2></a>
    <br>
    <a href="index.php"><h5>HOME</h5></a>
    <hr>
    <br>

    <div class="container-fluid">
	    <div class="row">
		    <div class="col-md-12">
            <form id="action" method="post">

                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                    <div class="col-8">
                        <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="matakuliah" class="col-4 col-form-label">Mata Kuliah</label> 
                    <div class="col-8">
                        <select id="matakuliah" name="matakuliah" class="custom-select">
                            <option value="">Pilih Mata Kuliah</option>
                            <option value="Dasar Dasar Pemrograman">Dasar Dasar Pemrograman</option>
                            <option value="Basis Data I">Basis Data I</option>
                            <option value="Pemrograman Web">Pemrograman Web</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
                    <div class="col-8">
                        <input id="uts" name="uts" placeholder="Nilai UTS" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
                    <div class="col-8">
                        <input id="uas" name="uas" placeholder="Nilai UAS" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tugas" class="col-4 col-form-label">Nilai Tugas</label> 
                    <div class="col-8">
                        <input id="tugas" name="tugas" placeholder="Nilai Tugas" type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button id="submit" name="submit" type="submit" onclick="validasi()" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
            <hr>
            
		    </div>
	    </div>
    </div>
 
</body>

</html>

