<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function show(Event $event)
    {
        $event->load('category');

        return view('event-detail', compact('event'));
    }

    public function checkout(Event $event)
    {
        $event->load('category');

        return view('checkout', compact('event'));
    }

    public function ticket(Request $request, Event $event)
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
