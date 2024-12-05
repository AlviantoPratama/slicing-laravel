<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manaje</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .sidebar {
            background-color: #f8f9fa;
            min-height: 100vh;
            padding: 20px;
        }

        .sidebar .nav-link {
            color: #333;
        }

        .sidebar .nav-link.active {
            font-weight: bold;
            color: #0d6efd;
        }

        .table th, .table td {
            vertical-align: middle;
        }

        .pagination {
            justify-content: end;
        }

        .table-info {
            font-size: 0.875rem;
        }

        .action-buttons .btn {
            margin-right: 5px;
        }

        .search-box {
            width: 250px;
        }

        .header {
            width: calc(100% - 0px);
        }

        .row {
            display: flex;
            align-items: flex-start;
        }

        .sidebar, .col-md-10 {
            min-height: 100vh;
        }
        .footer{
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <aside class="col-md-2 sidebar">
                <h3 class="text-center fw-bold" style="color: green;">Manaje®</h3>
                <nav class="nav flex-column">
                    <a href="#" class="nav-link text-dark">
                        <i class="bi bi-grid"></i> Dasbor
                    </a>
                    <a href="#tugasMenu" class="nav-link text-dark" data-bs-toggle="collapse" aria-expanded="false" aria-controls="tugasMenu">
                        <i class="bi bi-rocket-takeoff"></i> Tugas
                        <i class="bi bi-chevron-down float-end"></i>
                    </a>
                    <div class="collapse ps-3" id="tugasMenu">
                        <a href="#" class="nav-link text-dark">Semua Tugas</a>
                        <a href="#" class="nav-link text-dark">Dikirim</a>
                        <a href="#" class="nav-link text-dark">Drop</a>
                        <a href="#" class="nav-link text-dark">Diterima</a>
                    </div>
                    <a href="#" class="nav-link text-dark">
                        <i class="bi bi-file-earmark-text"></i> Surat Jalan
                    </a>
                    <a href="#" class="nav-link text-dark">
                        <i class="bi bi-wallet2"></i> Transaksi
                    </a>
                    <a href="#" class="nav-link text-dark">
                        <i class="bi bi-gear"></i> Pengaturan
                    </a>
                </nav>
            </aside>

            <div class="col-md-10 p-0">
                <header class="header bg-white shadow-sm p-3 mb-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <a href="#" class="text-dark text-decoration-none">Lihat Website</a>
                        </div>

                        <div class="d-flex align-items-center">
                            <button class="btn btn-light me-2">
                                <i class="bi bi-chat-left"></i>
                            </button>

                            <button class="btn btn-light me-2">
                                <i class="bi bi-person"></i>
                            </button>

                            <div class="dropdown">
                                <button class="btn btn-success dropdown-toggle me-2" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    Indonesia
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                                    <li><a class="dropdown-item" href="#">English</a></li>
                                    <li><a class="dropdown-item" href="#">Indonesia</a></li>
                                </ul>
                            </div>
                            <button class="btn btn-light me-2">
                                <i class="bi bi-arrows-fullscreen"></i>
                            </button>
                        </div>
                    </div>
                </header>

                <main class="p-4 mb-5">
                    <h5 class="mb-4">Tugas</h5>

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="input-group search-box">
                                    <input type="text" class="form-control" placeholder="Pencarian" aria-label="Search">
                                    <button class="btn btn-outline-secondary" type="button">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>

                                <div class="d-flex">
                                    <div class="dropdown me-2">
                                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="rowsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                            5
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="rowsDropdown">
                                            <li><a class="dropdown-item" href="#">5</a></li>
                                            <li><a class="dropdown-item" href="#">10</a></li>
                                            <li><a class="dropdown-item" href="#">25</a></li>
                                        </ul>
                                    </div>
                                    <button class="btn btn-outline-secondary me-2">
                                        <i class="bi bi-arrow-clockwise"></i>
                                    </button>
                                    <button class="btn btn-outline-secondary me-2">
                                        <i class="bi bi-funnel"></i> Filter
                                    </button>
                                    <button class="btn btn-success">
                                        <i class="bi bi-upload"></i> Ekspor
                                    </button>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Resi</th>
                                            <th>Status</th>
                                            <th>Tipe</th>
                                            <th>Asal</th>
                                            <th>Tujuan</th>
                                            <th>Dibuat Pada</th>
                                            <th>Tenggat Waktu</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $task['resi'] }}</td>
                                    <td>{{ $task['status'] }}</td>
                                    <td>{{ $task['type'] }}</td>
                                    <td>{{ $task['origin'] }}</td>
                                    <td>{{ $task['destination'] }}</td>
                                    <td>{{ $task['created_at'] }}</td>
                                    <td>{{ $task['due_date'] }}</td>
                                    <td>
                                        <a href="{{ url('detail')}}" class="btn btn-success btn-sm">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="table-info">
                        Menampilkan 1 hingga 10 dari 100 entri
                    </div>

                    <nav>
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#"><i class="bi bi-chevron-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="bi bi-chevron-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
                </div>
                </div>
            </main>
            <footer>
                <div class="text-left p-3" style="background-color: rgba(0, 0, 0, 0.05);">
                    2024&copy; CSM Cargo. Developed by Wesclic Studio
                </div>
            </footer>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
