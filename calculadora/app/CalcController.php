<?php require_once "./Calculator.php";



// Se o botão enviar for pressionado

if (isset($_POST['submit'])) {



    // Verifique os valores numéricos

    if (is_numeric($_POST['number1']) && is_numeric($_POST['number2'])) {

        $calculator = new \App\Calculator;



        // Calcular total

        if ($_POST['operation'] == 'plus') {

            $total = $calculator->add($_POST['number1'], $_POST['number2']);

        } else if ($_POST['operation'] == 'minus') {

            $total = $calculator->subtract($_POST['number1'], $_POST['number2']);

        } else if ($_POST['operation'] == 'times') {

            $total = $calculator->multiply($_POST['number1'], $_POST['number2']);

        } else if ($_POST['operation'] == 'divided by') {

            $total = $calculator->divide($_POST['number1'], $_POST['number2']);

        }



        echo "<h1>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} equals {$total}</h1>";



    } else {



        // Imprimir mensagem de erro no navegador

        echo 'Os valores numéricos são obrigatórios';

    }

}