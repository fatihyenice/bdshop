<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/connect.php";
$sql = "SELECT * FROM table_product ORDER BY product_serie ASC, product_name ASC LIMIT 50";
$stmt = $db->prepare($sql);
$stmt->execute();
$recordset = $stmt->fetchAll(PDO::FETCH_ASSOC)
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BdShop - Accueil</title>
    <link rel="icon" href="/image/favicon.png">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/script.js" defer></script>
</head>
<body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/include/header.php'; ?>
 
     
    
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/include/header.php'; ?>
</body>
</html>