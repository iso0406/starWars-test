
<?php

     $name = $_GET['name'];
     $all = $_GET['all'];
     $nomeslistados = 'Nomes listados';

     if (isset($name)){
         function httpGetAll($name) {
             $ch = curl_init();  
             curl_setopt($ch,CURLOPT_URL,'https://swapi.dev/api/people/?search='.$name);
             curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
     
             $output=json_decode(curl_exec($ch), true);
     
            curl_close($ch);
            return $output;
          }
     }
     else
     {
        function httpGetAll($all){
             $ch = curl_init();  
             curl_setopt($ch,CURLOPT_URL,'http https://swapi.dev/api/');
             curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
     
             $output=json_decode(curl_exec($ch), true);
     
             curl_close($ch);
             return $output;
        }
     }
    

/*
    function httpGetPeopleById($id) {
        $ch = curl_init();  
        curl_setopt($ch,CURLOPT_URL,'https://swapi.dev/api/people/'.$id.'/');
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
     
        $output=json_decode(curl_exec($ch), true);
     
        curl_close($ch);
        return $output;
    }

    function httpGetPeopleByName($name) {
        $ch = curl_init();  
     
        curl_setopt($ch,CURLOPT_URL,'https://swapi.dev/api/people/?search='.$name);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
     
        $output=json_decode(curl_exec($ch), true);
     
        curl_close($ch);
        return $output;
    }

    function httpGetPlanetById($id) {
        $ch = curl_init();
     
        curl_setopt($ch,CURLOPT_URL,'https://swapi.dev/api/planets/'.$id.'/');
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
     
        $output=json_decode(curl_exec($ch), true);
     
        curl_close($ch);
        return $output;
    }

    function httpGetPlanetByName($name) {
        $ch = curl_init();
     
        curl_setopt($ch,CURLOPT_URL,'https://swapi.dev/api/planets/?search='.$name);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

        $output=json_decode(curl_exec($ch), true);
     
        curl_close($ch);
        return $output;
    }

    function httpGetPlanetPeople($people) {
        $ch = curl_init();
     
        curl_setopt($ch,CURLOPT_URL,substr_replace($people['homeworld'], 's', 4, 0));
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

        $output=json_decode(curl_exec($ch), true);
     
        curl_close($ch);
        return $output;
    }

*/

    $nameGet = httpGetAll($name);
    //$personagem = httpGetPeopleById(1);
    //$planeta_personagem = httpGetPlanetPeople($personagem);

    ///echo $personagem['name'];

   // echo '<br>';

   // echo $planeta_personagem['name'];
 

?>
