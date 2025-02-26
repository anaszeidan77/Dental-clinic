<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\AvailableTime;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AvailableTimeController extends Controller
{
    public function index()
    {
        $availableTimes = AvailableTime::with('doctor.user')->get();
        return view('admin.dashboard.available_times.index', compact('availableTimes'));
    }

    public function create()
    {
        $doctors = Doctor::with('user')->get();
        return view('admin.dashboard.available_times.create', compact('doctors'));
    }

    public function store(Request $request)
    {
        // التحقق من صحة البيانات
        $validated = $request->validate([
            'doctor_id'  => 'required|exists:doctors,id',
            'date'       => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time'   => 'required|date_format:H:i|after:start_time',
        ]);

        // تخزين البيانات بعد التحقق
        AvailableTime::create($validated);

        return redirect()->route('available_times.index')->with('success', 'تمت إضافة الوقت بنجاح!');
    }

    public function show($id)
    {
        $availableTime = AvailableTime::with('doctor.user')->findOrFail($id);
        return view('admin.dashboard.available_times.show', compact('availableTime'));
    }

    public function edit($id)
    {
        $availableTime = AvailableTime::findOrFail($id);
        $doctors = Doctor::with('user')->get();
        return view('admin.dashboard.available_times.edit', compact('availableTime', 'doctors'));
    }

    public function update(Request $request, $id)
    {
        $availableTime = AvailableTime::where('id', $id)->first();
        if (!$availableTime) {
            return redirect()->back()->with('error', 'السجل غير موجود');
        }
        $availableTime->update([
            'doctor_id'  => $request->doctor_id,
            'date'       => $request->date,
            'start_time' => $request->start_time,
            'end_time'   => $request->end_time,
        ]);


        return redirect()->route('available_times.index')->with('success', 'تم تعديل الوقت بنجاح!');
    }

    public function showPageApoitmint(){
        $doctors = Doctor::with('user')->get();
        return view('front.available_times',compact('doctors'));
    }
    public function destroy($id)
    {
        $availableTime = AvailableTime::findOrFail($id);
        $availableTime->delete();

        return redirect()->route('available_times.index')->with('success', 'تم حذف الوقت بنجاح!');
    }
    public function showAvailableTimes($doctorId) {
        // استرجاع الأوقات الغير محجوزة وتاريخها في المستقبل
        $times = AvailableTime::where('doctor_id', $doctorId)
                    ->where('is_booked', false)
                    ->get(['id', 'date', 'start_time', 'end_time']);

        return response()->json($times);
    }

    public function bookAppointment(Request $request)
    {
        $request->validate([
            'doctor_id'  => 'required|exists:doctors,id',
            'time_slot_id' => 'required|exists:available_times,id', // تغيير الاسم ليتطابق مع الفورم
        ]);

        // العثور على الوقت المحدد
        $availableTime = AvailableTime::findOrFail($request->time_slot_id);

        // التحقق من أن الوقت غير محجوز مسبقًا
        if ($availableTime->is_booked) {
            return redirect()->back()->with('error', 'هذا الموعد محجوز مسبقًا!');
        }

        // إنشاء الموعد
        $appointment = Appointment::create([
            'patient_id' => 1,
            'doctor_id'  => $request->doctor_id,
            'available_time_id' => $request->time_slot_id, // إضافة حقل جديد للربط المباشر
            'appointment_datetime' => $availableTime->date . ' ' . $availableTime->start_time,
            'status'     => 'scheduled',
        ]);

        // تحديث حالة الوقت إلى "محجوز"
        $availableTime->update([
            'is_booked' => true
        ]);

        return redirect()->route('appointments.index')->with('success', 'تم الحجز بنجاح!');
    }
}
