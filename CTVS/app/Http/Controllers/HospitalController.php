<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Hospital;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\Covid_test;
use App\Models\Vaccine_status;
use App\Models\Vaccination_availability;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\HospitalMail;



class HospitalController extends Controller
{

    public function profile(){
        return view('hospital.profile');
    }

    public function success(){
        $hospital = DB::select("select * from hospitals where hospital_email = ?",[session()->get('hos_temp_email')]);
        return view('hospital.success',compact('hospital'));
    }

    public function h_register(){
        return view('hospital.register');
    }

    public function h_reg_store(Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required|max:255',
            'hospital_email' => 'required|email|unique:hospitals',
            'password' => 'required|min:8',
            'address' => 'required|max:255',
            'city' => 'required|max:255',
            'pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $img = $req['pic'];
        $imagename = $img->getClientOriginalName();
        $img->move('Hospital_Images',$imagename);

        $hospital = new Hospital;
        $hospital->hospital_name = $validatedData['name'];
        $hospital->hospital_email = $validatedData['hospital_email'];
        $hospital->hospital_password = md5($validatedData['password']);
        $hospital->hospital_address = $validatedData['address'];
        $hospital->hospital_city = $validatedData['city'];
        $hospital->hospital_pic = $imagename;
        $hospital->save();

        session()->put('success', 'Hospital created successfully!');
        session()->put('hos_temp_email', $validatedData['hospital_email']);

        return redirect('/hospital/success');
    }

    public function profile_edit(){
        $hospital = Hospital::find(session()->get('hospital_id'));
        return view('hospital.profile_update',compact('hospital'));
    }

    public function profile_update(Request $req){
        $hospital = Hospital::find(session()->get('hospital_id'));
        if(!is_null($hospital)){
            if($req['img'] != null){
                $img = $req['img'];
                $imagename = $img->getClientOriginalName();
                $img->move('Hospital_Images',$imagename);
                unlink('Hospital_Images/'.$req['old_img']);
            }else{
                $imagename = $req['old_img'];
            }
            $hospital->hospital_name = $req['name'];
            $hospital->hospital_email = $req['email'];
            $hospital->hospital_password = $req['password'];
            $hospital->hospital_pic = $imagename;
            $hospital->save();

            session()->forget('hospital_name');
            session()->forget('hospital_image');
            session()->forget('hospital_email');
            session()->forget('hospital_password');


            session()->put('hospital_name',$req['name']);
            session()->put('hospital_image',$imagename);
            session()->put('hospital_email',$req['email']);
            session()->put('hospital_password',$req['password']);
            return redirect('/hospital/profile');
        }

        return view('hospital.profile');
    }

    public function hospital(){
        $patient = DB::select('select * from appointments inner join hospitals on appointments.hospital_id = hospitals.hospital_id inner join patients on appointments.patient_id = patients.patient_id where hospitals.hospital_id = ? and appointments.appointment_status = ?' , [session()->get("hospital_id") , 1]);
        return view('hospital.hospital',compact('patient'));
    }

    public function h_login(){
        return view('hospital.h_login');
    }

    public function h_store(Request $req){
        $data = DB::select('select * from hospitals where hospital_email = ? and hospital_password = ?', [ $req['email']   ,  md5($req['pass']) ]);

            if($data != NULL){
                session()->put('hospital_id',$data[0]->hospital_id);
                session()->put('hospital_status',$data[0]->hospital_approval_status);
                session()->put('hospital_name',$data[0]->hospital_name);
                session()->put('hospital_image',$data[0]->hospital_pic);
                session()->put('hospital_email',$req['email']);
                session()->put('hospital_password',$req['pass']);

                return redirect('/hospital');
            }else{
                return redirect('/hospital/h_login');
            }
    }

    public function h_logout(){
        session()->forget('hospital_id');
        session()->forget('hospital_status');
        session()->forget('hospital_name');
        session()->forget('hospital_email');
        session()->forget('hospital_password');
        return redirect('/hospital/h_login');
    }

    public function patient_result(){
        $report = DB::select('select * from covid_tests inner join appointments on covid_tests.appointment_id = appointments.appointment_id inner join hospitals on appointments.hospital_id = hospitals.hospital_id inner join patients on appointments.patient_id = patients.patient_id where hospitals.hospital_id = ? and appointments.appointment_type = ?' , [session()->get("hospital_id"),0]);
        return view('hospital.patient_result',compact('report'));
    }

    public function test_info($id){
        if($id){
            $patient_report = DB::table('covid_tests')
            ->join('appointments' ,'covid_tests.appointment_id', '=', 'appointments.appointment_id')
            ->join('patients' ,'appointments.patient_id', '=', 'patients.patient_id')
            ->join('hospitals' ,'appointments.hospital_id', '=', 'hospitals.hospital_id')
            ->select('covid_tests.test_id','covid_tests.test_date','covid_tests.test_result','covid_tests.Recommendation','patients.patient_id','patients.patient_name','patients.patient_email','patients.patient_age','patients.patient_gender','patients.patient_address','patients.patient_city','patients.patient_phone_no','hospitals.hospital_name','hospitals.hospital_address')->where('patients.patient_id',$id)
            ->get();
            return view('hospital.patient_info',compact('patient_report'));
        }
        return redirect('/hospital/patient_result');
    }

    public function report_update($id){
        $report = Covid_test::find($id);
        if(!is_null($report)){

            if($report->test_result == 1){
                $report->test_result = 0;
                $report->save();
                return redirect('/hospital/patient_result');
            }
            elseif($report->test_result == 0){
                $report->test_result = 1;
                $report->save();
                return redirect('/hospital/patient_result');
            }
        }
    }

    public function vaccination_status(){
        $vaccine_status = DB::select('select * from vaccine_statuses inner join appointments on vaccine_statuses.appointment_id = appointments.appointment_id inner join hospitals on appointments.hospital_id = hospitals.hospital_id inner join patients on appointments.patient_id = patients.patient_id where hospitals.hospital_id = ? and appointments.appointment_type = ?' , [session()->get("hospital_id"),1]);
        return view('hospital.vaccine_status',compact('vaccine_status'));
    }

    public function vaccine_status_update($id){
        $vaccine = Vaccine_status::find($id);
        if(!is_null($vaccine)){

            if($vaccine->status == 1){
                $vaccine->status = 0;
                $vaccine->save();
                return redirect('/hospital/vaccination_status');
            }
            elseif($vaccine->status == 0){
                $vaccine->status = 1;
                $vaccine->save();
                return redirect('/hospital/vaccination_status');
            }
        }
    }

    public function edit_recom($id){
        $rec = Covid_test::find($id);
        if(!is_null($rec)){
            return view('hospital.edit_recom',compact('rec'));
        }
        return redirect('/hospital/patient_result');
    }

    public function recom_update(Request $req , $id){
        $test = Covid_test::find($id);
        if(!is_null($test)){
            $test->Recommendation = $req['rec'];
            $test->save();
            return redirect('/hospital/patient_result');
        }
        return redirect('/hospital/patient_result');
    }

    public function add_vaccine(){
        return view('hospital.add_vaccine');
    }

    public function vaccine_store(Request $req){
        $req->validate([

            'name' => 'required',
            'date' => 'required',
            'stock' => 'required',
            'price' => 'required',
        ]);

        $vac = new Vaccination_availability;

        $vac->hospital_id = session()->get("hospital_id");
        $vac->vaccine_name = $req['name'];
        $vac->next_available_date = $req['date'];
        $vac->stock = $req['stock'];
        $vac->vaccination_price = $req['price'];
        $vac->save();
        return redirect('/hospital/all_vaccine');
    }

    public function all_vaccine(){
        $vaccine = DB::select('select * from vaccination_availabilities where hospital_id = ?',[session()->get('hospital_id')]);
        return view('hospital.all_vaccine',compact('vaccine'));
    }

    public function edit_vaccine($id){
        $vaccine = Vaccination_availability::find($id);
        if(!is_null($vaccine)){
            return view('hospital.edit_vaccine',compact('vaccine'));
        }
        return redirect('/hospital/all_vaccine');
    }

    public function vaccine_update(Request $req , $id){
        $vaccine = Vaccination_availability::find($id);
        if(!is_null($vaccine)){
            if($req['stock'] == null){
                $vaccine->stock = $vaccine->getOriginal('stock');
                $vaccine->hospital_id = session()->get("hospital_id");
                $vaccine->vaccine_name = $req['name'];
                $vaccine->next_available_date = $req['date'];
                $vaccine->vaccination_price = $req['price'];
                $vaccine->save();
                return redirect('/hospital/all_vaccine');
            }
            $vaccine->hospital_id = session()->get("hospital_id");
            $vaccine->vaccine_name = $req['name'];
            $vaccine->next_available_date = $req['date'];
            $vaccine->stock = $req['stock'];
            $vaccine->vaccination_price = $req['price'];
            $vaccine->save();
            return redirect('/hospital/all_vaccine');
        }
        return redirect('/hospital/all_vaccine');
    }

    public function vaccine_delete($id){
        $vaccine = Vaccination_availability::find($id);
        if(!is_null($vaccine)){
            $vaccine->delete();
            return redirect('/hospital/all_vaccine');
        }
        return redirect('/hospital/all_vaccine');
    }

    public function create_test($id){
        $appointment = Appointment::find($id);
        return view('hospital.create_test',compact('appointment'));
    }

    public function test_store(Request $req){
        $test = new Covid_test;
        if(!is_null($test)){
            $req->validate([
            'id' => 'required',
            'date' => 'required',
            'result' => 'required',
            'Recommendation' => 'required',
            ]);
            $test->appointment_id = $req['id'];
            $test->test_date = $req['date'];
            $test->test_result = $req['result'];
            $test->Recommendation = $req['Recommendation'];
            $test->save();
            return redirect('/hospital');
        }
        return redirect('/hospital');
    }

    public function create_vaccine_status($id){
        $appointment = Appointment::find($id);
        return view('hospital.create_vaccine_status',compact('appointment'));
    }

    public function status_store(Request $req){
        $status = new Vaccine_status;
        if(!is_null($status)){
            $req->validate([
            'id' => 'required',
            'status' => 'required',
            ]);
            $status->appointment_id = $req['id'];
            $status->status = $req['status'];
            $status->save();
            return redirect('/hospital');
        }
        return redirect('/hospital');
    }

    public function send_mail($id){
        $patient = Patient::find($id);
        return view('hospital.mail_form',compact('patient'));
    }

    public function send(Request $req){

        // $data = ['email' => $req['email'],'message' => $req['message']];
        Mail::to($req['email'])->send(new HospitalMail([   'name' => $req['name']  ]));

    }

}
