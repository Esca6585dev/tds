<?php

namespace App\Http\Controllers\ApiControllers\Section;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Section;
use Str;

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

    public function sectionsUrl(Request $request)
    {
        $sections = Section::select('name_tm', 'name_en', 'name_ru')->findOrFail($request->id);
        
        $name_tm = Str::slug($sections->name_tm);
        $name_en = Str::slug($sections->name_en);
        $name_ru = Str::slug($sections->name_ru);

        return response()->json([
            'name_tm' => $name_tm,
            'name_en' => $name_en,
            'name_ru' => $name_ru,
        ]);
    }
}
