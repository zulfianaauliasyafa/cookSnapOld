<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musics = Music::all();
        $username = Auth::user()->name;
        return view('music.index', compact('musics','username'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $username = Auth::user()->name;
        $musics = Music::all();
        return view('music.create',compact('musics','username'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_musik' => 'required|string|max:255',
            'level' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'lirik' => 'nullable|string',
            'link' => 'nullable|string|max:255',
        ]);

        $music = new Music([
            'nama_musik' => $request->nama_musik,
            'level' => $request->level,
            'lirik' => $request->lirik,
            'link' => $request->link,
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $music->image = 'images/'.$imageName;
        }

        $music->save();

        return redirect()->route('musics.index')->with('success', 'Resep created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function show(Music $music)
    {
        $username = Auth::user()->name;
        $musics = Music::all();
        return view('music.show', compact('music','username'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function edit(Music $music)
    {
        $username = Auth::user()->name;
        $musics = Music::all();
        return view('music.edit', compact('music','username'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Music $music)
    {
        $request->validate([
            'nama_musik' => 'required|string|max:255',
            'level' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'lirik' => 'nullable|string',
            'link' => 'nullable|string|max:255',
        ]);

        $music->nama_musik = $request->nama_musik;
        $music->level = $request->level;
        $music->lirik = $request->lirik;
        $music->link = $request->link;

        if ($request->hasFile('image')) {
            // Delete the old image
            if ($music->image && file_exists(public_path($music->image))) {
                unlink(public_path($music->image));
            }

            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $music->image = 'images/'.$imageName;
        }

        $music->save();

        return redirect()->route('musics.index')->with('success', 'Music updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function destroy(Music $music)
    {
        if ($music->image && file_exists(public_path($music->image))) {
            unlink(public_path($music->image));
        }

        $music->delete();

        return redirect()->route('musics.index')->with('success', 'Music deleted successfully.');
    }
}
