<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'application' => 'required',
            'firstname' => 'required|min:5|max:255',
            'lastname' => 'required|min:5|max:255',
            'middlename' => 'required|min:5|max:255',
            'birthdate' => 'required',
            'citizenship' => 'required|min:5|max:255',
            'birthplace' => 'required',
            'residentialaddress' => 'required',
            'email' => 'required|min:5|max:255',
            'religion' => 'required|min:5|max:255',
            'living' => 'required',
            'contactnumber' => 'required|min:5|max:255',
            'mojorlanguages' => 'required',
            'previousschool' => 'required',
            'previousschooladdress' => 'required',
            'schooltable' => 'required',
            'fatherfirstname' => 'required|min:3|max:255',
            'fatherlastname' => 'required|min:3|max:255',
            'fathermiddlename' => 'required|min:3|max:255',
            'fathercitizenship' => 'required|min:5|max:255',
            'fathervisastatus' => 'required|min:5|max:255',
            'fatheremployer' => 'required',
            'fatherofficenumber' => 'required|min:5|max:255',
            'fatherdegree' => 'required',
            'fatherschool' => 'required',
            'fathernumber' => 'required|min:5|max:255',
            'motherfirstname' => 'required|min:3|max:255',
            'motherlastname' => 'required|min:3|max:255',
            'mothermiddlename' => 'required|min:3|max:255',
            'mothercitizenship' => 'required|min:5|max:255',
            'mothervisastatus' => 'required|min:5|max:255',
            'motheremployer' => 'required',
            'motherofficenumber' => 'required|min:5|max:255',
            'motherdegree' => 'required',
            'motherschool' => 'required',
            'mothernumber' => 'required|min:5|max:255',
            'emergencycontactname' => 'required',
            'emergencyofficephone' => 'required|min:5|max:255',
            'emergencymobilenumber' => 'required|min:5|max:255',
            'emergencyaddress' => 'required',
            'emergencyhomephone' => 'required|min:5|max:255',
            'date' => 'required',
            'schoolyear' => 'required|min:4|max:255',
            'date2' => 'required',

        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return ['application' => 'Application',
            'firstname' => 'First Name',
            'lastname' => 'Last Name',
            'middlename' => 'Middle Name',
            'birthdate' => 'Birthdate',
            'citizenship' => 'Citizenship',
            'birthplace' => 'Birthplace',
            'residentialaddress' => 'Residential Address',
            'email' => 'Email',
            'religion' => 'Religion',
            'living' => 'Guardian/Parents',
            'contactnumber' => 'Contact Number',
            'mojorlanguages' => 'Major languages spoken at home',
            'previousschool' => 'Previous School is required',
            'previousschooladdress' => 'Address of the previous School',
            'schooltable' => 'School(s) attended',
            'fatherfirstname' => 'Father First Name',
            'fatherlastname' => 'Father Last Name',
            'fathermiddlename' => 'Father Middle Name',
            'fathercitizenship' => 'Father Citizenship',
            'fathervisastatus' => 'Father Visa status',
            'fatheremployer' => 'Father Employer',
            'fatherofficenumber' => 'Father Office Number',
            'fatherdegree' => 'Father Degree',
            'fatherschool' => 'Father School',
            'fathernumber' => 'Father Contact number',
            'motherfirstname' => 'Mother First Name',
            'motherlastname' => 'Mother Last Name',
            'mothermiddlename' => 'Mother Middle Name',
            'mothercitizenship' => 'Mother Citizenship',
            'mothervisastatus' => 'Mother Visa status',
            'motheremployer' => 'Mother Employer',
            'motherofficenumber' => 'Mother Office Number',
            'motherdegree' => 'Mother Degree',
            'motherschool' => 'Mother School',
            'mothernumber' => 'Mother Number',
            'emergencycontactname' => 'Emergency Name',
            'emergencyofficephone' => 'Emergency Office Phone',
            'emergencymobilenumber' => 'Emergency Mobile Number',
            'emergencyaddress' => 'Emergency Address',
            'emergencyhomephone' => 'Emergency Home Phone',
            'date' => 'Date',
            'schoolyear' => 'School Year',
            'date2' => 'Date',

        ];    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [];
        // return ['application' => 'Application date is required',
        //     'firstname' => 'First Name is required',
        //     'lastname' => 'Last Name is required',
        //     'middlename' => 'Middle Name is required',
        //     'birthdate' => 'Birthdate is required',
        //     'citizenship' => 'Citizenship is required',
        //     'birthplace' => 'Birthplace is required',
        //     'residentialaddress' => 'Residential Address is required',
        //     'email' => 'Email is required',
        //     'religion' => 'Religion is required',
        //     'living' => 'Please check atleast one',
        //     'contactnumber' => 'Contact Number is required',
        //     'mojorlanguages' => 'Please list at least one major language spoken at home',
        //     'previousschool' => 'Name of the previous school is required',
        //     'previousschooladdress' => 'Address of the previous school is required',
        //     'schooltable' => 'Please list at least one school',
        //     'fatherfirstname' => 'Father First Name is required',
        //     'fatherlastname' => 'Father Last Name is required',
        //     'fathermiddlename' => 'Father Middle Name is required',
        //     'fathercitizenship' => 'Father citizenship is required',
        //     'fathervisastatus' => 'Father visa status is required',
        //     'fatheremployer' => 'Father employer is required',
        //     'fatherofficenumber' => 'Father office number is required',
        //     'fatherdegree' => 'Father degree is required',
        //     'fatherschool' => 'Father school is required',
        //     'fathernumber' => 'father contact number is required',
        //     'motherfirstname' => 'Mother First Name is required',
        //     'motherlastname' => 'required|min:3|max:255',
        //     'mothermiddlename' => 'required|min:3|max:255',
        //     'mothercitizenship' => 'required|min:5|max:255',
        //     'mothervisastatus' => 'required|min:5|max:255',
        //     'motheremployer' => 'required',
        //     'motherofficenumber' => 'required|min:5|max:255',
        //     'motherdegree' => 'required',
        //     'motherschool' => 'required',
        //     'mothernumber' => 'required|min:5|max:255',
        //     'emergencycontactname' => 'required',
        //     'emergencyofficephone' => 'required|min:5|max:255',
        //     'emergencymobilenumber' => 'required|min:5|max:255',
        //     'emergencyaddress' => 'required',
        //     'emergencyhomephone' => 'required|min:5|max:255',
        //     'date' => 'required',
        //     'schoolyear' => 'required|min:4|max:255',
        //     'date2' => 'required',

        // ];
    }
}
