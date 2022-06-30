<!DOCTYPE html>

<html>

  <head>

    <title>Calculadora</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"></script>

    <link rel="stylesheet" href="style.css">

  </head>

  <style>

  .inputField

{

    width: 150px;

    display: inline;

}

</style>

  <body>

    <div class="container" style="margin-top: 50px">



      <?php require_once "./calcController.php";?>



        <!-- Calculator form -->

        <form method="post">

            <input name="number1" type="text" class="form-control inputField" />

            <select name="operation">

              <option value="plus">plus</option>

                <option value="minus">minus</option>

                <option value="times">times</option>

                <option value="divided by">divided by</option>

            </select>

            <input name="number2" type="text" class="form-control inputField" />

            <input name="submit" type="submit" value="Calcula" class="btn btn-primary" />

        </form>

    </div>

  </body>

</html>