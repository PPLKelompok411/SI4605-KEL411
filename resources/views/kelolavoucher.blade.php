<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kelola Klaim Voucher - Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
    .card {
      border: none;
      border-radius: 1rem;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }
    .rounded-table-container {
      border-radius: 1rem;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }
    .table thead th {
      background-color: #16a34a; 
      /* opacity: 80%; */
      color: white;
      text-align: center;
      vertical-align: middle;
      font-size: 18px;
      font-weight: 600;
    }
    .table td {
      text-align: center;
      vertical-align: middle;
      font-size: 16px;
    }
    .modal-header {
      background-color: #16a34a;
      color: white;
      border-top-left-radius: 0.5rem;
      border-top-right-radius: 0.5rem;
    }
    .modal-content {
      border-radius: 1rem;
      font-family: 'Inter', sans-serif;
      font-size: 16px;
    }
    .btn-custom {
      background-color: #16a34a;
      color: white;
      padding: 6px 20px;
      font-size: 16px;
      font-weight: 500;
      border-radius: 0.5rem;
      border: none;
      /* text-transform: none; */
    }
    .btn-custom:hover {
      background-color: #15803d;
      /* opacity: 60%; */
    }
    .btn-light {
        background-color: #16a34a;
        color: white;
        font-size: 16px;
        padding: 6px 20px;
        border-radius: 0.5rem;
        border: none;
    }

    .btn-light:hover {
      background-color: #15803d;
      /* opacity: 60%; */
    }

    .modal-title {
        font-size: 16px;
        color: white;
        font-weight: 500;
    }

    .page-title {
        font-size: 24px;
        font-weight: 700;
    }

    .btn-warning {
      font-size: 16px;
      color: black;
      border-radius: 0.5rem;
      padding: 6px 20px;
      font-weight: 500;
      border: none;
    }

    .btn-danger {
      font-size: 16px;
      color: white;
      border-radius: 0.5rem;
      padding: 6px 20px;
      font-weight: 500;
      border: none;
    }

    .form-label {
      font-size: 16px;
      font-weight: 700;
    }

    .btn-cancel {
      font-size: 16px;
      color: black;
      border-radius: 0.5rem;
      padding: 6px 20px;
      background-color: white;
      border-color: #16a34a;
      font-weight: 500;
    }

    .btn-danger:hover {
      background-color: #15803d;
      opacity: 60%;
    }

    .btn-warning:hover {
      background-color: #15803d;
      /* opacity: 60%; */
    }

    .btn-cancel:hover {
      background-color: #15803d;
      /* opacity: 60%; */
    }

    .modal-body-delete {
      font-size: 18px;
      font-weight: 500;
      padding: 20px;
      margin-top: 20px;
      margin-bottom: 20px;
    }

    .modal-body-detail {
      padding: 20px;
    }

  </style>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
  <!-- Header -->
  <nav class="bg-white shadow-sm">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <h1 class="text-2xl font-bold text-green-600">ReFood</h1>
                <span class="text-sm text-gray-500">Admin</span>
            </div>
        </div>
    </nav>

  <div class="container">
    <h2 class="page-title mt-8 mb-4 fw-semibold">Kelola Klaim Voucher Pengguna</h2>

    <div class="card p-3">
      <div class="rounded-table-container">
        <div class="table-responsive">
          <table class="table align-middle table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th>Nama</th>
                <!-- <th>Email</th> -->
                <th>Nama Voucher</th>
                <th>Tanggal Klaim</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <!-- <th scope="row">1</th> -->
                <td>1</td>
                <td>Agatha Daniella</td>
                <!-- <td>andi@gmail.com</td> -->
                <td>Voucher Ayam Geprek Kartika 50%</td>
                <td>2025-05-05</td>
                <td>
                  <button class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#detailModal1">Detail</button>
                  <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal1">Edit</button>
                  <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal1">Hapus</button>
                </td>
              </tr>
             <!--  -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Detail -->
  <div class="modal fade" id="detailModal1" tabindex="-1" aria-labelledby="detailModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="detailModalLabel1">Detail Klaim Voucher Pengguna</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Tutup"></button>
        </div>
        <div class="modal-body-detail">
          <ul class="list-unstyled mb-0">
            <li><strong>Nama:</strong> Agatha Daniella</li>
            <li><strong>Email:</strong> agathadaniella@gmail.com</li>
            <li><strong>No. HP:</strong> 0812-3456-7890</li>
            <li><strong>Voucher:</strong> Voucher Ayam Geprek Kartika 50%</li>
            <li><strong>Tanggal Klaim:</strong> 5 Mei 2025</li>
          </ul>
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
        </div> -->
      </div>
    </div>
  </div>
  <!-- Modal Edit -->
<div class="modal fade" id="editModal1" tabindex="-1" aria-labelledby="editModalLabel1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel1">Edit Klaim Voucher Pengguna</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <form>
        <div class="modal-body">
          <div class="mb-3 text-start">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" value="Agatha Daniella">
          </div>
          <div class="mb-3 text-start">
            <label for="voucher" class="form-label">Nama Voucher</label>
            <input type="text" class="form-control" id="voucher" value="Voucher Ayam Geprek Kartika 50%">
          </div>
          <div class="mb-3 text-start">
            <label for="tanggal" class="form-label">Tanggal Klaim</label>
            <input type="date" class="form-control" id="tanggal" value="2025-05-05">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-custom">Simpan Perubahan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Hapus -->
<div class="modal fade" id="hapusModal1" tabindex="-1" aria-labelledby="hapusModalLabel1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="hapusModalLabel1">Konfirmasi Hapus Data</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body-delete text-center">
        <p>Apakah kamu ingin menghapus data ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-danger">Hapus</button>
      </div>
    </div>
  </div>
</div>

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
