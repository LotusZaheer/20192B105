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
                <table class="table ">
                    <thead class="thead-light">
                        <tr>
                            <th colspan="8">Matriz 1</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $matriz1 = array(
                            0 => array(),
                            1 => array(),
                            2 => array()
                        );
                        for ($i = 0; $i <= 2; $i++) {
                            echo '<tr>';

                            for ($j = 0; $j <= 2; $j++) {
                                $num = rand(0, 10);
                                $matriz1[$i][$j] = $num;

                                echo '<td>' . $matriz1[$i][$j] . '</td>';
                            }
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
                <table class="table ">
                    <thead class="thead-light">
                        <tr>
                            <th colspan="8">Matriz 2</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $matriz2 = array(
                            0 => array(),
                            1 => array(),
                            2 => array()
                        );
                        for ($i = 0; $i <= 2; $i++) {
                            echo "<tr>";
                            for ($j = 0; $j <= 2; $j++) {
                                $num = rand(0, 10);
                                $matriz2[$i][$j] = $num;
                                echo '<td>' . $matriz2[$i][$j] . '</td>';
                            }
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>

                <?php
                $matrizaux = array(
                    0 => array(),
                    1 => array(),
                    2 => array()
                );
                for ($i = 0; $i <= 2; $i++) {

                    for ($j = 0; $j <= 2; $j++) {
                        $matrizaux[$i][$j] = $matriz2[$j][$i];
                    }
                }
                ?>

                <table class="table ">
                    <thead class="thead-light">
                        <tr>
                            <th colspan="8">Matriz1*Matriz2</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $matrizm = array(
                            0 => array(),
                            1 => array(),
                            2 => array()
                        );
                        for ($i = 0; $i <= 2; $i++) {
                            echo "<tr>";
                            for ($j = 0; $j <= 2; $j++) {
                                $matrizm[$i][$j] = 0;
                                for ($h = 0; $h <= 2; $h++) {

                                    $matrizm[$i][$j] += $matriz1[$i][$h] * $matrizaux[$j][$h];
                                }

                                echo '<td>' . $matrizm[$i][$j] . '</td>';
                            }
                            echo "</tr>";
                        }
                        ?>
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