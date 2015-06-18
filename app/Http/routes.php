<?php

use Illuminate\Http\Request;

Route::get('/', function (Request $request)
{
    if ($request->headers->get('X-SITE-TOKEN') !== env('SITE-TOKEN')) abort(403, 'Unauthorized action.');

    if ( ! $id = $request->get('id'))
    {
        abort(400, 'Missing id');
    }

    $type = $request->get('type', 'video');

    if ($type == 'playlist')
    {
        $reponse = Youtube::getPlaylistById($id);
        return [
            'status' => ( ! empty($reponse)) ? 'OK' : 'NOT_OK',
            'data'   => $reponse
        ];
    }

    $reponse = Youtube::getVideoInfo($id);
    return [
        'status' => ( ! empty($reponse)) ? 'OK' : 'NOT_OK',
        'data'   => $reponse
    ];
});
