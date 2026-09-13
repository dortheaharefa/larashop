<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Product</title>
</head>

<body>
    <h1>
        Tambah Daftar Product
    </h1>
    <table>
        <form method="post" action="/product/store">
            <tr>
                <td><label>Nama Product</label></td>
                <td><input id="nama" name="nama" type="text" placeholder="Sampo"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit">SIMPAN</button></td>
            </tr>
        </form>
    </table>
</body>
</html>
