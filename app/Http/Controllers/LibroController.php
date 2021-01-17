<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{
    function getLibros(Request $request)
    {
        $libroModel = new Libro();
        $data = $libroModel->getLibros();

        return response()->json([
            'mensaje' => 'Total de libros encontrados: ' . count($data),
            'libros' => $data
        ], 200);
    }

    function findLibro(Request $request)
    {
        $id = $request->id;
        $libroModel = new Libro();
        $data = $libroModel->findLibro($id);
        return response()->json($data);
    }

    function storeLibro(Request $request)
    {
        $libroModel = new Libro();
        $libroModel->addLibro($request->all());
        return response()->json(null, 201);
    }

    function updateLibro(Request $request)
    {
        $id = $request->id;
        $libroModel = new Libro();
        $libroModel->updateLibro($id, $request->all());
        return response()->json(null, 201);
    }

    function deleteLibro(Request $request)
    {
        $id = $request->id;
        $libroModel = new Libro();
        $libroModel->dropLibro($id);
    }
}
