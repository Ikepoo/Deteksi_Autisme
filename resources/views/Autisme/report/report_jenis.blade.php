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
    <h1>Data Jenis Autismse</h1>
    <table class="table table-bordered">
        <thead class="table-primary text-center">
            <tr>
                <th>id_jenis</th>
                <th>nama_jenis</th>
                <th>add_time</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tb_jenis as $jenis)
                <tr>
                    <td>{{ $jenis->id_jenis }}</td>
                    <td>{{ $jenis->nama_jenis }}</td>
                    <td>{{ $jenis->add_time }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>