<?php

namespace App\Http\Controllers;
use Sheets;
use Illuminate\Http\Request;

class GoogleSheetController extends Controller
{
   public function index()
   {
    $sheet = Sheets::spreadsheet('1ErHDDwN0E9yYEq6ISjICSnBOYTFsKAuA4ktY6SIhDEo')->sheet('demo')->get();
    // echo '<pre>';
    // print_r($sheet);die;
    return view('show', compact('sheet'));
   }
    
}
