<form action="../../Controller/LoginRegister/RegisterController.php" method="POST" enctype="multipart/form-data">
        <table>         
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value=""/></td>
            </tr>
        
            <tr>
                <td>Email</td>
                <td><input type="text" name="Email" value="" /></td>
            </tr>
            
            <tr>
                <td>Date Of Birth</td>
                <td><?php include_once '../../Includes/selectday.php'; ?><?php include_once '../../Includes/selectmonth.php'; ?><?php include_once '../../Includes/selectyear.php'; ?></td>
            </tr>
            
            <tr>
                <td>Password</td>
                <td><input type="password" name="Password" value="" /></td>
            </tr>
            
            <tr>
                <td>Image</td>
                <td><input type="file" name="image"/></td>
            </tr>
            
            <tr>
                <td>Interest</td>
                <td><?php include_once '../../Includes/selectInterest.php'; ?></td>
            </tr>
            
            <tr>
                <td>Resume</td>
                <td><input type="file" name="resume"/></td>
            </tr>
            
            <tr>
                <td>Type</td>
                <td><?php include_once '../../Includes/selectType.php'; ?></td>
            </tr> 
        
        </table>
    <input type="submit" value="SignUp" name="Signup" />
</form>