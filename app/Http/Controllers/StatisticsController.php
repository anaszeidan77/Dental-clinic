<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\Invoice;
use App\Models\TreatmentSession;
use App\Models\Prescription;
use App\Models\Medication;
use App\Models\Department;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function index()
    {
        
        $doctorsCount = Doctor::count();
        $patientsCount = Patient::count();
        $appointmentsCount = Appointment::count();
        $invoicesCount = Invoice::count();
        $treatmentSessionsCount = TreatmentSession::count();

       
        $prescriptionsCount = Prescription::count(); 
        $medicationsCount = Medication::count(); 
        $departmentsCount = Department::count(); 

        return view('dashboard', compact(
            'doctorsCount',
            'patientsCount',
            'appointmentsCount',
            'invoicesCount',
            'treatmentSessionsCount',
            'prescriptionsCount',
            'medicationsCount',
            'departmentsCount'
        ));
    }
}