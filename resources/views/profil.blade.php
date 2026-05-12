@extends('layouts.app')

@section('title', 'Profil Praktikan')

@section('content')
<div class="bg-white rounded-2xl shadow border border-slate-200 p-8">
    <h1 class="text-3xl font-bold text-indigo-700 mb-6">Profil Praktikan</h1>
    <div class="grid md:grid-cols-2 gap-4 text-slate-700">
        <div class="p-5 bg-slate-50 rounded-xl border"><strong>Nama:</strong> I Komang Sandy Hare Nandhana</div>
        <div class="p-5 bg-slate-50 rounded-xl border"><strong>NIM:</strong> 24.12.3295</div>
        <div class="p-5 bg-slate-50 rounded-xl border"><strong>Program Studi:</strong> Sistem Informasi</div>
        <div class="p-5 bg-slate-50 rounded-xl border"><strong>Project:</strong> AmikomEventHub</div>
    </div>
</div>
@endsection
