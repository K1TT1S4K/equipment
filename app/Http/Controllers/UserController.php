<?php

namespace App\Http\Controllers;

use App\Models\Prefix;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        $prefixes = Prefix::all();
        return view('livewire.users.show', compact('users', 'prefixes'));
    }

    public function create()
    {
        $users = User::all();
        $prefixes = Prefix::all();
        return view('livewire.users.add', compact('users','prefixes'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        User::create([
            'username' => $validated['username'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        return redirect()->route('livewire.users.show')->with('success', 'User added successfully!');
    }

    public function update(Request $request, User $user)
    {
        // ตรวจสอบค่าที่ได้รับจากฟอร์ม
        \Log::info('Current user_type_id: ' . $user->user_type);
        \Log::info('New user_type_id from request: ' . $request->user_type);

        // ตรวจสอบว่า user_type_id ที่ได้รับจากฟอร์มมีค่าถูกต้อง
        $validated = $request->validate([
            'user_type' => 'required|exists:user_types,id',
        ]);

        // อัปเดต user_type_id
        $user->user_type = $validated['user_type'];

        // พิมพ์ค่า $user ก่อนบันทึก
        dd($user); // ตรวจสอบว่า $user->user_type ถูกอัปเดตหรือไม่

        // บันทึกการเปลี่ยนแปลง
        $user->save();

        // ส่งผู้ใช้กลับไปยังหน้ารายการ
        return redirect()->route('user.show')->with('success', 'User type updated successfully!');
    }



}
