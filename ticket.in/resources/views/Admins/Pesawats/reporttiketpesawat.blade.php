<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Ticket Planes</title>

    <style>
        body {
            box-sizing: border-box;
            font-size: 16px;
        }
        h1 {
            text-align: center;
        }
        table {
            box-sizing: border-box;
            border: 2px solid black;
            border-collapse: collapse;
            width: 100%;
        }
        thead {
            background-color: #0d47a1;
            color: white;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            text-align: left;
            padding: 10px;
        }
        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Data Ticket Planes</h1>
    <table align="center">
        <thead>
            <tr>
                <th class="center">No</th>
                <th>Plane Name</th>
                <th>Departure Date</th>
                <th>Coming Date</th>
                <th>Price</th>
                <th>Home Town</th>
                <th>Destination City</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item=>$row)
                <tr>    
                    <td class="center">{{ $item+1 }}</td>
                    <td>{{ $row->maskapai->nama_maskapai }}</td>
                    <td>{{ $row->jadwal->tanggal_berangkat }}</td>
                    <td>{{ $row->jadwal->tanggal_datang }}</td>
                    <td>Rp. {{ number_format($row->harga_tiket_pesawat, 0, ',', '.') }}</td>
                    <td>{{ $row->kota_asal->nama_kota }}</td>
                    <td>{{ $row->kota_tujuan->nama_kota }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>