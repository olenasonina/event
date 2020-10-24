<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service_cat;
use App\Models\Manager;
use App\Models\Service;

class MainController extends Controller
{
    public function index() {
        $service_cats = Service_cat::get();
        $managers = Manager::get();
        return view('index', ['service_cats' => $service_cats, 'managers' => $managers]);
    }

    public function show_services() {
        $service_cats = Service_cat::get();
        $services = Service::get();
        return view('services', ['service_cats' => $service_cats, 'services' => $services]);
    }

    public function show_service_category($service_category = null) {
        $service_cats = Service_cat::get();
        $category = Service_cat::where('cat_code', $service_category)->first();
        $services = Service::get()->where('service_cat_id', $category->id);
        return view('service_category', ['service_cats' => $service_cats, 's_category' => $category, 'services' => $services]);
    }

    public function show_one_service($service_category, $service_code = null) {
        $service = Service::where('service_code', $service_code)->first();
        // dd($service);
        return view('servicecard', ['service' => $service]);
    }

    public function show_projects() {
        //
    }

    public function show_one_project($name = null) {
        //
    }
}
