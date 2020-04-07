<?php


protected $fillable = [
  'body', 'user_id'
];

public function commentable()
{
  return $this->morphTo();
}

public function children()
{
  return $this->hasMany(Comment::class, 'parent_id', 'id');
}

public function user()
{
  return $this->belongsTo(User::class);
}