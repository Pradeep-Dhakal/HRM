<?php

namespace App\Http\Controllers;

use App\Models\Academic;
use App\Models\Address;
use App\Models\Personalinfo;
use App\Models\Salary;
use App\Models\Skill;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class UserInfoController extends Controller
{
    public function create($id)
    {
        return view('users.userinfo', compact('id'));
    }
    public function store(Request $request, $id)
    {
        // dd($request->all());
        //  this area contents the code for personal info




        $personal = new Personalinfo();

        if ($request->file('image')) {
            $file = $request->file('image');
            $imgname = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/profilepicture/'), $imgname);
        } else {
            $imgname = '';
        }

        $personal->user_id = $id;
        $personal->full_name = $request->fname . '' . $request->lname;
        $personal->persoanal_email = $request->email;
        $personal->date_of_birth = $request->dob;
        $personal->gender = $request->gender;
        $personal->blood_group = $request->bloodgroup;
        $personal->contact_no = $request->phone;
        $personal->citizenship_no = $request->citizen_no;
        $personal->NID_card_no = $request->nid;
        $personal->image = $imgname;
        $personal->save();
        // end of personal info
        // this fields containts the cond of address information
        $address = new Address();
        $address->user_id = $id;
        $address->tmeporary_district = $request->t_district;
        $address->tmeporary_tole = $request->t_tole;
        $address->tmeporary_wad_no = $request->t_wad;
        $address->tmeporary_house_no = $request->t_house_no;
        // permanent
        $address->permanent_district = $request->p_district;
        $address->permanent_tole = $request->p_tole;
        $address->permanent_wad_no = $request->p_wad;
        $address->permanent_house_no = $request->p_house_no;
        $address->save();
        // end of address code

        // this field containts the code of academic data
        $acedemic = new Academic();
        if ($request->file('academicdocuments')) {
            $academicfile = $request->file('academicdocuments');
            $academicfilenames = time() . rand(1, 100) . '.' . $academicfile->getClientOriginalExtension();
            $academicfile->move(public_path('uploads/academicdocuments/'), $academicfilenames);
            // $academicfile->save($destinationPath . $academicfilenames);
            // $file->mod=move($destinationPath,$filenames);
        } else {
            $academicfilenames = '';
        }
        $acedemic->user_id = $id;
        $acedemic->university_name = $request->univarsity_name;
        $acedemic->institution_name = $request->institution_name;
        $acedemic->joined_year = $request->joined_year;
        $acedemic->passed_year = $request->passed_year;
        $acedemic->academicdocuments = $academicfilenames; // it containts files or images
        $acedemic->save();
        // end of academic part

        // this field containts the code of skills
        $datacount = count($request->name);
        // dd('arrayl length='.$datacount);

        for ($i = 0; $i < $datacount; $i++) {
            $skill = new Skill();

            if ($request->hasfile('documents')) {
                $file = $request->documents[$i];
                // $extension=$request->file('doduments')->extension();
                $extension = $file->getClientOriginalExtension();
                $docname = time() . rand(1, 100) . "." . $extension;
                $file->move(public_path('uploads/skillsdocuments/'), $docname);
            } else {
                $docname = '';
            }

            $skill->user_id = $id;

            $skill->name = $request->name[$i];
            $skill->duration = $request->duration[$i];
            $skill->documents = $docname; // it may contents many images of files
            // dd($i);
            // end of skills part
            $skill->save();
        }



        $salary = new Salary();
        $salary->user_id = $id;
        $salary->type = $request->type;
        $salary->amount = $request->amount;
        $salary->save();
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $personal=Personalinfo::find($id);
        dd($personal);
        $personal->user_id = $id;
        $personal->full_name = $request->fname . '' . $request->lname;
        $personal->persoanal_email = $request->email;
        $personal->date_of_birth = $request->dob;
        $personal->gender = $request->gender;
        $personal->blood_group = $request->bloodgroup;
        $personal->contact_no = $request->phone;
        $personal->citizenship_no = $request->citizen_no;
        $personal->NID_card_no = $request->nid;
        // $personal->image = $imgname;
        $personal->save();
    }
}
