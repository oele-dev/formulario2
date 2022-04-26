<?php
    // Controller
    if (empty($_POST) != true) {
        $basic = 737000;
        $tax   = 50000;
        $total = $basic  + ($tax * $_POST['vehicles_amount']) + ($_POST['price'] * 0.5);


        echo 'Hola '.$_POST['name'].', su salario es de : $' . $total;
        die();
    }
?>

<!-- View -->
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form method="POST">
            <div class="field">
                <label>Nombre del vendedor</label>
                <input type="text" name="name" required>
            </div>
            <!-- /.field -->

            <div class="field">
                <label>Cantidad de automoviles</label>
                <input type="number" name="vehicles_amount" required>
            </div>
            <!-- /.field -->

            <div class="field">
                <label>Precio total</label>
                <input type="number" name="price" required>
            </div>
            <!-- /.field -->

            <button type="submit">Enviar</button>
        </form>
    </body>
</html>