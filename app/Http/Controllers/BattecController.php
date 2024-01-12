<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Members;
use App\Models\Visitors;
use Illuminate\Http\Request;

class BattecController extends Controller
{
    public function dashboard(Request $request){
        $members = Members::all();
        $visitors = Visitors::all();
        $earnMember = 0;
        $earnVisitors = 0;
    
        foreach ($members as $member) {
            $earnMember += (int)$member->amount;
        }

        foreach ($visitors as $visitor) {
            $earnVisitors += (int)$visitor->amount;
        }
    
        $countMember = $members->count();
        $countVisitors = $visitors->count();
    
        return view('battec-dashboard', [
            'countMember' => $countMember,
            'earnMember' => $earnMember,
            'earnVisitors' => $earnVisitors,
            'countVisitors' => $countVisitors,
        ]);
    }

    public function members(Request $request){

        $member = Members::orderBy('id','DESC')->get();
        return view('battec-members',  ['member' => $member]);
    }

    public function addMember(Request $request){
        
        $currentDate = Carbon::now()->format('m-d-y');
        
        return view('battec-addMember', compact('currentDate'));
    }

    public function partialMember(Request $request, $id){
        
        $member = Members::find($id);
        $currentDate = Carbon::now()->format('m-d-y');

        return view('battec-partialMember', compact('member', 'currentDate'));
    }

    public function updatePartial(Request $request, $id){

        $request->validate([
            'date' => 'required',
            'name' => 'required',
            'status' => 'required',
            'payment' => 'required',
            'amount' => '',
        ]);
    
        $amount = 0; // Set a default value for amount
    
        if ($request->payment === 'paid' && $request->status === 'student') {
            $amount = 400;
        } else if ($request->payment === 'paid' && $request->status === 'not-student') {
            $amount = 500;
        } else {
            $amount = $request->amount;
        }
    
        $members = Members::find($id);

        $members->update([
            'date' => $request->date,
            'name' => $request->name,
            'status' => $request->status,
            'payment' => $request->payment,
            'amount' => $amount, 
        ]);
    
    
        return redirect('/members')->with('message', 'Update Complete');
    }

    public function storeMember(Request $request){

        $request->validate([
            'date' => 'required',
            'name' => 'required',
            'status' => 'required',
            'payment' => 'required',
            'amount' => '',
        ]);
    
        $amount = 0; // Set a default value for amount
    
        if ($request->payment === 'paid' && $request->status === 'student') {
            $amount = 400;
        } else if ($request->payment === 'paid' && $request->status === 'not-student') {
            $amount = 500;
        } else {
            $amount = $request->amount;
        }
    
        $members = new Members([
            'date' => $request->date,
            'name' => $request->name,
            'status' => $request->status,
            'payment' => $request->payment,
            'amount' => $amount, 
        ]);
    
        $members->save();
    
        return redirect('/members')->with('message', 'New Member Added Complete');
    }

    public function visitors(Request $request){

        $visitor = Visitors::orderBy('id','DESC')->get();
        return view('battec-visitors',  ['visitor' => $visitor]);
    }

    public function addVisitors(Request $request){
        
        $currentDate = Carbon::now()->format('m-d-y');
        
        return view('battec-addVisitor', compact('currentDate'));
    }


    public function storeVisitors(Request $request){

        $request->validate([
            'date' => 'required',
            'name' => 'required',
            'address' => 'required',
            'amount' => 'required',
        ]);

        $visitors = new Visitors([
            'date' => $request->date,
            'name' => $request->name,
            'address' => $request->address,
            'amount' => $request->amount, 
        ]);
    
        $visitors->save();
    
        return redirect('/visitors')->with('message', 'battec-members');
    }

public function searchMember(Request $request){
    $query = $request->input('query');

    $member = Members::where('name', 'LIKE', "%$query%")
                 ->get();

    return view('battec-members', compact('member'));
}

public function searchVisitor(Request $request){
    $query = $request->input('query');

    $visitor = Visitors::where('name', 'LIKE', "%$query%")
                 ->get();

    return view('battec-visitors', compact('visitor'));
}

public function resetData(){
    return view('battec-resetData');
}

public function deleteDataAll(Request $request)
{
    $members = Members::all();
    $visitors = Visitors::all();

   $members->delete();
   $visitors->delete();

    return back()->with('error', 'Freebies Successfully Deleted');;
}
}
