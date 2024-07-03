<?php 
$_SESSION = array();

// Destruye la sesión
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();

// Redirecciona al usuario a la página de inicio de sesión
header('Location: /tics/admin/usuarios/login.php');
exit();
?>