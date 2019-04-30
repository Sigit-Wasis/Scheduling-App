<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    /**
     * @Get all subject
     * @array $subjects
     * @view /subject/index
     */
    public function index()
    {
        $subjects = Subject::all();
        return view('Subject.index', ['subject' => $subjects]);
    }

    /**
     * @Create Subject
     * @array $request
     * @view /subject
     */
    public function create(Request $request)
    {
        Subject::create($request->all());
        return redirect('/subject')->with('success', 'data inputted successfully');
    }

    public function edit($id)
    {
        $subjects = Subject::find($id);
        return view('Subject.edit', ['subject' => $subjects]);
    }

    public function update(Request $request,$id)
    {
        $subjects = Subject::find($id);
        $subjects->update($request->all());
        return redirect('/subject')->with('success', 'data updated successfully');
    }

    public function delete(Request $request,$id)
    {
        $subjects = Subject::find($id);
        $subjects->delete($subjects);
        return redirect('/subject')->with('success', 'data deleted successfully');
    }
}
