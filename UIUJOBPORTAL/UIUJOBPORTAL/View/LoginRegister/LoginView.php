
<form name="LoginView" action="../../Controller/LoginRegister/LoginController.php" method="POST" enctype="multipart/form-data">
    <table border="0">
       <tbody>
            <tr>
                <td>Name</td>
                <td><input type="text" name="Name" value="" /></td>
            </tr>
            <tr>
                <td>Email Id</td>
                <td><input type="text" name="Emailid" value="" /></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="Pass" value="" /></td>
            </tr>
            <tr>
                <td>Type</td>
                <td>
                    <select name="type">
                    <option value="0">-----------------</option>
                    <option value='1'>Student</option>
                    <option value='2'>Alumni</option>
                    <option value='3'>Admin</option>
                    </select>
                </td>
            </tr>
        </tbody>
    </table>
    <input type="submit" value="Login" />
</form>
