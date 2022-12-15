<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CustomerController;
//Route::middleware(['auth','isAdmin'])->group(function (){
Route::get("anasayfa", [AdminController::class, "index"])->name("policy-index");
Route::get("add-policy", [AdminController::class, "create"])->name("yonetici-create");
Route::post("add-policy", [AdminController::class, "store"])->name("yonetici-createall");
Route::delete("delete-policy/{policy}", [AdminController::class, "delete"])->name("yonetici-delete");
Route::get("edit-policy/{policy}", [AdminController::class, "edit"])->name("yonetici-edit");
Route::put("edit-policy/{policy?}", [AdminController::class, "update"])->name("yonetici-update");
Route::get("cat-anasayfa", [AdminController::class, "category_index"])->name("yonetici-c_anasayfa");
Route::get("add-category", [AdminController::class, "category_create"])->name("yonetici-c_create");
Route::delete("delete-catproduct/{category}", [AdminController::class, "catdelete"])->name("yonetici-catdelete");
Route::get("editcat-policy/{category}", [AdminController::class, "catedit"])->name("yonetici-catedit");
Route::post("add-category", [AdminController::class, "category_store"])->name("yonetici-c_createall");
Route::put("editcat-policy/{category?}", [AdminController::class, "cat_update"])->name("yonetici-catupdate");

Route::get("police-app", [AdminController::class, "apply_history"])->name("policy-app");
Route::get("finish-app", [AdminController::class, "finish_apply"])->name("finish-app");
Route::post("update-pol", [AdminController::class, "update_pol"])->name("pol-update");

Route::get("questions-index", [AdminController::class, "question_index"])->name("questions-index");
Route::get("edit-questions/{question}", [AdminController::class, "question_edit"])->name("questions-edit");
Route::put("edit-questions/{question?}", [AdminController::class, "question_update"])->name("questions-update");
//});
//Customer
Route::middleware(['auth'])->group(function (){
    Route::post('add-to-apply',[CustomerController::class,'add'])->name('add-policy');
});
Route::get("police", [CustomerController::class, "index"])->name("policy-list");
Route::get("police-history", [CustomerController::class, "app_history"])->name("policy-history");
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get("dashboard", [CustomerController::class, "askquestion"])->name("dashboard");
});

Route::get("ask-question", [CustomerController::class, "askquestion"])->name("ask-question");



Route::post("ask-question", [CustomerController::class, "create_question"])->name("create-question");
Route::get("history-question", [CustomerController::class, "question_history"])->name("history-question");


Route::get('/', function () {
    return view('welcome');
});
Route::get('/sa', function () {
    return view('layout');
});
Route::get('/sas', function () {
    return view('Admin/Adminlayout');
});


//Route::middleware([
//    'auth:sanctum',
//    config('jetstream.auth_session'),
//    'verified'
//])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
//});
