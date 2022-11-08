<?php $pagamento = array (
          
          "Formadepagamento1" => "crédito",
          "formadepagamento2" => "débito",
          "formadepagamento3" => "boleto",
          "formadepagamento4" => "dinheiro",
         "fiado" => false); 
  
          echo $array["Formadepagamento1"];
          echo $array["Formadepagamento2"];
          echo $array["Formadepagamento3"];
          echo $array["Formadepagamento4"];
          echo $array["fiado"];

          foreach($pagamento as $pagamento){
            if($pagamento ["fiado"]==false){
            
            $pagamento["Formadepagamento1"] == $pagamento['fiado'];
            
            echo $pagamento['fiado'];
            
            }else{
            
                echo $pagamento ["fiado"]==true;
            
            }
            
            
            }
  
  
  ?>
  )