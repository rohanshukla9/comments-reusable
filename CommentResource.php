<?php
class CommentResource extends JsonResource
{

  public function toArray($request)
  {
    return [
      'id' => $this->id,
      'body' => $this->body,
      'user' => new UserResource($this->user),
      'children' => CommentResource::collection($this->whenLoaded('children'))
    ];
  }
}


//userresource
public function toArray($request)
{
    return [
        'id' => $this->id,
        'name' => $this->name,
    ];
}