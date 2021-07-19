<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function create(){
        return view('events/form',[
            'current' => null
        ]);
    }

    public function list(){
        $events = Event::all();
        return view('events/list',[
            'list' => $events,
        ]);
    }
    public function store(Request $request){
        $events = new Event();
//        $events->eventName = $request->get('eventName');
//        $events->bandNames = $request->get('bandNames');
//        $events->startDate = $request->get('startDate');
//        $events->endDate = $request->get('endDate');
//        $events->portfolio = $request->get('portfolio');
//        $events->ticketPrice = $request->get('ticketPrice');
//        $events->status = $request->get('status');
        $events->fill($request->all());
        $events->save();
        return redirect('/admin/events/list');
    }
    public function update($id){
        $currentEvent = Event::find($id);
        return view('events/form',[
            'current' => $currentEvent
        ]);
    }

    public function save(Request $request,$id){
        $detailEvent = Event::find($id);
//        $detailEvent->eventName = $request->get('eventName');
//        $detailEvent->bandNames = $request->get('bandNames');
//        $detailEvent->startDate = $request->get('startDate');
//        $detailEvent->endDate = $request->get('endDate');
//        $detailEvent->portfolio = $request->get('portfolio');
//        $detailEvent->ticketPrice = $request->get('ticketPrice');
//        $detailEvent->status = $request->get('status');
        $detailEvent->update($request->all());
        $detailEvent->save();
        return redirect('/admin/events/list');
    }
    public function delete($id){
        $detailEvent = Event::find($id);
        $detailEvent->delete();
        return redirect('/admin/events/list');
    }
}
