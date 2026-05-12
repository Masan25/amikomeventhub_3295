@extends('layouts.app')

@section('title', 'Bantuan')

@section('content')
<div class="bg-white rounded-2xl shadow border border-slate-200 p-8">
    <h1 class="text-3xl font-bold text-indigo-700 mb-6">FAQ Bantuan</h1>
    <div class="space-y-4">
        <div class="p-5 bg-slate-50 rounded-xl border">
            <h2 class="font-bold">Bagaimana cara melihat event?</h2>
            <p class="text-slate-600">Buka halaman Home atau Katalog untuk melihat daftar event.</p>
        </div>
        <div class="p-5 bg-slate-50 rounded-xl border">
            <h2 class="font-bold">Bagaimana cara membeli tiket?</h2>
            <p class="text-slate-600">Pilih event, buka detail, lalu lanjutkan ke halaman checkout.</p>
        </div>
        <div class="p-5 bg-slate-50 rounded-xl border">
            <h2 class="font-bold">Bagaimana menghubungi admin?</h2>
            <p class="text-slate-600">Buka halaman Kontak untuk melihat email admin.</p>
        </div>
    </div>
</div>
@endsection
