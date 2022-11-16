<?php

    if( !isset($_POST["submit"]) ) {
        header("Location: p2form_nilai.php");
        exit;
    }

    $proses = $_POST["submit"];
    $nama_siswa = $_POST["nama"];
    $mata_kuliah = $_POST["matakuliah"];
    $nilai_uts = $_POST["uts"];
    $nilai_uas = $_POST["uas"];
    $nilai_tugas = $_POST["tugas"];
    // $nilai_akhir = ($nilai_uts + $nilai_uas + $nilai_tugas)/3;
  
    echo '<br>Nama Siswa : '.$nama_siswa;
    echo '<br>Mata Kuliah : '.$mata_kuliah;
    echo '<br>Nilai UTS : '.$nilai_uts;
    echo '<br>Nilai UAS : '.$nilai_uas;
    echo '<br>Nilai Tugas :'.$nilai_tugas;
    if(!empty($nilai_uts) && !empty($nilai_uas) && !empty($nilai_tugas)){
        $nilai_akhir = ($nilai_uts + $nilai_uas + $nilai_tugas)/3;
        echo '<br>Nilai Akhir : '.$nilai_akhir;

        if($nilai_akhir <= 35){
            echo '<br>Predikat Anda E : Sangat Kurang';
        } elseif($nilai_akhir <= 55){
            echo '<br>Predikat Anda D : Kurang';
        } elseif($nilai_akhir <= 69){
            echo '<br>Predikat Anda C : Cukup';
        } elseif($nilai_akhir <= 84){
            echo '<br>Predikat Anda B : Memuaskan';
        } elseif($nilai_akhir <= 100){
            echo '<br>Predikat Anda A : Sangat Memuaskan';
        }else {
            echo '<br>Tidak Valid';
        }
        
    }

    echo '<hr>';
    echo '<br><a href="index.php">BACK TO HOME</a>'; 

    

?>