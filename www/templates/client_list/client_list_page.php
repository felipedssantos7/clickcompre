<!DOCTYPE html>
<?php require './client_list_get_list.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de clientes</title>
        <!-- CSS. -->
        <link rel="stylesheet" href="css/client_list_style.css">
        <link rel="stylesheet" href="../components/css/components_navbar_style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <!-- Navbar. -->
        <?php require '../components/components_navbar.inc.php'; ?>
        <div id="content">
            <div id="client-list-table">
                <!-- Dados do cliente. -->
                <span id="client-list">
                    <h2 id="title">Lista de clientes</h2>
                    <span class="line"></span>
                    <div id="datas">
                        <table id="client-table">
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>E-mail</th>
                                <th>Gênero</th>
                                <th>Data de nascimento</th>
                                <th colspan="2">Opções</th>
                            </tr>
                            <?php echo $client_table; ?>
                        </table>
                    </div>
                </span>
            </div>
        </div>
    </body>
    <script>
        // Atualiza cliente.
        function clientUpdate(client){
            $.ajax({
                type: 'POST',
                url: 'client_list_update.php',
                data: {client: client},
                success: function(response) {
                    if(response == 1){
                        window.location.href = "../client_update/client_update_page.php";
                    } else {
                        alert("Ocorreu um erro inesperado! Tente de novo mais tarde.");
                    }
                }
            });
        }
        // Deleta cliente.
        function clientDelete(client){
            $.ajax({
                type: 'POST',
                url: 'client_list_delete.php',
                data: {client: client},
                success: function(response) {
                    if(response == 1){
                        $("#client-table #" + client.id).replaceWith('');
                    } else {
                        alert("Ocorreu um erro inesperado! Tente de novo mais tarde.");
                    }
                }
            });
        }
    </script>
</html>
