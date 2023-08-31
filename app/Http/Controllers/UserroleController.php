<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserroleController extends Controller
{
    public function index(){
            $role = [
                ['type' => 'อาจารย์', 'name' => ['อาจารย์จักรกฤษณ์']],
                ['type' => 'ทีเอ', 'name' => ['ทีเอพี่โอม', 'ทีเอพี่เฟรนด์']],
                ['type' => 'นักเรียน', 'name' => ['สมศี มะนอง', 'พิโธ่ ชินวัด']],
                ['type' => 'sf', 'name' => ['สมศี hmj', 'พิโธ่ ชินวัด']],
                ['type' => 'kjkj', 'name' => ['สมศี มะนอง', 'พิโธ่ ชินวัด']]
            ];
            return view('roles', compact('role'));
    }
}
