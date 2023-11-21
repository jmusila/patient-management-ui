<?php

namespace Domain\PatientManagement\Actions;

use Domain\BaseAction;
use Illuminate\Support\Facades\Http;

class ListPatients extends BaseAction
{
    public function execute()
    {
        if (session()->has("api_token")) {

            $token = session()->get("api_token");

            $patients = Http::withHeaders([
                'Authorization' => 'Bearer ' . $token,
            ])->get(env('BASE_URL') . '/api/patients');

            $data = json_decode($patients);
    
            return $data;
        }
    }
}