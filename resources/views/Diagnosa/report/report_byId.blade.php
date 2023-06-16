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
    @foreach ($tb_hasil as $hasil)
    <h1>Diagnosa id_{{ $hasil->id_diagnosa }}</h1>
    <table class="table table-bordered">
        <tbody>
            <tr>
              <th>Umur</th>
              <td>{{ $hasil->umur_anak }} tahun</td>
            </tr>
            <tr>
              <th>Tanggal</th>
              <td>{{ $hasil->tanggal }}</td>
            </tr>
            <tr>
              <th>gejala</th>
              <td>
                @foreach ($tb_gejala as $id_gejala1 => $nama_gejala)
                    @if ($hasil->id_gejala1 == $id_gejala1)
                        {{ $nama_gejala }}, 
                    @endif
                    @if ($hasil->id_gejala2 == $id_gejala1)
                        {{ $nama_gejala }}, 
                    @endif
                    @if ($hasil->id_gejala3 == $id_gejala1)
                        {{ $nama_gejala }}, 
                    @endif
                    @if ($hasil->id_gejala4 == $id_gejala1)
                        {{ $nama_gejala }}, 
                    @endif
                    @if ($hasil->id_gejala5 == $id_gejala1)
                        {{ $nama_gejala }}
                    @endif
                @endforeach
              </td>
            </tr>
            <tr>
              <th>Jenis</th>
              <td>{{ $hasil->nama_jenis }}</td>
            </tr>
            <tr>
              <th>Cara penanganan</th>
              <td>{{ $hasil->cara_penanganan }}</td>
            </tr>
          </tbody>
    </table>
    @endforeach
</body>
</html>