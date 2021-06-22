<!DOCTYPE html>
   <html>
       <link rel="stylesheet" href="calendar.css">

       <head>
             <title>Calendar</title>
       </head>

       <body>
           <?php
                date_default_timezone_set('America/Caracas');
                $numbersOfHours = 11;
                if(isset($_POST['submit'])){
                    $numbersOfHours = $_POST["numbersOfHours"] - 1;
                }

                $timeStamp = time();
                $todayDate = date("D, F j, Y", $timeStamp);
                $Time = date("g:i a",$timeStamp);   
                $today = date("l", $timeStamp);
              
                function get_hour_string($timeStamp){
                    $hour = date("g", $timeStamp);
                    $AmPm = date("a", $timeStamp);
                    return "$hour:00 $AmPm";
                }
           ?>

           <div class="container">
               <h2>
                   <?php
                        echo "<br><b>Calendar</b><br>";
                        echo "<br><b>Today is </b>: $today";
                        echo "<br><b>Today's date</b>: $todayDate";
                        echo "<br><b>Time is</b> $Time <br>";
                   ?>

                    <form method="POST">
                        Input numbers of Hours: <input type="number" name="numbersOfHours">
                        <input type="submit" value="submit" name = "submit">
                    </form>
               </h2>
              
               <table id="event_table"> 
                    <tr>
                        <th class='hr_td'></th>
                        <th class='table_header'>&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th class='table_header'>&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th class='table_header'>&nbsp&nbsp</th>
                    </tr>
                    <tr> 
                        <br> 
                    </tr>

            <?php
                for ($i = 0; $i <= $numbersOfHours; $i++) 
                {
                    $hours = get_hour_string($timeStamp + $i * 60 * 60);
                    if ($i % 2 == 0) 
                    {
                        echo "<tr class='odd_row'> ";
                        echo "<td class='hr_td'>
                               <b>$hours</b>
                            </td>
                            <td> </td>
                            <td> </td>
                            <td> </td> ";
                        echo "</tr> ";
                    }
                    if ($i % 2 != 0) 
                    {
                        echo "<tr class='even_row'> ";
                        echo "<td class='hr_td'>
                               <b>$hours</b>
                            </td>
                            <td> </td>
                            <td> </td>
                            <td> </td> ";
                        echo "</tr> ";
                    }
                }
            ?>
                </table>
            </div>
        </body>
   </html>