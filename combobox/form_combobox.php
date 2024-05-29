<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Input ComboBox</title>
</head>
<body>
    <p>Binatang apa yang Anda suka?</p>
    <form id="form_combobox" name="form_combobox" method="POST" action="proses_combobox.php">
        <select name="favorit">
            <option value="Kucing">Kucing</option>
            <option value="Burung">Burung</option>
            <option value="Kambing">Kambing</option>
        </select>
        <p></p>
        <p><input type="submit" name="button" value="Tampil"/></p>
    </form>
</body>
</html>
