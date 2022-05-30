<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $categories_count = DB::table('categories')->count();
        $users_count = DB::table('users')->count();
        $contacts_count = DB::table('contacts')->count();
        $blogs_count = DB::table('properties')->count();
        // dd($categories_count, $recipes_count);
        return(view('admin.index', compact('categories_count', 'users_count', 'contacts_count','blogs_count')));
    }
}
