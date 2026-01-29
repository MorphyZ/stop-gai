<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Status;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index() {
        $reports = Report::all();
        $statuses = Status::all();

        return view('admin.index', compact('reports', 'statuses'));
    }
}
