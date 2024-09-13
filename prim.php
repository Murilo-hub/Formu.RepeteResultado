<?php
    $usuario = $_POST['usuario'];
    $curso = $_POST['curso'];
    $select = intval(value: $_POST['select']);

    print "<h1>Resultado:</h1>";
    for ($i = 0; $i < $select; $i++) {
        print "<p>" . $usuario . "</p>";
        print "<p>" . $curso . "</p>";
        print "----------------------------------------------";
    }
?>
