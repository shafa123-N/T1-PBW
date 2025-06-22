<?php

   $conn = new mysqli('localhost', 'root', '', 'pemrogramanweb_contoh');
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }
?>