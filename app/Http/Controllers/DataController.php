<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Models\Visitor;
use Illuminate\Support\Facades\DB;
use Response;
Use \Carbon\Carbon;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;


class DataController extends Controller
{
    public function cars(){

        $data=DB::table('data')->get();
        return view('cars',compact('data'));
    }
}
