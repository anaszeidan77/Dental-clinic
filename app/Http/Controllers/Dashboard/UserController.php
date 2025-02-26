<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.dashboard.users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::pluck('name'); // جلب أسماء الأدوار فقط
        return view('admin.dashboard.users.create', compact('roles'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|exists:roles,name', // التأكد من وجود الدور في قاعدة البيانات
            'google_id' => 'nullable|string|unique:users,google_id',
            'facebook_id' => 'nullable|string|unique:users,facebook_id',
            'whatsapp_number' => 'nullable|string|unique:users,whatsapp_number',
        ]);

        // تشفير كلمة المرور
        $validated['password'] = bcrypt($validated['password']);

        // إنشاء المستخدم
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
            'google_id' => $validated['google_id'] ?? null,
            'facebook_id' => $validated['facebook_id'] ?? null,
            'whatsapp_number' => $validated['whatsapp_number'] ?? null,
        ]);

        // إسناد الدور بشكل صحيح بعد إنشاء المستخدم
        $user->assignRole($validated['role']);

        return redirect()->route('users.index')->with('success', 'تم إضافة المستخدم بنجاح!');
    }






    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::pluck('name');
        return view('admin.dashboard.users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // التحقق من البيانات المدخلة
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required|string|in:Patient,doctor,admin',  // إضافة تحقق من الحقل role
            'password' => 'nullable|string|min:8|confirmed',  // إضافة كلمة مرور اختيارية لتعديلها
        ]);

        // إذا كانت كلمة المرور غير فارغة، نقوم بتحديثها
        if ($request->filled('password')) {
            $validated['password'] = bcrypt($request->password);  // تحديث كلمة المرور
        } else {
            // إذا لم يتم إدخال كلمة مرور جديدة، لا نقوم بتعديل كلمة المرور
            unset($validated['password']);
        }

        // تحديث المستخدم
        $user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
        ]);

        // تحديث الدور باستخدام Spatie
        $user->assignRole($validated['role']);

        return redirect()->route('users.index')->with('success', 'User updated successfully!');
    }



    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully!');
    }
}
