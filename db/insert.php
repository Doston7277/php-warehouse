<?php

    include 'db.php';

    if( isset($_POST['add']) ){
      
      $nomi = mysqli_escape_string($db, strip_tags(trim($_POST['nomi'])));
        
      $miqdori = $_POST['miqdori'];
        
      $narxi = $_POST['narxi'];
          
      $sana = $_POST['sana'];  
        
      $sql = "INSERT INTO `kirim` (`nomi`, `miqdori`, `narxi`, `kirim_sanasi`) VALUES ('$nomi', '$miqdori', '$narxi', '$sana')";
      $res = mysqli_query($db, $sql);
      if($res){
          header("Location: ../jadval/kirim.php");
      }else{
          echo "Ma'lumot Yuborilmadi !!!";
      }
    }
    
    if( isset($_POST['add_chiqim']) ){
        
      $nomi = mysqli_escape_string($db, strip_tags(trim($_POST['nomi'])));
      $miqdori = mysqli_escape_string($db, strip_tags(trim($_POST['miqdori'])));
      $narxi = mysqli_escape_string($db, strip_tags(trim($_POST['narxi'])));
      $sana = mysqli_escape_string($db, strip_tags(trim($_POST['sana'])));
        
      $sql = "INSERT INTO `chiqim` (`nomi`, `miqdori`, `narxi`, `chiqish_sanasi`) VALUES ('$nomi', '$miqdori', '$narxi', '$sana')";
      $res = mysqli_query($db, $sql);
      if($res){
           header("Location: ../jadval/chiqim.php");
      }else{
          echo"Ma'lumot Yuborilmadi !!!";
      }
    }  
?>