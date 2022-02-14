
<html>
<head>
      
      <title>
            Second PHP LAB
      </title>
</head>
<body>

<p><h1> pyramid</h1></p>

     <h1> <?php

      

     /* while($i <=3)

      {

            

            ++$i;

            echo"$i <br>";

      }*/



      for($i = 1; $i <= 3; $i++)

      {

            for ($j=0; $j <$i ; $j++) 

            { 
               echo"*";   

            }

            echo"<br/>";
      }

       for($i = 1; $i <= 3; $i++)

      {

            for ($j=0; $j <$i ; $j++) 

            { 
               echo"$i";   

            }

            echo"<br/>";
      }

       for($i = 'A'; $i <= 'C'; $i++)

      {

            for ($j='A'; $j <$i ; $j++) 

            { 
               echo"$i";   

            }

            echo"<br/>";
      }



      ?>

</h1>

</body>
</html>