<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;


// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\StudentRequest as StoreRequest;
use App\Http\Requests\StudentRequest as UpdateRequest;

class StudentCrudController extends CrudController
{
    public function setup()
    {   
        $tab2 = "Other Information";
        $tab3 = "Medical Information";
        $this->crud->setCreateView('crud\create');


        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Student');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/student');
        $this->crud->setEntityNameStrings('student', 'students');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        $this->crud->setFromDb();

        // ------ CRUD FIELDS
        // $this->crud->addFields($array_of_arrays, 'update/create/both');
        // $this->crud->removeField('name', 'update/create/both');
        // $this->crud->removeFields($array_of_names, 'update/create/both');

        

        $this->crud->addField([   // date_picker
            'name' => 'application',
            'type' => 'date_picker',
            'label' => 'Application',
            'tab' => 'Applicant Information',
            // optional:
            'date_picker_options' => [
                'todayBtn' => true,
                'format' => 'dd-mm-yyyy',
                'language' => 'fr'
            ],
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
           ]
        ],'update/create/both');

        $this->crud->addField(
            ['name' => 'level', 
            'tab' => 'Applicant Information',
            'type' => 'enum',
            'wrapperAttributes' => [
                        'class' => 'form-group col-md-6'
                    ],]
            , 'update/create/both');

        $this->crud->addField(
            ['name' => 'studentnumber',
            'label' => 'Student Number', 
            'tab' => 'Applicant Information',
            'wrapperAttributes' => [
                        'class' => 'form-group col-md-6'
                    ],]
            , 'update/create/both');

        $this->crud->addField([// image
            'label' => "Photo",
            'name' => 'photo',
            'type' => 'image',
            'upload' => true,
            'crop' => true, // set to true to allow cropping, false to disable
            'aspect_ratio' => 1, // ommit or set to 0 to allow any aspect ratio
            // 'prefix' => 'uploads/images/profile_pictures/' // in case you only store the filename in the database, this text will be prepended to the database value
            'tab' => 'Applicant Information'
        ], 'update/create/both');

        $this->crud->addField(
            ['name' => 'firstname',
            'label' => 'First Name', 
            'tab' => 'Applicant Information',
            'wrapperAttributes' => [
                        'class' => 'form-group col-md-4'
                    ],]
            , 'update/create/both');

        $this->crud->addField(
            ['name' => 'lastname',
            'label' => 'Last Name',
            'tab' => 'Applicant Information',
            'wrapperAttributes' => [
                        'class' => 'form-group col-md-4'
                    ],]
            , 'update/create/both');


        $this->crud->addField(
            ['name' => 'middlename',
            'label' => 'Midde Name',
            'tab' => 'Applicant Information',
            'wrapperAttributes' => [
                        'class' => 'form-group col-md-4'
                    ],]
            , 'update/create/both');

        $this->crud->addField(
            ['name' => 'gender', 
            'tab' => 'Applicant Information',
            'type' => 'enum',
            'wrapperAttributes' => [
                        'class' => 'form-group col-md-4'
                    ],]
            , 'update/create/both');


        $this->crud->addField([   // date_picker
            'name' => 'birthdate',
            'type' => 'date_picker',
            'label' => 'Date of Birth',
            'tab' => 'Applicant Information',
            // optional:
            'date_picker_options' => [
                'todayBtn' => true,
                'format' => 'dd-mm-yyyy',
                'language' => 'fr'
            ],
            'wrapperAttributes' => [
                        'class' => 'form-group col-md-4'
            ],
        ],'update/create/both');

        $this->crud->addField(
            ['name' => 'citizenship', 
            'tab' => 'Applicant Information',
            'wrapperAttributes' => [
                        'class' => 'form-group col-md-4'
                    ],]
            , 'update/create/both');

        // $this->crud->addField(
        //     ['name' => 'passport', 
        //     'tab' => 'Applicant Information']
        //     , 'update/create/both');

        $this->crud->addField(
            ['name' => 'birthplace',
            'label' => 'Place of Birth',
            'tab' => 'Applicant Information',
            'wrapperAttributes' => [
                        'class' => 'form-group col-md-6'
                    ],]
            , 'update/create/both');

        $this->crud->addField(
            ['name' => 'residentialaddress',
            'label' => 'Residential Address in the Philippines',
            'tab' => 'Applicant Information',
            'type' => 'address',
            'wrapperAttributes' => [
                        'class' => 'form-group col-md-12'
                    ],]
            , 'update/create/both');

        $this->crud->addField(
            ['name' => 'email',
            'label' => 'E-mail Address',
            'tab' => 'Applicant Information',
            'type' => 'email',
            'wrapperAttributes' => [
                        'class' => 'form-group col-md-6'
                    ],]
            , 'update/create/both');

        $this->crud->addField(
            ['name' => 'religion',
            'id' => 'findme',
            'tab' => 'Applicant Information',
            'wrapperAttributes' => [
                        'class' => 'form-group col-md-6'
                    ],]
            , 'update/create/both');

        $this->crud->addField(
            ['name' => 'living',
            'label' => '',
            'type' => 'checkall',
            'tab' => 'Applicant Information',
             'attributes' => [
                    'id' => 'livingid']]
            , 'update/create/both');

        $this->crud->addField(
            ['name' => 'legalguardian', 
            'tab' => 'Applicant Information',
            'label' => '',
            'wrapperAttributes' => [
                 'id' => 'legalguardianwrapper'],
             'attributes' => [
                    'placeholder' => 'Legal Guardian Name',
                    'id' => 'legalguardian2']
                  ], 'update/create/both');

        $this->crud->addField(
            ['name' => 'contactnumber',
            'label' => 'Contact Number',
            'type' => 'number',
            'tab' => 'Applicant Information']
            , 'update/create/both');

        $this->crud->addField(
            ['name' => 'readingwriting', 
            'tab' => 'Applicant Information',
            'type' => 'enum',
            'wrapperAttributes' => [
                        'class' => 'form-group col-md-6'
                    ],]
            , 'update/create/both');
        $this->crud->addField(
            ['name' => 'verbalproficiency', 
            'tab' => 'Applicant Information',
            'type' => 'enum',
            'wrapperAttributes' => [
                        'class' => 'form-group col-md-6'
                    ],]
            , 'update/create/both');
        $this->crud->addField(
            [   // Table
                'tab' => 'Applicant Information',
                'name' => 'mojorlanguages',
                'label' => 'Major language(s) used at home',
                'type' => 'table',
                'entity_singular' => 'Line', // used on the "Add X" button
                'columns' => [
                    'languages' => 'List below'
                ],
                'max' => 10, // maximum rows allowed in the table
                'min' => 1 // minimum rows allowed in the table
            ],'update/create/both'
        );
        $this->crud->addField(
            [   // Table
                'tab' => 'Applicant Information',
                'name' => 'otherlanguages',
                'label' => 'Other languages/dialects spoken',
                'type' => 'table',
                'entity_singular' => 'Line', // used on the "Add X" button
                'columns' => [
                    'languages' => 'List below'
                ],
                'max' => 10, // maximum rows allowed in the table
                'min' => 1 // minimum rows allowed in the table
            ],'update/create/both'
        );
        $this->crud->addField(
            [   // Table
                'tab' => 'Applicant Information',
                'name' => 'classparticipation',
                'label' => 'List any participation in advanced level classes (i.e., Advanced Math, Gifted or Talented, Gateway, Writing, etc.)',
                'type' => 'table',
                'entity_singular' => 'Line', // used on the "Add X" button
                'columns' => [
                    'participation' => 'List below'
                ],
                'max' => 10, // maximum rows allowed in the table
                'min' => 1 // minimum rows allowed in the table
            ],'update/create/both'
        );
        // custom field type -------------- code is not flexible. 
        // $this->crud->addField(
        //         [
        //             'tab'   => 'Applicant Information',
        //             'name'        => 'remedialhelp', // the name of the db column
        //             'label'       => 'Did your child receive any remedial help in previous school? (i.e., Remedial Program, Special Education, Speech Therapy, IEP, IDR, etc.)', // the input label
        //             'type'        => 'radioIfYes',
        //             'options'     => [ // the key will be stored in the db, the value will be shown as label; 
        //                                 1 => "Yes",
        //                                 0 => "No"
        //                             ],
        //             // optional
        //             //'inline'      => false, // show the radios all on the same line?
        //         ]
        //     , 'update/create/both');

        $this->crud->addField(
            [   // Custom Field
                'name' => 'remedialhelp',
                'label' => 'Did your child receive any remedial help in previous school? (i.e., Remedial Program, Special Education, Speech Therapy, IEP, IDR, etc.)',
                'type' => 'toggle',
                'tab' => 'Applicant Information',
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'hide_when' => [
                    0 => ['remedialhelpexplantion'],
                    ],
                'default' => 0,
                'wrapperAttributes' => [
                        'class' => 'form-group col-md-12'
                ],
                
            ],'update/create/both');



        // custom field type -------------- code is not flexible. 
        $this->crud->addField(
            ['name' => 'remedialhelpexplantion',
            'label' => 'Please explain and provide latest testing results.',
            'tab' => 'Applicant Information',
            'attributes' => [
                    'placeholder' => 'Explanation here']]
            , 'update/create/both');

        $this->crud->addField(
            ['name' => 'specialtalent',
            'label' => 'Does your child have any special talent or interest in:',
            'type' => 'checklistcustom',
            'tab' => 'Applicant Information',
            'attributes' => [
                    'id' => 'specialtalentid',]]
            , 'update/create/both');

        $this->crud->addField(
            [   // Custom Field
                'name' => 'otherinfo',
                'label' => 'Is there any other information you think the teacher should know about your child?',
                'type' => 'toggle',
                'tab' => 'Applicant Information',
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'hide_when' => [
                    0 => ['otherinfofield'],
                    ],
                'default' => 0,
                'wrapperAttributes' => [
                        'class' => 'form-group col-md-12'
                ],
                
            ],'update/create/both');

        $this->crud->addField(
            [
                'name' => 'otherinfofield',
                'tab' => 'Applicant Information',
                'label' => 'Please explain'
            ]
        );

        $this->crud->addField(
            [   // Custom Field
                'name' => 'disciplinaryproblem',
                'label' => 'Has your child ever been asked to leave school because of any behavioral/disciplinary problems?',
                'type' => 'toggle',
                'tab' => 'Applicant Information',
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'hide_when' => [
                    0 => ['disciplinaryproblemexplanation'],
                    ],
                'default' => 0,
                
                
            ],'update/create/both');

        $this->crud->addField(
            [
                'name' => 'disciplinaryproblemexplanation',
                'tab' => 'Applicant Information',
                'label' => 'Please explain'
            ]
        );


        // $this->crud->addField( 
        //     [   // Table
        //         'tab' => 'Applicant Information',
        //         'name' => 'mojorlanguages',
        //         'label' => 'Major language(s) used at home',
        //         'type' => 'table',
        //         'entity_singular' => 'Line', // used on the "Add X" button
        //         'columns' => [
        //             'languages' => 'List below'
        //         ],
        //         'max' => 10, // maximum rows allowed in the table
        //         'min' => 1 // minimum rows allowed in the table
        //     ],'update/create/both'
        // );
        ///////////////////////////-----------------------------2nd tab
        $this->crud->addField(
            [   // Table
                'tab' => "$tab2",
                'name' => 'schooltable',
                'label' => 'School(s) attended',
                'type' => 'table',
                'entity_singular' => 'Line', // used on the "Add X" button
                'columns' => [
                    'level' => 'GRADE/LEVEL',
                    'school' => 'NAME OF SCHOOL',
                    'yearattended' => 'ACADEMIC YEAR ATTENDED',
                ],
                'max' => 3, // maximum rows allowed in the table
                'min' => 1 // minimum rows allowed in the table
            ],'update/create/both');

        $this->crud->addField(
            ['name' => 'previousschool', 
            'tab' => "$tab2",
            'label' => 'Name of the previous Schoool']
            , 'update/create/both');

        $this->crud->addField(
            ['name' => 'previousschooladdress', 
            'tab' => "$tab2",
            'label' => 'Complete address of the above School (including zip code)']
            , 'update/create/both');

        

        $this->crud->addField([
           'name' => 'father',
           'type' => 'enum',
           'label' => 'Parent',
           'tab' => "$tab2",
           'wrapperAttributes' => [
                'class' => 'form-group col-md-12'
           ]
        ], 'update/create/both');

        $this->crud->addField([
           'name' => 'fatherfirstname',
           'label' => 'First Name',
           'tab' => "$tab2",
           'wrapperAttributes' => [
                'class' => 'form-group col-md-4'
           ]
        ], 'update/create/both');

        $this->crud->addField([
           'name' => 'fatherlastname',
           'label' => 'Last Name',
           'tab' => "$tab2",
           'wrapperAttributes' => [
                'class' => 'form-group col-md-4'
           ]
        ], 'update/create/both');

        $this->crud->addField([
           'name' => 'fathermiddlename',
           'label' => 'Middle Name',
           'tab' => "$tab2",
           'wrapperAttributes' => [
                'class' => 'form-group col-md-4'
           ]
        ], 'update/create/both');

        $this->crud->addField([
           'name' => 'fathercitizenship',
           'label' => 'Citizenship',
           'tab' => "$tab2",
           'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
           ]
        ], 'update/create/both');

        $this->crud->addField([
           'name' => 'fathervisastatus',
           'label' => 'Philippine Visa Status',
           'tab' => "$tab2",
           'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
           ]
        ], 'update/create/both');

        $this->crud->addField([
           'name' => 'fatheremployer',
           'label' => 'Employer or Organization',
           'tab' => "$tab2",
           'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
           ]
        ], 'update/create/both');

        $this->crud->addField([
           'name' => 'fatherofficenumber',
           'type' => 'number',
           'label' => 'Office Number',
           'tab' => "$tab2",
           'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
           ]
        ], 'update/create/both');

        $this->crud->addField([
           'name' => 'fatherdegree',
           'label' => 'Graduate Degree',
           'tab' => "$tab2",
           'wrapperAttributes' => [
                'class' => 'form-group col-md-12'
           ]
        ], 'update/create/both');

        $this->crud->addField([
           'name' => 'fatherschool',
           'label' => 'School',
           'tab' => "$tab2",
           'wrapperAttributes' => [
                'class' => 'form-group col-md-12'
           ]
        ], 'update/create/both');

        $this->crud->addField(
            ['name' => 'fathernumber',
            'label' => 'Mobile Number',
            'type' => 'number',
            'tab' => "$tab2",
            'wrapperAttributes' => [
                'class' => 'form-group col-md-12'
           ]]
            , 'update/create/both');

        $this->crud->addField(
            ['name' => 'fatherreceivetext',
            'label' => 'Receive text messages about upcoming events, activitiess and other school announcements on this number?',
            'type' => 'radio',
            'tab' => "$tab2",
            'options'     => [ // the key will be stored in the db, the value will be shown as label; 
                        1 => "Yes",
                        0 => "No"
                    ],
            'wrapperAttributes' => [
                'class' => 'form-group col-md-12'
           ]]
            , 'update/create/both');
//--------------------------------------------------------------
        $this->crud->addField([
           'name' => 'mother',
           'type' => 'enum',
           'label' => 'Parent',
           'tab' => "$tab2",
           'wrapperAttributes' => [
                'class' => 'form-group col-md-12'
           ]
        ], 'update/create/both');

        
        $this->crud->addField([
           'name' => 'motherfirstname',
           'label' => 'First Name',
           'tab' => "$tab2",
           'wrapperAttributes' => [
                'class' => 'form-group col-md-4'
           ]
        ], 'update/create/both');

        $this->crud->addField([
           'name' => 'motherlastname',
           'label' => 'Last Name',
           'tab' => "$tab2",
           'wrapperAttributes' => [
                'class' => 'form-group col-md-4'
           ]
        ], 'update/create/both');

        $this->crud->addField([
           'name' => 'mothermiddlename',
           'label' => 'Middle Name',
           'tab' => "$tab2",
           'wrapperAttributes' => [
                'class' => 'form-group col-md-4'
           ]
        ], 'update/create/both');

        $this->crud->addField([
           'name' => 'mothercitizenship',
           'label' => 'Citizenship',
           'tab' => "$tab2",
           'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
           ]
        ], 'update/create/both');

        $this->crud->addField([
           'name' => 'mothervisastatus',
           'label' => 'Philippine Visa Status',
           'tab' => "$tab2",
           'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
           ]
        ], 'update/create/both');

        $this->crud->addField([
           'name' => 'motheremployer',
           'label' => 'Employer or Organization',
           'tab' => "$tab2",
           'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
           ]
        ], 'update/create/both');

        $this->crud->addField([
           'name' => 'motherofficenumber',
           'type' => 'number',
           'label' => 'Office Number',
           'tab' => "$tab2",
           'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
           ]
        ], 'update/create/both');

        $this->crud->addField([
           'name' => 'motherdegree',
           'label' => 'Graduate Degree',
           'tab' => "$tab2",
           'wrapperAttributes' => [
                'class' => 'form-group col-md-12'
           ]
        ], 'update/create/both');

        $this->crud->addField([
           'name' => 'motherschool',
           'label' => 'School',
           'tab' => "$tab2",
           'wrapperAttributes' => [
                'class' => 'form-group col-md-12'
           ]
        ], 'update/create/both');

        $this->crud->addField(
            ['name' => 'mothernumber',
            'label' => 'Mobile Number',
            'type' => 'number',
            'tab' => "$tab2",
            'wrapperAttributes' => [
                'class' => 'form-group col-md-12'
           ]]
            , 'update/create/both');

        $this->crud->addField(
            ['name' => 'motherreceivetext',
            'label' => 'Receive text messages about upcoming events, activitiess and other school announcements on this number?',
            'type' => 'radio',
            'tab' => "$tab2",
            'options'     => [ // the key will be stored in the db, the value will be shown as label; 
                        1 => "Yes",
                        0 => "No"
                    ],
            'wrapperAttributes' => [
                'class' => 'form-group col-md-12'
           ]]
            , 'update/create/both');

            $this->crud->addField(
            ['name' => 'emergencycontactname',
            'label' => 'Name',
            'header' => 'EMERGENCY CONTACT INFORMATION',
            'type' => 'textwithheader',
            'tab' => "$tab2",
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
           ]]
            , 'update/create/both');

            $this->crud->addField(
            ['name' => 'emergencyofficephone',
            'label' => 'Office Phone',
            'header' => '&nbsp;',
            'type' => 'textwithheader',
            'tab' => "$tab2",
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
           ]]
            , 'update/create/both');

            $this->crud->addField(
            ['name' => 'emergencymobilenumber',
            'label' => 'Mobile Number',
            'type' => 'number',
            'tab' => "$tab2",
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
           ]]
            , 'update/create/both');

            $this->crud->addField(
            ['name' => 'emergencyaddress',
            'label' => 'Address',
            'tab' => "$tab2",
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
           ]]
            , 'update/create/both');

            $this->crud->addField(
            ['name' => 'emergencyhomephone',
            'label' => 'Home Phone',
            'type' => 'number',
            'tab' => "$tab2",
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
           ]]
            , 'update/create/both');

            $this->crud->addField(
            [   // Checkbox
                'name' => 'isagree',
                'tab' => "$tab2",
                'label' => "Failure to provide complete and accurate information of any kind on this form will void the application and may result to its cancellation. WESTFIELDS INTERNATIONAL SCHOOL reserves the right to determine the placement of the applicant in the grade level or subjects deemed most appopriate for the student's school experience/perfomance.",
                'type' => 'checkbox'
            ], 'update/create/both');

            $this->crud->addField(
            [   // Checkbox
                'name' => 'formiscorrect',
                'tab' => "$tab2",
                'label' => "To the best of my knowledge the information written on this from is true and correct.",
                'type' => 'checkbox'
            ], 'update/create/both');

            $this->crud->addField([// image
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4'
             ],
            'label' => "Father Signature",
            'name' => 'fathersignature',
            'type' => 'image',
            'upload' => true,
            'crop' => true, // set to true to allow cropping, false to disable
            'aspect_ratio' => 0, // ommit or set to 0 to allow any aspect ratio
            // 'prefix' => 'uploads/images/profile_pictures/' // in case you only store the filename in the database, this text will be prepended to the database value
            'tab' => "$tab2"
            ], 'update/create/both');

            $this->crud->addField([// image
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4'
             ],
            'label' => "Mother Signature",
            'name' => 'mothersignature',
            'type' => 'image',
            'upload' => true,
            'crop' => true, // set to true to allow cropping, false to disable
            'aspect_ratio' => 0, // ommit or set to 0 to allow any aspect ratio
            // 'prefix' => 'uploads/images/profile_pictures/' // in case you only store the filename in the database, this text will be prepended to the database value
            'tab' => "$tab2"
            ], 'update/create/both');

            $this->crud->addField(
            ['name' => 'date',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4'
             ], 
            'tab' => "$tab2",
            'type' => 'date']
            , 'update/create/both');
            ///////////////////////////////////--------------end of 2nd tab/// start of the 3rd tab

            $this->crud->addField(
            ['name' => 'schoolyear',
            'label' => 'School Year',
            'tab' => "Applicant Information",
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
           ]]
            , 'update/create/both');


            //------------------------------------

            $this->crud->addField(
            [
                'label' => 'Asthma',
                'header' => '1. Does your child have any of th following?',
                'tab' => "$tab3",
                'name' => 'asthma',
                'type' => 'togglewithheader',
                'inline' => false,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'hide_when' => [
                    0 => ['asthmainhaler'],
                    ],
                'default' => 0,
                'wrapperAttributes' => [
                'class' => 'form-group col-md-12'
                ]
            ], 'update/create/both');

            $this->crud->addField(
                [
                    'name'        => 'asthmainhaler', // the name of the db column
                    'tab' => "$tab3",
                    'label'       => 'Does your child carry an asthma inhaler?', // the input label
                    'type'        => 'radio',
                    'options'     => [ // the key will be stored in the db, the value will be shown as label; 
                                        1 => "Yes",
                                        0 => "No"
                                    ],
                    // optional
                    //'inline'      => false, // show the radios all on the same line?
                    'wrapperAttributes' => [
                        'class' => 'form-group col-md-8'
                    ]
                ],  'update/create/both'
            );

            $this->crud->addField(
            [
                'label' => 'Allergies',
                'tab' => "$tab3",
                'name' => 'allergy',
                'type' => 'toggle',
                'inline' => false,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'hide_when' => [
                    0 => ['allergies','allergyreaction'],
                    ],
                'default' => 0,
                'wrapperAttributes' => [
                        'class' => 'form-group col-md-12'
                ],
            ]);

             $this->crud->addField(
            ['name' => 'allergies',
            'label' => 'Please specify',
            'tab' => "$tab3",
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
            ],
            'attributes' => [
                'placeholder' => 'Allergy(s)',
            ],
            ]
            , 'update/create/both');

             $this->crud->addField(
            ['name' => 'allergyreaction',
            'label' => 'Reaction',
            'tab' => "$tab3",
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
            ],
            'attributes' => [
                'placeholder' => '',
            ],
            ]
            , 'update/create/both');

             $this->crud->addField(
            [
                'label' => 'Drug Allergy',
                'tab' => "$tab3",
                'name' => 'drugallergy',
                'type' => 'toggle',
                'inline' => false,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'hide_when' => [
                    0 => ['drugallergies','drugallergyreaction'],
                    ],
                'default' => 0,
                'wrapperAttributes' => [
                        'class' => 'form-group col-md-12'
                ],
            ]);

             $this->crud->addField(
            ['name' => 'drugallergies',
            'label' => 'Please specify',
            'tab' => "$tab3",
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
            ],
            'attributes' => [
                'placeholder' => 'Drug Allergy(s)',
            ],
            ]
            , 'update/create/both');

             $this->crud->addField(
            ['name' => 'drugallergyreaction',
            'label' => 'Reaction',
            'tab' => "$tab3",
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
            ],
            'attributes' => [
                'placeholder' => '',
            ],
            ]
            , 'update/create/both');

             $this->crud->addField(
            [
                'label' => 'Eye or vision problems',
                'tab' => "$tab3",
                'name' => 'visionproblem',
                'type' => 'toggle',
                'inline' => false,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'hide_when' => [
                    0 => ['visionproblemdescription'],
                    ],
                'default' => 0,
                'wrapperAttributes' => [
                        'class' => 'form-group col-md-12'
                ],
            ]);

            $this->crud->addField(
            ['name' => 'visionproblemdescription',
            'label' => 'Description',
            'tab' => "$tab3",
            'wrapperAttributes' => [
                'class' => 'form-group col-md-12'
            ],
            'attributes' => [
                'placeholder' => '',
            ],
            ]
            , 'update/create/both');

            $this->crud->addField(
            [
                'label' => 'Ear or hearing problems',
                'tab' => "$tab3",
                'name' => 'hearingproblem',
                'type' => 'toggle',
                'inline' => false,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'hide_when' => [
                    0 => ['hearingproblemdescription'],
                    ],
                'default' => 0,
                'wrapperAttributes' => [
                        'class' => 'form-group col-md-12'
                ],
            ]);

            $this->crud->addField(
            ['name' => 'hearingproblemdescription',
            'label' => 'Description',
            'tab' => "$tab3",
            'wrapperAttributes' => [
                'class' => 'form-group col-md-12'
            ],
            'attributes' => [
                'placeholder' => '',
            ],
            ]
            , 'update/create/both');

            

            $this->crud->addField(
            [
                'label' => '2. Any other health condition that the school should be aare of (e.g epilepsy, diabetes, etc.)',
                'tab' => "$tab3",
                'name' => 'hashealthcondition',
                'type' => 'toggle',
                'inline' => false,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'hide_when' => [
                    0 => ['healthcondition'],
                    ],
                'default' => 0,
                'wrapperAttributes' => [
                        'class' => 'form-group col-md-12'
                ],
            ]);

            $this->crud->addField(
            ['name' => 'healthcondition',
            'label' => 'Please specify or explain',
            'tab' => "$tab3",
            'wrapperAttributes' => [
                'class' => 'form-group col-md-12'
            ],
            'attributes' => [
                'placeholder' => '',
            ],
            ]
            , 'update/create/both');

            $this->crud->addField(
            [
                'label' => '3. Has your child recently been hospitalized?',
                'tab' => "$tab3",
                'name' => 'ishospitalized',
                'type' => 'toggle',
                'inline' => false,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'hide_when' => [
                    0 => ['hospitalized'],
                    ],
                'default' => 0,
                'wrapperAttributes' => [
                        'class' => 'form-group col-md-12'
                ],
            ]);



            $this->crud->addField(
            ['name' => 'hospitalized',
            'label' => 'when? why?',
            'tab' => "$tab3",
            'wrapperAttributes' => [
                'class' => 'form-group col-md-12'
            ],
            'attributes' => [
                'placeholder' => '',
            ],
            ]
            , 'update/create/both');

            $this->crud->addField(
            [
                'label' => '4. Has your child recently had any serious injuries?',
                'tab' => "$tab3",
                'name' => 'hadinjuries',
                'type' => 'toggle',
                'inline' => false,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'hide_when' => [
                    0 => ['injuries'],
                    ],
                'default' => 0,
                'wrapperAttributes' => [
                        'class' => 'form-group col-md-12'
                ],
            ]);

            

            $this->crud->addField(
            ['name' => 'injuries',
            'label' => 'when? why?',
            'tab' => "$tab3",
            'wrapperAttributes' => [
                'class' => 'form-group col-md-12'
            ],
            'attributes' => [
                'placeholder' => '',
            ],
            ]
            , 'update/create/both');

            $this->crud->addField(
            [
                'label' => '5. Is your child on a regular medication?',
                'tab' => "$tab3",
                'name' => 'medication',
                'type' => 'toggle',
                'inline' => false,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'hide_when' => [
                    0 => ['medications'],
                    ],
                'default' => 0,
                'wrapperAttributes' => [
                        'class' => 'form-group col-md-12'
                ],
            ]);

            $this->crud->addField(
            ['name' => 'medications',
            'label' => 'Name of medication(s) and frequency',
            'tab' => "$tab3",
            'wrapperAttributes' => [
                'class' => 'form-group col-md-12'
            ],
            'attributes' => [
                'placeholder' => '',
            ],
            ]
            , 'update/create/both');

            $this->crud->addField(
                [
                    'name'        => 'schoolhourmedication', // the name of the db column
                    'tab' => "$tab3",
                    'label'       => 'Does your child need to take any medication(s) during school hours?', // the input label
                    'type'        => 'radio',
                    'options'     => [ // the key will be stored in the db, the value will be shown as label; 
                                        1 => "Yes (if yes, a letter from the Medical Doctor must be submitted and be kept on file and medication(s) will also be kept in school, to be dispensed only by teacher or authorized person.)",
                                        0 => "No"
                                    ],
                    // optional
                    //'inline'      => false, // show the radios all on the same line?
                    'wrapperAttributes' => [
                        'class' => 'form-group col-md-12'
                    ]
                ],  'update/create/both'
            );

            $this->crud->addField(
                [   
                    'header' => 'I give consent for my child to receive the following:',
                    'name'        => 'firstaidd', // the name of the db column
                    'tab' => "$tab3",
                    'label'       => '1. Minor first aid', // the input label
                    'type'        => 'radiowithheader',
                    'options'     => [ // the key will be stored in the db, the value will be shown as label; 
                                        1 => "Yes",
                                        0 => "No"
                                    ],
                    // optional
                    //'inline'      => false, // show the radios all on the same line?
                    'wrapperAttributes' => [
                        'class' => 'form-group col-md-12'
                    ]
                ],  'update/create/both'
            );

            $this->crud->addField(
                [   
                    'name'        => 'emergencycare', // the name of the db column
                    'tab' => "$tab3",
                    'label'       => '2. Emergency care', // the input label
                    'type'        => 'radio',
                    'options'     => [ // the key will be stored in the db, the value will be shown as label; 
                                        1 => "Yes",
                                        0 => "No"
                                    ],
                    // optional
                    //'inline'      => false, // show the radios all on the same line?
                    'wrapperAttributes' => [
                        'class' => 'form-group col-md-12'
                    ]
                ],  'update/create/both'
            );

            $this->crud->addField(
                [   
                    'name'        => 'hospitalemergencycare', // the name of the db column
                    'tab' => "$tab3",
                    'label'       => '3. Emergency care at the nearest hospital', // the input label
                    'type'        => 'radio',
                    'options'     => [ // the key will be stored in the db, the value will be shown as label; 
                                        1 => "Yes",
                                        0 => "No"
                                    ],
                    // optional
                    //'inline'      => false, // show the radios all on the same line?
                    'wrapperAttributes' => [
                        'class' => 'form-group col-md-12'
                    ]
                ],  'update/create/both'
            );

            $this->crud->addField(
                [   
                    'name'        => 'oralmedication', // the name of the db column
                    'tab' => "$tab3",
                    'label'       => '4. Oral non-prescription medication', // the input label
                    'type'        => 'radio',
                    'options'     => [ // the key will be stored in the db, the value will be shown as label; 
                                        1 => "Yes",
                                        0 => "No"
                                    ],
                    // optional
                    //'inline'      => false, // show the radios all on the same line?
                    'wrapperAttributes' => [
                        'class' => 'form-group col-md-12'
                    ]
                ],  'update/create/both'
            );

            $this->crud->addField([// image
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
             ],
            'label' => "Parent Signature",
            'name' => 'parentsignature',
            'type' => 'image',
            'upload' => true,
            'crop' => true, // set to true to allow cropping, false to disable
            'aspect_ratio' =>    0, // ommit or set to 0 to allow any aspect ratio
            // 'prefix' => 'uploads/images/profile_pictures/' // in case you only store the filename in the database, this text will be prepended to the database value
            'tab' => "$tab3"
            ], 'update/create/both');

            $this->crud->addField(
            ['wrapperAttributes' => [
                'class' => 'form-group col-md-6'
            ],
             'name' => 'date2', 
            'tab' => "$tab3",]
            , 'update/create/both');



        // ------ CRUD COLUMNS
        // $this->crud->addColumn(); // add a single column, at the end of the stack
        // $this->crud->addColumns(); // add multiple columns, at the end of the stack
        // $this->crud->removeColumn('column_name'); // remove a column from the stack
        // $this->crud->removeColumns(['column_name_1', 'column_name_2']); // remove an array of columns from the stack
        // $this->crud->setColumnDetails('column_name', ['attribute' => 'value']); // adjusts the properties of the passed in column (by name)
        // $this->crud->setColumnsDetails(['column_1', 'column_2'], ['attribute' => 'value']);
            
        $this->crud->setColumns(['studentnumber','firstname','lastname','middlename','gender',]);

        // ------ CRUD BUTTONS
        // possible positions: 'beginning' and 'end'; defaults to 'beginning' for the 'line' stack, 'end' for the others;
        //$this->crud->addButton($stack, $name, $type, $content, $position); // add a button; possible types are: view, model_function
        // $this->crud->addButtonFromModelFunction($stack, $name, $model_function_name, $position); // add a button whose HTML is returned by a method in the CRUD model
         $this->crud->addButtonFromView('line', 'Print', 'print', 'beginning'); // add a button whose HTML is in a view placed at resources\views\vendor\backpack\crud\buttons
        // $this->crud->removeButton($name);
        // $this->crud->removeButtonFromStack($name, $stack);
        // $this->crud->removeAllButtons();
        // $this->crud->removeAllButtonsFromStack('line');


        // ------ CRUD ACCESS
        // $this->crud->allowAccess(['list', 'create', 'update', 'reorder', 'delete']);
        // $this->crud->denyAccess(['list', 'create', 'update', 'reorder', 'delete']);

        // ------ CRUD REORDER
        // $this->crud->enableReorder('label_name', MAX_TREE_LEVEL);
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('reorder');

        // ------ CRUD DETAILS ROW
        // $this->crud->enableDetailsRow();
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('details_row');
        // NOTE: you also need to do overwrite the showDetailsRow($id) method in your EntityCrudController to show whatever you'd like in the details row OR overwrite the views/backpack/crud/details_row.blade.php

        // ------ REVISIONS
        // You also need to use \Venturecraft\Revisionable\RevisionableTrait;
        // Please check out: https://laravel-backpack.readme.io/docs/crud#revisions
        // $this->crud->allowAccess('revisions');

        // ------ AJAX TABLE VIEW
        // Please note the drawbacks of this though:
        // - 1-n and n-n columns are not searchable
        // - date and datetime columns won't be sortable anymore
        // $this->crud->enableAjaxTable();

        // ------ DATATABLE EXPORT BUTTONS
        // Show export to PDF, CSV, XLS and Print buttons on the table view.
        // Does not work well with AJAX datatables.
        $this->crud->enableExportButtons();

        // ------ ADVANCED QUERIES
        // $this->crud->addClause('active');
        // $this->crud->addClause('type', 'car');
        // $this->crud->addClause('where', 'name', '==', 'car');
        // $this->crud->addClause('whereName', 'car');
        // $this->crud->addClause('whereHas', 'posts', function($query) {
        //     $query->activePosts();
        // });
        // $this->crud->addClause('withoutGlobalScopes');
        // $this->crud->addClause('withoutGlobalScope', VisibleScope::class);
        // $this->crud->with(); // eager load relationships
        // $this->crud->orderBy();
        // $this->crud->groupBy();
        // $this->crud->limit();
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
