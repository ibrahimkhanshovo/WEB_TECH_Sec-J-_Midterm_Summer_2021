<!DOCTYPE html>
<html lang="en">
<style>
.error {color: #228B22; color: #FF0000;}
</style>
<head>
</head>
<body background="../images/assets/background.jpg">
    <?php include('./header.php'); ?>
    <div width='100px'>
        <form action='./changepasschk.php' method="POST">
            <fieldset>
                <legend>
                    <b>Change Password</b>
                </legend>
                <table align="center">
                    <tr>
                        <td align="right">Current Password:</td>
                        <td><input type='password' name='current' required/>
                    </tr>
                    <tr>
                        <td align="right"><span style="color: green"> New Password:</span></td>
                        <td><input type='password' name='new' required/></td>
                    </tr>
                    <tr>
                        <td align="right"><span style="color: red;">Retype New Password:</span></td>
                        <td><input type='password' name='cnp' required/></td>
                    </tr>
                    
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type='submit' value="Confirm"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
    <?php include('./footer.php'); ?>
</body>
</html>