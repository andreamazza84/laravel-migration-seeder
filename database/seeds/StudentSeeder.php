<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student_list = config('student');
        foreach ($student_list as $student) {
            $new_sudent = new Student();
            $new_sudent->name = $student['name'];
            $new_sudent->lastname = $student['lastname'];
            $new_sudent->email = $student['email'];
            $new_sudent->birth_date = $student['birth_date'];
            $new_sudent->address = $student['address'];
            $new_sudent->telephone = $student['telephone'];
            $new_sudent->save();
        }
    }
}
