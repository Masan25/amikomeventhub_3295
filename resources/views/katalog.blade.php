<!DOCTYPE html>
<html>
<head>
    <title>Katalog Event</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-emerald-50 min-h-screen p-6">

    <div class="max-w-5xl mx-auto">
        <div class="bg-white rounded-2xl shadow-lg border border-emerald-100 p-8 mb-6">
            <h1 class="text-3xl font-bold text-emerald-700 mb-3">
                Katalog Event AmikomEventHub
            </h1>

            <p class="text-slate-600">
                Berikut adalah placeholder daftar event yang tersedia pada aplikasi AmikomEventHub.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-6">
            <div class="bg-white p-6 rounded-2xl shadow border border-slate-200 hover:shadow-lg transition">
                <h2 class="text-xl font-bold text-slate-800 mb-2">Seminar Teknologi</h2>
                <p class="text-slate-600 mb-4">Event edukasi tentang perkembangan teknologi digital.</p>
                <span class="inline-block bg-emerald-100 text-emerald-700 px-3 py-1 rounded-full text-sm font-semibold">
                    Coming Soon
                </span>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow border border-slate-200 hover:shadow-lg transition">
                <h2 class="text-xl font-bold text-slate-800 mb-2">Workshop UI/UX</h2>
                <p class="text-slate-600 mb-4">Pelatihan dasar desain antarmuka aplikasi modern.</p>
                <span class="inline-block bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-semibold">
                    Open Registration
                </span>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow border border-slate-200 hover:shadow-lg transition">
                <h2 class="text-xl font-bold text-slate-800 mb-2">Festival Kampus</h2>
                <p class="text-slate-600 mb-4">Kegiatan hiburan dan kreativitas mahasiswa AMIKOM.</p>
                <span class="inline-block bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-sm font-semibold">
                    Draft Event
                </span>
            </div>
        </div>

        <div class="flex flex-wrap gap-3">
            <a href="/" class="bg-slate-700 text-white py-2 px-5 rounded-lg font-semibold hover:bg-slate-800 transition">
                Home
            </a>

            <a href="/profil" class="bg-indigo-600 text-white py-2 px-5 rounded-lg font-semibold hover:bg-indigo-700 transition">
                Profil
            </a>

            <a href="/bantuan" class="bg-orange-500 text-white py-2 px-5 rounded-lg font-semibold hover:bg-orange-600 transition">
                Bantuan
            </a>

            <a href="/kontak" class="bg-emerald-600 text-white py-2 px-5 rounded-lg font-semibold hover:bg-emerald-700 transition">
                Kontak
            </a>
        </div>
    </div>

</body>
</html>