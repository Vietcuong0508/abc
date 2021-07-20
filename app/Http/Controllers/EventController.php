<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventFormRequest;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function create()
    {
        return view('events/form', [
            'current' => null
        ]);
    }

    public function list(Request $request)
    {
        $queryBuilder = Event::query();
        $search = $request->query('search');
        if ($search && strlen($search) > 0) {
            $queryBuilder = $queryBuilder->where('eventName', 'like', '%' .$search. '%')
                ->orWhere('bandNames', 'like', '%' .$search. '%');
        }
        $events = $queryBuilder->paginate(10)->appends(['search' => $search]);
        return view('events/list', [
            'list' => $events,
        ]);
    }

    public function store(EventFormRequest $request)
    {
        $events = new Event();
        $events->fill($request->validated());
        $events->save();
        return redirect('/admin/events/list');
    }

    public function update($id)
    {
        $currentEvent = Event::find($id);
        return view('events/form', [
            'current' => $currentEvent
        ]);
    }

    public function save(EventFormRequest $request, $id)
    {
        $detailEvent = Event::find($id);
        $detailEvent->update($request->validated());
        $detailEvent->save();
        return redirect('/admin/events/list');
    }

    public function delete($id)
    {
        $detailEvent = Event::find($id);
        $detailEvent->delete();
        return redirect('/admin/events/list');
    }
}
