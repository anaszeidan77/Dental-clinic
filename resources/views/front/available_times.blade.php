@extends('layouts.master-without')

@section('title', 'حجز موعد')

@section('page-header')
    {{-- Keep your existing header --}}
    <div class="page-header full-width-header d-flex align-items-center justify-content-between border-bottom mb-0 bg-white">
        <div class="container-fluid px-4">
            <h1 class="page-title fs-3 py-3 mb-0">حجز موعد</h1>
            <div>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">حجز موعد</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
<style>
    /* التصحيح الأساسي للبادينغ */
    body {
        padding-right: 0 !important;
        overflow-x: hidden;
    }

    /* تنسيق الكارد الرئيسي */
    .main-card {
        margin-top: 3rem;
        margin-bottom: 3rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        border-radius: 15px;
    }

    /* كارد الترحيب */
    .welcome-card {
        background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        border: none;
        border-radius: 15px;
        margin-bottom: 2rem;
    }

    /* تنسيق قائمة المواعيد */
    .appointments-list {
        max-height: 400px;
        overflow-y: auto;
    }
</style>

<div class="container-fluid px-4">
    {{-- كارد الترحيب --}}
    <div class="card welcome-card">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">
                <i class="fas fa-smile-beam me-2"></i>مرحبًا في عيادة الأسنان المتميزة
            </h3>
        </div>
        <div class="card-body">
            <p class="lead text-dark">
                نسعى لتقديم أفضل الخدمات العلاجية مع أحدث التقنيات العالمية
            </p>
            <div class="d-flex align-items-center">
                <i class="fas fa-tooth text-primary fs-4 me-3"></i>
                <span class="text-muted">نخبة من الأطباء المتخصصين</span>
            </div>
        </div>
    </div>

    {{-- كارد الحجز --}}
    <div class="card main-card">
        <div class="card-body">
            <form id="appointmentForm" method="POST" action="{{ route('appointments.book') }}">
                @csrf
                {{-- Keep your existing form elements --}}
                <div class="row">
                    <div class="col-md-12 col-sm-12 mb-3">
                        <div class="form-group">
                            <label for="doctor" class="form-label fw-bold">اختر طبيب:</label>
                            <select id="doctor-select" name="doctor_id" class="form-control form-control-lg" required>
                                <option value="">اختر طبيبًا</option>
                                @foreach ($doctors as $doctor)
                                    <option value="{{ $doctor->id }}">{{ $doctor->user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12 mb-4">
                        <div class="form-group">
                            <label for="time" class="form-label fw-bold">المواعيد المتاحة:</label>
                            <select id="time-slot-select" name="time_slot_id" class="form-control form-control-lg" required disabled>
                                <option value="">الرجاء اختيار طبيب أولاً</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-success btn-lg px-5" id="bookAppointmentBtn" disabled>
                            <i class="fas fa-calendar-check me-2"></i>حجز الموعد
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- قائمة المواعيد السابقة --}}
    @if(auth()->user()->patient && auth()->user()->patient->appointments->count() > 0)
    <div class="card mt-4 border-primary">
        <div class="card-header bg-light-primary">
            <h4 class="mb-0">
                <i class="fas fa-history me-2"></i>مواعيدك السابقة
            </h4>
        </div>
        <div class="card-body appointments-list">
            <div class="list-group">
                @foreach(auth()->user()->patient->appointments as $appointment)
                <div class="list-group-item border-0 mb-2 rounded">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-1">
                                <i class="fas fa-user-md text-primary me-2"></i>
                                {{ $appointment->doctor->user->name }}
                            </h5>
                            <small class="text-muted">
                                <i class="fas fa-calendar-alt me-2"></i>
                                {{ $appointment->appointment_datetime->format('Y-m-d H:i') }}
                            </small>
                        </div>
                        <span class="badge bg-{{ $appointment->status == 'completed' ? 'success' : 'warning' }}">
                            {{ $appointment->status }}
                        </span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @else
    <div class="alert alert-info mt-4">
        <i class="fas fa-info-circle me-2"></i>لا توجد مواعيد سابقة
    </div>
    @endif
</div>
@endsection

@section('scripts')
{{-- Keep your existing scripts --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Your existing JavaScript code
    });
</script>
@endsection
