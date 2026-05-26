<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Event;
use App\Models\Transaction;

class DashboardController extends Controller
{
    public function index()
    {
        $totalEvents = Event::count();
        $totalCategories = Category::count();
        $totalStock = Event::sum('stock');
        $totalRevenue = Transaction::sum('total_price');
        $pendingOrders = Transaction::where('status', 'Pending')->count();
        $latestTransactions = Transaction::with('event')->latest()->take(3)->get();

        return view('admin.dashboard', compact(
            'totalEvents',
            'totalCategories',
            'totalStock',
            'totalRevenue',
            'pendingOrders',
            'latestTransactions'
        ));
    }
}
