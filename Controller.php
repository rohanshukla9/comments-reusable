<?php

public function index(Property $slug)
{ 
    return CommentResource::collection(
        $slug->comments()->with(['children', 'user'])->get()
    );
}

public function store(Property $slug, Request $request)
{
  //  \Auth::loginUsingId(1);
    $this->validate($request, [
        'body' => 'required|max:5000',
    ]);

    $comment = $slug->comments()->make([
        'body' => $request->body
    ]);

    $request->user()->comments()->save($comment);

    return new CommentResource($comment);
}