<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {
        /*
        return view('pages.about')->with([
                'first' => 'Max',
                'last' => 'Kharuk'
            ]);
        */

        /*
        $data = [];
        $data['first'] = 'Max';
        $data['last'] = 'Kharuk';

        return view('pages.about', $data);
        */

        $first = 'Max';
        $last = 'Kharuk';
        return view('pages.about', compact('first', 'last'));
    }
}
