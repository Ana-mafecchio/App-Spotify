<?php
/* Discografia-salvar.php*/
$artista = $_POST['artista'];
$nomealbum = $_POST['nomealbum'];
$ano = $_POST['ano'];
$tipo = $_POST['tipo'];
$foto = $_POST['foto'];

echo "$artista - $nomealbum - $ano - $tipo - $foto";

# abri conexão
$conexao = mysqli_connect("localhost", "root", "", "db_spotify");
if (!$conexao){
    die("<h3>Erro</h3>" . mysqli_connect_error());
}

# Inserir os dados
$sql = "insert into tb_discografia(artista, nome, ano, tipo, foto) values('$artista', '$nomealbum', $ano, '$tipo', '$foto')";

$resultado = mysqli_query($conexao , $sql);

if($resultado){
    echo"Cadastrado com sucesso";
}else{
    echo"Deu algum problema...";
}

# fechar conexão

mysqli_close($conexao);

?>