@extends('layouts.master')
@section('title', 'الرئيسية ')
@section('page-header')
    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
        <h1 class="page-title">إدارة الفواتير</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
                <li class="breadcrumb-item active" aria-current="page"> </li>
            </ol>
        </div>
    </div>
@endsection
@section('content')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="row">
            <!-- إحصائيات الأطباء -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xxl-6 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <p class="mb-0 text-muted">عدد الأطباء</p>
                                <span class="fs-5 fw-bold">{{ $doctorsCount }}</span>
                                <span class="fs-12 text-success ms-1"><i class="ti ti-trending-up mx-1"></i>0.5%</span>
                            </div>
                            <div class="min-w-fit-content ms-3">
                                <span class="avatar avatar-md br-5 bg-primary-transparent text-primary">
                                    <i class="fe fe-user-plus fs-18"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- إحصائيات المرضى -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xxl-6 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <p class="mb-0 text-muted">عدد المرضى</p>
                                <span class="fs-5 fw-bold">{{ $patientsCount }}</span>
                                <span class="fs-12 text-danger ms-1"><i class="ti ti-trending-down mx-1"></i>8.0%</span>
                            </div>
                            <div class="min-w-fit-content ms-3">
                                <span class="avatar avatar-md br-5 bg-danger-transparent text-danger">
                                    <i class="fe fe-users fs-18"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- إحصائيات المواعيد -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xxl-6 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <p class="mb-0 text-muted">عدد المواعيد</p>
                                <span class="fs-5 fw-bold">{{ $appointmentsCount }}</span>
                                <span class="fs-12 text-success ms-1"><i class="ti ti-trending-up mx-1"></i>3.5%</span>
                            </div>
                            <div class="min-w-fit-content ms-3">
                                <span class="avatar avatar-md br-5 bg-success-transparent text-success">
                                    <i class="fe fe-calendar fs-18"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- إحصائيات الفواتير -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xxl-6 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-start flex-wrap gap-1">
                            <div class="flex-grow-1">
                                <p class="mb-0 text-muted">عدد الفواتير</p>
                                <span class="fs-5 fw-bold">{{ $invoicesCount }}</span>
                                <span class="fs-12 text-info ms-1"><i class="ti ti-trending-up mx-1"></i>0.5%</span>
                            </div>
                            <div class="min-w-fit-content">
                                <span class="avatar avatar-md br-5 bg-info-transparent text-info">
                                    <i class="fe fe-file-text fs-18"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- إحصائيات جلسات العلاج -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xxl-6 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <p class="mb-0 text-muted">عدد جلسات العلاج</p>
                                <span class="fs-5 fw-bold">{{ $treatmentSessionsCount }}</span>
                                <span class="fs-12 text-warning ms-1"><i class="ti ti-trending-up mx-1"></i>3.5%</span>
                            </div>
                            <div class="min-w-fit-content ms-3">
                                <span class="avatar avatar-md br-5 bg-warning-transparent text-warning">
                                    <i class="bi bi-heart-pulse fs-18"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- إحصائيات الوصفات الطبية -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xxl-6 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <p class="mb-0 text-muted">عدد الوصفات الطبية</p>
                                <span class="fs-5 fw-bold">{{ $prescriptionsCount }}</span>
                                <span class="fs-12 text-success ms-1"><i class="ti ti-trending-up mx-1"></i>2.0%</span>
                            </div>
                            <div class="min-w-fit-content ms-3">
                                <span class="avatar avatar-md br-5 bg-success-transparent text-success">
                                    <i class="bi bi-prescription fs-18"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- إحصائيات الأدوية -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xxl-6 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <p class="mb-0 text-muted">عدد الأدوية</p>
                                <span class="fs-5 fw-bold">{{ $medicationsCount }}</span>
                                <span class="fs-12 text-info ms-1"><i class="ti ti-trending-up mx-1"></i>1.5%</span>
                            </div>
                            <div class="min-w-fit-content ms-3">
                                <span class="avatar avatar-md br-5 bg-info-transparent text-info">
                                    <i class="bi bi-capsule fs-18"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- إحصائيات الأقسام -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xxl-6 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <p class="mb-0 text-muted">عدد الأقسام</p>
                                <span class="fs-5 fw-bold">{{ $departmentsCount }}</span>
                                <span class="fs-12 text-primary ms-1"><i class="ti ti-trending-up mx-1"></i>1.0%</span>
                            </div>
                            <div class="min-w-fit-content ms-3">
                                <span class="avatar avatar-md br-5 bg-primary-transparent text-primary">
                                    <i class="bi bi-building fs-18"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- المخططات -->
        <div class="row mt-4">
            <!-- مخطط دائري: توزيع المواعيد -->
            <div class="col-xl-6 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-header">
                        <h6 class="card-title">توزيع المواعيد</h6>
                    </div>
                    <div class="card-body">
                        <canvas id="appointmentsChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>

            <!-- مخطط أعمدة: عدد الفواتير الشهرية -->
            <div class="col-xl-6 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-header">
                        <h6 class="card-title">عدد الفواتير الشهرية</h6>
                    </div>
                    <div class="card-body">
                        <canvas id="invoicesChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>

            <!-- مخطط خطي: عدد الأطباء -->
            <div class="col-xl-6 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-header">
                        <h6 class="card-title">عدد الأطباء</h6>
                    </div>
                    <div class="card-body">
                        <canvas id="doctorsChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>

            <!-- مخطط دائري: عدد المرضى -->
            <div class="col-xl-6 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-header">
                        <h6 class="card-title">عدد المرضى</h6>
                    </div>
                    <div class="card-body">
                        <canvas id="patientsChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>

            <!-- مخطط أعمدة: عدد جلسات العلاج -->
            <div class="col-xl-6 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-header">
                        <h6 class="card-title">عدد جلسات العلاج</h6>
                    </div>
                    <div class="card-body">
                        <canvas id="treatmentSessionsChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>

            <!-- مخطط خطي: عدد الوصفات الطبية -->
            <div class="col-xl-6 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-header">
                        <h6 class="card-title">عدد الوصفات الطبية</h6>
                    </div>
                    <div class="card-body">
                        <canvas id="prescriptionsChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- تضمين Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // مخطط دائري: توزيع المواعيد
    const appointmentsCtx = document.getElementById('appointmentsChart').getContext('2d');
    const appointmentsChart = new Chart(appointmentsCtx, {
        type: 'pie',
        data: {
            labels: ['مكتملة', 'ملغاة', 'معلقة'],
            datasets: [{
                label: 'توزيع المواعيد',
                data: [65, 15, 20], // يمكن استبدال هذه البيانات ببيانات حقيقية
                backgroundColor: [
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 206, 86, 0.2)'
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                }
            }
        }
    });

    // مخطط أعمدة: عدد الفواتير الشهرية
    const invoicesCtx = document.getElementById('invoicesChart').getContext('2d');
    const invoicesChart = new Chart(invoicesCtx, {
        type: 'bar',
        data: {
            labels: ['يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو'],
            datasets: [{
                label: 'عدد الفواتير',
                data: [12, 19, 3, 5, 2, 3], // يمكن استبدال هذه البيانات ببيانات حقيقية
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // مخطط خطي: عدد الأطباء
    const doctorsCtx = document.getElementById('doctorsChart').getContext('2d');
    const doctorsChart = new Chart(doctorsCtx, {
        type: 'line',
        data: {
            labels: ['يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو'],
            datasets: [{
                label: 'عدد الأطباء',
                data: [5, 10, 15, 20, 25, 30], // يمكن استبدال هذه البيانات ببيانات حقيقية
                backgroundColor: 'rgba(153, 102, 255, 0.2)',
                borderColor: 'rgba(153, 102, 255, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // مخطط دائري: عدد المرضى
    const patientsCtx = document.getElementById('patientsChart').getContext('2d');
    const patientsChart = new Chart(patientsCtx, {
        type: 'pie',
        data: {
            labels: ['ذكور', 'إناث'],
            datasets: [{
                label: 'عدد المرضى',
                data: [60, 40], // يمكن استبدال هذه البيانات ببيانات حقيقية
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                }
            }
        }
    });

    // مخطط أعمدة: عدد جلسات العلاج
    const treatmentSessionsCtx = document.getElementById('treatmentSessionsChart').getContext('2d');
    const treatmentSessionsChart = new Chart(treatmentSessionsCtx, {
        type: 'bar',
        data: {
            labels: ['يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو'],
            datasets: [{
                label: 'عدد جلسات العلاج',
                data: [10, 20, 30, 40, 50, 60], // يمكن استبدال هذه البيانات ببيانات حقيقية
                backgroundColor: 'rgba(255, 159, 64, 0.2)',
                borderColor: 'rgba(255, 159, 64, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // مخطط خطي: عدد الوصفات الطبية
    const prescriptionsCtx = document.getElementById('prescriptionsChart').getContext('2d');
    const prescriptionsChart = new Chart(prescriptionsCtx, {
        type: 'line',
        data: {
            labels: ['يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو'],
            datasets: [{
                label: 'عدد الوصفات الطبية',
                data: [5, 15, 10, 20, 25, 30], // يمكن استبدال هذه البيانات ببيانات حقيقية
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection