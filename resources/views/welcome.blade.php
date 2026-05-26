@extends('layouts.app')

@section('content')
<section class="max-w-7xl mx-auto px-6 py-12">

    <div class="bg-indigo-600 rounded-3xl p-10 text-white shadow-lg mb-10">
        <h1 class="text-4xl font-bold mb-4">
            Temukan Event Kampus Terbaik di AmikomEventHub
        </h1>

        <p class="text-indigo-100 max-w-2xl mb-6">
            Pilih kategori event sesuai kebutuhanmu. Kamu bisa melihat seminar, workshop, hiburan, dan berbagai kegiatan kampus lain secara lebih mudah.
        </p>

        <a href="#event-list"
           class="inline-block bg-white text-indigo-700 px-6 py-3 rounded-xl font-bold hover:bg-indigo-50 transition">
            Lihat Event
        </a>
    </div>

    <div class="mb-10">
        <h2 class="text-2xl font-bold text-slate-800 text-center mb-5">
            Filter Kategori Event
        </h2>

        <div class="flex flex-wrap gap-3 justify-center">
            <a href="{{ route('home') }}"
               class="px-5 py-3 rounded-2xl font-bold transition
               {{ request('category') == '' ? 'bg-indigo-600 text-white shadow-lg shadow-indigo-100' : 'bg-white text-slate-700 border border-slate-200 hover:bg-slate-100' }}">
                Semua Kategori
            </a>

            @foreach($categories as $cat)
                <a href="{{ route('home', ['category' => $cat->slug]) }}"
                   class="px-5 py-3 rounded-2xl font-bold transition
                   {{ request('category') == $cat->slug ? 'bg-indigo-600 text-white shadow-lg shadow-indigo-100' : 'bg-indigo-50 text-indigo-700 hover:bg-indigo-100 border border-indigo-100' }}">
                    {{ $cat->name }}
                </a>
            @endforeach
        </div>
    </div>

    <div id="event-list" class="mb-6">
        <h2 class="text-2xl font-bold text-slate-800 mb-2">
            Daftar Event
        </h2>

        <p class="text-slate-500">
            Event ditampilkan berdasarkan jadwal terdekat dan kategori yang dipilih.
        </p>
    </div>

    @if($events->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($events as $event)
                <div class="group bg-white rounded-3xl border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-300 overflow-hidden">
                    <div class="relative overflow-hidden aspect-[3/4]">
                       <img src="{{ $event->poster_path ? asset($event->poster_path) : 'https://placehold.co/600x800?text=No+Image' }}"
                            alt="{{ $event->title }}"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                            onerror="this.onerror=null;this.src='https://placehold.co/600x800?text=No+Image';">

                        <div class="absolute top-4 left-4 px-3 py-1 bg-white/90 backdrop-blur rounded-lg text-xs font-bold uppercase text-indigo-600">
                            {{ $event->category->name ?? '-' }}
                        </div>
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-indigo-600 transition">
                            {{ $event->title }}
                        </h3>

                        <p class="text-slate-500 text-sm mb-4 line-clamp-2">
                            {{ $event->description }}
                        </p>

                        <div class="flex items-center gap-2 text-slate-500 text-sm mb-3">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>

                            <span>
                                {{ $event->date->format('d-m-Y H:i') }}
                            </span>
                        </div>

                        <div class="flex items-center gap-2 text-slate-500 text-sm mb-4">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>

                            <span>
                                {{ $event->location }}
                            </span>
                        </div>

                        <div class="flex justify-between items-center pt-4 border-t">
                            <span class="text-2xl font-black text-indigo-600">
                                Rp {{ number_format($event->price, 0, ',', '.') }}
                            </span>

                            <a href="{{ url('event/1') }}"
                               class="px-5 py-2 bg-indigo-50 text-indigo-600 rounded-xl font-bold hover:bg-indigo-600 hover:text-white transition">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="bg-white border border-slate-200 rounded-3xl p-10 text-center shadow-sm">
            <h3 class="text-2xl font-bold text-slate-800 mb-2">
                Event Tidak Ditemukan
            </h3>

            <p class="text-slate-500 mb-6">
                Belum ada event aktif pada kategori ini atau tanggal event sudah lewat.
            </p>

            <a href="{{ route('home') }}"
               class="inline-block px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold hover:bg-indigo-700 transition">
                Tampilkan Semua Event
            </a>
        </div>
    @endif

</section>
@endsection