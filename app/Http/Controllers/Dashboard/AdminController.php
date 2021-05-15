<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Matches;
use App\Models\News;
use App\Models\Property;
use App\Models\Review;
use App\Models\Tours;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{





    public function index()
    {

        $hotels = Property::count();

        $matches = Matches::count();

        $news = News::count();

        $tours = Tours::count();


        return view('admin.index', compact('tours', 'news', 'matches', 'hotels'));
    }


}
