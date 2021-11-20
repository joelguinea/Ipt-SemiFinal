<?php


namespace App\Http\Controllers;
use App\Review;
use Illuminate\Support\Facades\Validate;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(){
        $s = Review::orderByRaw('name, email')->get();
        return view('review.index', ['review'=>$s]);
    }


    

    public function create(){
        return view('review.create');
    }

    public function new(Request $request){
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'message'=>'required',
            'rating'=>'required'

        ]);

        Review::create([
            'name'=> $request['name'],
            'email'=> $request['email'],
            'message'=> $request['message'],
            'rating'=> $request['rating']
        ]);

        return redirect('/review')->with('info', 'A new Review has been created.');

    
        }    

}
