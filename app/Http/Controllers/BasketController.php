<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Basket;
use Illuminate\Support\Facades\Blade;



class BasketController extends Controller
{
    public $basket;
   
    public function add(Request $request)
    {   // $request->session()->flush();
        $request->session()->push('basket', 
        $request->id);
        //$all = $request->session()->all();
        //print_r($request->session()->get('basket'));
        $count = count($request->session()->get('basket'));
       
        return response()
          ->json(['count'=>$count]);

        
           
       // $request->session()
      //  ->push('basket', 'ina');
     //dd($request->session()->all());
    // return response()
      //   ->json($request->session()->get('basket'));
    }

    public function order(Request $request)
    {
        //$request->session()->flush();
      
        $order = $request->session()->get('basket');
        if ($order) {
        return view('order', [
            'order' => Book::find($order, 
                ['id', 'picture']) 
        ]);  
        } else {
            return view('noOrder');  
        } 
    }



    public function deleteOne(Request $request, $id)
    {
        //dump($id);
        
        //$request->session()->flush();
        
        //$order = $request->session()->all();
       $order = $request->session()->get('basket');
       //dump($order);
         foreach ($order as $bookId) {
            //print_r($bookId . '= ');
            if ($bookId == $id) {
               unset($order[$bookId]);
            }
        } 
        
  $order = $request->session()->get('basket'); 
        $request->session()->forget('basket');

        foreach($order as $book) {
           if($book != $request->id) {
            $request->session()->push('basket', 
                $book);

           }

        }
            
    $basket = $request->session()->get('basket'); 
    }

        

   


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


   
}
