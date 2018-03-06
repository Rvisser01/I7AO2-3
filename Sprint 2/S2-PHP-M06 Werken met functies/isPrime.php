<html>
<head>
    <style type="text/css">
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
        }

        table tr td {
            font-size: 12px;
            padding: 5px;
        }

        fieldset {
            border: 1px solid #555;
            width: 400px;
            margin: 5px;
            display: inline-block;
            vertical-align: top;
        }

        legend {
            padding: 5px;
        }

        input {
            border: 1px solid #CCC;
            padding: 2px;
        }

        hr {
            background: #EEE;
            border: 0;
            height: 1px;
        }

    </style>
    <title>Priemgetallen</title>
</head>
<body>

          <?php
          <form action="" method="post">
              <fieldset>
                  <legend>Check Priemgetal</legend>
                  <table>
                      <tr>
                          <td>Getal</td>
                          <td><input type="text" size="4" name="number" /></td>
                          <td><input type="submit" name="check" value="Controleer Getal" /></td>
                      </tr>
                  </table>
          function isPrime($number)
          {
            if($_SERVER['REQUEST_METHOD'] == "POST") {
                $number = $_POST['number'];
                if(isset($_POST['check']) && !empty($number) && is_numeric($number)) {
                    $gevondenDelers = 0;
                    for($i = 1; $i <= $number; $i++) {
                        $result = $number / $i;
                        if(is_int($result)) {
                            $gevondenDelers++;
                        }
                    }
                    if($gevondenDelers == 2) {
                        echo '<span style="background: #DFFFE3; padding: 2px;">True</span>';
                    }
                    else {
                        echo '<span style="background: #FFDFE3; padding: 2px;">False</span>';
                    }
                }
            }
          }

          ?>
      </fieldset>
  </form>

</body>
</html>
