<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use App\Models\Covid_test;
use App\Models\Hospital;
use App\Models\Patient;
use App\Models\Appointment;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class TestExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        return DB::table('covid_tests')
        ->join('appointments' ,'covid_tests.appointment_id', '=', 'appointments.appointment_id')
        ->join('patients' ,'appointments.patient_id', '=', 'patients.patient_id')
        ->join('hospitals' ,'appointments.hospital_id', '=', 'hospitals.hospital_id')
        ->select('patients.patient_name','patients.patient_email','patients.patient_age','patients.patient_gender','patients.patient_address','patients.patient_city','patients.patient_phone_no','hospitals.hospital_name',DB::raw("(CASE covid_tests.test_result WHEN 1 THEN 'positive' ELSE 'negative' END) AS test_result_status"),'covid_tests.Recommendation')->get();

        // return Covid_test::all();
    }

    public function headings(): array
    {
        return [
            'Patient Name',
            'Patient Email',
            'Patient Age',
            'Patient Gender',
            'Patient Address',
            'Patient City',
            'Patient Phone Number',
            'Hospital Name',
            'Test Result',
            'Recommendation'
        ];
    }

}
