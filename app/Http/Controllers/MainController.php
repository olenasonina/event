<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service_cat;
use App\Models\Manager;

class MainController extends Controller
{
    public function index() {
        $service_cats = Service_cat::get();
        $managers = Manager::get();
        return view('index', ['service_cats' => $service_cats, 'managers' => $managers]);
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
