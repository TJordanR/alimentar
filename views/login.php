<?php
require_once '../templates/cabecalho_user.php';
if(isset($_SESSION['id_usuario'])){
    header('location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_nome = $_REQUEST['user_nome'];
    $user_senha = $_REQUEST['user_senha']; 

    try {
        $query = "SELECT * FROM usuarios WHERE user_nome = :user_nome LIMIT 1";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":user_nome", $user_nome);
        $stmt->execute();
        $registro = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($stmt->rowCount() > 0) {
            if (password_verify($user_senha, $registro['user_senha'])) {
                $_SESSION['usuario']['user_nome']  = $registro['user_nome'];
                $_SESSION['usuario']['user_senha'] = $registro['u_suser_senhaenha'];
                header('location: erro.php');
            } else {
                $erroMsg[] = "Usuario ou Senha errado";
            }
        } else {
            $erroMsg[] = "Usuario ou Senha errado";
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

?>

<form action="" method="POST">
    <br>
    <label for="user_nome">Nome de acesso</label>
    <input type="text" name="user_nome" id="user_nome" placeholder="Nome do Usuario">
    <br>
    <label for="user_senha">Senha de acesso</label>
    <input type="text" name="user_senha" id="user_senha" placeholder="Senha do Usuario">
    <br>
    <button type="submit">Acessar</button>

</form>

<?php
require_once '../templates/rodape.php';
?>