<?php

namespace App\Http\Controllers;

use App\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * Display a listing of resources with linked locations.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Resource::with('location')
            ->orderBy('name')
            ->get();
    }

}
