<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

use Illuminate\Support\Facades\DB;

use Illuminate\http\Request;

class UserController extends BaseController
{
    
    public function __construct(){
    }

    public function index()
    {
        $result = DB::select("SELECT * FROM product");
        return $result;
    }

    public function getdataid(Request $request, $id)
    {
        $result = DB::select("SELECT * FROM product WHERE id = $id");
        return $result;
    }

    public function tambahData()
    {
        DB::table("product")->insert(
            [
                'id'=>'2',
                'name'=>'jaket',
                'price'=>'15000',
                'rating'=>'4',
                'quantity'=>'10'
            ]
            );
        return "tambah berhasil";
    }
    public function update(){
        DB::table("product")->update(
            [
                'id'=>'1',
                'name'=>'jaket',
                'price'=>'15000',
                'rating'=>'4',
                'quantity'=>'10'
            ]
            );
            return "update berhasil";
    }
    public function delete($id)
    {
        $result = DB::delete("DELETE FROM product WHERE id = $id");
        return redirect('/user');
    }
}