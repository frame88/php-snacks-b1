<?php
  include __DIR__ . '/db.php';
  header('Content-Type: application/json');

  if(!empty($_GET['colore']) && !empty($_GET['marca'])){
      $marca = $_GET['marca'];
      $colore = $_GET['colore'];
      if ($colore === 'all' && $marca === 'all'){
        echo json_encode([
        'results' => $cars,
        'length' => count($cars)]);
      } else {

      $filteredarray = $cars;
      if ($colore !== 'all'){
        $filteredarray = [];
        foreach($cars as $auto){
          if ($auto['colore'] == $colore){
            $filteredarray[] = $auto;
          };
        }
      }
      if ($marca !== 'all'){
        $newfilter = [];
        foreach($filteredarray as $auto){
          if($auto['marca'] == $marca){
            $newfilter[] = $auto;
          }
        }
        $filteredarray = $newfilter;
      }
      echo json_encode([
                'results' => $filteredarray,
                'length' => count($filteredarray),
            ]);
    }
}
?>