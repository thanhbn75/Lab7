<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $name = 'Vũ Minh Thành';
        $age = 21;
        $school = 'Đại học Điện Lực';
        
        // Sử dụng compact để truyền biến sang view
        return view('welcome', compact('name', 'age', 'school'));
    }
    public function multiplication($n)
{
    // Kiểm tra xem n có phải là số không
    $isValid = is_numeric($n);
    return view('multiplication', compact('n', 'isValid'));
}
}
