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
    <h1>Riwayat Konsultasi</h1>
    <table>
        <thead>
            <tr>
                <th class="col-1">id</th>
                <th class="col-1">id_pakar</th>
                <th class="col-1">tanggal</th>
                <th class="col-2">gejala</th>
                <th class="col-3">hasil</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tb_konsul as $konsul)
                <tr>
                    <td>{{ $konsul->id_konsultasi }}</td>
                    <td>{{ $konsul->id_pakar }}</td>
                    <td>{{ $konsul->tanggal }}</td>
                    <td>{{ $konsul->gejala }}</td>
                    <td>{{ $konsul->hasil }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>