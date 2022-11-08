<?php $localizacao = array (
          
          "loja1" => "Centro",
          "loja2" => "Av das zebras",
          "loja3" => "Av das cabras",
          "loja4" => "Av dos bodes",
          "loja5" => "Av dos ovelhas",
          "buritizal" => false);
  
          echo $array["Centro"];
          echo $array["Av das zebras"];
          echo $array["Av das cabras"];
          echo $array["Av dos bodes"];
          echo $array["Av dos ovelhas"];
  

          foreach($localizacao as $localizacao ){
            if($localizacao  ["buritizal"]==false){
            
                $localizacao ["loja2"] == $localizacao ['buritizal'];
            
            echo $localizacao ['buritizal'];
            
            }else{
            
                echo $localizacao ["buritizal"]==true;
            
            }
            
            
            }
  
  ?>
  )