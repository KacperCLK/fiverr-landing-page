<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\OurWork;
use App\Models\PriceList;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $priceLists = PriceList::with('bundles')->get();
        $ourWorks = OurWork::all();
        $offers = Offer::all();

        return view('index', compact('priceLists', 'ourWorks', 'offers'));
    }
}
