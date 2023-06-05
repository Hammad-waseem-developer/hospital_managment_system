<?php

namespace App\Http\Controllers;

use App\Exports\TestExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Hospital;
use App\Models\Patient;
use App\Models\Covid_test;
use App\Models\Appointment;
use App\Models\Vaccination_availability;
use Illuminate\Support\Facades\DB;



class AdminController extends Controller
{

    public function export()
    {
        return Excel::download(new TestExport, 'covid_report.xlsx');
    }

    public function profile(){
        return view('admin.profile');
    }

    public function profile_edit(){
        $user = User::find(session()->get('admin_id'));
        return view('admin.profile_update',compact('user'));
    }

    public function profile_update(Request $req){
        $user = User::find(session()->get('admin_id'));
        if(!is_null($user)){
            if($req['img'] != null){
                $img = $req['img'];
                $imagename = $img->getClientOriginalName();
                $img->move('Admin_Images',$imagename);
                unlink('Admin_Images/'.$req['old_img']);
            }else{
                $imagename = $req['old_img'];
            }
            $user->name = $req['name'];
            $user->email = $req['email'];
            $user->password = $req['password'];
            $user->image = $imagename;
            $user->save();

            session()->forget('admin_name');
            session()->forget('admin_image');
            session()->forget('admin_email');
            session()->forget('admin_password');


            session()->put('admin_name',$req['name']);
            session()->put('admin_image',$imagename);
            session()->put('admin_email',$req['email']);
            session()->put('admin_password',$req['password']);
            return redirect('/admin/profile');
        }

        return view('admin.profile');
    }

    public function admin(Request $req){
        // $search = $req['search'] ??"";
        // $sort = $req['sort'] ?? "asc";
        // if($sort == "asc" || $sort == "desc"){
        //     if ($search != ""){
        //         $hos = DB::table('hospitals')
        //         ->where('hospital_name' , 'like' , '%$search%')
        //         ->orderBy('hospital_name',$sort)->get();
        //     }
        //     else{
        //         $hos = DB::table('hospitals')
        //         ->orderBy('hospital_name',$sort)->get();
        //     }
        // }
            $hospital = DB::select("select * from hospitals");
            $patient = DB::select("select * from patients");
            $hospital_count = count($hospital);
            $patient_count = count($patient);
            return view('admin.admin',compact('hospital','patient','hospital_count','patient_count'));
    }

    public function allpatient(){
        $patient = DB::select('select * from patients');
        return view('admin.allpatient',compact('patient'));
    }

    public function reportcovid(){
        $report = DB::table('covid_tests')
                ->join('appointments' ,'covid_tests.appointment_id', '=', 'appointments.appointment_id')
                ->join('patients' ,'appointments.patient_id', '=', 'patients.patient_id')
                ->join('hospitals' ,'appointments.hospital_id', '=', 'hospitals.hospital_id')
                ->select('covid_tests.test_id','covid_tests.test_date','covid_tests.test_result','covid_tests.Recommendation','patients.patient_id','patients.patient_name','patients.patient_email','patients.patient_age','patients.patient_gender','patients.patient_address','patients.patient_city','patients.patient_phone_no','hospitals.hospital_name','hospitals.hospital_address')->get();
        return view('admin.reportcovid',compact('report'));
    }

    public function patient_test_info($id){
        if($id){

            $patient_report = DB::table('covid_tests')
            ->join('appointments' ,'covid_tests.appointment_id', '=', 'appointments.appointment_id')
            ->join('patients' ,'appointments.patient_id', '=', 'patients.patient_id')
            ->join('hospitals' ,'appointments.hospital_id', '=', 'hospitals.hospital_id')
            ->select('covid_tests.test_id','covid_tests.test_date','covid_tests.test_result','covid_tests.Recommendation','patients.patient_id','patients.patient_name','patients.patient_email','patients.patient_age','patients.patient_gender','patients.patient_address','patients.patient_city','patients.patient_phone_no','hospitals.hospital_name','hospitals.hospital_address')->where('patients.patient_id',$id)
            ->get();
            return view('admin.patient_info',compact('patient_report'));
        }
        return redirect('/admin/reportcovid');
    }

    public function vaccine(){
        $vaccine = DB::table('vaccination_availabilities')
                ->join('hospitals' ,'vaccination_availabilities.hospital_id', '=', 'hospitals.hospital_id')
                ->select('vaccination_availabilities.vac_av_id','vaccination_availabilities.vaccine_name','vaccination_availabilities.next_available_date','vaccination_availabilities.stock','vaccination_availabilities.vaccination_price','hospitals.hospital_name')->get();
        return view('admin.vaccine',compact('vaccine'));
    }

    public function patient_appointment(){
        $appointment = DB::table('appointments')
                ->join('hospitals' ,'appointments.hospital_id', '=', 'hospitals.hospital_id')
                ->join('patients' ,'appointments.patient_id', '=', 'patients.patient_id')
                ->select('appointment_id','patients.patient_name','hospitals.hospital_name','appointment_date','appointment_time','appointment_type','appointment_status')
                ->where('appointment_status','0')
                ->get();
        return view('admin.patient_appointment',compact('appointment'));
    }

    public function approve_appointment($id){
        $appointment = Appointment::find($id);
        if(!is_null($appointment)){
            $appointment->appointment_status = 1;
            $appointment->save();
            return redirect('/admin/patient_appointment');
        }
    }

    public function reject_appointment($id){
        $appointment = Appointment::find($id);
        if(!is_null($appointment)){
            $appointment->delete();
            return redirect('patient_appointment');
        }
    }

    public function patient_booking(){
        $appointment = DB::table('appointments')
                ->join('hospitals' ,'appointments.hospital_id', '=', 'hospitals.hospital_id')
                ->join('patients' ,'appointments.patient_id', '=', 'patients.patient_id')
                ->select('appointment_id','patients.patient_name','hospitals.hospital_name','appointment_date','appointment_time','appointment_type','appointment_status')
                ->where('appointment_status','1')
                ->get();
        return view('admin.patient_booking',compact('appointment'));
    }

    public function pending_appointment($id){
        $appointment = Appointment::find($id);
        if(!is_null($appointment)){
            $appointment->appointment_status = 0;
            $appointment->save();
            return redirect('admin/patient_appointment');
        }
    }

    public function admin_login(){
        return view('admin.login');
    }

    public function store(Request $req){

        $data = DB::select('select * from users where email = ? and password = ?', [$req['email']   ,  md5($req['pass']) ]);

            if($data != NULL){
                session()->put('admin_id',$data[0]->id);
                session()->put('admin_name',$data[0]->name);
                session()->put('admin_image',$data[0]->image);
                session()->put('admin_email',$req['email']);
                session()->put('admin_password',$req['pass']);
                return redirect('admin');
            }else{
                return redirect('/admin/admin_login');
            }
    }
    function logout(){
        session()->forget('admin_id');
        session()->forget('admin_name');
        session()->forget('admin_image');
        session()->forget('admin_email');
        session()->forget('admin_password');
        return redirect('/admin/admin_login');
    }
    function approve_hospital($id){
        $hospital = Hospital::find($id);
        if(!is_null($hospital)){
            $hospital->hospital_approval_status = 1;
            $hospital->save();
            return redirect('admin');
        }
    }
    function reject_hospital($id){
        $hospital = Hospital::find($id);
        if(!is_null($hospital)){
            $hospital->delete();
            return redirect('admin');
        }
    }

    function approved_hospital(){
        $hospital = DB::select("select * from hospitals where hospital_approval_status = 1");
        return view('admin.approved_hospital',compact('hospital'));
    }
}
