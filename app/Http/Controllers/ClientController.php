<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $clients = Client::paginate(30);

        return view('clients.index', [
            'clients' => $clients,
            'alert' => __($request->alert),
            'alert_level' => $request->alert_level,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // create client
        $client        = new Client();
        $client->name  = $request->name;
        $client->phone = $request->phone;
        $client->notes = $request->notes;
        $client->email = $request->email;
        $client->save();

        return redirect()->route('client.index', [
            'alert'       => __('alert.client.created'),
            'alert_level' => 'success',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);
        return view('clients.edit', ['client' => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        return view('clients.edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = Client::find($id);

        $client->name  = $request->name;
        $client->phone = $request->phone;
        $client->email = $request->email;
        $client->notes = $request->notes;
        $client->save();

        return view('clients.edit', ['client' => $client, 'alert' => __('alert.client.updated')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Client::findOrFail($id)->delete();

        return redirect()->back([
            'alert' => __('alert.client.deleted')
        ]);
    }
}
