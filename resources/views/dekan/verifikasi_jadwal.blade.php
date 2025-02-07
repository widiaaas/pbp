<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Verifikasi dan Jadwal Disetujui</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container my-5">
        <h1 class="h3 mb-4">Verifikasi dan Jadwal Disetujui</h1>

        <!-- Tabel Verifikasi Jadwal -->
        <div class="card shadow mb-5">
            <div class="card-header text-dark" style="background-color: #ffc107;"> <!-- Warna kuning -->
                <h5 class="mb-0">Daftar Jadwal Menunggu Verifikasi</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Mata Kuliah</th>
                            <th>Ruangan</th>
                            <th>Hari</th>
                            <th>Jam</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jadwalPending as $key => $item)
                            <tr>
                                <td class="text-center">{{ $key + 1 }}</td>
                                <td>{{ $item->mata_kuliah }}</td>
                                <td>{{ $item->ruangan->nama_ruang }}</td>
                                <td>{{ $item->hari }}</td>
                                <td>{{ $item->jam }}</td>
                                <td class="text-center">
                                    <button class="btn btn-success btn-sm">Setujui</button>
                                    <button class="btn btn-danger btn-sm">Tolak</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tabel Jadwal Disetujui -->
        <div class="card shadow">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Daftar Jadwal yang Sudah Disetujui</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Mata Kuliah</th>
                            <th>Ruangan</th>
                            <th>Hari</th>
                            <th>Jam</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jadwalApproved as $key => $item)
                            <tr>
                                <td class="text-center">{{ $key + 1 }}</td>
                                <td>{{ $item->mata_kuliah }}</td>
                                <td>{{ $item->ruangan->nama_ruang }}</td>
                                <td>{{ $item->hari }}</td>
                                <td>{{ $item->jam }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
