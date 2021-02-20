<html>
    <head>
        <title>
            Sum of two numbers
        </title>
    </head>
    <body>
        <form method="POST" action="sum.php">
            Enter first number<input type="number" name="var1" required><br><br>
            Enter second number<input type="number" name="var2" required><br><br>
            <input type="submit" name="submit" value="submit">

        </form>
    </body>
</html>


<?php
if(isset($_POST['submit']))
{
    $var1=$_POST['var1'];
    $var2=$_POST['var2'];
    $sum = $var1 + $var2;
    echo "Sum of two numbers is ".$sum;
}

else
{
    echo "No data submitted yet. Click on submit to submit the values.";
}
?>