<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin Profile - Show</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f4f6f9;
    }

    .profile-card {
      border-radius: 1rem;
      background: #fff;
      padding: 2rem;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    .label {
      font-size: 18px;
      font-weight: 700;
      color: black;
    }

    .value {
      font-size: 16px;
      color: black;
    }

    .btn-edit {
        padding: 0.35rem 1rem;
        font-size: 16px;
        border-radius: 0.5rem;
        background-color: #16a34a;
        border: none;
        color: white;
        font-weight: 500;
    }

    .btn-edit:hover {
      background-color: #15803d;
    }

    .card-title {
        font-size: 24px;
        font-weight: 700;
        color: black;
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


  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="profile-card w-100" style="max-width: 100%;">
      <h4 class="card-title mb-4 text-center">Admin Profile</h4>

      <div class="mb-3">
        <div class="label">Name</div>
        <div class="value">Admin</div>
      </div>

      <div class="mb-3">
        <div class="label">Email</div>
        <div class="value">admin@example.com</div>
      </div>

      <div class="mb-3">
        <div class="label">Password</div>
        <div class="value">********</div>
      </div>

      <div class="d-flex justify-content-end">
        <a href="{{ route('editprofiladmin') }}" class="btn btn-edit">Edit Profile</a>
      </div>
    </div>
  </div>
</body>
</html>
