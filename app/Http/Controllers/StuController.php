<?php

namespace App\Http\Controllers;

use App\Models\stu;
use Illuminate\Http\Request;

class StuController extends Controller
{
    private $Students=[
        ['id'=>101,'name'=>'mohsen'],
        ['id'=>102,'name'=>'salar']
    ];
    
    public function index()
    {
        return $this->Students;
    }

    
    public function store(Request $request)
    {
        $Student=['id'=>$request->id,'name'=>$request->name];
        $this->Students[]=$Student;
        return 'new Student sucess added and number of students is'.count($this->Students);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\stu  $stu
     * @return \Illuminate\Http\Response
     */
    public function show(stu $stu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\stu  $stu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, stu $stu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\stu  $stu
     * @return \Illuminate\Http\Response
     */
    public function destroy(stu $stu)
    {
        //
    }
}
