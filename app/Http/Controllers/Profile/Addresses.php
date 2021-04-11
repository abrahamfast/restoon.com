<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;

class Addresses extends Controller
{

    public function index(Request $request)
    {
        $user = $request->user();

        return view('app', [
            'user' => $user,
            'view' => 'addresses',
            'slug' => __('global.address')
        ]);
    }
    public function store(Request $request)
    {
        $request->validate($this->rules());

        $account = Account::where('id', $request->get('account_id'));

        $account->shippingAddressStreet = $request->get('shippingAddressStreet');
        $account->save();

        return redirect()->route('addresses');


    }

    public function edit($id, Request $request)
    {
        $user = $request->user();

        return view('app', [
            'user' => $user,
            'view' => 'addresses',
            'type' => 'edit',
            'slug' => __('global.address')
        ]);
    }

    public function update(Request $request)
    {
        ddd($request->all());
    }

    protected function rules(): array
    {
        return [
            'main' => 'required',
            'account_id' => 'required',
        ];
    }
}
