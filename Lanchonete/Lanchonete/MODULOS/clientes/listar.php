<?php 



$sql = "SELECT * FROM clientes"; 
$stmt = conexao()->prepare($sql);
$stmt->execute();

$cardapio = $stmt->fetchAll();

print_r($clientes);



?>

<table>

<tr>
    <th>#</th>
    <th>nome</th>
    <th>email</th>
</th>

<?php foreach($clientes as $clientes) {?>
<tr>
    <td><?php echo $clientes['id']; ?></td>
    <td><?php echo $clientes['nome']; ?></td>
    <td><?php echo $clientes['email']; ?></td>
    <td>
    <a href="?modulo=clientes$acao=excluir&id<?=$clientes['id'];?>">
    EXCLUIR
</a>

<a href="?modulo=clientes$acao=editar&id<?=$clientes['id'];?>">
    EDITAR
</a>


</tr>
<?php } ?>
</table> 





}