<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title', 'director', 'imageUrl', 'duration', 'releaseDate', 'genre'];

    public static function search($search)
    {

        $movies = Movie::where('title', 'like','%'.$search.'%')
            ->orderBy('title')
            ->get();

        return $movies;
    }


}
