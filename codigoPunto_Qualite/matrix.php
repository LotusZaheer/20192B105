<html lang="es">

<head>
    <title>Matriz</title>
    <?php
    include_once $_SERVER['DOCUMENT_ROOT'] . "/20192B105/codigoPunto_Qualite/modulos/navbar.inc.php";
    ?>
    <!-- Bootstrap 4 -->
    <meta charset="UTF-8">
    <!-- Scrool reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

</head>

<body>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Matriz 1</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        /* Se define una matrix1 como un arreglo en el que
                         cada elemento puede tomar un valor seudorandomico entre 
                         -1000 y 1000            
                        */
                        $matrix1 = array(
                            1 => array(),
                            2 => array(),
                            3 => array()
                        );
                        $contador = 0;
                        ?>
                        <tr>
                            <?php
                            $num = random_int(-1000, 1000);
                            $matrix1[1][] = $num;
                            echo "<td>$num<td>";
                            ?>

                            <?php
                            $num = random_int(-1000, 1000);
                            $matrix1[1][] = $num;
                            echo "<td>$num<td>";
                            ?>
                            <?php
                            $num = random_int(-1000, 1000);
                            $matrix1[1][] = $num;
                            echo "<td>$num<td>";
                            ?>
                        </tr>
                        <tr>

                            <?php
                            $num = random_int(-1000, 1000);
                            $matrix1[2][] = $num;
                            echo "<td>$num<td>";

                            ?>
                            <?php
                            $num = random_int(-1000, 1000);
                            $matrix1[2][] = $num;
                            echo "<td>$num<td>";
                            ?>
                            <?php
                            $num = random_int(-1000, 1000);
                            $matrix1[2][] = $num;
                            echo "<td>$num<td>";
                            ?>
                        </tr>
                        <tr>
                            <?php
                            $num = random_int(-1000, 1000);
                            $matrix1[3][] = $num;
                            echo "<td>$num<td>";
                            ?>
                            <?php
                            $num = random_int(-1000, 1000);
                            $matrix1[3][] = $num;
                            echo "<td>$num<td>";
                            ?>
                            <?php
                            $num = random_int(-1000, 1000);
                            $matrix1[3][] = $num;
                            echo "<td>$num<td>";
                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Matriz 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        /* Se define una matrix2 como un arreglo en el que
                         cada elemento puede tomar un valor seudorandomico entre 
                         -1000 y 1000            
                        */
                        $matrix2 = array();
                        $contador = 0;
                        ?>
                        <tr>
                            <?php
                            $matrix2[] = random_int(-1000, 1000);
                            echo "<td>$matrix2[$contador]<td>";
                            $contador += 1;
                            ?>
                            <?php
                            $matrix2[] = random_int(-1000, 1000);
                            echo "<td>$matrix2[$contador]<td>";
                            $contador += 1;
                            ?>
                            <?php
                            $matrix2[] = random_int(-1000, 1000);
                            echo "<td>$matrix2[$contador]<td>";
                            $contador += 1;
                            ?>
                        </tr>
                        <tr>
                            <?php
                            $matrix2[] = random_int(-1000, 1000);
                            echo "<td>$matrix2[$contador]<td>";
                            $contador += 1;
                            ?>
                            <?php
                            $matrix2[] = random_int(-1000, 1000);
                            echo "<td>$matrix2[$contador]<td>";
                            $contador += 1;
                            ?>
                            <?php
                            $matrix2[] = random_int(-1000, 1000);
                            echo "<td>$matrix2[$contador]<td>";
                            $contador += 1;
                            ?>
                        </tr>
                        <tr>
                            <?php
                            $matrix2[] = random_int(-1000, 1000);
                            echo "<td>$matrix2[$contador]<td>";
                            $contador += 1;
                            ?>
                            <?php
                            $matrix2[] = random_int(-1000, 1000);
                            echo "<td>$matrix2[$contador]<td>";
                            $contador += 1;
                            ?>
                            <?php
                            $matrix2[] = random_int(-1000, 1000);
                            echo "<td>$matrix2[$contador]<td>";
                            $contador += 1;
                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
        <br>
        <div class="row">

            <div class="col-sm">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Matriz_1*Matriz_2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <?php
                            // Se hace el producto de la matriz 1 y matriz 2
                            $matrix_product = array();
                            for ($i = 1; $i < 4; $i++) {
                                for ($j = 0; $j < 3; $j++) {
                                    $f = $j;
                                    for ($g = 0; $g < 3; $g++) {
                                        $result += $matrix1[$i][$g] * $matrix2[$f];
                                        $f += 3;
                                    }
                                    $matrix_product[] = $result;
                                    $result = 0;
                                }
                            }
                            $contador = 0;
                            ?>
                            <?php
                            echo "<td>$matrix_product[$contador]<td>";
                            $contador += 1;
                            ?>

                            <?php

                            echo "<td>$matrix_product[$contador]<td>";
                            $contador += 1;
                            ?>
                            <?php

                            echo "<td>$matrix_product[$contador]<td>";
                            $contador += 1;
                            ?>
                        </tr>
                        <tr>

                            <?php

                            echo "<td>$matrix_product[$contador]<td>";
                            $contador += 1;
                            ?>
                            <?php

                            echo "<td>$matrix_product[$contador]<td>";
                            $contador += 1;
                            ?>
                            <?php

                            echo "<td>$matrix_product[$contador]<td>";
                            $contador += 1;
                            ?>
                        </tr>
                        <tr>
                            <?php

                            echo "<td>$matrix_product[$contador]<td>";
                            $contador += 1;
                            ?>
                            <?php

                            echo "<td>$matrix_product[$contador]<td>";
                            $contador += 1;
                            ?>
                            <?php

                            echo "<td>$matrix_product[$contador]<td>";
                            $contador += 1;
                            ?>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</body>

</html>
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/20192B105/codigoPunto_Qualite/modulos/footer.php";
?>
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/20192B105/codigoPunto_Qualite/modulos/b_scripts.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/20192B105/codigoPunto_Qualite/modulos/footer.php";
?>