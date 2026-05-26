<!DOCTYPE html>
<html>
<head>
    <title>Bantuan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-orange-50 min-h-screen flex items-center justify-center p-6">

    <div class="bg-white max-w-3xl w-full rounded-2xl shadow-lg border border-orange-100 p-8">
        <h1 class="text-3xl font-bold text-orange-600 mb-4">
            Bantuan dan FAQ
        </h1>

        <div class="space-y-4 mb-6">
            <div class="p-5 rounded-xl border border-slate-200 hover:bg-slate-50 transition">
                <h2 class="font-bold text-slate-800 mb-1">
                    Apa itu AmikomEventHub?
                </h2>
                <p class="text-slate-600">
                    AmikomEventHub adalah aplikasi sederhana untuk menampilkan informasi event kampus.
                </p>
            </div>

            <div class="p-5 rounded-xl border border-slate-200 hover:bg-slate-50 transition">
                <h2 class="font-bold text-slate-800 mb-1">
                    Bagaimana cara melihat event?
                </h2>
                <p class="text-slate-600">
                    Pengguna dapat membuka halaman katalog untuk melihat daftar event yang tersedia.
                </p>
            </div>

            <div class="p-5 rounded-xl border border-slate-200 hover:bg-slate-50 transition">
                <h2 class="font-bold text-slate-800 mb-1">
                    Bagaimana cara menghubungi admin?
                </h2>
                <p class="text-slate-600">
                    Pengguna dapat membuka halaman kontak untuk melihat email admin.
                </p>
            </div>
        </div>

        <div class="flex flex-wrap gap-3">
            <a href="/" class="bg-slate-700 text-white py-2 px-5 rounded-lg font-semibold hover:bg-slate-800 transition">
                Home
            </a>

            <a href="/profil" class="bg-indigo-600 text-white py-2 px-5 rounded-lg font-semibold hover:bg-indigo-700 transition">
                Profil
            </a>

            <a href="/katalog" class="bg-emerald-600 text-white py-2 px-5 rounded-lg font-semibold hover:bg-emerald-700 transition">
                Katalog
            </a>

            <a href="/kontak" class="bg-orange-500 text-white py-2 px-5 rounded-lg font-semibold hover:bg-orange-600 transition">
                Kontak
            </a>
        </div>
    </div>

</body>
</html>