<?php $entrega = array (
          
          "entrega1" => "rapida",
          "entrega2" => "padrão",
          "entrega3" => "para daqui 1h",
          "entrega4" => "para daqui 3h",
          "entrega5" => "para daqui 5h", 
          "entrega" => false);
    
  
          echo $array["entrega1"];
          echo $array["entrega2"];
          echo $array["entrega3"];
          echo $array["entrega4"];
          echo $array["entrega5"];
  
          foreach($entrega as $entrega){
            if($entrega ["entrega"]==false){
            
                $entrega["entrega5"] == $entrega['entrega'];
            
            echo $entrega['entrega'];
            
            }else{
            
                echo $entrega ["entrega"]==false;
            
            }
            
            
            }



  ?>
  )