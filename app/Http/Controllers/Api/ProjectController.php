<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::all();
        return response()->json([ 'result' => $projects]);
    }

    public function show(string $slug) {
        
        $project = Project::with('technologies', 'type')->where('slug', $slug)->first();

        if ($project) {
            return response()->json([
                'result' => $project,
                'success' => true
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Nessun progetto trovato'
            ]);
        }
    }
}
