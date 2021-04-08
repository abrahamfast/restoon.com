<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class ContactController extends Controller
{
	public function index()
	{
		return view('contact');
	}

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50|min:20',
            'subject' => 'required|max:50|min:20',
            'email' => 'required|email',
            'description' => 'required'
        ]);

        Ticket::create($request->all());

        return redirect()->route('contact')->with([
            'flush' => __('global.success your request')
        ]);
	}
}
