<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function show(\App\Models\Event $event)
    {
        // Mengambil daftar kategori untuk keperluan menu footer
        $categories = \App\Models\Category::all();

        // Me-render view dengan membawa data kategori dan data spesifik acara tersebut
        return view('event-detail', compact('categories', 'event'));
    }

    public function checkout(\App\Models\Event $event)
    {
        $event->load('category');

        return view('checkout', compact('event'));
    }

    public function ticket(Request $request, \App\Models\Event $event)
    {
        $event->load('category');

        $buyerName = $request->query('name', 'Peserta Event');
        $buyerEmail = $request->query('email', '-');
        $buyerPhone = $request->query('phone', '-');

        $orderId = 'TRX-' . str_pad($event->id, 5, '0', STR_PAD_LEFT);
        $ticketCode = 'TKT-' . date('Ymd') . '-' . str_pad($event->id, 4, '0', STR_PAD_LEFT);

        return view('ticket', compact(
            'event',
            'buyerName',
            'buyerEmail',
            'buyerPhone',
            'orderId',
            'ticketCode'
        ));
    }
}
