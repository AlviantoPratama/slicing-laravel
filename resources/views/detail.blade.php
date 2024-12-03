<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manaje</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
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
        .card-header {
            background-color: white;
            border-bottom: none;
        }
        .card {
            border: 1px solid #ddd;
            border-radius: 10px;
        }
        .fw-green {
            color: green;
            font-weight: bold;
        }
        .btn-edit {
            color: green;
            border: 1px solid green;
            margin-left: 300px;
        }
        .custom-textarea {
            width: 100%;
            min-height: 150px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f4fcf7; /* Warna hijau muda */
            padding: 10px;
            font-size: 14px;
            color: #6c757d; /* Warna teks placeholder */
            resize: none;
        }

        .custom-textarea:focus {
            outline: none;
            border: 1px solid #0d6efd; /* Warna fokus biru */
            background-color: #f9fffa;
        }
        .barcode-container {
            text-align: center;
            margin-top: -150px;
            margin-bottom: 15px;
        }
        .table {
            border-collapse: collapse;
            border: 1px solid #ddd; /* Garis luar tabel */
            width: 100%;
        }

        .table th, 
        .table td {
            border: none; /* Hapus semua garis default */
            padding: 10px;
            text-align: left;
        }

        .table tbody tr {
            border-bottom: 1px solid #ddd; /* Garis antar baris */
        }

        .table tbody tr:last-child {
            border-bottom: none; /* Hilangkan garis bawah untuk baris terakhir */
        }

        .table thead th {
            border-bottom: 1px solid #ddd; /* Garis bawah untuk header */
            background-color: #ffffff;
            font-weight: bold;
        }
        .button-green {
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            width: 615px; /* Tetapkan panjang tetap untuk tombol */
            padding: 10px; /* Sesuaikan padding */
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            cursor: pointer;
        }

        .button-green:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <aside class="col-md-2 sidebar bg-light p-3">
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
            <!-- Konten Utama -->
            <div class="col-md-10 p-0">
                <!-- Header -->
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
                <!-- Main Content -->
                <main class="container mb-5">
                <h5 class="mb-4">Tugas</h5>
                <a href="javascript:history.back();" class="btn btn-light text-green mb-3" style="background-color: white; border: 1px solid #ddd;">
                    <i class="bi bi-arrow-return-left"></i> Kembali
                </a>
                <div class="card">
                    <div class="card-body">
                    <h5 class="fw-green">Manaje®</h5>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <p><b>Nomor Resi</b> : b1772406841</p>
                                <p><b>Tanggal Pengiriman</b> : 13 Sep 2024</p>
                                <p><b>Asal</b> : Alamat CSM Cargo Jakarta</p>
                                <p><b>Tujuan</b> : Alamat CSM Cargo Yogyakarta</p>
                                <p><b>Status</b> : Dikirim (Driver)</p>
                                <p><b>Tipe</b> : Diantar</p>
                            </div>
                            <div>
                                <div class="barcode-container">
                                    <svg id="barcode"></svg>
                                </div>
                                <button class="btn btn-edit"><i class="bi bi-pencil-square"></i> Edit</button>
                            </div>
                        </div>
                    </div>
                    <!-- Informasi Pengirim dan Penerima -->
                    <div class="row">
                    <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-header fw-green">Informasi Pengirim</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4"><p><b>Branch</b></p><p>CSM Jakarta</p><p><b>Nomor Telepon</b></p></div>
                                <div class="col-4"><p><b>Tipe Pengiriman</b></p><p>Diantar</p><p><b>Email Pengirim</b></p></div>
                                <div class="col-4"><p><b>Nama Pengirim</b></p><p>Mawar Melati</p><p><b>Alamat Pengirim</b></p></div>
                                <div class="col-4"><p>+628737181082</p></div>
                                <div class="col-4"><p>mawarmelati@gmail.com</p></div>
                                <div class="col-4"><p>Solo</p></div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-header fw-green">Informasi Penerima</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4"><p><b>Nama Penerima</b></p><p>Putih Abu</p><p><b>Email Penerima</b></p></div>
                                <div class="col-4"><p><b>Nomor Telepon</b></p><p>+6289746197112</p><p><b>Alamat Penerima</b></p></div>
                                <div class="col-4"></div>
                                <div class="col-4"><p>mawarmelati@gmail.com</p></div>
                                <div class="col-4"><p>Semarang</p></div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    <!-- Layanan dan Pembayaran -->
                    <div class="row">
                    <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-header fw-green">Informasi Pengirim</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4"><p><b>Jenis Layanan</b></p><p>Layanan Instan</p><p><b>Packing Pengiriman</b></p></div>
                                <div class="col-4"><p><b>Asuransi Pengiriman</b></p><p>-</p></div>
                                <div class="col-4"></div>
                                <div class="col-4"><p>-</p></div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-header fw-green">Informasi Penerima</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4"><p><b>Metode Pembayaran</b></p><p>Cash</p><p><b>Total Sub Biaya</b></p></div>
                                <div class="col-4"><p><b>Diskon</b></p><p>20%</p><p><b>Total Biaya Pengiriman</b></p></div>
                                <div class="col-4"></div>
                                <div class="col-4"><p>69.000</p></div>
                                <div class="col-4"><p>45.000</p></div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-20">
                    <div class="card mb-5">
                        <div class="card-header"><b>Catatan Tambahan</b></div>
                        <div class="card-body">
                            <div class="row">
                                <textarea class="custom-textarea" placeholder="Catatan"></textarea>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="table-responsive mb-5">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAMA <br>BARANG</th>
                                    <th>JENIS <br>BARANG</th>
                                    <th>DESKRIPSI <br>BARANG</th>
                                    <th>BERAT <br>BARANG (KG)</th>
                                    <th>PANJANG <br>BARANG (CM)</th>
                                    <th>LEBAR <br>BARANG (CM)</th>
                                    <th>TINGGI <br>BARANG (CM)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Baju</td>
                                    <td>Pakaian</td>
                                    <td>Baju branded</td>
                                    <td>0.2</td>
                                    <td>60</td>
                                    <td>46</td>
                                    <td>70</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Celana</td>
                                    <td>Pakaian</td>
                                    <td>Celana mahal</td>
                                    <td>0.5</td>
                                    <td>130</td>
                                    <td>46</td>
                                    <td>160</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                    
                    </div>
                    <div class="d-flex justify-content-between">
                        <button class="button-green">Cetak Label</button>
                        <button class="button-green">Lacak</button>
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JsBarcode JS -->
    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.5/dist/JsBarcode.all.min.js"></script>
    <script>
        // Generate Barcode
        JsBarcode("#barcode", "b1772406841", {
            format: "CODE128",
            displayValue: false,
            fontSize: 14,
            lineColor: "#000",
            width: 3.5,
            height: 65,
        });
    </script>

</body>
</html>
