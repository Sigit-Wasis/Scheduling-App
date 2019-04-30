<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;

class ClassController extends Controller
{
    /**
     * @Get all class
     * @array $class
     * @view /class/index
     */
    public function index()
    {
        $class  = Classes::all();
        return view('Class.index', ['class' =>  $class]);
    }
    
    /**
     * @Create Class
     * @array $request
     * @view /class
     */
    public function create(Request $request)
    {
        Classes::create($request->all());
        return redirect('/class')->with('success', 'This is a success add');
    }
    
    /**
     * @Edit Class
     * @integer $id
     * @array $class
     * @view /class/$id/edit
     */
    public function edit($id)
    {
        $class  = Classes::find($id);
        return view('Class.edit', ['class' => $class]);
    }

    /**
     * @Update Class
     * @integer $id
     * @array $class
     * @view /class
     */
    public function update(Request $request,$id)
    {
        $class   = Classes::find($id);
        $class->update($request->all());
        return redirect('/class')->with('success', 'This is a success update');
    }

    /**
     * @Delete Class
     * @integer $id
     * @array $class
     * @view /class
     */
    public function delete($id)
    {
        $class   = Classes::find($id);
        $class->delete($class);
        return redirect('/class')->with('success', 'This is a success delete');
    }

}
