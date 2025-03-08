<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function getData()
    {
        // ดึงข้อมูลจากฐานข้อมูล
        $data = YourModel::all(); // หรือคุณสามารถใช้คำสั่ง query อื่น ๆ เช่น where(), orderBy() เป็นต้น

        // ส่งข้อมูลในรูปแบบ JSON
        return response()->json($data);
    }
}
