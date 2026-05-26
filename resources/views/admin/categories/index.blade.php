@extends('layouts.admin')

@section('title', 'Manajemen Kategori - Admin')
@section('page_title', 'Manajemen Kategori')
@section('page_subtitle', 'Kelola kategori event AmikomEventHub.')

@section('header_action')
<button class="px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg shadow-indigo-100 hover:bg-indigo-700 active:scale-95 transition">+ Tambah Kategori</button>
@endsection

@section('content')
<div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black tracking-widest"><tr><th class="px-8 py-4 w-16">No</th><th class="px-8 py-4">Nama Kategori</th><th class="px-8 py-4">Slug</th><th class="px-8 py-4">Jumlah Event</th><th class="px-8 py-4">Aksi</th></tr></thead>
            <tbody class="divide-y border-t">
                @forelse($categories as $index => $category)
                    <tr class="hover:bg-slate-50/50 transition">
                        <td class="px-8 py-6 font-bold text-slate-400">{{ $index + 1 }}</td>
                        <td class="px-8 py-6 font-black text-slate-800">{{ $category->name }}</td>
                        <td class="px-8 py-6 text-slate-500">{{ $category->slug }}</td>
                        <td class="px-8 py-6"><span class="px-3 py-1 bg-indigo-50 text-indigo-600 rounded-lg text-xs font-bold uppercase">{{ $category->events_count }} Event</span></td>
                        <td class="px-8 py-6"><div class="flex gap-2"><button class="px-4 py-2 bg-indigo-50 text-indigo-600 rounded-xl hover:bg-indigo-600 hover:text-white font-bold transition">Edit</button><button class="px-4 py-2 bg-rose-50 text-rose-600 rounded-xl hover:bg-rose-600 hover:text-white font-bold transition">Hapus</button></div></td>
                    </tr>
                @empty
                    <tr><td colspan="5" class="px-8 py-10 text-center text-slate-400">Belum ada kategori.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
