@extends('layouts.admin')

@section('title', 'Kelola Partner - Admin')
@section('page_title', 'Kelola Partner')
@section('page_subtitle', 'Tambah, ubah, cari, dan hapus data partner.')

@section('header_action')
<a href="{{ route('admin.partners.create') }}"
   class="px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg shadow-indigo-100 hover:bg-indigo-700 transition">
    + Tambah Partner
</a>
@endsection

@section('content')
<div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">

    <form action="{{ route('admin.partners.index') }}" method="GET"
          class="px-8 py-6 bg-slate-50/50 border-b flex flex-col md:flex-row gap-4">
        <input type="text"
               name="search"
               value="{{ request('search') }}"
               placeholder="Cari nama partner..."
               class="flex-1 px-5 py-3 rounded-xl border-slate-200 border bg-white focus:ring-2 focus:ring-indigo-500 outline-none transition">

        <button type="submit"
                class="px-5 py-3 bg-indigo-600 text-white rounded-xl font-bold hover:bg-indigo-700 transition">
            Cari
        </button>

        @if(request('search'))
            <a href="{{ route('admin.partners.index') }}"
               class="px-5 py-3 bg-slate-100 text-slate-600 rounded-xl font-bold hover:bg-slate-200 transition text-center">
                Reset
            </a>
        @endif
    </form>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black tracking-widest">
                <tr>
                    <th class="px-8 py-4">ID</th>
                    <th class="px-8 py-4">Logo</th>
                    <th class="px-8 py-4">Nama Partner</th>
                    <th class="px-8 py-4">Created At</th>
                    <th class="px-8 py-4">Updated At</th>
                    <th class="px-8 py-4">Aksi</th>
                </tr>
            </thead>

            <tbody class="divide-y border-t">
                @forelse($partners as $partner)
                    <tr class="hover:bg-slate-50/50 transition">
                        <td class="px-8 py-6 font-bold text-slate-400">
                            {{ $partner->id }}
                        </td>

                        <td class="px-8 py-6">
                            <img src="{{ $partner->logo_url ?: 'https://placehold.co/120x80?text=Logo' }}"
                                 class="w-20 h-14 rounded-xl object-cover bg-slate-100"
                                 onerror="this.onerror=null;this.src='https://placehold.co/120x80?text=Logo';">
                        </td>

                        <td class="px-8 py-6">
                            <p class="font-black text-slate-800">{{ $partner->name }}</p>
                            <p class="text-xs text-slate-400 break-all">{{ $partner->logo_url ?: '-' }}</p>
                        </td>

                        <td class="px-8 py-6 text-slate-500">
                            {{ $partner->created_at->format('d M Y H:i') }}
                        </td>

                        <td class="px-8 py-6 text-slate-500">
                            {{ $partner->updated_at->format('d M Y H:i') }}
                        </td>

                        <td class="px-8 py-6">
                            <div class="flex gap-2">
                                <a href="{{ route('admin.partners.edit', $partner->id) }}"
                                   class="px-4 py-2 bg-indigo-50 text-indigo-600 rounded-xl font-bold hover:bg-indigo-600 hover:text-white transition">
                                    Edit
                                </a>

                                <form action="{{ route('admin.partners.destroy', $partner->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Yakin ingin menghapus partner ini?');">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="px-4 py-2 bg-rose-50 text-rose-600 rounded-xl font-bold hover:bg-rose-600 hover:text-white transition">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-8 py-10 text-center text-slate-400">
                            Data partner belum tersedia.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="px-8 py-6 bg-slate-50/50 border-t">
        {{ $partners->links() }}
    </div>
</div>
@endsection