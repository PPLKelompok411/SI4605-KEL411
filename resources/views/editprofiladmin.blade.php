<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin Profile - Edit</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }

    .edit-card {
      border-radius: 1rem;
      background: #fff;
      padding: 2rem;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    .form-label {
        font-size: 16px;
        font-weight: 700;
        color: black;
    }

    .btn-save {
        padding: 0.35rem 1rem;
        font-size: 16px;
        border-radius: 0.5rem;
        background-color: #16a34a;
        border: none;
        color: white;
        font-weight: 500;
    }

    .btn-save:hover {
      background-color: #15803d;
    }

    .form-control{
        font-size: 16px;
        color: black;
    }

    .card-title {
        font-size: 24px;
        font-weight: bold;
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
    <div class="edit-card w-100" style="max-width: 100%;">
      <h4 class="card-title mb-4 text-center">Edit Profile</h4>
      <form>
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" value="Admin" />
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" value="admin@email.com" />
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" value="********" />
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="confirm-password" value="********" />
        </div>

        <div class="d-flex justify-content-end">
          <button type="submit" class="btn btn-save">Save Changes</button>
          <!-- <a href="{{ route('showprofiladmin') }}" class="btn btn-save">Save Changes</a> -->
        </div>
      </form>
    </div>
  </div>
</body>
</html>
