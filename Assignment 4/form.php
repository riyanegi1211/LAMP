  
<html>
    <head>
        <title>
            HTML Form to store data in database
        </title>
      <form method="POST" action="form.php">
            <br>
            Username <input type="text" name="username" placeholder="Enter username..." required><br><br>
            Email <input type="email" name="email" placeholder="Enter email..." required><br><br>
            Select Gender  -  
            Male <input type="radio" name="gender" value="male" checked>  Female <input type="radio" name="gender" value="female"><br><br>
            City <select name="city">
                <option value="Dehradun">DEHRADUN</option>
                <option value="Nanital">NANITAL</option>
                <option value="Delhi">DELHI</option>
                <option value="Mussoorie">MUSSOORIE</option>
                <option value="Tehri">TEHRI</option>
                <option value="Meerut">KUMAON</option>
            </select><br><br>
            <input type="submit" name="submit">
      </form>  
    </head>
</html>