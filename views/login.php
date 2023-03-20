<?php
require_once '../templates/cabecalho_user.php';
require_once '../config/security.php';

if (isset($_SESSION['usuario'])) {
    header('location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nome_usuario  = $_REQUEST['u_user'];
    $senha_usuario = $_REQUEST['u_senha'];
    echo $senha_usuario;
    ///$senha_usuario .= "$ACESSO_ADIM";
    echo '<h1>';
    echo $senha_usuario;
    echo '</h1>';

    try {
        $query = "select * from usuarios where user_nome = :u_user LIMIT 1";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":u_user", $nome_usuario);
        $stmt->execute();
        $registro = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($stmt->rowCount() > 0) {

            // SENHA COM HASHE 
            //if (password_verify($senha, $registro['senha'])) {
            echo $registro['user_senha'];

            if ($senha_usuario == $registro['user_senha']) {
                echo"<h1>";
                echo"logim aceito";
                echo"</h1>";
                //header('location: index.php');
            } else {
                $erroMsg[] = "Email ou Senha errado";
                //echo $senha_usuario;
                //echo $nome_usuario;
                echo"logim negado 1";
            }
        } else {
            $erroMsg[] = "Email ou Senha errado";
            echo"logim negado 2";
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

?>

<form action="" method="POST">
    <br>
        <label for="u_user">Nome de acesso</label>
        <input type="text" name="u_user" id="u_user" placeholder="Nome do Usuario">
    <br>
        <label for="u_senha">Senha de acesso</label>
        <input type="text" name="u_senha" id="u_senha" placeholder="Senha do Usuario">
    <br>
    <button type="submit">Acessar</button>
</form>

<?php
require_once '../templates/rodape.php';
?>