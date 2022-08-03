<!DOCTYPE html>

<html>

<head>
  <title>Assignment 2: Currency Calculator</title>
</head>

<body>

<form action="activity6.php" method="get">

    <table>
        <tr>
            <td>From :</td>
            <td><input type="text" name="fromValue" /></td>
            <td>Currency :</td>
            <td>
            <select name="fromCurrency">
                <option value="USD">US Dollar</option>
                <option value="CAD">Canadian Dollar</option>
                <option value="EUR">Euro</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>To :</td>
            <td><input type="text" name="toValue" /></td>
            <td>Currency :</td>
            <td>
            <select name="toCurrency">
                <option value="USD">US Dollar</option>
                <option value="CAD">Canadian Dollar</option>
                <option value="EUR">Euro</option>
            </select>
            </td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td><input type="submit" value="convert" /></td>
        </tr>
    </table>
</form>

</body>
</html>