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
    <h1>Data Aturan</h1>
    <table>
        <thead>
            <tr>
                <th>id_aturan</th>
                <th>id_gejala</th>
                <th>id_jenis</th>
                <th>id_penang</th>
                <th>add_time</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tb_aturan as $aturan)
                <tr>
                    <td>{{ $aturan->id_aturan }}</td>
                    <td>{{ $aturan->id_gejala1 }}, {{ $aturan->id_gejala2 }}, {{ $aturan->id_gejala3 }}, {{ $aturan->id_gejala4 }}, {{ $aturan->id_gejala5 }}</td>
                    <td>{{ $aturan->id_jenis }}</td>
                    <td>{{ $aturan->id_penanganan }}</td>
                    <td>{{ $aturan->add_time }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>