<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\JobRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class JobCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class JobCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    private function getFieldsData($show = FALSE)
    {
        return [
            [
                'name' => 'title',
                'label' => 'Title',
                'type' => 'text'
            ],
            [
                'name' => 'content',
                'label' => 'Content',
                'type' => ($show ? "textarea" : 'ckeditor'),
            ],
            [
                'label' => "City",
                'name' => 'city_id',
                'type' => 'select',
                'entity' => 'cities',
                'model'     => "App\Models\City", // related model
                'attribute' => 'name', // foreign key attribute that is shown to user
            ],
            [
                'label' => "Company",
                'name' => 'company_id',
                'type' => 'select',
                'entity' => 'companies',
                'model' => "App\Models\Company", // related model
                'attribute' => 'name', // foreign key attribute that is shown to user
            ],
            [
                'label'        => "Job Image",
                'name'         => "image",
                'filename'     => NULL, // set to null if not needed
                'type'         => 'image',
                'aspect_ratio' => 1, // set to 0 to allow any aspect ratio
                'crop'         => true, // set to true to allow cropping, false to disable
                'src'          => NULL, // null to read straight from DB, otherwise set to model accessor function
            ]
        ];
    }
    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Job::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/job');
        CRUD::setEntityNameStrings('job', 'jobs');

        $this->crud->addFields($this->getFieldsData());
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
       CRUD::setFromDb(); // columns

        $this->crud->set('show.setFromDb', false);
        $this->crud->addColumns($this->getFieldsData(TRUE));
        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(JobRequest::class);

        CRUD::setFromDb(); // fields

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupShowOperation()
    {
        // by default the Show operation will try to show all columns in the db table,
        // but we can easily take over, and have full control of what columns are shown,
        // by changing this config for the Show operation
        $this->crud->set('show.setFromDb', false);
        $this->crud->addColumns($this->getFieldsData(TRUE));
    }
}
