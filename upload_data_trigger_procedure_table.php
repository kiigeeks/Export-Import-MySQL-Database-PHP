<?php 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["uplot"])) {

      if($_FILES["database1"]["name"] != '') {
        $array = explode(".", $_FILES["database1"]["name"]);
        $extension = end($array);

        if($extension == 'sql') {
          //DROP ALL DATA DB
          // koneksi ke database di file koneksi.php
          include "koneksi.php";
          // inisialisasi timezone
          date_default_timezone_set('Asia/Jakarta');	
          
          $cek=0;
            
          mysqli_autocommit($kon, false);
          $sql1 = "SET foreign_key_checks = 0";
          $result1 = mysqli_query($kon,$sql1);

          if (!$result1) {
            $cek=$cek+1;
          }
          
          $sql2 = "SHOW TABLES";
          $result2 = mysqli_query($kon, $sql2);
          while ($row = mysqli_fetch_row($result2)) {
              $sql3 = "DROP TABLE IF EXISTS .$row[0]";
              $result3 = mysqli_query($kon,$sql3);
              
              if (!$result3) {
                $cek=$cek+1;
              }
          }
          
          $sql4 = "SET foreign_key_checks = 1";
          $result4 = mysqli_query($kon,$sql4);

          if (!$result4) {
            $cek=$cek+1;
          }

          if ($cek==0){
            mysqli_commit($kon);
            //IMPORT TABLE
            $connect = mysqli_connect("localhost", "root", "", "db_testing");
            $output = '';
            $count = 0;
            $file_data = file($_FILES["database1"]["tmp_name"]);
            
            foreach($file_data as $row) {
              $start_character = substr(trim($row), 0, 2);
              if($start_character != '--' || $start_character != '/*' || $start_character != '//' || $row != '') {
                $output = $output . $row;
                $end_character = substr(trim($row), -1, 1);
                if($end_character == ';') {
                  if(!mysqli_query($connect, $output)) {
                    $count++;
                  }
                  $output = '';
                }
              }
            }
            
            echo ("<script LANGUAGE='JavaScript'>
              window.alert('sql Berhasil diImport');
              window.location.href='index.php';
              </script>");
          }else{
            mysqli_rollback($kon);
          }
        } else {
          echo ("<script LANGUAGE='JavaScript'>
            window.alert('File Harus Berekstensi sql');
            window.location.href='index.php';
            </script>");
        }
      } else {
        echo ("<script LANGUAGE='JavaScript'>
          window.alert('Pilih File sql Yang Akan diUpload');
          window.location.href='index.php';
          </script>");
      }
    } 
  }
?>