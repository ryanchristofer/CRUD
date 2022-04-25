<?php 

  include ('conn.php'); 

  $status = '';
  $result = '';
  
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['Tanggal'])) {
          
          $Tanggal_upd = $_GET['Tanggal'];
          $query = "DELETE FROM dt_bukapuasa WHERE Tanggal = '$Tanggal_upd'"; 

          
          $result = mysqli_query(connection(),$query);

          if ($result) {
            $status = 'ok';
          }
          else{
            $status = 'err';
          }

          header('Location: index.php?status='.$status);
      }  
  }