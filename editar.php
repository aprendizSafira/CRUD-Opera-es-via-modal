<?php
include 'connect.php';
global $pdo;

if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM usuarios WHERE id = :id";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":id", $id);
    $sql->execute();
}

if($sql->rowCount() > 0) {
    $select = $sql->fetch();
}
?>
<a href="" class="button"><img src="button.png" width="32" height="32" style="float:right;"></a>
<form method="POST">
    <h1>Editar</h1>
    Nome:<br/>
    <input type="text" name="nome" value="<?php echo $select['nome']; ?>"><br/><br/>
    E-mail:<br/>
    <input type="email" name="email" value="<?php echo $select['email']; ?>"><br/><br/>
    
    <input type="submit" value="Editar">
</form>


