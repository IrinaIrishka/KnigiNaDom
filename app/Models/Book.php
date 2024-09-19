<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $with= [
        'author', 
        'genre', 
        'house',
        //'user'
    ];

    protected $hidden = [
        'created_at', 
        'updated_at'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }


    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function house()
    {
        return $this->belongsTo(House::class);
    }


    public function getAll() {
        $data = Book::all();
        return $data;
    }

    public function getOneBookUsingId($id)
    {
        $data = Book::find($id);
        return $data;
    }


}