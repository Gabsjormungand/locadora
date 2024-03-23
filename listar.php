<?php
$nomearquivo = "clientes.txt";
$arquivo = fopen($nomearquivo, "r");
echo "<table border=1>"; //aqui
echo "<tr>";
echo "<td>Nome</td>";
echo "<td>E-mail</td>";
echo "</td>";
while(!feof($arquivo)){
    $linha = fgets($arquivo, 1000);
    if($linha != ""){
        $conteudo = explode(";",$linha);
        echo "<tr>"; //aqui
        echo "<td>$conteudo[0]</td>"; //aqui
        echo "<td>$conteudo[1]</td>";
        echo "</tr>"; //aqui
    }
}
echo "</table>"; //aqui
fclose($arquivo)
?>