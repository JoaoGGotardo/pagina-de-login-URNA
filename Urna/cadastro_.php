<?php
include_once "../includes/head_.php";
?>

<main>
    <div class="forms">
        <div class="pergunta">
            <form method="POST" action="cadastro.php">
                <label>Login:</label><input type="text" name="login" id="login"><br>
                <label>Senha:</label><input type="password" name="senha" id="senha"><br>
                <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
            </form>
        </div>
    </div>
</main>

<?php
include_once "../includes/footer_.php";
?>