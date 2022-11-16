<?php

    if( !isset($_POST["submit"]) ) {
        header("Location: form_nilai.php");
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

        require_once 'libfungsi.php';
        $_nilai = $nilai_akhir;
        $hasil_ujian = kelulusan($_nilai);
        echo '<br>DINYATAKAN: '.$hasil_ujian;

        $hasil_grade = grade($_nilai);
        echo '<br>GRADE: '.$hasil_grade;
        
    }

    

?>