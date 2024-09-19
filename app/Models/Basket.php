<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
use Illuminate\Http\Request;

class Basket extends Model
{
    use HasFactory;

    public $basket = [];
    public $idBook;
    //public $basketCount = 0;

    /* public function basketCount(Request $request)
    {
        $all = $request->session()->all();
        $count = count($all['basket']);
        return $count;
    } */

    public function basketPush(Request $request)
    {
        $request->session()->push('basket', 
        $this->idBook);
        $all = $request->session()->all();
        $count = count($all['basket']);
        return $count;
    } 

    public function basketGetAll()
    {

    }

    public function basketForgetOne()
    {

    }

    public function basketFlushAll()
    {

    }
}
