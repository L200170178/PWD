<?php
    session_start();
    session_destroy();
?>
<script>
    alert('anda berhasil logout');
    document.location = 'login2.php';
</script>