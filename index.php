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
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/script.js" defer></script>
    <script src="/js/bootstrap.js" defer></script>
</head>
<body>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/include/header.php'; ?>
 
     <main class="container">
        <div class="row">
            <?php foreach($recordset as $row){ ?> 
                 <article class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <span><?= $row['product_name']; ?></span>
                </article>
            <?php } ?>
        </div>
    </main>
    
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/include/header.php'; ?>

</body>
</html>