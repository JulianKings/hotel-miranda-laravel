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
        return view('activities.get', [
            'activities' => Auth::user()->activities(),
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

        return redirect(route('activities.get', absolute: false));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $activity = Activity::findOr($id, function () {
            return null;
        });

        if($activity == null)
        {
            return redirect(route('activities.get', absolute: false));
        } else {
            $formattedDate = Carbon::parse($activity->date)->format('Y-m-d');
            return view('activities.edit', ['activity' => $activity, 'formattedDate' => $formattedDate]);
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

        $activity = Activity::findOr($id, function () {
            return null;
        });

        if($activity == null)
        {
            return redirect(route('activities.get', absolute: false));
        } else {
            $activity->type = $request->input('type');
            $activity->date = $request->input('date');
            $activity->notes = $request->input('notes');
            $activity->satisfaction = $request->input('satisfaction');

            $activity->save();

            return redirect(route('activities.get', absolute: false));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activity = Activity::findOr($id, function () {
            return null;
        });

        if($activity == null)
        {
            return redirect(route('activities.get', absolute: false));
        } else {
            Activity::destroy($id);
            return redirect(route('activities.get', absolute: false));
        }
    }
}
