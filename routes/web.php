<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/AdminLogin', function () {
    return view('AdminLogin');
});
Route::get('/ManagerLogin', function () {
    return view('ManagerLogin');
});
Route::get('/Admin', function () {
    return view('Admin');
});
Route::get('/ManagerReg', function () {
    return view('ManagerReg');
});
Route::get('/WorkerReg', function () {
    return view('WorkerReg');
});
Route::get('/Service', function () {
    return view('Service');
});
Route::get('/ClientLogin', function () {
    return view('ClientLogin');
});
Route::get('/ClientReg', function () {
    return view('ClientReg');
});
Route::get('/WorkerDetails', function () {
    return view('WorkerDetails');
});
Route::get('/ManegerDetails', function () {
    return view('ManegerDetails');
});
Route::get('/ServiceDetails', function () {
    return view('ServiceDetails');
});
Route::get('/EditService', function () {
    return view('EditService');
});
Route::get('/ServiceEditPage', function () {
    return view('ServiceEditPage');
});
Route::get('/Manager', function () {
    return view('Manager');
});
Route::get('/ClientShow', function () {
    return view('ClientShow');
});
// functions..........
Route::post('/addmanager','BP@addmanager');
Route::post('/addworker','BP@addworker');
Route::post('/addclient','BP@addclient');
Route::get('/ManegerDetails','BP@ManegerDetails');
Route::get('/WorkerDetails','BP@WorkerDetails');
Route::post('/adminlogin','BP@adminlogin');
Route::post('/Clientlogin','BP@Clientlogin');
Route::post('/Managerlogin','BP@Managerlogin');
Route::get('/Manager','BP@Managerview');
Route::get('/ServiceDetails','BP@ServiceDetails');
Route::post('/AddService','BP@AddService');
Route::get('/ClientShow','BP@ClientShow');
Route::get('/EditService','BP@EditService');
Route::get('/ServiceEditPage/{s_id}','BP@ServiceEditPage');
Route::post('/ServiceUpdate/{s_id}','BP@ServiceUpdate');
Route::get('/DeleteManager/{m_id}','BP@DeleteManager');
Route::get('/RemoveService/{s_id}','BP@RemoveService');
Route::get('/Removeworker/{w_id}','BP@Removeworker');
Route::post('/searchshow/{m_id}','BP@searchshow');
Route::get('/ManagerShow','BP@ManagerShow');




