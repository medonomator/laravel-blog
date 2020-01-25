<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Aphorisms;
use App\AphorismsAuthors;
use App\AphorismsCategory;
use App\AphorismsTags;

class AphorismsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        echo 'index';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo 'create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $author = AphorismsAuthors::firstOrCreate([
            'name' => $request->author,
            'machine_name' => 'default',
        ]);

        $category = AphorismsCategory::firstOrCreate([
            'name' => $request->category,
            'machine_name' => 'default',
        ]);

        $aphorism = Aphorisms::where('body', $request->body)->first();

        if (empty($aphorism)) {
            $newAphorism = AphorismsTags::create([
                'body' => $request->body,
                'authors_id' => $author->id,
                'categories_id' => $category->id
            ]);

            foreach ($request->tags as $tag) {
                AphorismsTags::firstOrCreate([
                    'name' => $tag,
                    'aphorisms_id' => $newAphorism->id,
                    'machine_name' => 'default',
                ]);
            }
        }


        // return response()->json(['success' => true, 'data' => 'Данные успешно сохранены']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aphorisms = Aphorisms::all();

        foreach ($aphorisms as  $article) {
            echo $article->body . "<br />";
        }
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
        echo $id;
    }
}
