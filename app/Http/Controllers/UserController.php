<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    public function __construct()
    {
        $this->UserModel = new UserModel();
    }

    public function add()
    {
        return view('v_user_data');
    }

    public function insert()
    {
        //dd(Request()->name);
        $data = [
            'name' => Request()->name,
            'surname' => Request()->surname,
            'address' => Request()->address,
            'gender' => Request()->gender,
            'state' => Request()->state,
            'city' => Request()->city,
            'birth_date' => Request()->birth_date,
            'c_number' => Request()->c_number,
            'car_type' => Request()->car_type,
            'year' => Request()->year,
        ];

        $this->UserModel->addData($data);
        return redirect()->route('connector');
    }
}
