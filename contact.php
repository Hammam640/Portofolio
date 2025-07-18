<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact - Hammam</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-teal-50 to-blue-100 text-gray-800">

  <!-- Navbar -->
  <nav class="bg-white shadow-md p-4 flex justify-between items-center">
    <h1 class="text-xl font-bold text-teal-700">Hammam Portfolio</h1>
    <ul class="flex space-x-4 text-sm font-semibold text-gray-700">
      <li><a href="index.html" class="hover:text-teal-600">Home</a></li>
      <li><a href="articles.html" class="hover:text-teal-600">Articles</a></li>
      <li><a href="contact.php" class="hover:text-teal-600">Contact</a></li>
    </ul>
  </nav>

  <!-- Konten -->
  <main class="max-w-4xl mx-auto p-6 space-y-10">

    <!-- Judul -->
    <section class="text-center">
      <h2 class="text-3xl font-bold text-teal-800 mb-2">📩 Hubungi Saya</h2>
      <p class="text-gray-600">Silakan isi form di bawah ini atau hubungi lewat sosial media.</p>
    </section>

    <!-- Form Kontak -->
    <section class="bg-white p-6 rounded-xl shadow-md">
      <form action="php/submit_contact.php" method="POST">
        <div>
          <label class="block font-semibold text-gray-700">Nama</label>
          <input type="text" name="nama" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-teal-400" required>
        </div>
        <div>
          <label class="block font-semibold text-gray-700">Email</label>
          <input type="email" name="email" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-teal-400" required>
        </div>
        <div>
          <label class="block font-semibold text-gray-700">Pesan</label>
          <textarea name="pesan" rows="4" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-teal-400" required></textarea>
        </div>
        <button type="submit" class="bg-teal-600 text-white px-6 py-2 rounded hover:bg-teal-700">Kirim</button>
      </form>
    </section>

   <!-- Sosial Media -->
<section class="bg-blue-100 p-6 rounded-xl shadow-md">
  <h3 class="text-xl font-bold text-blue-800 mb-2">🌐 Sosial Media</h3>
  <ul class="space-y-1 text-blue-900">
    <li><strong>Insta:</strong> <a href="https://www.instagram.com/hammam640/" class="underline hover:text-blue-600">@hammam640</a></li>
    <li><strong>GitHub:</strong> <a href="https://github.com/Hammam640" class="underline hover:text-blue-600">github.com/Hammam640</a></li>
    <li><strong>Email:</strong> hamamanwar2911@email.com</li>
    <li><strong>Telepon/WA:</strong> <a href="tel:082110156694" class="underline hover:text-blue-600">0821-1015-6694</a></li>
  </ul>
</section>


    <!-- Service Fee -->
    <section class="bg-yellow-100 p-6 rounded-xl shadow-md">
      <h3 class="text-xl font-bold text-yellow-800 mb-2">💼 Jasa & Harga</h3>
      <ul class="list-disc list-inside text-yellow-900">
        <li><strong>Website Portofolio:</strong> mulai Rp 300.000</li>
        <li><strong>Landing Page Bisnis:</strong> mulai Rp 500.000</li>
        <li><strong>Website Lengkap + Admin Panel:</strong> mulai Rp 1.000.000</li>
      </ul>
    </section>

  </main>

<?php if(isset($_GET['status']) && $_GET['status'] == 'success'): ?>
  <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
    Pesan Anda berhasil dikirim. Terima kasih!
  </div>
<?php endif; ?>

</body>
</html>
