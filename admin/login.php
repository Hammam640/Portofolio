<?php
// Aktifkan error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

// Jika sudah login, redirect ke dashboard
if (isset($_SESSION['admin_logged_in'])) {
    header("Location: dashboard.php");
    exit();
}

// Proses login jika form dikirim
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Debug (sementara)
    // echo "Username: [$username], Password: [$password]";

    // Data login yang valid
    $valid_username = 'Hammam';
    $valid_password = '291104';

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['admin_logged_in'] = true;

        // Redirect utama
        header("Location: dashboard.php");
        exit();

        // Fallback redirect (jika header gagal)
        echo "<script>window.location.href='dashboard.php';</script>";
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-gray-100 to-purple-200 text-gray-800 h-screen flex items-center justify-center">

  <div class="bg-white p-8 rounded-xl shadow-md w-full max-w-sm">
    <h2 class="text-2xl font-bold text-purple-700 mb-4 text-center">Login Admin</h2>

    <?php if (isset($error)): ?>
      <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
        <?php echo $error; ?>
      </div>
    <?php endif; ?>

    <form method="POST" class="space-y-4">
      <div>
        <label class="block text-sm font-semibold">Username</label>
        <input type="text" name="username" required class="w-full border px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-purple-400">
      </div>
      <div>
        <label class="block text-sm font-semibold">Password</label>
        <input type="password" name="password" required class="w-full border px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-purple-400">
      </div>
      <button type="submit" class="w-full bg-purple-600 text-white py-2 rounded hover:bg-purple-700">Login</button>
    </form>
  </div>

</body>
</html>
