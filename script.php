<?php
$base = $_POST['base'];
$expoente = $_POST['expoente'];
$conta = $_POST['conta'];

if($conta === 'somar'){

  $resultado = $base+$expoente;

    echo('o resultado é '.$resultado);

} elseif($conta === 'subtr'){

    $resultado = $base-$expoente;

    echo('o resultado é '.$resultado);


}  elseif($conta === 'dividir'){

    $resultado = $base/$expoente;

    echo('o resultado é '.$resultado);


}   elseif($conta === 'multiplicar'){

    $resultado = $base*$expoente;

    echo('o resultado é '.$resultado);


} else{
    echo('erro');
};

?>
