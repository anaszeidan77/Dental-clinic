@extends('layouts.master')

@section('title', 'إدارة الأوقات المتاحة')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
@endsection

@section('page-header')
    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
        <h1 class="page-title">إدارة الأوقات المتاحة</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
                <li class="breadcrumb-item active" aria-current="page">إدارة الأوقات المتاحة</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">الأوقات المتاحة</h3>
                <a href="{{ route('available_times.create') }}" class="btn btn-primary">
                    <i class="fa fa-plus"></i> إضافة وقت جديد
                </a>
            </div>
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>المعرف</th>
                            <th>اسم الطبيب</th>
                            <th>التاريخ</th>
                            <th>وقت البدء</th>
                            <th>وقت الانتهاء</th>
                            <th>الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($availableTimes as $time)
                        <tr>
                            <td>{{ $time->id }}</td>
                            <td>{{ $time->doctor->user->name }}</td>
                            <td>{{ \Carbon\Carbon::parse($time->date)->format('d-m-Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($time->start_time)->format('H:i') }}</td>
                            <td>{{ \Carbon\Carbon::parse($time->end_time)->format('H:i') }}</td>
                            <td class="d-flex justify-content-center gap-2">
                                <a href="{{ route('available_times.show', $time->id) }}" class="btn btn-info btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ route('available_times.edit', $time->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form action="{{ route('available_times.destroy', $time->id) }}" method="POST" onsubmit="return confirm('هل أنت متأكد من الحذف؟');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection
