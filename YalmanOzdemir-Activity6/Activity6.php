<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> Formlar </title>
        <link rel="stylesheet" href="style.css">
      
        
    </head>
    <body>
        <h1>Registration Form</h1>
        <form action="Activity6-preview.php" method="POST">
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" size="50" autofocus> </td>
                    
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="uname" size="50" autofocus> </td>
                    
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="pass" /> </td>
                </tr>
               
                <tr>
                    <td>Address:</td>
                    <td><input type="text" name="address"></td>    
                </tr>



<tr>
            <td>Country:</td>
            <td>
            <select name="country">
            <option value="">(Please select a country)</option>
                <option value="Country-America">America</option>
                <option value="Country-Türkiye">Türkiye</option>
            </select>  </td> <br></tr>



            <tr>
                    <td>ZIP Code:</td>
                    <td><input type="number" name="zipcode" size="50"></td>
                    <br>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" size="50" autofocus> </td>
                </tr>

                   <tr>
                    <br>
                    <td>Sex:</td>
                    <td class="male"><input type="radio" id="male" name="male" value="Male">
                    <label for="male">Male</label></td> 
                    <td class="female"><input type="radio" id="female" name="female" value="Female">
                    <label for="female">Female</label><br></td> 
                </tr>
                <tr>
                    <td>Language:</td>
                    <td class="english"><input type="checkbox" name="english" value="english">
                    <label for="english">English</label></td> 
                    <td class="french"><input type="checkbox" name="french" value="french">
                    <label for="french">French</label></td> 
                    <td class="germany"><input type="checkbox" name="germany" value="germany">
                    <label for="germany">Germany</label></td> 
                </tr> <br>
                <tr>
<td>About:</td>
<td><textarea rows="4" cols="25" name="about" 
            maxlength="250" minlength="20" ></textarea></br>
            <input type="submit" value="Submit"/></td>
                </tr>
            </table>



        </form>
    </body>
</html>