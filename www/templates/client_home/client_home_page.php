<?php require '../../lib/utils/utils_array2client.php'; ?>
<html>
    <head>
        <title>HomePage</title>
    </head>
    <body>
        <?php echo $client; ?><br>
        <button><a href="../client_update/client_update_page.php">Atualizar meus dados</a></button>
        <button><a href="../client_delete/client_delete_page.php">Apagar minha conta</a></button>
    </body>
</html>
