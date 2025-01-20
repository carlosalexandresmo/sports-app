<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TeamController extends Controller
{
    //
    public function index()
    {
        try {

            $response = [
                'success' => true,
                'data' => null,
                'message' => ""
            ];

            return response()->json($response, Response::HTTP_OK);
        } catch (\Exception $e) {
            $response = [
                'success' => false,
                'data' => $e,
                'message' => $e->getMessage()
            ];
            return response()->json($response, Response::HTTP_BAD_REQUEST);
        }
    }

    public function store(Request $request)
    {
        try {

            $response = [
                'success' => true,
                'data' => null,
                'message' => ""
            ];

            return response()->json($response, Response::HTTP_OK);
        } catch (\Exception $e) {
            $response = [
                'success' => false,
                'data' => $e,
                'message' => $e->getMessage()
            ];
            return response()->json($response, Response::HTTP_BAD_REQUEST);
        }
    }

    public function update($id, Request $request)
    {
        try {

            $response = [
                'success' => true,
                'data' => null,
                'message' => ""
            ];

            return response()->json($response, Response::HTTP_OK);
        } catch (\Exception $e) {
            $response = [
                'success' => false,
                'data' => $e,
                'message' => $e->getMessage()
            ];
            return response()->json($response, Response::HTTP_BAD_REQUEST);
        }
    }

    public function destroy($id) {}
}
