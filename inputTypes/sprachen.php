<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <form method=post action='ergebnis.php'>
        <tr>
            <td>
                <label>Vorname</label>
                <input type=text name=vorname id=vorname required>
            </td>
        </tr>
        <tr>
            <td>
                <label>Nachname</label>
                <input type=text name=nachname id=nachname required>
            </td>
        </tr>
        <tr>
            <td>
                <label>Email</label>
                <input type=email name=email id=email required>
            </td>
        </tr>
        <tr>
            <td>
                <label>Geschlecht</label>
                <input type=radio name=geschlecht value=w id=w>w
                <input type=radio name=geschlecht value=m id=m>m
                <input type=radio name=geschlecht value=d id=d>d
            </td>
        </tr>
        <tr>
            <td>
                <label>Sprachen</label>
                <input type=checkbox name=sprachen[] value=php id=php>php
                <input type=checkbox name=sprachen[] value=python id=python>python
                <input type=checkbox name=sprachen[] value=javascript id=javascript>javascript
            </td>
        </tr>
        <tr>
            <td>
                <label>gewünschte Autos</label>
                <br>
                <select name=auto[] multiple id=auto>
                    <option value=1>VW</option>
                    <option value=2>BMW</option>
                    <option value=3>Honda</option>
                    <option value=4>Fiat</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label>Zusatzinfo</label>
                <input type=textarea name=zusatzinfo id=zusatzinfo>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit">
            </td>
        </tr>
    </form>
</table>
</body>
</html>
