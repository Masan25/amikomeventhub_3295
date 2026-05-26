@extends('layouts.admin')

@section('title', 'Kelola Kategori - AmikomEventHub')

@section('content')
<header class="flex justify-between items-center mb-10">
    <div>
        <h1 class="text-3xl font-black">Kelola Kategori</h1>
        <p class="text-slate-500 font-medium">Atur kategori event yang tampil pada AmikomEventHub.</p>
    </div>
    <button
        class="px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg shadow-indigo-200 hover:bg-indigo-700 transition">
        + Tambah Kategori
    </button>
</header>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <div class="bg-white p-6 rounded-[2rem] border border-slate-100 shadow-sm">
        <p class="text-slate-400 text-sm font-bold uppercase tracking-wider mb-2">Total Kategori</p>
        <h2 class="text-4xl font-black text-slate-900">5</h2>
    </div>

    <div class="bg-white p-6 rounded-[2rem] border border-slate-100 shadow-sm">
        <p class="text-slate-400 text-sm font-bold uppercase tracking-wider mb-2">Kategori Aktif</p>
        <h2 class="text-4xl font-black text-green-600">5</h2>
    </div>

    <div class="bg-white p-6 rounded-[2rem] border border-slate-100 shadow-sm">
        <p class="text-slate-400 text-sm font-bold uppercase tracking-wider mb-2">Kategori Nonaktif</p>
        <h2 class="text-4xl font-black text-rose-600">0</h2>
    </div>
</div>

<div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
    <div class="px-8 py-6 bg-slate-50/50 border-b flex justify-between items-center">
        <h2 class="text-xl font-black">Daftar Kategori</h2>
        <input type="text" placeholder="Cari kategori..."
            class="px-5 py-3 rounded-xl border-slate-200 border bg-white focus:ring-2 focus:ring-indigo-500 outline-none transition text-sm font-medium">
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black tracking-widest">
                <tr>
                    <th class="px-8 py-4">No</th>
                    <th class="px-8 py-4">Nama Kategori</th>
                    <th class="px-8 py-4">Deskripsi</th>
                    <th class="px-8 py-4">Status</th>
                    <th class="px-8 py-4 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y border-t">
                <tr class="hover:bg-slate-50/50 transition">
                    <td class="px-8 py-6 font-bold">1</td>
                    <td class="px-8 py-6 font-black text-slate-800">Seminar</td>
                    <td class="px-8 py-6 text-slate-500 font-medium">Kategori untuk acara seminar akademik dan umum.</td>
                    <td class="px-8 py-6">
                        <span class="px-3 py-1 bg-green-100 text-green-700 rounded-lg text-xs font-bold uppercase ring-1 ring-green-200">Aktif</span>
                    </td>
                    <td class="px-8 py-6 text-right space-x-2">
                        <button class="px-4 py-2 bg-amber-100 text-amber-700 rounded-xl font-bold hover:bg-amber-200 transition">Edit</button>
                        <button class="px-4 py-2 bg-rose-100 text-rose-700 rounded-xl font-bold hover:bg-rose-200 transition">Hapus</button>
                    </td>
                </tr>

                <tr class="hover:bg-slate-50/50 transition">
                    <td class="px-8 py-6 font-bold">2</td>
                    <td class="px-8 py-6 font-black text-slate-800">Konser</td>
                    <td class="px-8 py-6 text-slate-500 font-medium">Kategori untuk acara musik, hiburan, dan festival kampus.</td>
                    <td class="px-8 py-6">
                        <span class="px-3 py-1 bg-green-100 text-green-700 rounded-lg text-xs font-bold uppercase ring-1 ring-green-200">Aktif</span>
                    </td>
                    <td class="px-8 py-6 text-right space-x-2">
                        <button class="px-4 py-2 bg-amber-100 text-amber-700 rounded-xl font-bold hover:bg-amber-200 transition">Edit</button>
                        <button class="px-4 py-2 bg-rose-100 text-rose-700 rounded-xl font-bold hover:bg-rose-200 transition">Hapus</button>
                    </td>
                </tr>

                <tr class="hover:bg-slate-50/50 transition">
                    <td class="px-8 py-6 font-bold">3</td>
                    <td class="px-8 py-6 font-black text-slate-800">Workshop</td>
                    <td class="px-8 py-6 text-slate-500 font-medium">Kategori untuk pelatihan, praktik, dan pengembangan skill.</td>
                    <td class="px-8 py-6">
                        <span class="px-3 py-1 bg-green-100 text-green-700 rounded-lg text-xs font-bold uppercase ring-1 ring-green-200">Aktif</span>
                    </td>
                    <td class="px-8 py-6 text-right space-x-2">
                        <button class="px-4 py-2 bg-amber-100 text-amber-700 rounded-xl font-bold hover:bg-amber-200 transition">Edit</button>
                        <button class="px-4 py-2 bg-rose-100 text-rose-700 rounded-xl font-bold hover:bg-rose-200 transition">Hapus</button>
                    </td>
                </tr>

                <tr class="hover:bg-slate-50/50 transition">
                    <td class="px-8 py-6 font-bold">4</td>
                    <td class="px-8 py-6 font-black text-slate-800">Hackathon</td>
                    <td class="px-8 py-6 text-slate-500 font-medium">Kategori untuk lomba pemrograman dan inovasi digital.</td>
                    <td class="px-8 py-6">
                        <span class="px-3 py-1 bg-green-100 text-green-700 rounded-lg text-xs font-bold uppercase ring-1 ring-green-200">Aktif</span>
                    </td>
                    <td class="px-8 py-6 text-right space-x-2">
                        <button class="px-4 py-2 bg-amber-100 text-amber-700 rounded-xl font-bold hover:bg-amber-200 transition">Edit</button>
                        <button class="px-4 py-2 bg-rose-100 text-rose-700 rounded-xl font-bold hover:bg-rose-200 transition">Hapus</button>
                    </td>
                </tr>

                <tr class="hover:bg-slate-50/50 transition">
                    <td class="px-8 py-6 font-bold">5</td>
                    <td class="px-8 py-6 font-black text-slate-800">Teknologi</td>
                    <td class="px-8 py-6 text-slate-500 font-medium">Kategori untuk event bertema teknologi dan industri digital.</td>
                    <td class="px-8 py-6">
                        <span class="px-3 py-1 bg-green-100 text-green-700 rounded-lg text-xs font-bold uppercase ring-1 ring-green-200">Aktif</span>
                    </td>
                    <td class="px-8 py-6 text-right space-x-2">
                        <button class="px-4 py-2 bg-amber-100 text-amber-700 rounded-xl font-bold hover:bg-amber-200 transition">Edit</button>
                        <button class="px-4 py-2 bg-rose-100 text-rose-700 rounded-xl font-bold hover:bg-rose-200 transition">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
