<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();

        $events = Event::with('category')
            ->when($request->filled('search'), function ($query) use ($request) {
                $query->where('title', 'like', '%' . $request->search . '%');
            })
            ->when($request->filled('category'), function ($query) use ($request) {
                $query->where('category_id', $request->category);
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('admin.events.index', compact('events', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.events.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // Menerapkan validasi data request dari pengguna
        $data = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|numeric|min:1',
            'poster' => 'nullable|image|max:2048' // Maksimal 2MB
        ]);

        if ($request->hasFile('poster')) {
            // Simpan ke direktori storage/app/public/posters
            $data['poster_path'] = $request->file('poster')->store(
                'posters',
                'public'
            );
        }
        // Menyimpan data yang telah divalidasi ke dalam tabel menggunakan Model
        \App\Models\Event::create($data);
        return redirect()->route('admin.events.index')->with('success', 'Data Event berhasil ditambahkan.');
    }

    public function show(Event $event)
    {
        return redirect()->route('admin.events.edit', $event->id);
    }

    public function edit(Event $event)
    {
        $categories = Category::all();

        return view('admin.events.edit', compact('event', 'categories'));
    }

    public function update(Request $request, Event $event)
    {
        $data = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|numeric|min:1',
            'poster' => 'nullable|image|max:2048'
        ]);
        if ($request->hasFile('poster')) {
            // Hapus gambar lama jika sebelumnya sudah memiliki poster
            if ($event->poster_path) {

                \Illuminate\Support\Facades\Storage::disk('public')->delete($event->poster_path);
            }
            // Upload gambar baru
            $data['poster_path'] = $request->file('poster')->store(
                'posters',
                'public'
            );
        }
        $event->update($data);
        return redirect()->route('admin.events.index')->with('success', 'Event berhasil diperbarui.');
    }

    public function destroy(Event $event)
    {
        if (
            $event->poster_path &&
            Storage::disk('public')->exists($event->poster_path)
        ) {
            Storage::disk('public')->delete($event->poster_path);
        }

        $event->delete();

        return redirect()
            ->route('admin.events.index')
            ->with('success', 'Data event dan file poster berhasil dihapus secara permanen.');
    }
}
