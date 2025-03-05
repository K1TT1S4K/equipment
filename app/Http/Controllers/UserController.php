<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Prefix;
use App\Models\User;
use App\Models\UserType;
=======
>>>>>>> 3fef48bc14544366ee69680f689bd460d547a870
use Illuminate\Http\Request;

class UserController extends Controller
{
<<<<<<< HEAD
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



=======
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
>>>>>>> 3fef48bc14544366ee69680f689bd460d547a870
}
