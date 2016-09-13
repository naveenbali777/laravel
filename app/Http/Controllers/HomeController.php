<?php

namespace App\Http\Controllers;
use App\properties as PROP;
use App\tenants as Tent;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function properties()
    {
        $properties = PROP::get();
        $data = [
            'properties' => $properties
        ];
        return view('properties',$data);
    }
    public function tenants()
    {
        $properties = PROP::properties_data()->toArray();;
        $tenants = Tent::get_tenants_with_prop()->get();
        $data = [
            'tenants' => $tenants,
            'properties' => $properties
        ];
        return view('tenants', $data);
    }
    public function saveproperties(Request $request) {
        $roperties = new PROP;
        $roperties->name = $request->name;
        $roperties->address = $request->address;
        $roperties->prop_value = $request->prop_value;
        $roperties->mortgage = $request->mortgage;       
        $roperties->save();
        return redirect('/properties');
    }
    public function savetenants(Request $request) {
        $tenants = new Tent;
        $tenants->name = $request->name;
        $tenants->address = $request->address;
        $tenants->properties_id = $request->properties_id;
        $tenants->start_date = date('Y-m-d H:i:s', strtotime($request->start_date));
        $tenants->end_date = date('Y-m-d H:i:s', strtotime($request->end_date));
        $tenants->save();
        return redirect('/tenants');
    }
}
