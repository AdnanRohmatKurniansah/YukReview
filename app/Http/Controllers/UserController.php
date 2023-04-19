<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Imports\UsersImport;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function index() {
        return view('dashboard.user.index', [
            'users' => User::orderBy('id', 'desc')->get()
        ]);
    }

    public function import() {
        Excel::import(new UsersImport, request()->file('file'));
        return redirect()->back()->with('success', 'Data Imported Successfully');
    }
    public function export() {
        return Excel::download(new UsersExport, 'users.csv');
    }
}
