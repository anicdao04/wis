<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Illuminate\Http\Request;

use App\Models\SubjectManagement;
use App\Models\SectionManagement;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\SectionManagementRequest as StoreRequest;
use App\Http\Requests\SectionManagementRequest as UpdateRequest;

class SectionManagementCrudController extends CrudController
{   
    public function setup()
    {   
         // $this->crud->hasAccessOrFail('section');
        
        $subjMngmnt = SubjectManagement::all();
        $this->data['subject_management'] = $subjMngmnt;
        $this->crud->subject_management = $subjMngmnt;
        // dd($this->crud);
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\SectionManagement');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/section_management');
        $this->crud->setEntityNameStrings('Section Management', 'Section Management');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        $this->crud->setFromDb();
        // $this->crud->setListView('custom.section');


        $this->crud->child_resource_included = ['select' => false, 'number' => false];
        $this->crud->addField(
            [
                'label' => 'Curriculum',
                'type' => 'select',
                'name' => 'curriculum_id',
                'store_in' => 'subject_details',
                'entity' => 'curriculum',
                'attribute' => 'curriculum_name',
                'model' => 'App\Models\CurriculumManagement',
                'attributes' => ['ng-model' => 'changeSubject()']
            ]
        );

        $this->crud->addField(
            [
                'label' => 'Level',
                'type' => 'select',
                'name' => 'year_id',
                'entity' => 'year',
                'attribute' => 'year',
                'model' => 'App\Models\YearManagement'
            ]
        );



        $this->crud->addField(
            [   // Table
                'name' => 'subject_details',
                'label' => '',
                'type' => 'child',
                'entity_singular' => 'item', // used on the "Add X" button
                // 'store_in' => 'subject_details',
                'columns' => [
                    [                    
                        'label' => 'Subject Name',
                        'type' => 'child_section',
                        'name' => 'subject_id',
                        'entity' => 'subject',
                        'attribute' => 'subject_code',
                        // 'size' => 4,
                        'model' => 'App\Models\SubjectManagement'
                    ],
                    [
                        'label' => 'Subject Code',
                        'name' => 'subj_code',
                        'type' => 'child_code',
                    ],
                    [
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'child_description',
                    ],
                    [
                        'label' => 'No. Unit',
                        'name' => 'unit',
                        'type' => 'child_unit',
                        // 'size' => 1
                    ],
                    // [
                    //     'label' => 'Description',
                    // ],
                    // [
                    //     'label' => 'Unit',
                    // ]
                    // 'level' => 'Subjects',
                    // 'school' => 'Description',
                    // 'yearattended' => 'Unit',
                ],
                // 'max' => 12, // maximum rows allowed in the table
                'min' => 1 // minimum rows allowed in the table
            ]
        );
        // ------ CRUD FIELDS
        // $this->crud->addField($options, 'update/create/both');
        // $this->crud->addFields($array_of_arrays, 'update/create/both');
        // $this->crud->removeField('name', 'update/create/both');
        // $this->crud->removeFields($array_of_names, 'update/create/both');

        // ------ CRUD COLUMNS
        $this->crud->removeColumn('subject_details');




        $this->crud->addColumn(
            [
               'label' => "Subject", // Table column heading
               'type' => "select",
               'name' => 'curriculum_id', // the column that contains the ID of that connected entity;
               'entity' => 'curriculum', // the method that defines the relationship in your Model
               'attribute' => "curriculum_name", // foreign key attribute that is shown to user
               'model' => "App\Models\CurriculumManagement", // foreign key model
            ]
        );

        $this->crud->addColumn(
            [
               'label' => "Level", // Table column heading
               'type' => "select",
               'name' => 'year_id', // the column that contains the ID of that connected entity;
               'entity' => 'year', // the method that defines the relationship in your Model
               'attribute' => "year", // foreign key attribute that is shown to user
               'model' => "App\Models\YearManagement", // foreign key model
            ]
        );



        // $this->crud->addColumn([
        //     'name' => 'subject_year',
        //     'label' => 'Grade Year',
        //     'type' => 'subject_year'
        // ]); 

        // $this->crud->addColumn([
        //     'name' => 'subject_name',
        //     'label' => 'Curriculum',
        //     'type' => 'subject_name'
        // ]); 

        $this->crud->addColumn([
            'name' => 'subject_description',
            'label' => 'Description',
            'type' => 'subject_description'
        ]); 

        $this->crud->addColumn([
            'name' => 'subject_unit',
            'label' => 'No. Unit',
            'type' => 'subject_unit'
        ]);
         $this->crud->addColumn([
            'name' => 'subject_total_units',
            'label' => 'Total',
            'type' => 'subject_total_units'
        ]);
         
        // $this->crud->addColumn(); // add a single column, at the end of the stack
        // $this->crud->addColumns(); // add multiple columns, at the end of the stack
        // $this->crud->removeColumn('column_name'); // remove a column from the stack
        // $this->crud->removeColumns(['column_name_1', 'column_name_2']); // remove an array of columns from the stack
        
        // $this->crud->setColumnDetails('Curriculum', 
        //     [
        //         'type' => 'select',
        //         'name' => 'curriculum',
        //         'entity' => 'subject_details',
        //         'attribute' => 'id',
        //         'model' => 'App\Models\SectionManagement'
        //     ]
        // );
        // $this->crud->setColumnDetails('column_name', ['attribute' => 'value']); // adjusts the properties of the passed in column (by name)
        // $this->crud->setColumnsDetails(['column_1', 'column_2'], ['attribute' => 'value']);

        // ------ CRUD BUTTONS
        // possible positions: 'beginning' and 'end'; defaults to 'beginning' for the 'line' stack, 'end' for the others;
        // $this->crud->addButton($stack, $name, $type, $content, $position); // add a button; possible types are: view, model_function
        // $this->crud->addButtonFromModelFunction($stack, $name, $model_function_name, $position); // add a button whose HTML is returned by a method in the CRUD model
        // $this->crud->addButtonFromView($stack, $name, $view, $position); // add a button whose HTML is in a view placed at resources\views\vendor\backpack\crud\buttons
        // $this->crud->removeButton($name);
        // $this->crud->removeButtonFromStack($name, $stack);
        // $this->crud->removeAllButtons();
        // $this->crud->removeAllButtonsFromStack('line');


        // $this->crud->addButtonFromView('line', 'view', 'section_view', 'beginning');

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
        // $this->crud->enableExportButtons();

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

    public function View ($id) {
        $data = SectionManagement::find($id);
        // dd($data);

        return view('custom.view_section', compact('data'));
    }
}
