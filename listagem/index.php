<?php
    include('../componentes/header.php');

    require('../database/conexao.php');

    $sql = "SELECT * FROM tbl_pessoa";

    $resultado = mysqli_query($conexao, $sql);
?>

<div class="container">

    <br/>
    
    <table class="table table-bordered">

    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>E-mail</th>
            <th>Celular</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>

    <?php
    while($usuario = mysqli_fetch_array($resultado)) {

        $id = $usuario["cod_pessoa"];
        $nome = $usuario["nome"];
        $sobrenome = $usuario["sobrenome"];
        $email = $usuario["email"];
        $celular = $usuario["celular"];

    ?>
            <tr>
                <th><?php echo $cod_pessoa?></th>
                <th><?php echo $nome?></th>
                <th><?php echo $sobrenome?></th>
                <th><?php echo $email?></th>
                <th><?php echo $celular?></th>
                <th>

    
                <a href="acoes.php?cod_pessoas<?php echo $dados["cod_pessoa"]?>">EDITAR</a>
                <a href="acoes.php?cod_pessoas<?php echo $dados["cod_pessoa"].'&acoes=delete'?>">EXLCUIR</a>
                </th>
            </tr>
            <?php
    }
    ?>
    </tbody>

    </table>

</div>

<?php
    include('../componentes/footer.php');
?>