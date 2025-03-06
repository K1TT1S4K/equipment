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
        $userTypes = ['admin', 'department_officer','administrative_officer', 'user']; // หรือถ้าคุณใช้ตารางที่เก็บ user_types
        return view('livewire.users.show', compact('users', 'prefixes', 'userTypes'));
    }

    public function create()
    {
        $users = User::all();
        $prefixes = Prefix::all();
        $userTypes = User::all();
    // return view('users.create', compact('userTypes'));
        return view('livewire.users.add', compact('users','prefixes','userTypes'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|unique:users',
            'firstname' => 'required',
            'lastname' => 'required',
            'user_type' => 'required|exists:user_types,id',
            'prefix_id' => 'required|exists:prefixes,id',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        User::create([
            'username' => $validated['username'],
            'firstname' => $validated['firstname'],
            'lastname' => $validated['lastname'],
            'user_type' => $validated['user_type'],
            'prefix_id' => $validated['prefix_id'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        return redirect()->route('livewire.users.show')->with('success', 'User added successfully!');
    }

    public function update(Request $request, $id)
    {
        // ค้นหาผู้ใช้
        $user = User::findOrFail($id);

        // ตรวจสอบค่า user_type ก่อน
        \Log::info('Current user_type: ' . $user->user_type);

        // ตรวจสอบค่าจาก request
        $validated = $request->validate([
            'user_type' => 'required|in:admin,department_officer,administrative_officer,user', // ตรวจสอบค่าที่รับจากฟอร์ม
        ]);

        // ตรวจสอบค่าของ user_type หลังจากรับข้อมูลจาก request
        \Log::info('New user_type from request: ' . $validated['user_type']);

        // อัปเดต user_type
        $user->user_type = $validated['user_type'];

        // ตรวจสอบค่าของ user_type หลังการอัปเดต
        \Log::info('Updated user_type: ' . $user->user_type);

        // บันทึกการเปลี่ยนแปลง
        $user->save();

        // ส่งผู้ใช้กลับไปที่หน้าจัดการผู้ใช้
        return redirect()->route('user')->with('success', 'User type updated successfully!');
    }





    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::findOrFail($id); // ค้นหาผู้ใช้ที่ต้องการแก้ไข
        $userTypes = ['admin', 'department_officer','administrative_officer', 'user']; // ตัวเลือก user type ที่สามารถเลือกได้

        return view('user.edit', compact('user', 'userTypes'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
