<?php

namespace App\Http\Controllers\ApiControllers\Section;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Section;

class ApiSectionController extends Controller
{
    public function sections(Request $request)
    {
        $sections = Section::where('section_id', $request->parent_id)->get();
        
        return response()->json([
            'sections' => array_values($sections->toArray())
        ]);
    }

    public function sectionsDescription(Request $request)
    {
        $sections = Section::select('desc_tm', 'desc_en', 'desc_ru')->findOrFail($request->id);
        
        return response()->json([
            'sections' => array_values($sections->toArray())
        ]);
    }
}
