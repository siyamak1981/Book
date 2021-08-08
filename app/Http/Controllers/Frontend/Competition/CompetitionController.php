<?php

namespace App\Http\Controllers\Frontend\Competition;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SliderCompetition;
use App\Models\Product;

class CompetitionController extends Controller
{
  public function index(){
    $slidercompetitions = SliderCompetition::where('status', 1)->get();
    $products =Product::where('status', 1)->orderBy('created_at', 'DESC')->get();
    return view('Frontend.competition.index', compact('slidercompetitions', 'products'));
  }
}
