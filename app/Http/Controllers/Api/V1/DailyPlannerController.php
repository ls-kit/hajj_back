<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\DailyPlanner;
use Illuminate\Http\Request;

/**
 * @group Daily Planner API
 *
 * Endpoints for managing daily planners.
 */
class DailyPlannerController extends Controller
{
    /**
     * Get all daily planners.
     *
     * @response 200 [
     *   {
     *     "id": 1,
     *     "day_number": 1,
     *     "title_bn": "Day 1 Title",
     *     "details_bn": "Details for Day 1"
     *   }
     * ]
     */
    public function index()
    {
        return DailyPlanner::all();
    }

    /**
     * Get a specific daily planner.
     *
     * @urlParam id integer required The ID of the daily planner. Example: 1
     * @response 200 {
     *   "id": 1,
     *   "day_number": 1,
     *   "title_bn": "Day 1 Title",
     *   "details_bn": "Details for Day 1"
     * }
     */
    public function show($id)
    {
        return DailyPlanner::findOrFail($id);
    }

    /**
     * Create a new daily planner.
     *
     * @bodyParam day_number integer required The day number. Example: 1
     * @bodyParam title_bn string required The title in Bangla. Example: "Day 1 Title"
     * @bodyParam details_bn string required The details in Bangla. Example: "Details for Day 1"
     * @response 201 {
     *   "id": 1,
     *   "day_number": 1,
     *   "title_bn": "Day 1 Title",
     *   "details_bn": "Details for Day 1"
     * }
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'day_number' => 'required|integer',
            'title_bn' => 'required|string',
            'details_bn' => 'required|string',
        ]);

        return DailyPlanner::create($data);
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
