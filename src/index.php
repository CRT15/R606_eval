<?php
// src/index.php
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>R6.06 Maintenance applicative</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<header>
    <h1>R6.06 Maintenance applicative</h1>
    <h2 class="rouge">Evaluation</h2>
    <p class="rouge">Modifiez ce projet à l'aide des outils vus ensemble pour améliorer la maintenabilité de ce projet et déployez le sur le serveur mis à votre disposition</p>
    <p class="rouge">Vous êtes libre de modifier ce que vous souhaitez sur le projet, chaque amélioration (ou début d'amélioration) sera prise en compte dans la notation</p>
    <p class="cadre">Pensez à inviter cdiiv sur votre projet Github</p>
</header>

<?php
try {
    // Connexion PDO
    $pdo = new PDO(
        "mysql:host=db;dbname=ma_bdd;charset=utf8mb4",
        'db_user',
        'db_pwd'
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Récupération des données
    $stmt = $pdo->query("SELECT id, text FROM db_table");
    $rows = $stmt->fetchAll();

} catch (PDOException $e) {
    echo '<p style="color:red;">Erreur lors de la connexion à la BDD : ' . htmlspecialchars($e->getMessage()) . '</p>';
    exit();
}
?>

<table>
    <thead class="bold">
        <tr>
            <td class="border">Id</td>
            <td class="border">Text</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($rows as $row): ?>
            <tr>
                <td class="border"><?= htmlspecialchars($row['id']) ?></td>
                <td class="border"><?= htmlspecialchars($row['text']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>