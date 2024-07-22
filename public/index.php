<?php

require(__DIR__.'/../vendor/autoload.php');

$fw = Base::instance();
$fw->route('GET /soma', function($fw, $args) {

  $num1 = $fw->get('GET.num1');
  $num2 = $fw->get('GET.num2');

  if(is_numeric($num1) && is_numeric($num2)) {
    $soma = $num1 + $num2;
    echo json_encode(['soma' => $soma]);
  } else {
    echo json_encode(['erro' => 'Algum dos numeros nao e valido!']);
  }
  
});

$fw->run();