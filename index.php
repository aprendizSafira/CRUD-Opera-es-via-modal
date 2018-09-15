<?php
include 'connect.php';
include 'contato.class.php';
$contato = new Contato();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CRUD: Operações via Modal</title>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="assets/js/script.js" ></script>
    </head>
    <body>
        <h1>Contatos</h1>
        
        <a href="adicionar.php" class="modal_ajax">[ Adicionar ]</a><br/><br/>
        
        <table width="600">
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>E-MAIL</th>
                <th>AÇÕES</th>
            </tr>
            <?php
            $lista = $contato->getList();
            foreach($lista as $item):
            ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['nome']; ?></td>
                <td><?php echo $item['email']; ?></td>
                <td><a href="editar.php?id=<?php echo $item['id']; ?>" class="modal_ajax">[ Editar ]</a>-</td>
                <td><a href="excluir.php?id=<?php echo $item['id']; ?>">[ Excluir ]</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
        
        <!--Nosso Modal-->
        <div class="background_modal">
            <div class="modal">
                
            </div>
        </div>
    </body>
</html>
