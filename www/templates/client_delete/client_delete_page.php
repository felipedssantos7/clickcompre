<!DOCTYPE html>
<?php require '../../lib/utils/utils_array2client.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Remoção</title>
        <!-- CSS. -->
        <link rel="stylesheet" href="css/client_delete_style.css">
        <link rel="stylesheet" href="../components/css/components_navbar_style.css">
    </head>
    <body>
        <!-- Navbar. -->
        <?php require '../components/components_navbar.inc.php'; ?>
        <div id="content">
            <!-- Formulário. -->
            <div id="content-form">
                <!-- Título. -->
                <h2 id="title">Excluir conta</h2>
                <span class="line"></span>
                <form method="post" action="client_delete_action.php">
                    <div id="phrase-group">
                        <!-- Enunciado. -->
                        <label for="phrase-group">
                            Para apagar sua conta, digite a seguinte frase: <br>
                            <i id="phrase">Eu desejo apagar minha conta.</i>
                        </label><br>
                        <!-- Campo de texto. -->
                        <input type='text' name="phrase"/>
                    </div>
                    <!-- Botão. -->
                    <div id="submit-group">
                        <input type="submit" value="Apagar conta"/>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
