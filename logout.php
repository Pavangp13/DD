<?php
	session_start();
	session_unset();
	session_destroy();
	echo "<script>
                        alert('Logged out successfully');
                        window.location.href='index.php';
                    </script>"; 
	
?>