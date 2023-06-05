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
    <h1>Data Jadwal Konsultasi</h1>
    <table class="table table-bordered">
        <thead class="table-primary text-center">
            <tr>
                <th class="col-1">id_jadwal</th>
                <th class="col-1">id_pakar</th>
                <th class="col-2">nama_pakar</th>
                <th class="col-2">tanggal</th>
                <th class="col-1">jam</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tb_jadwal as $jadwal)
                <tr>
                    <td>{{ $jadwal->id_jadwal }}</td>
                    <td>{{ $jadwal->id_pakar }}</td>
                    <td>{{ $jadwal->nama_pakar }}</td>
                    <td>{{ $jadwal->tanggal }}</td>
                    <td>{{ $jadwal->jam }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>