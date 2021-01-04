<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
use DB;

class BranchController extends Controller
{
    public function addBrPage()
	{
		return view('addBranch');
	}

	public function delBranch($id)
	{
		// $branch = Branch::find($id);
		// $branch->delete();
		DB::table('branches')->where('brId', '=', $id)->delete();
		return redirect()->route('viewBrPage');
	}

	public function editBranch($id)
	{
		// $branch = Branch::find($id);
		// return view('editBranch')->with('branch', $branch);
		$branches = branch::select('*')
						->where('branches.brId','=',$id)
						->join('courses','branches.corId','courses.corId')
						->get();

		return view('editBranch', compact('branches'));
	}

	public function uppBr(Request $request)
	{	
		Branch::where('brId',$request->brId)->update(['brName'=>$request->brName, 'corId'=>$request->corId]);

		// DB::table('branches')
  //           ->where('branches.brId', $id)
  //           ->update(['branches.corId' => $request->corId] , ['branches.brName' => $request->brName]);
		//  $branch = Branch::select('*')
		//  			->where('branches.brId','=',$id)
		//  			->get();

		//  $branch->corId = $request->corId;
		//  $branch->brName = $request->brName;

		// $branch->save();

		return redirect()->route('viewBrPage');
	}

	public function viewBrPage()	//view branch
	{
		// $branch = Branch::all();
		// return view('branchView')->with('branches', $branch);
		$branches = branch::select('*')
						->join('courses','branches.corId','courses.corId')
						->get();

		return view('branchView', compact('branches'));
	}

	public function addBr(Request $request)
    {
    	//Validation
		$validated = $request->validate([
        	'corId' => 'required',
			'brName' => 'required|string',
    ]);

		$branch = new Branch;

		$branch->corId = $request->corId;
		$branch->brName = $request->brName;

		$branch->save();

		return redirect()->route('viewBrPage');

    }
}
