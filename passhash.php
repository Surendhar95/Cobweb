<?php 
include('lib/password.php');
echo password_hash('ragnarlodbrok',PASSWORD_BCRYPT);
?>