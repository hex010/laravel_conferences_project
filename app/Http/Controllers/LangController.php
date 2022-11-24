<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LangController extends Controller
{
    public function change(string $lang): RedirectResponse
    {
        App::setlocale($lang);
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
