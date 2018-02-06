<!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>php lab 02</title>
   </head>
   <body>
     <h3>php lab 02</h3>
     <?php
       $naam = "Karim";
       $nederlands = 8.5;
       $engels = 7.7;
       $rekenen = 6.7;
       $programmeren = 8.5;
       $databases = 9.4;
       $gemiddelde = ($databases+$programmeren+$rekenen+$engels+$nederlands)/5;

       $Naam = "Sophie";
       $Nederlands = 8.9;
       $Engels = 8.7;
       $Rekenen = 9.7;
       $Programmeren = 9.5;
       $Databases = 9.2;
       $Gemiddelde = ($Databases+$Programmeren+$Rekenen+$Engels+$Nederlands)/5;
       $Gemiddelde = round($Gemiddelde,1);

       $groepsgemiddelde = ($gemiddelde + $Gemiddelde)/2;
       $groepsgemiddelde = round($groepsgemiddelde,1);

       echo "<table border='1'>
            <caption>
            <strong>Rapport</strong>
            </caption>
            <thead>
            <tr>
            <th>Naam</th>
            <th>Nederlands</th;
            <th>Engels</th>
            <th>Rekenen</th>
            <th>Programmeren</th>
            <th>Databases</th>
            <th>Gemiddelde</th>
            </tr>
            </thead>
            <tbody>
       <tr>
       <td>$naam</td>
       <td>$nederlands</td>
       <td>$engels</td>
       <td>$rekenen</td>
       <td>$programmeren</td>
       <td>$databases</td>
       <td>$gemiddelde</td>
       </tr>
       </tbody>

       <tr>
       <td>$Naam</td>
       <td>$Nederlands</td>
       <td>$Engels</td>
       <td>$Rekenen</td>
       <td>$Programmeren</td>
       <td>$Databases</td>
       <td>$Gemiddelde</td>
  </tr>
  </tbody>

       <tfoot>
        <tr><td colspan='6'>Groeps gemiddelde</td>
        <td>$groepsgemiddelde</td></tr>
       </tfoot>
       </table>";
      ?>
   </body>
 </html>
