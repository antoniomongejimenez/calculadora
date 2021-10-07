<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
  <?php require 'auxiliar.php';?>
    <h1>Calculadora</h1>
    <form action="calcular.php" method="get">
         <div>
           <label for="op1">Primer operando:</label>
           <input type="number" id="op1" name="x">
         </div>
         <div>
            <label for="op2">Segundo operando:</label>
            <input type="number" id="op2" name="y">
          </div>

          <div>
            <label for="op">Operación:</label>
            <select id="op" name="oper">

                <?php foreach (OPER as $oper): ?>
                    <option value="<?= $oper ?>"><?= $oper ?></option>
                <?php endforeach ?>

            </select>
          </div>
          <div>
            <button type="submit">Operar</button>
          </div>
    </form>    
</body>
</html>