<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Pokemon;
use App\Capture;

class PokecentreController extends Controller
{

    // Function to only allow those who are logged in to access the pokecentre page
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // Find out how many registered users there are
        $totalTrainers = User::all()->count();

        // Show the contents of the pokecentre using its view
        return view('pokecentre.index', compact('totalTrainers'));
    }

    // Function to allow the trainer to capture their pokemons
    public function capture() {

        // Get all pokemon from database
        // $allPokemon = Pokemon::all();
        // Get all pokemon from database and order them by name
        $allPokemon = \DB::table('pokemon')->orderBy('name')->get();
        return view('pokecentre.capture', compact('allPokemon'));
    }

    public function postCapture(Request $request) {

        // Validation
        $this->validate($request, [
            // Take this request from the form, check it in the pokemon table using its id
            'pokemon'=>'required|exists:pokemon,id',
            'photo'=>'required|image'
        ]);

        // Create a new instance of the Capture model
        $capture = new Capture();

        // Put the data from form into the database
        $capture->photo      = 'test.jpg';
        $capture->user_id    = \Auth::user()->id;
        $capture->pokemon_id = $request->pokemon;

        // And save it!
        $capture->save();

        // Find out the name of the pokemon the user just captured
        // find or fail by default looks for the id and we have the id of the pokemon, it is pokemon because the field name was just called pokemon, not id
        $pokemon = Pokemon::findOrFail($request->pokemon);

        return redirect('pokedex/'.$pokemon->name);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
