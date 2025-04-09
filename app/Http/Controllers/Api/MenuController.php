<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MenuItem;

/**
 * @group Hajj API
 *
 * API endpoints for managing Hajj menus.
 */
class MenuController extends Controller
{
    /**
     * List all Hajj menu items
     *
     * @response 200 {
     *   "id": 1,
     *   "title": "Hajj Guide",
     *   "slug": "hajj-guide",
     *   "icon": "icon-path"
     * }
     */
    public function index()
    {
        return MenuItem::select('id', 'title', 'slug', 'icon')->get();
    }

    /**
     * Get a menu item by slug
     *
     * @urlParam slug string required The slug of the menu item. Example: hajj-guide
     * @response 200 {
     *   "id": 1,
     *   "title": "Hajj Guide",
     *   "slug": "hajj-guide",
     *   "icon": "icon-path",
     *   "pages": [
     *     {
     *       "id": 1,
     *       "title": "Page 1",
     *       "content": "Page content"
     *     }
     *   ]
     * }
     */
    public function show($slug)
    {
        return MenuItem::where('slug', $slug)->with('pages')->firstOrFail();
    }
}
