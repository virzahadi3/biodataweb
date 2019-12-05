<?php
session_start();
session_destroy();
echo "<script>alert('logout');
document.location.href='login.html'</script>";
?>