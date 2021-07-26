<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApartmentsFormRequest;
use App\Models\Apartment;
use App\Models\Event;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function create()
    {
        return view('apartments.form', [
            'current' => null
        ]);
    }

    public function list(Request $request)
    {
        $queryBuilder = Apartment::query();
        $search = $request->query('search');
        if ($search && strlen($search) > 0) {
            $queryBuilder = $queryBuilder->where('apartmentName', 'like', '%' .$search. '%')
                ->orWhere('price', 'like', '%' .$search. '%');
        }
        $apartments = $queryBuilder->paginate(6)->appends(['search' => $search]);
        return view('apartments/list', [
            'list' => $apartments,
        ]);
    }

    public function store(ApartmentsFormRequest $request)
    {
        $events = new Apartment();
        $events->fill($request->validated());
        $events->save();
        return redirect('/apartments/list');
    }

    public function update($id)
    {
        $currentEvent = Apartment::find($id);
        return view('apartments/form', [
            'current' => $currentEvent
        ]);
    }

    public function save(ApartmentsFormRequest $request, $id)
    {
        $detailEvent = Apartment::find($id);
        $detailEvent->update($request->validated());
        $detailEvent->save();
        return redirect('apartments/list');
    }

    public function delete($id)
    {
        $detailEvent = Event::find($id);
        $detailEvent->delete();
        return redirect('apartments/list');
    }
}
