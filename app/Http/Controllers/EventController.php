<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(Request $request) {
        $events = Event::all();
        return view('events.index', ['events' => $events]);
    }

    public function show($id)
    {
        $events = Event::find($id);
        return view('events.show', ['events' => $events]);
    }

    public function create(){
        return view('events.create');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'event_name' => 'required',
            'event_date' => 'required',
            'event_time' => 'required',
            'event_details' => 'required'
        ]);

        Event::create($validateData);


        return redirect('/events')->with('success', 'Event created successfully.');
        }

        public function edit($id)
        {
            $events = Event::findOrFail($id);
            return view('events.edit', ['events' => $events]);
        }

        public function update(Request $request, $id){
            $validateData = $request->validate([
                'event_name' => 'required',
                'event_date' => 'required',
                'event_time' => 'required',
                'event_details' => 'required'
            ]);
    
            $events = Event::find($id);
            $events->update($validateData);
    
    
            return redirect('/events')->with('success', 'Event Updated successfully.');
            }

            public function destroy($id)
            {
                $events = Event::find($id);
                $events->delete();
        
                return redirect('/events');
            }




}
