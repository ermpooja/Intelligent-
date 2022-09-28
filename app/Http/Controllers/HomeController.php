<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Topic;
use DB;


class HomeController extends Controller
{
   public function filter(Request $request){
     ini_set('memory_limit', '1024M');
    $getTopics = Topic::get();
    $prices = Course::get();
    if($request->ajax()){

        // return $request->price;
        $query = Course::where('price_range','>',0);
                
        if($request->price && $request->price[0] != ''){
            $query->whereIn('price_range',$request->price);
        }
        if($request->topic && $request->topic[0] != ''){
            $query->whereIn('topic_id',$request->topic);
        }

        if( $request->sort != '' && $request->sort == 'newest')
        {
             $query->orderBy('id','DESC'); 
        }
         if($request->sort != '' && $request->sort == 'ascending')
        {
             $query->orderBy('id','ASC'); 
        }
        $getCourses = $query->paginate(3);
       
         return view('filter',compact('getCourses'));
    }else{
        
        $getCourses = Course::paginate(3);
         return view('home',compact('getTopics','getCourses','prices'));
    }

   }
}
