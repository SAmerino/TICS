<?php
// Obtener los datos del usuario desde el cuerpo de la solicitud
    $json = file_get_contents('php://input');
    $user = json_decode($json, true);

    if (isset($user['id']) && isset($user['nombre'])) {
    // Crear la sesión con la información del usuario
    session_start();
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_nombre'] = $user['nombre'];

    echo json_encode(['success' => true]);
    } else {
    echo json_encode(['success' => false, 'message' => 'Datos del usuario incompletos']);
    }
?>