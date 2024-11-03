<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function greetWithParams(Request $request)
{
$name = $request->query('name', 'world');
return response()->json([
'message' => 'hello world ' . $name
]);
}
}
