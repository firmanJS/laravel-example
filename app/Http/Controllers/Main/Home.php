<?php
namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Home extends Controller
{
  /**
  * Show the application dashboard to the user.
  *
  * @return Response
  */
  public function index()
  {
    return view('home');
  }

  public function add()
  {
    return view('add');
  }
}
