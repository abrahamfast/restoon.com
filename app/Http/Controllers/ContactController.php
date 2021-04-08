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
            'name' => 'required|max:50',
            'subject' => 'required|max:50',
            'email' => 'required|email',
            'description' => 'required'
        ]);

        $data = $request->except('/contact', '_token');
        $data['id'] = uniqid() . substr(md5(rand()), 0, 4);
        Ticket::create($data);

        return redirect()->route('contact')->with([
            'flush' => __('global.success your request')
        ]);
	}
}
