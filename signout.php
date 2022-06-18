<?php

// menjalankan sessions
// (DISI)
session_start(); 


// fungsi untuk menghapus seluruh session
// (DISI)
 session_destroy();
 
// redirect ke halaman index.php (halaman login)
header('Location: login.html');
?>