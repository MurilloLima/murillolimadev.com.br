<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = Contact::sortDesc()->paginate(15);
        return view('admin.pages.contact', compact('data'));
    }
    // visalizar
    public function view()
    {
        $data = [];
        return view('admin.pages.view', compact('data'));
    }
}
