<!DOCTYPE html>

<html>

<head>

</head>

<body>

<p>

    <?php

    $provisionedActivities = array("specs", "mugs", "Sausage rolls"); // declares the array

    do{

        for ($i = 1; $i < 30; $i++)

        {
            if ($i == 1)
                echo "<p>On the 1st of the month no products are available</p>";

            if ($i % 2 != 0)
                echo "<p>On the 2nd of the month specs are available</p>";

            if ($i % 3 != 0)
                echo "<p>On the 3rd of the month mugs are available</p>";

            if ($i % 4 != 0)
                echo "<p>On the 4th of the month specs and sausage rolls are available</p>";

            else {

                print "No products are available";

            }

        }

    }

    while($i == rand(1,4))






    ?>

</p>

</body>

</html>