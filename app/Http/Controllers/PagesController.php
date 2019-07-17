<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PagesController extends Controller
{
    /**
     * @return Response
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * @return Response
     */
    public function about()
    {
        return view('pages.about');
    }
}
