<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function store(Request $request, $id) {
        
        if(\Auth::user()->favorite($id)) {
            return back();
        }
        else {
            return redirect('/');
        }
        
    }
    
    public function destroy($id) {
        
        if(\Auth::user()->unfavorite($id)) {
            return back();
        }
        else {
            return redirect('/');
        }
    }
}
