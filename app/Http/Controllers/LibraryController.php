<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function list(Request $request)
    {
        $queryBuilder = Library::query();
        $search = $request->query('search');
        if ($search && strlen($search) > 0) {
            $queryBuilder = $queryBuilder->where('title', 'like', '%' .$search. '%');
        }
        $events = $queryBuilder->paginate(10)->appends(['search' => $search]);
        return view('library/list', [
            'list' => $events,
        ]);
    }
}
