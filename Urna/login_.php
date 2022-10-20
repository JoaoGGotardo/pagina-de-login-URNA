<?php
include_once "../includes/head_.php";
?>

<form method="POST" action="login.php">
    <label>Login:</label><input type="text" name="login" id="login"><br>
    <label>Senha:</label><input type="password" name="senha" id="senha"><br>
    <input type="submit" value="entrar" id="entrar" name="entrar"><br>
    <a href="cadastro_.php">Cadastre-se</a>
</form>

<?php
include_once "../includes/footer_.php";
?>