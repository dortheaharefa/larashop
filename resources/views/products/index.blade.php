<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @php
        $i = 1;
    @endphp
    <h1>Daftar Produk</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
        </tr>
        @foreach ($product as $item)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $item }}</td>
            </tr>
            @php $i++; @endphp
        @endforeach
    </table>
</body>
</html>
