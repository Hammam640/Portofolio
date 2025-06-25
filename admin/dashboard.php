<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

include '../php/db.php';
$result = mysqli_query($conn, "SELECT * FROM messages ORDER BY tanggal DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

  <div class="max-w-6xl mx-auto p-6">
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-3xl font-bold text-purple-700">📥 Pesan Masuk</h1>
      <a href="logout.php" class="text-sm text-red-600 hover:underline">Logout</a>
    </div>

    <table class="w-full bg-white shadow-md rounded-xl overflow-hidden">
      <thead class="bg-purple-100 text-purple-800">
        <tr>
          <th class="p-3 text-left">Nama</th>
          <th class="p-3 text-left">Email</th>
          <th class="p-3 text-left">Pesan</th>
          <th class="p-3 text-left">Tanggal</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200">
        <?php while($row = mysqli_fetch_assoc($result)): ?>
        <tr class="hover:bg-gray-50">
          <td class="p-3"><?php echo htmlspecialchars($row['nama']); ?></td>
          <td class="p-3"><?php echo htmlspecialchars($row['email']); ?></td>
          <td class="p-3"><?php echo htmlspecialchars($row['pesan']); ?></td>
          <td class="p-3 text-sm text-gray-500"><?php echo $row['tanggal']; ?></td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>

</body>
</html>
