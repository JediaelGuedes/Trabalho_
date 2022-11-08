

<?php 



$sql = "SELECT * FROM pagamento"; 
$stmt = conexao()->prepare($sql);
$stmt->execute();

$pagamento = $stmt->fetchAll();

print_r($pagamento);





?>

<table>

<tr>
    <th>#</th>
    <th>Forma_de_pagamento</th>
    <th>parcelas</th>
</th>

<?php foreach($pagamento as $pagamento) {?>
<tr>
    <td><?php echo $pagamento['id']; ?></td>
    <td><?php echo $pagamento['Forma_de_pagamento']; ?></td>
    <td><?php echo $pagamento['parcelas']; ?></td>
    <td>
    <a href="?modulo=pagamento$acao=excluir&id<?=$pagamento['id'];?>">
    EXCLUIR
</a>

<a href="?modulo=pagamento$acao=editar&id<?=$pagamento['id'];?>">
    EDITAR
</a>


</tr>
<?php } ?>
</table> 





}