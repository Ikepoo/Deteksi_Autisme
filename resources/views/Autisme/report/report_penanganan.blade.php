<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        th {
            background: yellow
        }
        th, tr, td {
            border: 1px solid black;
            padding-left: 1rem;
            padding-right: 1rem;
            font-size: 1.2rem
        }
        body {
            align-content: center;
            text-align: center
        }
        table {
            margin: auto
        }
    </style>
</head>
<body>
    <h1>Data Penanganan Autismse</h1>
    <table class="table table-bordered">
        <thead class="table-primary text-center">
            <tr>
                <th>id_penang</th>
                <th>id_jenis</th>
                <th>cara_penanganan</th>
                <th>add_time</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tb_penanganan as $penanganan)
                <tr>
                    <td>{{ $penanganan->id_penanganan }}</td>
                    <td>{{ $penanganan->id_jenis }}</td>
                    <td>{{ $penanganan->cara_penanganan }}</td>
                    <td>{{ $penanganan->add_time }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>