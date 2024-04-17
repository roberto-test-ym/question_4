<?php

// Função para validar e filtrar uma senha com práticas de segurança avançadas
function validateAndFilterPassword($password) {
    // Suponha que a senha precisa ter pelo menos 8 caracteres, incluindo letras maiúsculas, minúsculas, números e caracteres especiais
    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^a-zA-Z\d]).{8,}$/', $password)) {
        throw new Exception("A senha deve ter pelo menos 8 caracteres e incluir letras maiúsculas, minúsculas, números e caracteres especiais.");
    }

    // Filtrar a senha para evitar ataques de injeção de SQL e XSS
    $filteredPassword = filter_var($password, FILTER_SANITIZE_STRING);

    // Retornar a senha filtrada
    return $filteredPassword;
}

// Exemplo de uso
try {
    $password = "Senha@123";
    $filteredPassword = validateAndFilterPassword($password);
    echo "Senha válida e filtrada: " . $filteredPassword;
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}