<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 1 - Semester 2</title>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="style.css">
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

    <a style="text-decoration: none;" href="" onmouseover="dekor1()" onmouseout="dekor2()" id="home"><h2>Welcome to Muhamad Rafi Baihaki's Table of Praktikum 1</h2></a>
    <hr>
    <br>

    <div class="span7">   
        <div class="widget stacked widget-table action-table">                           
                        <div class="widget-header">
                            <i class="icon-th-list"></i>
                            <h3>Daftar Nilai Siswa</h3>
                        </div> <!-- /widget-header -->
                        
                        <div class="widget-content">
                        
                        
                        
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>NIM</th>
                                        <th>UTS</th>
                                        <th>UAS</th>
                                        <th>Tugas</th>
                                        <th>Nilai Akhir</th>
                                        <!-- <th class="td-actions"></th> -->
                                    </tr>
                                </thead>
                                <tbody>                    
                                <?php foreach( $ar_nilai as $ns ) :  ?>
                                <?php $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3; ?>
                                
                                    <tr>
                                        <td><?= $ns["id"]; ?></td>
                                        <td><?= $ns["nim"]; ?></td>
                                        <td><?= $ns["uts"]; ?></td>
                                        <td><?= $ns["uas"]; ?></td>
                                        <td><?= $ns["tugas"]; ?></td>
                                        <td><?= number_format($nilai_akhir,2,',','.') ?></td>
                                    </tr>
                                <?php endforeach; ?>    
                                </tbody>
                            </table>
                        
                        </div> <!-- /widget-content -->   
 
</body>

</html>

