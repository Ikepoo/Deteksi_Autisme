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
    <h1>Riwayat hasil Diagnosa</h1>
    <table class="table table-bordered">
        @foreach ($tb_hasil as $hasil)
        <thead class="table-primary text-center">
            <tr>
                <th>id</th>
                <th>umur</th>
                <th>jenis</th>
                <th>tanggal</th>
            </tr>
        </thead>
        <tbody>
            
                <tr>
                    <td rowspan="5">{{ $hasil->id_diagnosa }}</td>
                    <td>{{ $hasil->umur_anak }}</td>
                    <td>{{ $hasil->nama_jenis }}</td>
                    <td>{{ $hasil->tanggal }}</td>
                </tr>
                <tr>
                    <th colspan="3">gejala</th>
                </tr>
                <tr>
                    <td colspan="3">
                        @foreach ($tb_gejala as $id_gejala1 => $nama_gejala)
                            @if ($hasil->id_gejala1 == $id_gejala1)
                                {{ $nama_gejala }}, 
                            @endif
                        @endforeach
                        @foreach ($tb_gejala as $id_gejala1 => $nama_gejala)
                            @if ($hasil->id_gejala2 == $id_gejala1)
                                {{ $nama_gejala }}, 
                            @endif
                        @endforeach
                        @foreach ($tb_gejala as $id_gejala1 => $nama_gejala)
                            @if ($hasil->id_gejala3 == $id_gejala1)
                                {{ $nama_gejala }}, 
                            @endif
                        @endforeach
                        @foreach ($tb_gejala as $id_gejala1 => $nama_gejala)
                            @if ($hasil->id_gejala4 == $id_gejala1)
                                {{ $nama_gejala }}, 
                            @endif
                        @endforeach
                        @foreach ($tb_gejala as $id_gejala1 => $nama_gejala)
                            @if ($hasil->id_gejala5 == $id_gejala1)
                                {{ $nama_gejala }}, 
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th colspan="3">cara penangananan</th>
                </tr>
                <tr>
                    <td colspan="3">{{ $hasil->cara_penanganan }}</td>
                </tr>
            
        </tbody>
        @endforeach
    </table>
</body>
</html>