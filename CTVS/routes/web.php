<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\FrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//  ---- ADMIN ----   //
Route::get('test/export/', [AdminController::class, 'export']);
Route::group(['prefix' => 'admin'],function(){
Route::get('/',[AdminController::class,'admin'])->middleware('admin');
Route::get('/profile',[AdminController::class,'profile'])->middleware('admin');
Route::get('/profile_edit',[AdminController::class,'profile_edit'])->middleware('admin');
Route::post('/profile_update',[AdminController::class,'profile_update'])->middleware('admin');
Route::get('/allpatient',[AdminController::class,'allpatient'])->middleware('admin');
Route::get('/reportcovid',[AdminController::class,'reportcovid'])->middleware('admin');
Route::get('/patient_test_info/{id}',[AdminController::class,'patient_test_info'])->middleware('admin');
Route::get('/vaccine',[AdminController::class,'vaccine'])->middleware('admin');
Route::get('/approved_hospital',[AdminController::class,'approved_hospital'])->middleware('admin');
Route::get('/patient_appointment',[AdminController::class,'patient_appointment'])->middleware('admin');
Route::get('/patient_booking',[AdminController::class,'patient_booking'])->middleware('admin');
Route::get('/admin_login',[AdminController::class,'admin_login']);
Route::post('/store',[AdminController::class,'store']);
Route::get('/logout',[AdminController::class,'logout']);
Route::get('/approve_hospital/{id}',[AdminController::class,'approve_hospital'])->middleware('admin');
Route::get('/reject_hospital/{id}',[AdminController::class,'reject_hospital'])->middleware('admin');
Route::get('/approve_appointment/{id}',[AdminController::class,'approve_appointment'])->middleware('admin');
Route::get('/reject_appointment/{id}',[AdminController::class,'reject_appointment'])->middleware('admin');
Route::get('/pending_appointment/{id}',[AdminController::class,'pending_appointment'])->middleware('admin');
});
//  ---- ADMIN ----   //



//  ---- HOSPITAL ----   //
Route::group(['prefix' => 'hospital'],function(){
Route::get('/success',[HospitalController::class,'success']);
Route::get('/',[HospitalController::class,'hospital'])->middleware('hospital');
Route::get('/patient_result',[HospitalController::class,'patient_result'])->middleware('hospital');
Route::get('/profile',[HospitalController::class,'profile'])->middleware('hospital');
Route::get('/profile_edit',[HospitalController::class,'profile_edit'])->middleware('hospital');
Route::post('/profile_update',[HospitalController::class,'profile_update'])->middleware('hospital');
Route::get('/test_info/{id}',[HospitalController::class,'test_info'])->middleware('hospital');
Route::get('/report_update/{id}',[HospitalController::class,'report_update'])->middleware('hospital');
Route::get('/vaccination_status',[HospitalController::class,'vaccination_status'])->middleware('hospital');
Route::get('/vaccine_status_update/{id}',[HospitalController::class,'vaccine_status_update'])->middleware('hospital');
Route::get('/edit_recom/{id}',[HospitalController::class,'edit_recom'])->middleware('hospital');
Route::post('/recom_update/{id}',[HospitalController::class,'recom_update'])->middleware('hospital');
Route::get('/add_vaccine',[HospitalController::class,'add_vaccine'])->middleware('hospital');
Route::post('/vaccine_store',[HospitalController::class,'vaccine_store'])->middleware('hospital');
Route::get('/all_vaccine',[HospitalController::class,'all_vaccine'])->middleware('hospital');
Route::get('/edit_vaccine/{id}',[HospitalController::class,'edit_vaccine'])->middleware('hospital');
Route::post('/vaccine_update/{id}',[HospitalController::class,'vaccine_update'])->middleware('hospital');
Route::get('/vaccine_delete/{id}',[HospitalController::class,'vaccine_delete'])->middleware('hospital');
Route::get('/create_test/{id}',[HospitalController::class,'create_test'])->middleware('hospital');
Route::post('/test_store',[HospitalController::class,'test_store'])->middleware('hospital');
Route::get('/create_vaccine_status/{id}',[HospitalController::class,'create_vaccine_status'])->middleware('hospital');
Route::post('/status_store',[HospitalController::class,'status_store'])->middleware('hospital');
Route::get('/send_mail/{id}',[HospitalController::class,'send_mail'])->middleware('hospital');
Route::post('/send',[HospitalController::class,'send'])->middleware('hospital');
Route::get('/h_register',[HospitalController::class,'h_register']);
Route::post('/h_reg_store',[HospitalController::class,'h_reg_store']);
Route::get('/h_login',[HospitalController::class,'h_login']);
Route::post('/h_store',[HospitalController::class,'h_store']);
Route::get('/h_logout',[HospitalController::class,'h_logout']);
});
//  ---- HOSPITAL ----   //


//  ---- FRONTEND ----   //
Route::get('/',[FrontendController::class,'index']);
Route::group(['prefix' => 'web'],function(){
Route::get('/hospital',[FrontendController::class,'hospital']);
Route::get('/profile',[FrontendController::class,'profile']);
Route::get('/profile/edit/{id}',[FrontendController::class,'profile_edit']);
Route::post('/update_profile/{id}',[FrontendController::class,'update_profile']);
Route::get('/request/{id}',[FrontendController::class,'request']);
Route::get('/report',[FrontendController::class,'report']);
Route::get('/vac_status',[FrontendController::class,'vac_status']);
Route::get('/appointment',[FrontendController::class,'appointment']);
Route::get('/my_appointment',[FrontendController::class,'my_appointment']);
Route::get('/register',[FrontendController::class,'register']);
Route::get('/login',[FrontendController::class,'login']);
Route::post('/patient_store',[FrontendController::class,'patient_store']);
Route::post('/patient_login',[FrontendController::class,'patient_login']);
Route::get('/more_info/{id}',[FrontendController::class,'more_info']);
Route::post('/create_appointment',[FrontendController::class,'create_appointment']);
Route::get('/logout',[FrontendController::class,'logout']);
});

//  ---- FRONTEND ----   //



