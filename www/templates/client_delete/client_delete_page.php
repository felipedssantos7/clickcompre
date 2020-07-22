<?php require '../../lib/utils/utils_array2client.php'; ?>
<html>
    <head>
        <title>Remoção</title>
        <link rel="stylesheet" href="../components/css/components_navbar_style.css">
        <link rel="stylesheet" href="css/client_delete_style.css">
    </head>
    <body>
        <?php require '../components/components_navbar.inc.php'; ?>
        <div id="content">
            <div id="content-form">
                <h2 id="title">Excluir conta</h2>
                <span class="line"></span>
                <form method="post" action="client_delete_action.php">
                    <div id="phrase-group">
                        <label for="phrase-group">
                            Para apagar sua conta, digite a seguinte frase: <br>
                            <i id="phrase">Eu desejo apagar minha conta.</i>
                        </label><br>
                        <input type='text' name="phrase"/>
                    </div>
                    <div id="submit-group">
                        <input type="submit" value="Apagar conta"/>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
