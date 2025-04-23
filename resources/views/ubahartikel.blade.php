<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Ubah Artikel</title>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      background-color: #f9fafb;
      padding-top: 80px;
    }

    .navbar {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
      background-color: white;
      border-bottom: 1px solid #e5e7eb;
      padding: 16px 24px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .nav-left .logo {
      font-weight: bold;
      color: #15803d;
      font-size: 18px;
    }

    .nav-right {
      display: flex;
      align-items: center;
      gap: 24px;
    }

    .icon {
      width: 20px;
      height: 20px;
      object-fit: contain;
    }

    .admin-name {
      color: #15803d;
      font-weight: 600;
    }

    .avatar {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      object-fit: cover;
    }

    .form-wrapper {
      max-width: 700px;
      margin: 80px auto 0;
      padding: 0 24px;
    }

    .back-button {
      margin-bottom: 16px;
    }

    .back-link {
      text-decoration: none;
      color: #000000;
      font-weight: 600;
      font-size: 16px;
      display: inline-flex;
      align-items: center;
      gap: 8px;
    }

    .container {
      background-color: white;
      border: 1px solid #e5e7eb;
      border-radius: 10px;
      padding: 32px;
    }

    .form label {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
    }

    .form input[type="text"],
    .form textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #d1d5db;
      border-radius: 8px;
      margin-bottom: 20px;
      font-size: 14px;
    }

    .thumbnail-upload {
      margin-bottom: 24px;
    }

    .upload-box {
      display: inline-flex;
      justify-content: center;
      align-items: center;
      width: 48px;
      height: 48px;
      border-radius: 8px;
      border: 1px solid #d1d5db;
      background-color: #f3f4f6;
      cursor: pointer;
    }

    .upload-box img {
      width: 24px;
      height: 24px;
    }

    .buttons {
      display: flex;
      justify-content: flex-end;
      gap: 12px;
    }

    .btn {
      padding: 10px 24px;
      font-size: 14px;
      border-radius: 6px;
      border: none;
      cursor: pointer;
      font-weight: 600;
    }

    .btn.cancel {
      background-color: #ffffff;
      border: 1px solid #368A23;
      color: #368A23;
    }

    .btn.cancel:hover {
      background-color: #f0fdf4;
    }

    .btn.save {
      background-color: #368A23;
      color: white;
    }

    .btn.save:hover {
      background-color: #166534;
    }

    .btn.delete {
      background-color: #ef4444;
      color: white;
    }

    .btn.delete:hover {
      background-color: #dc2626;
    }
  </style>
</head>
<body>

  <div class="navbar">
    <div class="nav-left">
      <div class="logo">RE:FOOD</div>
    </div>
    <div class="nav-right">
      <span class="admin-name">Admin</span>
      <img src="https://via.placeholder.com/32" alt="Avatar" class="avatar">
    </div>
  </div>

  <div class="form-wrapper">
    <div class="back-button">
      <a href="#" class="back-link">← Ubah detail</a>
    </div>

    <div class="container">
      <form class="form">
        <label for="judul">Judul Artikel</label>
        <input type="text" id="judul" name="judul" placeholder="cth: Pengertian Wasted Food">

        <label for="deskripsi">Deskripsi</label>
        <textarea id="deskripsi" name="deskripsi" rows="3" placeholder="cth: Wasted Food adalah sisa makanan masih layak konsumsi yang terbuang sebagai sampah."></textarea>

        <label for="tanggal">Tanggal Unggah</label>
        <input type="text" id="tanggal" placeholder="cth: 01-Jan-2025" />

        <label for="thumbnail">Foto/Thumbnail Artikel</label>
        <div class="thumbnail-upload">
          <input type="file" id="thumbnail" hidden />
          <label for="thumbnail" class="upload-box">
            <img src="https://img.icons8.com/ios/50/image--v1.png" alt="upload icon" />
          </label>
        </div>

        <div class="buttons">
          <button type="button" class="btn delete">Hapus</button>
          <button type="button" class="btn cancel">Batal</button>
          <button type="submit" class="btn save">Simpan Perubahan</button>
        </div>
      </form>
    </div>
  </div>

</body>
</html>