@extends('layouts.master')

@section('title', 'إضافة وقت متاح')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
@endsection

@section('page-header')
    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
        <h1 class="page-title">إضافة وقت متاح</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
                <li class="breadcrumb-item"><a href="{{ route('available_times.index') }}">إدارة الأوقات المتاحة</a></li>
                <li class="breadcrumb-item active" aria-current="page">إضافة وقت جديد</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6 mx-auto">
        <div class="card custom-card">
            <div class="card-header">
                <h3 class="card-title">إضافة وقت متاح</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('available_times.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">الطبيب</label>
                        <select class="form-control" name="doctor_id" required>
                            <option value="">اختر الطبيب</option>
                            @foreach ($doctors as $doctor)
                                <option value="{{ $doctor->id }}">{{ $doctor->user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">التاريخ</label>
                        <input type="date" class="form-control" name="date" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">وقت البدء</label>
                        <input type="time" class="form-control" name="start_time" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">وقت الانتهاء</label>
                        <input type="time" class="form-control" name="end_time" required>
                    </div>
                    <button type="submit" class="btn btn-primary">حفظ</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
