<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        return view('admin.skills.index', compact('skills'));
    }

    public function create()
    {
        return view('admin.skills.create');
    }

    public function store(Request $request)
    {
        Skill::create($request->all());
        return redirect()->route('admin.skills.index')->with('success', 'Skill berhasil ditambah');
    }

    public function edit($id)
    {
        $skill = Skill::findOrFail($id);
        return view('admin.skills.edit', compact('skill'));
    }

    public function update(Request $request, $id)
    {
        $skill = Skill::findOrFail($id);
        $skill->update($request->all());
        return redirect()->route('admin.skills.index')->with('success', 'Skill diupdate');
    }

    public function destroy($id)
    {
        Skill::destroy($id);
        return redirect()->route('admin.skills.index')->with('success', 'Skill dihapus');
    }
}
