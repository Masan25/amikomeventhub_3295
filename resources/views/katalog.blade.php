@extends('layouts.app')

@section('title', 'Katalog Event')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-bold text-slate-900">Katalog AmikomEventHub</h1>
    <p class="text-slate-600 mt-2">Placeholder daftar event yang nantinya terhubung ke database.</p>
</div>

<div class="grid md:grid-cols-3 gap-5">
    @foreach(['Seminar IT', 'Workshop Laravel', 'E-Sport U-Champ'] as $event)
        <div class="bg-white rounded-2xl shadow border border-slate-200 p-6 hover:-translate-y-1 transition">
            <span class="text-sm bg-indigo-50 text-indigo-700 px-3 py-1 rounded-full">Event</span>
            <h2 class="text-xl font-bold mt-4">{{ $event }}</h2>
            <p class="text-slate-600 mt-2">Deskripsi singkat event AmikomEventHub.</p>
            <a href="{{ route('events.show', 1) }}" class="inline-block mt-5 bg-indigo-600 text-white px-4 py-2 rounded-xl hover:bg-indigo-700">Detail</a>
        </div>
    @endforeach
</div>
@endsection
