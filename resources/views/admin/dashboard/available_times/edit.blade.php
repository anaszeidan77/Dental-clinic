@extends('layouts.master')

@section('title', 'تعديل وقت متاح')

@section('content')
<div class="row">
    <div class="col-lg-6 mx-auto">
        <div class="card custom-card">
            <div class="card-header">
                <h3 class="card-title">تعديل وقت متاح</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('available_times.update', $availableTime->id) }}" method="POST">
                    @csrf
                    @method('PUT') 

                    <div class="mb-3">
                        <label class="form-label">الطبيب</label>
                        <select class="form-control" name="doctor_id" required>
                            @foreach ($doctors as $doctor)
                                <option value="{{ $doctor->id }}" {{ $doctor->id == $availableTime->doctor_id ? 'selected' : '' }}>
                                    {{ $doctor->user->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">التاريخ</label>
                        <input type="date" class="form-control" name="date" value="{{ $availableTime->date }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">وقت البدء</label>
                        <input type="time" class="form-control" name="start_time" value="{{ $availableTime->start_time }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">وقت الانتهاء</label>
                        <input type="time" class="form-control" name="end_time" value="{{ $availableTime->end_time }}" required>
                    </div>

                    <button type="submit" class="btn btn-success">تحديث</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
