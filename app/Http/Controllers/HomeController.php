<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $services = Service::where('is_active', true)->get();
        $portfolios = Portfolio::latest('completion_date')->limit(6)->get();

        return view('home', compact('services', 'portfolios'));
    }
}
