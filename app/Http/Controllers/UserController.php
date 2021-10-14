<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data['group by data'] = DB::table('posts')
                                         ->groupBy('id')
                                         ->having('user_id','<', 9)
                                         ->lazyById();
   
        $data['where array '] = DB::table('ratings')
                                  ->where([
                                      ['rating' ,'=', 10 ],
                                      ['movie_id','<=',500],
                                  ])
                                  ->lazyById();
        $data['movie name '] = DB::table('movies')
                                         ->where('title','like','%U%')
                                         ->get();

        $data['rates more than 5 '] = DB::table('ratings')
                                        ->where('rating' ,'>=' , 5)
                                         ->lazyById();



        $first = DB::table('users')->where('id',1);
        $data['union on user'] = DB::table('users')->where('id',10)
                                                   ->union($first)
                                                   ->get();

         $data['user and post cross product'] = DB::table('posts')
                                                   ->crossJoin('users')
                                                   ->get();

        $data['user post data using right join'] = DB::table('users')
        ->rightJoin('posts', 'users.id', '=', 'posts.user_id')
        ->get();
        
        $data['user post data using left join'] = DB::table('users')
                                                 ->leftJoin('posts','users.id','=','posts.user_id')
                                                  ->get();
   

             $data['Table Joining'] = DB::table('users')
                                ->join('posts','users.id' ,'=','posts.user_id')
                                ->select('users.*','posts.title')->lazyById();

        $data['post data list'] = DB::table('posts')->lazyById()->pluck('user_id','title');
         $data['random user by id '] =
        DB::table('users')
            ->inRandomOrder()
            ->pluck('id')
            ->first();
   

        $data['VisitorRegistered'] = DB::table('users')->count();
        $data['ALlUserNameWithEmail'] =DB::table('users')->pluck('email','name');
        $data['AllUserEmail'] = DB::table('users')->pluck('email');


        $data['user'] = DB::table('users')->lazyById();




        return response()->json([$data], 200);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
