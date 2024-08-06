<?php

use Illuminate\Support\Facades\Route;


// Paginas padrão
Route::get('/', function () {
    return view('user/index');
});
Route::get('/donates', function () {
    return view('user/doacoes');
});
Route::get('/ong', function () {
    return view('user/ongs');
});



// Registro e Login
Route::get('/signin', function () {
    return view('user/signIn');
});
Route::get('/signup', function () {
    return view('user/signUp');
});


// Ong
Route::get('/ong/signup', function () {
    return view('user/ong/signUp');
});
Route::get('/ong/account', function () {
    return view('user/ong/account');
});
Route::get('/ong/courses', function () {
    return view('user/ong/courses');
});
Route::get('/ong/mural', function () {
    return view('user/ong/mural');
});
Route::get('/ong/volunteer', function () {
    return view('user/ong/volunteer');
});


// Aluno
Route::get('/aluno/signup', function () {
    return view('user/aluno/signUp');
});


// Professor
Route::get('/prof/signup', function () {
    return view('user/prof/signUp');
});
Route::get('/teacher-profile', function () {
    return view('teacher-profile');
});
Route::get('/teacher-profile-mural', function () {
    return view('teacher-profile-mural');
});
Route::get('/teacher-profile-chat', function () {
    return view('/teacher-profile-chat');
});

Route::get('/grades', function () {
    return view('/grades');
});


// Admin
Route::get('/admin', function () {
    return view('admin/adminPage');
});
Route::get('/aprovarong', function () {
    return view('admin/aprovarOng');
});
