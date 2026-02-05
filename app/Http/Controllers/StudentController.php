<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController
{
    public function index() {
        // $students = DB::select('select * from students');
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







        // Using Query Builder
        // retrieving all data from db
        $students = DB::table('students')->get();


        // retrieving single data from db
        // $students = DB::table('students')->where('name', 'Harry Potter')->first();
        // $students = DB::table('students')->find(1);

        // retrieving list of columns from db
        // $students = DB::table('students')->where('name', 'Harry Potter')->value('email');
        // $students = DB::table('students')->pluck('email');

        // return associative array
        // $students = DB::table('students')->pluck('email', 'name');


        // chunking results
        // DB::table('students')->orderBy('id')->chunk(3, function($students) {
        //     echo "Chunk of data";
        //     foreach ($students as $student) {
        //         echo "<pre>";
        //         echo $student->name;
        //         echo "</pre>";
        //     }

        //     return false; // break after first chunk
        // });




        // Aggregates
        // $students = DB::table('students')->count();
        // $students = DB::table('students')->max('id');
        // $students = DB::table('students')->min('id');



        // Determining if record exist or not (true if exist)
        // if(DB::table('students')->where('id', 1)->exists()) {
        //     dd('yes');
        // }



        // Determining if record is not exist (true if not exist)
        // if(DB::table('students')->where('id', 31)->doesntExist()) {
        //     dd('yes');
        // }



        // select
        // $students = DB::table('students')->select('name', 'email')->get();


        // distinct
        // $students = DB::table('students')->distinct()->get();


        // where
        // $students = DB::table('students')->where('id', '>', 4)->get();
        // $students = DB::table('students')->where('id', 3)->get();
        // $students = DB::table('students')->where('name', 'like', 'h%')->get();



        // orWhere
        // $students = DB::table('students')->where('id', '>', 4)->orWhere('name', 'like', 'h%')->get();


        // whereBetween
        // $students = DB::table('students')->whereBetween('id', [1, 9])->get();


        // orWhereBetween
        // $students = DB::table('students')->whereBetween('id', [1,5])->orWhereBetween('id', [6,10])->get();


        // whereDate
        // whereMonth
        // whereDay
        // whereYear


        // orderBy
        // $students = DB::table('students')->orderBy('name')->get();
        // $students = DB::table('students')->orderBy('name', 'desc')->get();



        // latest
        // $students = DB::table('students')->latest('id')->first();

        // oldest
        // $students = DB::table('students')->oldest('id')->first();


        // randomOrder
        // $students = DB::table('students')->inRandomOrder()->get();
        // $students = DB::table('students')->inRandomOrder()->first();



        // groupBy and having


        // take
        // $students = DB::table('students')->take(5)->get();


        // skip and take
        // $students = DB::table('students')->skip(3)->take(5)->get();



        // limit
        // $students = DB::table('students')->limit(5)->get();


        // offset
        // $students = DB::table('students')->offset(3)->limit(3)->get();



        // insert single data
        // DB::table('students')->insert([
        //     'name' => 'Hector Barbosa',
        //     'email' => 'hector@example.com'
        // ]);


        // insert multiple data
        // DB::table('students')->insert([
        //     ['name' => 'Devi Jones', 'email' => 'devij@example.com'],
        //     ['name' => 'Dumble Dour', 'email' => 'dd@example.com'],
        // ]);



        // insert or ignore
        // DB::table('students')->insertOrIgnore([
        //     'id' => 1,
        //     'name' => 'Hector Barbosa',
        //     'email' => 'hector@example.com'
        // ]);



        // insert get id
        // $id = DB::table('students')->insertGetId([
        //     'name' => 'Severus Snape',
        //     'email' => 'snape@example.com'
        // ]);




        // update method
        // DB::table('students')->where('id', 1)->update([
        //     'name' => 'Captain Jack Sparrow'
        // ]);



        // updateOrInsert
        // DB::table('students')->updateOrInsert(
        //     ['email' => 'ginny@example.com'],
        //     ['name' => 'Ginny Weasely']
        // );



        // delete
        // DB::table('students')->where('id', 15)->delete();


        // truncate (destroy all data in students table)
        // DB::table('students')->truncate();


        // dd($id);
        return view('home', ['students' => $students]);
    }
}
