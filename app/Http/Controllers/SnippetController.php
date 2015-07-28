<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SnippetRequest;
use App\Snippet;
use Illuminate\Http\Request;

class SnippetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show', 'index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $snippets = Snippet::all()->sortByDesc('created_at');
        return view('snippet.index', compact('snippets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('snippet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  SnippetRequest  $request
     * @return Response
     */
    public function store(SnippetRequest $request)
    {
        Snippet::create($request->all());

        return redirect()->route('snippet.index')->with('message', 'Snippet well created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $snippet = Snippet::findOrFail($id);
        return view('snippet.show', compact('snippet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $snippet = Snippet::findOrFail($id);
        return view('snippet.edit', compact('snippet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  SnippetRequest  $request
     * @param  int  $id
     * @return Response
     */
    public function update(SnippetRequest $request, $id)
    {
        $snippet = Snippet::findOrFail($id);
        $snippet->update($request->all());
        return redirect()->route('snippet.show', $id)->with('message', 'Snippet well updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $snippet = Snippet::findOrFail($id);
        $snippet->delete();
        return redirect()->route('snippet.index')->with('message', 'Snippet well deleted.');
    }
}
