<?php
require_once __DIR__ . '/bd/lec_bd.php'; 

try {
    $stmt = $pdo->query("SELECT id, password FROM users");
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($users as $user) {
        set_time_limit(30);
            $hashedPassword = password_hash('1234', PASSWORD_DEFAULT);

            $update = $pdo->prepare("UPDATE users SET password = :password WHERE id = :id");
            $update->execute([
                'password' => $hashedPassword,
                'id' => $user['id']
            ]);

    }

    echo "les mots de passe ont été hachés .";

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
