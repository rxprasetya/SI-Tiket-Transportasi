<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Schedules</title>

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
    <h1>Data Schedules</h1>
    <table align="center">
        <thead>
            <tr>
                <th class="center">ID</th>
                <th>Departure Date</th>
                <th>Coming Date</th>
                <th>Departure Time</th>
                <th>Coming Time</th>
                <th>Schedule For</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item=>$row)
                <tr>
                    <td class="center">{{ $item+1 }}</td>
                    <td>{{ $row->tanggal_berangkat }}</td>
                    <td>{{ $row->tanggal_datang }}</td>
                    <td>{{ $row->waktu_berangkat }}</td>
                    <td>{{ $row->waktu_datang }}</td>
                    <td>{{ $row->jadwal_untuk->nama_jadwal_untuk }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>