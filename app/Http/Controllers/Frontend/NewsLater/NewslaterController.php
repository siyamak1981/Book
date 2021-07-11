<?php

namespace App\Http\Controllers\Frontend\NewsLater;

use App\Http\Controllers\Controller;
use App\Models\Newslater;
use Illuminate\Http\Request;
use DB;

class NewslaterController extends Controller
{
  public function StoreNewslater(Request $request)
  {

    $validateData = $request->validate([
      'email' => 'required|unique:newslaters|max:55',
    ]);
    $newslater = new Newslater();
    $newslater->email = $request->email;
    $newslater->save();

    return Redirect()->back()->with('message', 'ممنون بابت اشتراک در خبر نامه');
  }

  public function OrderTraking(Request $request)
  {
    $code = $request->code;

    $track = DB::table('orders')->where('status_code', $code)->first();
    if ($track) {

      return view('pages.tracking', compact('track'));
    } else {

      return redirect()->back()->with('message', 'کد نامعتبراست');
    }
  }
}
