<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('index');
    }

    public function show_services() {
        return view('services');
    }

    public function show_service_category($service_category = null) {
        return view('service_category', ['s_category' => $service_category]);
    }

    public function show_one_service($service_category, $service = null) {
        return view('servicecard', ['service' => $service]);
    }

    public function show_projects() {
        //
    }

    public function show_one_project($name = null) {
        //
    }
}
