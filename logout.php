<?php
session_start();
session_unset(); // Remover todas as variáveis da sessão
session_destroy(); // Destruir a sessão
header("Location: login.php"); // Redirecionar para a página de login
exit();
?>