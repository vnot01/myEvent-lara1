<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Tickets;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\ConfigApp;
use App\Models\Event;
use App\Models\Frontend\Home;
use App\Models\Venue;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;
use Barryvdh\Debugbar\Facades\Debugbar;
use Carbon\Carbon;
use DebugBar\DebugBar as DebugBarDebugBar;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $id=Auth::user()->id;
        // $profileData = User::find($id);
        // $listTokens = ApiToken::latest()->paginate(5);
        // return view('frontend.ticket');

        $eventData = Event::where('is_featured', true)->get();
        $allEventData = Event::join('venues', 'venues.id', '=', 'events.venue_id')
        ->join('categories', 'categories.id', '=', 'events.category_id')
        ->get([
            'events.*',
            'venues.tittle AS venues_tittle',
            'categories.name AS categories_tittle',
        ]);
        $venueID = Event::where('is_featured', true)->first()->venue_id;
        $venueID = Event::where('is_featured', true)->first()->venue_id;
        $venueData = Venue::where('id',$venueID)->get();
        $configAppData = ConfigApp::where('is_active',true)->get();
        return view('frontend.ticket', with(
            compact(
            'eventData',
            'venueData',
            'configAppData',
            'allEventData',
            // 'startDayOfEvent',
            // 'endDayOfEvent',
            )));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tickets $tickets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tickets $tickets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tickets $tickets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tickets $tickets)
    {
        //
    }
}