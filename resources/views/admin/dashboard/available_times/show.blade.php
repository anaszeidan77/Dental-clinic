@extends('layouts.master')

@section('title', 'تفاصيل الوقت المتاح')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
@endsection

@section('page-header')
    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
        <h1 class="page-title">تفاصيل الوقت المتاح</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
                <li class="breadcrumb-item"><a href="{{ route('available_times.index') }}">إدارة الأوقات المتاحة</a></li>
                <li class="breadcrumb-item active" aria-current="page">تفاصيل الوقت المتاح</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card custom-card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">تفاصيل الوقت المتاح #{{ $availableTime->id }}</h3>
                <a href="{{ route('available_times.index') }}" class="btn btn-secondary">
                    <i class="fa fa-arrow-left"></i> العودة إلى القائمة
                </a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>المعرف</th>
                            <td>{{ $availableTime->id }}</td>
                        </tr>
                        <tr>
                            <th>اسم الطبيب</th>
                            <td>{{ $availableTime->doctor->user->name }}</td>
                        </tr>
                        <tr>
                            <th>التاريخ</th>
                            <td>{{ \Carbon\Carbon::parse($availableTime->date)->format('d-m-Y') }}</td>
                        </tr>
                        <tr>
                            <th>وقت البداية</th>
                            <td>{{ \Carbon\Carbon::parse($availableTime->start_time)->format('H:i') }}</td>
                        </tr>
                        <tr>
                            <th>وقت النهاية</th>
                            <td>{{ \Carbon\Carbon::parse($availableTime->end_time)->format('H:i') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection
