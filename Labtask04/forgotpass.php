<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
    <?php include('./header.php'); ?>
    <form action='./forgotpasschk.php' method="POST">
    <fieldset>
    <table align="right">
    <tr>
        <td>
            <nav>
                <a href="./publichome.php">Home</a> ||
                <a href="./login.php">Log in</a> ||
                <a href="./Registration.php">Registration</a>
            </nav>
        </td>
    </tr>        
    </table>
    </fieldset>

    <div width='100px'>
    
            <fieldset>
                <legend>
                    <b>FORGOT PASSWORD</b>
                </legend>
                <table align="left">
                    <tr>
                        <td align="right">Enter Email:</td>
                        <td><input type='text' name='email'/></td>
                    </tr>
            
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td align="left"><input type='submit' value="Submit"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
    <?php include('./footer.php'); ?>
</body>
</html>