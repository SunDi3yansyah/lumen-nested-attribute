<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoriesController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    //
  }

  /**
   * @return \Illuminate\Http\JsonResponse
   */
  public function index()
  {
    $categories = Category::where('parent_id', null)->get();

    return response()->json($categories);
  }

  /**
   * @param $id
   * @return \Illuminate\Http\JsonResponse
   */
  public function show($id)
  {
    $category = Category::find($id);

    return response()->json($category);
  }
}
