<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\HajjStep;
use Illuminate\Http\Request;

class HajjStepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(HajjStep::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'step_number' => 'required|integer',
            'title_bn' => 'required|string',
            'description_bn' => 'required|string',
            'image' => 'nullable|image',
        ]);

        $hajjStep = HajjStep::create($data);

        if ($request->hasFile('image')) {
            $hajjStep->addMedia($request->file('image'))->toMediaCollection('images');
        }

        return response()->json($hajjStep, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json(HajjStep::findOrFail($id));
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
    public function destroy(string $id)
    {
        //
    }
}
