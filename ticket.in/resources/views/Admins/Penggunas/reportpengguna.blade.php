<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Users</title>

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
    <h1>Data Users</h1>
    <table align="center">
        <thead>
            <tr>
                <th class="center">No</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                {{-- <th>Password</th> --}}
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item=>$row)
                <tr>
                    <td class="center">{{ $item+1 }}</td>
                    <td>{{ $row -> nama_pengguna }}</td>
                    <td>{{ $row -> username_pengguna }}</td>
                    <td>{{ $row -> email_pengguna }}</td>
                    {{-- <td>{{ substr(bcrypt($row -> password_pengguna),0,32) }}</td> --}}
                    <td>{{ $row -> no_telp }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>