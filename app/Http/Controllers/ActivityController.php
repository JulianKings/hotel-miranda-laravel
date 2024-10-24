<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('activities.index', [
            'activities' => Auth::user()->activities()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('activities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validateWithBag('createActivity', [
            'type' => ['required', 'string', 'max:255'],
            'date' => ['required', 'date'],
            'notes' => ['required', 'string', 'max:255']
        ]);

        $activity = Activity::create([
            'type' => $request->input('type'),
            'date' => $request->input('date'),
            'notes' => $request->input('notes'),
            'client_id' => $request->user()->id
        ]);

        toastify()->success('New activity created succesfully!', ['position' => 'center']);

        return redirect(route('activities.index', absolute: false));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $activity = Activity::findOrFail($id);

        if($activity->client_id == Auth::user()->id)
        {
            $formattedDate = Carbon::parse($activity->date)->format('Y-m-d');
            return view('activities.edit', ['activity' => $activity, 'formattedDate' => $formattedDate]);
        } else {
            return redirect(route('activities.index', absolute: false));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validateWithBag('updateActivity',[
            'type' => ['required', 'string', 'max:255'],
            'date' => ['required', 'date'],
            'notes' => ['required', 'string', 'max:255'],
            'satisfaction' => ['required', 'integer', 'max:10', 'min:0']
        ]);

        $activity = Activity::findOrFail($id);

        if($activity->client_id == Auth::user()->id)
        {
            $activity->type = $request->input('type');
            $activity->date = $request->input('date');
            $activity->notes = $request->input('notes');
            $activity->satisfaction = $request->input('satisfaction');

            $activity->save();

            return redirect(route('activities.index', absolute: false));
        } else {
            return redirect(route('activities.index', absolute: false));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activity = Activity::findOrFail($id);

        if($activity->client_id == Auth::user()->id)
        {
            Activity::destroy($id);

            toastify()->success('Activity deleted successfully!', ['position' => 'center']);

            return redirect(route('activities.index', absolute: false));
        } else {
            return redirect(route('activities.index', absolute: false));
        }
    }
}
