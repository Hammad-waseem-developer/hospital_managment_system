<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Patient;
use App\Models\User;
use App\Models\Hospital;
use App\Models\Appointment;
use App\Models\Covid_test;
use App\Models\Vaccine_status;
use App\Models\Vaccination_availability;
use Symfony\Component\HttpFoundation\RedirectResponse;



class FrontendController extends Controller
{
    public function profile(){
        $patient = DB::select("select * from patients where patient_name = ?",[session()->get('patient_name')]);
        return view('Frontend.profile',compact('patient'));
    }

    public function profile_edit($id){
        $patient = Patient::find($id);
        return view('Frontend.profile_update',compact('patient'));
    }

    public function update_profile(Request $req, $id){
        $patient = Patient::findOrFail($id);
        $validatedData = $req->validate([
        'name' => 'string',
        'patient_email' => 'email',
        'gender' => 'in:male,female',
        'age' => 'integer',
        'address' => 'string',
        'city' => 'string',
        'phone' => 'numeric',
    ]);

    if($req['gender'] == null){
    $patient->patient_name = $req['name'];
    $patient->patient_email = $req['patient_email'];
    $patient->patient_password = $req['password'];
    $patient->patient_gender = $patient->getOriginal('patient_gender');
    $patient->patient_age = $req['age'];
    $patient->patient_address = $req['address'];
    $patient->patient_city = $req['city'];
    $patient->patient_phone_no = $req['phone'];
    $patient->save();
    return redirect('/web/profile')->with('message', 'Profile updated successfully');
    }

    $patient->patient_name = $req['name'];
    $patient->patient_email = $req['patient_email'];
    $patient->patient_password = $req['password'];
    $patient->patient_gender = $req['gender'];
    $patient->patient_age = $req['age'];
    $patient->patient_address = $req['address'];
    $patient->patient_city = $req['city'];
    $patient->patient_phone_no = $req['phone'];
    $patient->save();
    return redirect('/web/profile')->with('message', 'Profile updated successfully');

    }

    public function index(){
        $error_message = session()->get('error_message');
        return view('Frontend.index');
    }
    public function hospital(Request $req){
        $search = $req['search'] ?? "";

        if ($search != ""){
            $hospital = DB::table('hospitals')
            ->where('hospital_name','LIKE',"%$search%")
            ->orWhere('hospital_city','LIKE',"%$search%")
            ->get();
        }else{
            $hospital = DB::select('select * from hospitals where hospital_approval_status = 1');
        }
        return view('Frontend.hospital',compact('hospital','search'));
    }

    public function more_info($id){
        $hospital = DB::select('select * from vaccination_availabilities inner join hospitals on vaccination_availabilities.hospital_id = hospitals.hospital_id where hospitals.hospital_id = ?',[$id]);
        $vaccine = DB::select('select * from vaccination_availabilities where hospital_id = ?',[$id]);
        return view('Frontend.hos_info',compact('hospital','vaccine'));
    }

    public function request($id){
        $hospital = DB::select('select * from hospitals where hospital_id = ?',[$id]);
        $vaccine = DB::select('select * from vaccination_availabilities where hospital_id = ?',[$id]);
        return view('Frontend.request',compact('hospital','vaccine'));
    }

    public function create_appointment(Request $req){
        $appointment = new Appointment;
            $req->validate([
            'patient_id' => 'required',
            'hospital_id' => 'required',
            'date' => 'required',
            'time' => 'required',
            'type' => 'required',
            ]);

        $existing_appointment = Appointment::where('appointment_date', $req['date'])->where('appointment_time', $req['time'])->first();

        if($existing_appointment){
            $error_appointment = session()->put('error_appointment','Appointment already exists for this date and time');
            return redirect()->back();
        }

            $appointment->patient_id = $req['patient_id'];
            $appointment->hospital_id = $req['hospital_id'];
            $appointment->appointment_date = $req['date'];
            $appointment->appointment_time = $req['time'];
            $appointment->appointment_type = $req['type'];
            $appointment->vaccine_name = $req['vaccine'];
            $appointment->save();
            return redirect('/')->with('message_succ', 'Your Appointment has been Booked Successfully');
    }

    public function report(){
        $patient_id = session()->get('patient_id');
        $patient_has_result = DB::table('covid_tests')
                    ->join('appointments' ,'covid_tests.appointment_id', '=', 'appointments.appointment_id')
                    ->join('patients' ,'appointments.patient_id', '=', 'patients.patient_id')
                    ->join('hospitals' ,'appointments.hospital_id', '=', 'hospitals.hospital_id')
                    ->select('covid_tests.test_id','covid_tests.test_date','covid_tests.test_result','covid_tests.Recommendation','patients.patient_id','patients.patient_name','patients.patient_email','patients.patient_age','patients.patient_gender','patients.patient_address','patients.patient_city','patients.patient_phone_no','hospitals.hospital_name','hospitals.hospital_address')
                    ->where('patients.patient_id', $patient_id)
                    ->exists();

        if($patient_has_result){
            $patient_report = DB::table('covid_tests')
                    ->join('appointments' ,'covid_tests.appointment_id', '=', 'appointments.appointment_id')
                    ->join('patients' ,'appointments.patient_id', '=', 'patients.patient_id')
                    ->join('hospitals' ,'appointments.hospital_id', '=', 'hospitals.hospital_id')
                    ->select('covid_tests.test_id','covid_tests.test_date','covid_tests.test_result','covid_tests.Recommendation','patients.patient_id','patients.patient_name','patients.patient_email','patients.patient_age','patients.patient_gender','patients.patient_address','patients.patient_city','patients.patient_phone_no','hospitals.hospital_name','hospitals.hospital_address')
                    ->where('patients.patient_id', $patient_id)
                    ->get();
                    return view('Frontend.report',compact('patient_report'));
        }else{
            $error_message = session()->put('error_message','Sorry, there is no result for this patient');
            $response = new RedirectResponse(200);
            $response->setTargetUrl('/');
            // $response->setStatusCode(200);
            return $response;
        }
    }

    public function vac_status(){
        $patient_id = session()->get('patient_id');
        $patient_has_result = DB::table('vaccine_statuses')
                    ->join('appointments' ,'vaccine_statuses.appointment_id', '=', 'appointments.appointment_id')
                    ->join('patients' ,'appointments.patient_id', '=', 'patients.patient_id')
                    ->join('hospitals' ,'appointments.hospital_id', '=', 'hospitals.hospital_id')
                    ->select('vaccine_statuses.*','patients.*','hospitals.*')
                    ->where('patients.patient_id', $patient_id)
                    ->exists();

                    if($patient_has_result){
                        $patient_status = DB::table('vaccine_statuses')
                        ->join('appointments' ,'vaccine_statuses.appointment_id', '=', 'appointments.appointment_id')
                        ->join('patients' ,'appointments.patient_id', '=', 'patients.patient_id')
                        ->join('hospitals' ,'appointments.hospital_id', '=', 'hospitals.hospital_id')
                        ->select('vaccine_statuses.*','patients.*','hospitals.*','appointments.*')
                        ->where('patients.patient_id', $patient_id)
                        ->get();
                        return view('Frontend.my_vac_status',compact('patient_status'));
                    }else{
                        $error_message = session()->put('error_message','Sorry, there is no result for this patient');
                        $response = new RedirectResponse(200);
                        $response->setTargetUrl('/');
                        // $response->setStatusCode(200);
                        return $response;
                    }
                }





    public function appointment(){
        $appointment = DB::table('appointments')
                ->join('hospitals' ,'appointments.hospital_id', '=', 'hospitals.hospital_id')
                ->join('patients' ,'appointments.patient_id', '=', 'patients.patient_id')
                ->select('appointment_id','patients.patient_name','hospitals.hospital_name','appointment_date','appointment_time','appointment_type','appointment_status')
                ->where('patients.patient_id', session()->get('patient_id'))
                ->get();
        return view('Frontend.appointment' , compact('appointment'));
    }

    public function my_appointment(){
        $appointment = DB::select('select * from appointments where patient_id = ?',[session()->get('patient_id')]);

        if($appointment){
            $appointment = DB::select('select * from appointments inner join hospitals on hospitals.hospital_id = appointments.hospital_id inner join patients on patients.patient_id = appointments.appointment_id where appointments.patient_id = ?',[session()->get('patient_id')]);
            return view('Frontend.my_appo',compact('appointment'));
        }else{
            $error_message = session()->put('error_message','Sorry, there is no result for this patient');
            $response = new RedirectResponse(200);
            $response->setTargetUrl('/');
            // $response->setStatusCode(200);
            return $response;
        }

    }
    public function register(){
        return view('Frontend.register');
    }
    public function login(){
        return view('Frontend.login');
    }

    public function patient_store(Request $req){

        $req->validate([
            'name' => 'required',
            'patient_email' => 'required|email|unique:patients',
            'password' => 'required',
            'age' => 'required',
            'gender' => 'required|in:male,female',
            'address' => 'required',
            'city' => 'required',
            'phone' => 'required',
        ]);

        $patient = new Patient;

        $patient->patient_name = $req['name'];
        $patient->patient_email = $req['patient_email'];
        $patient->patient_password = md5($req['password']);
        $patient->patient_age = $req['age'];
        $patient->patient_gender = $req['gender'];
        $patient->patient_address = $req['address'];
        $patient->patient_city = $req['city'];
        $patient->patient_phone_no = $req['phone'];
        $patient->save();
        return redirect('/web/login');
    }

    public function patient_login(Request $req){

        $data = DB::select('select * from patients where patient_email = ? and patient_password = ?', [$req['email']   ,  md5($req['password'])]);

        if($data != NULL ){
            session()->put('patient_id',$data[0]->patient_id);
            session()->put('patient_name',$data[0]->patient_name);
            session()->put('patient_email',$req['email']);
            session()->put('patient_password',$req['password']);
            return redirect('/');
        }
            return redirect('/web/login');
    }

    public function logout(){
        session()->forget('patient_id');
        session()->forget('patient_email');
        session()->forget('patient_password');
        return redirect('/');
    }
}
