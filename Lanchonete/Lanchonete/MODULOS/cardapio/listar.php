<?php 



$sql = "SELECT * FROM cardapio"; 
$stmt = conexao()->prepare($sql);
$stmt->execute();

$cardapio = $stmt->fetchAll();

print_r($cardapio);
//$cardapio = array(

   // array( 

   // "id" => 1, 
   // "preco" => 8.0,
   /// "quantidade" => 22



//),
//array(
   // "id" => 2, 
   // "preco" => 8.0, 
    //"quantidade" =>2




)
);
?>

<table>

<tr>
    <th>#</th>
    <th>preco</th>
    <th>quantidade</th>
</th>

<?php foreach($cardapio as $cardapio) {?>
<tr>
    <td><?php echo $cardapio['id']; ?></td>
    <td><?php echo $cardapio['preco']; ?></td>
    <td><?php echo $cardapio['quantidade']; ?></td>
    <td>
    <a href="?modulo=cardapio$acao=excluir&id<?=$cardapio['id'];?>">
    EXCLUIR
</a>

<a href="?modulo=cardapio$acao=editar&id<?=$cardapio['id'];?>">
    EDITAR
</a>


</tr>
<?php } ?>
</table> 





}