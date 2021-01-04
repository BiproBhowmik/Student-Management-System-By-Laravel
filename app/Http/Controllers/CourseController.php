<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use DB;

class CourseController extends Controller
{

	public function addCorPage()
	{
		return view('addCourse');
	}

	public function delCourse($id)
	{
		DB::table('courses')->where('corId', '=', $id)->delete();
		return redirect()->route('viewCorPage');
	}

	public function editCourse($id)
	{
		$courses = Course::select('*')
						->where('courses.corId','=',$id)
						->get();

		return view('editCourse', compact('courses'));
	}

	public function uppCor(Request $request)
	{	
		Course::where('corId',$request->corId)->update(['corFullName'=>$request->corFullN, 'corSortName'=>$request->corShortN]);

		return redirect()->route('viewCorPage');
	}

	public function viewCorPage()
	{
		$courses = Course::all();
		return view('courseView')->with('courses', $courses);
	}

    public function addCor(Request $request)
    {
    	//Validation
		$validated = $request->validate([
        	'corFullN' => 'required|string',
			'corShortN' => 'required|string',
    ]);

		$course = new Course;

		$course->corFullName = $request->corFullN;
		$course->corSortName = $request->corShortN;

		$course->save();

		return redirect()->route('dashboard');

    }
}
