<?php require '../../lib/utils/utils_array2client.php'; ?>
<html>
    <head>
        <title>Remoção</title>
    </head>
    <body>
        <div>
            <form method="post" action="client_delete_action.php">
                <div id="phrase-group">
                    <label for="phrase">
                        Para apagar sua conta, digite a seguinte frase: <br>
                        <i>Eu desejo apagar minha conta.</i>
                    </label><br>
                    <input type='text' name="phrase"/>
                </div>
                <div id="submit-group">
                    <input type="submit" value="Apagar conta"/>
                </div>
            </form>
        </div>
    </body>
</html>
