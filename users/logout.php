<?php 
session_start();
session_unset();
session_destroy();
echo "
<script>
alert('You Have Successfully Logout');
window.open('../index.php', '_self')
</script>
"
?>