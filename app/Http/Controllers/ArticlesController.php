<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cache;
use Redis;
use Crypt;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $value = Redis::get($id);
        $cryptvalue = Crypt::encrypt($value);
        //Cache::store('redis')->put('bar','baz',10);
        return "we get the value is ".$cryptvalue;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()//test exception abord(404) for the laravel
    {
        $header = [
        'password' => 'hehehe',
        'headermessage' => 'this is test header message',
        ];
        abort('404','There have nothing ,you need get another page',$header);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//This function is ok tested
    {
        $article = new \App\Article();
        $article->title = $request->title;
        $article->content = $request->title;
        $article->author = $request->author;
        $article->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::select('select title,content,author,updated_at from articles where id = ?',[$id]);

         return view('blog',['articles' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {


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
         $data = DB::update('update articles set title = ?,author = ?,content = ?,where id = ?',[$request]);
        return view('blog',['articles' => $data]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::delete('delete * from articles where id = ?',[$id]);
        return view('',['influence' => $data]);
    }


    public function paginate($id)
    {
        $articles = DB::table('articles')->paginate($id);
        $artic = DB::table('articles')->where('id','>',$id)->paginate(1);
        return view('welcome',['articles' => $articles,'artic' => $artic]);
    }

    //this is test ajax technology

    public function nextpage()
    {
         $data = DB::table('articles')->paginate(1);
         return $data;
    }

    //json test
    public function json()
    {
        $json = DB::table('articles')->paginate(2);
        return $json.;
    }
}