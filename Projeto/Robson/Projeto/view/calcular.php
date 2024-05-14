<?php
        if(isset($_POST['calculateButton'])){
            $n1 = floatval($_POST['n1']);
            $operation = $_POST['operation'];
            $n2 = floatval($_POST['n2']);
            $result;

            switch($operation) {
                case "add":
                    $result = $n1 + $n2;
                    break;
                case "subtract":
                    $result = $n1 - $n2;
                    break;
                case "multiply":
                    $result = $n1 * $n2;
                    break;
                case "divide":
                    if($n2 != 0)
                        $result = $n1 / $n2;
                    else
                        $result = "Não é possível dividir por zero";
                    break;
                default:
                    $result = "Operação inválida";
            }

            echo "Resultado: " . $result;
        }
        ?>