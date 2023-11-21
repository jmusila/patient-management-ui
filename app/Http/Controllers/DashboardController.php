<?php

namespace App\Http\Controllers;

use Domain\PatientManagement\Actions\ListPatients;

class DashboardController extends Controller
{
    public function index()
    {
        $patients = (new ListPatients())->execute();

        $patients = collect($patients)->flatten();

        return view("patients.view_patients", compact("patients"));
    }
}
