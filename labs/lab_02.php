<!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <h3>php lab 02</h3>
     <?php
       $naam = "Karim ";
       $nederlands = "8.5";
       $engels = "7.7";
       $rekenen = "6.7";
       $programmeren = "8.5";
       $databases = "9,4";
       $gemiddelde = $databases+$programmeren+$rekenen+$engels+$nederlands

       $Naam = "Sophie";
       $Nederlands = "8.9";
       $Engels = "8.7";
       $Rekenen = "9.7";
       $Programmeren = "9.5";
       $Databases = "9,2";
       $Gemiddelde = $Databases+$Programmeren+$Rekenen+$Engels+$Nederlands

       echo "<table border='1'>
            <caption>
            <strong>Rapport</strong>
            </caption>
            <thead>
            <tr>
            <th>Naam</th>
            <th>Nederlands</th>
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
       <td>----------</td>
       </tr>
       </tbody>

       <tfoot>
        <tr><td colspan='6'>Groep gemiddeld</td>
        <td>----------</td></tr>
       </tfoot>
       </table>"
       "<table border='1'>
            <caption>
            <strong>Rapport</strong>
            </caption>
            <thead>
            <tr>
            <th>Naam</th>
            <th>Nederlands</th>
            <th>Engels</th>
            <th>Rekenen</th>
            <th>Programmeren</th>
            <th>Databases</th>
            <th>Gemiddelde</th>
            </tr>
            </thead>
            <tbody>
       <tr>
       <td>$Naam</td>
       <td>$Nederlands</td>
       <td>$Engels</td>
       <td>$Rekenen</td>
       <td>$Programmeren</td>
       <td>$Databases</td>
       <td>----------</td>
       </tr>
       </tbody>

       <tfoot>
        <tr><td colspan='6'>Groep gemiddeld</td>
        <td>----------</td></tr>
       </tfoot>
       </table>";
      ?>
   </body>
 </html>