<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LinkController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'url' => 'required|url'
        ]);

        $shorCode = Str::random(6);

        $link = Link::create([
            'url' => $request->url,
            'shortened_url' => $shorCode
        ]);

        return response()->json($link, 200);
    }

    public function show($shortenedUrl)
    {
        $link = Link::where('shortened_url', $shortenedUrl)->firstOrFail();

        $link->increment('visits');

        return redirect($link->url);
    }

    public function update(Request $request, $shortenedUrl)
    {
        $request->validate([
            'url' => 'required|url'
        ]);

        $link = Link::where('shortened_url', $shortenedUrl)->firstOrFail();

        $link->update([
            'url' => $request->url
        ]);

        return response()->json($link, 200);
    }

    public function destroy($shortenedUrl)
    {
        $link = Link::where('shortened_url', $shortenedUrl)->firstOrFail();

        $link->delete();

        return response()->json(['message' => 'Link deleted'], 204);
    }

    public function stats($shortenedUrl)
    {
        $link = Link::where('shortened_url', $shortenedUrl)->firstOrFail();

        return response()->json($link, 200);
    }

}
