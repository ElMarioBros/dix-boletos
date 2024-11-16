<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEntryRequest;
use App\Models\Entry;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.table', [
            'entries' => Entry::latest()->get(),
        ]);
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
    public function store(StoreEntryRequest $request)
    {
        $extras = $request->extras ?? [];
        $extrasString = implode(', ', $extras);
        Entry::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'desired_tickets' => $request->desired_tickets,
            'city' => $request->city,
            'extras' => $extrasString,
            'comments' => $request->comments,
        ]);
        return redirect()->route('success');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Retrieve the Entry including soft-deleted records
        $entry = Entry::withTrashed()->findOrFail($id);
    
        return view('admin.show', compact('entry'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entry $entry)
    {
        $entry->delete();
        return redirect()->route('table');
    }

    public function restore($id)
    {
        $entry = Entry::withTrashed()->findOrFail($id);
        $entry->restore();

        return redirect()->route('completed');
    }

    public function deleted()
    {
        return view('admin.completed', [
            'entries' => Entry::onlyTrashed()->latest()->get(),
        ]);
    }

}
