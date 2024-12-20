@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggajian Pegawai</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Poppins', sans-serif;
        }
        .card {
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .header {
            background: linear-gradient(135deg, #007bff, #00c6ff);
            color: white;
            padding: 20px;
            border-radius: 10px 10px 0 0;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }
        .header h2 {
            margin: 0;
        }
        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="container mt-5 fade-in">
        <div class="card">
            <div class="header text-center">
                <h2>Penggajian Pegawai</h2>
            </div>
            <div class="card-body">
                {{-- <form method="GET" action="{{ url('/penggajian') }}" class="mb-4">
                    <div class="form-row justify-content-center">
                        <div class="col-md-4">
                            <input type="date" name="tanggal_mulai" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <input type="date" name="tanggal_akhir" class="form-control" required>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary btn-block">Tampilkan</button>
                        </div>
                    </div>
                </form> --}}

                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nama Pegawai</th>
                            <th>Total Gaji</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($gajiPerPegawai as $item)
                            <tr>
                                <td>{{ $item -> nama }}</td>
                                <td>Rp {{ number_format($item -> salary, 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
@endsection