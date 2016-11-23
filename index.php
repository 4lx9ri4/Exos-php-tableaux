<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo php tableaux</title>
  </head>
  <body>
      <?php
      //Exo 1
        $mois = array("janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre");
        print_r($mois);

echo '</br>';
      //Exo 2
        print_r($mois[2]);

echo '</br>';
      //Exo 3
        print_r($mois[5]);

echo '</br>';
      //Exo 4
        $mois[7] = "août";
        print_r($mois);

echo '</br>';
      //Exo 5
        $tab = array(
          59 => "Nord",
          62 => "Pas-de-Calais",
          02 => "Aisne",
          60 => "Oise",
          80 => "Somme"
        );
        print_r($tab);

echo '</br>';
      //Exo 6
        print_r($tab[59]);

echo '</br>';
      //Exo 7
        $tab[51] = "Reims";
        print_r($tab);

echo '</br>';
      //Exo 8
        for($i = 0; $i < 12; $i++){
          echo $mois[$i] . '</br>';
        }

echo '</br>';
      //Exo 9
        foreach ($tab as $i) {
          echo $i.'</br>';
        }

echo '</br>';
      //Exo 10
        foreach ($tab as $i => $value) {
          echo 'Le département '.$value.' a le numero '.$i.'</br>';
        }
      ?>
  </body>
</html>
