<?php

namespace App\Models;

//use DB;
use Illuminate\Support\Facades\DB;

class Libro
{
    function getLibros()
    {
        $data = DB::table('libros')->get();
        return $data;
    }

    function findLibro($id)
    {
        $data = DB::table('libros')->where('id', $id)->get()->first();
        return $data;
    }

    function addLibro($data)
    {
        DB::table('libros')->insert($data);
    }

    function updateLibro($id, $data)
    {
        DB::table('libros')->where('id', $id)->update($data);
    }

    function dropLibro($id)
    {
        DB::table('libros')->where('id', $id)->delete();
    }
}
