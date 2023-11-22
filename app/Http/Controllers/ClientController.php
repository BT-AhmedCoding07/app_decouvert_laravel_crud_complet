<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Entreprise; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){ // list 
        
        $clients  = Client::all();

        // return view('clients.index', [
        //     'clients'=> $clients
        // ]);
        //onother method
        return view('clients.index', compact('clients'));
    }
    public function store(Request $request)
    {

        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'status'=> 'required|integer',
            'entreprise_id' => 'required|integer'
        ]);
        Client::create($data);
        return back();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $entreprises = Entreprise::all();
        $client = new Client();


        return view('clients.create',compact('entreprises', 'client'));
    }

    
    
    public function show(Client $client)
    {
        // dd($client);
        //  $client = Client::where('id',$client)->firstOrFail();
        //  dd($client);
        // return view('clients.show', compact('client'));
        return view('clients.show', compact('client'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        $entreprises = Entreprise::all();

        return view('clients.edit', compact('client','entreprises'));
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'status'=> 'required|integer',
            'entreprise_id' => 'required|integer'
        ]);

        $client->update($data);

        return redirect('clients/' . $client->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect('/clients');
    }
}
