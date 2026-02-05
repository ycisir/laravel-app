<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController
{
    public function index() {
        $students = DB::select('select * from students');
        // $students = DB::select('select * from students where id = ?', [1]);

        // name binding
        // $students = DB::select('select * from students where email = :email', ['email'=>'harry@example.com']);


        // DB::insert('insert into students (name, email) VALUES (?, ?)', ['Long Bottom', 'longb@example.com']);
        // DB::insert('insert into students (name, email) VALUES (:name, :email)', ['name' => 'Draco Malfoy', 'email' => 'draco@example.com']);


        // DB::update('update students set name = :name where id = :id', ['name'=> 'Ginny Potter', 'id'=> 5]);

        // DB::delete('delete from students where id = :id', ['id'=>8]);

        // DB::transaction(function() {
        //     DB::insert('insert into students (name, email) VALUES (:name, :email)', ['name' => 'Luna Lovegood', 'email' => 'luna@example.com']);
        //     DB::update('update students set name = :name where id = :id', ['name'=> 'Hermoine Weasely', 'id'=> 3]);
        // });



        // dd($students);
        return view('home', ['students' => $students]);
    }
}
