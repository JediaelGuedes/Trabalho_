<?php $cardapio = array (
          
        "Lanche_1" => "hamburguer",
        "Lanche_2" => "BatataFrita",
        "Lanche_3" => "coxinha",
        "Lanche_4" => "bolo",
        "Lanche_5" => "pastel",
        "disponibilidade" => true);

        echo $array["lanche_1"];
        echo $array["lanche_2"];
        echo $array["lanche_3"];
        echo $array["lanche_4"];
        echo $array["lanche_5"];


        foreach($cardapio as $cardapio){
            if($cardapio ["disponibilidade"]==true){
            
            $cardapio["Lanche_1"] == $cardapio['disponibilidade'];
            
            echo $cardapio['frequente'];
            
            }else{
            
                 $cardapio ["disponibilidade"]==false;
            
           // }
            
            
            }

?>
)