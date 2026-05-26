<!DOCTYPE html>
<html>

<head>
    <title>Home AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100 min-h-screen flex items-center justify-center p-6">

    <div class="bg-white max-w-3xl w-full rounded-2xl shadow-lg border border-slate-200 p-8">
        <h1 class="text-3xl font-bold text-slate-800 mb-3">
            Selamat Datang di AmikomEventHub
        </h1>

        <p class="text-slate-600 mb-6">
            AmikomEventHub adalah aplikasi sederhana untuk menampilkan informasi event, profil praktikan, kontak, dan bantuan pengguna.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <a href="/profil" class="bg-indigo-600 text-white text-center py-3 rounded-xl font-semibold hover:bg-indigo-700 transition">
                Profil
            </a>

            <a href="/katalog" class="bg-emerald-600 text-white text-center py-3 rounded-xl font-semibold hover:bg-emerald-700 transition">
                Katalog Event
            </a>

            <a href="/bantuan" class="bg-orange-500 text-white text-center py-3 rounded-xl font-semibold hover:bg-orange-600 transition">
                Bantuan
            </a>

            <a href="/kontak" class="bg-slate-700 text-white text-center py-3 rounded-xl font-semibold hover:bg-slate-800 transition">
                Kontak
            </a>
        </div>
    </div>

</body>

</html>