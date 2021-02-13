<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ReservationRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ReservationCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ReservationCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    private function getFieldsData($show = FALSE) {
        return [  
            [
                'name'=> 'first_name',
                'label' => 'First Name',
                'type'=> 'text'
            ],
            [
                'name'=> 'last_name',
                'label' => 'Last Name',
                'type'=> 'text'
            ],
            [
                'name'=> 'telephone',
                'label' => 'Telephone',
                'type'=> 'text'
            ],
            [ 
                'label'     => "Car Brand",
                'type'      => 'select',
                'name'      => 'brand_id', // the db column for the foreign key
                // 
                'entity'    => 'brand', // the method that defines the relationship in your Model
                'model'     => "App\Models\Brand", // foreign key model
                'attribute' => 'name' // foreign key attribute that is shown to user
            ],
            [
                'label' => "Car Model",
                'type' => 'select',
                'name' => 'car_model_id', // the db column for the foreign key
                //
                'entity' => 'carModel', // the method that defines the relationship in your Model
                'model' => "App\Models\Carmodel", // foreign key model
                'attribute' => 'name' // foreign key attribute that is shown to user
            ],
            [
                'name'=> 'date_from',
                'label' => 'Date from',
                'type'=> 'date'
            ],
            [
                'name'=> 'date_from',
                'label' => 'Date from',
                'type'=> 'date'
            ],
            [
                'name'=> 'date_to',
                'label' => 'Date to',
                'type'=> 'date'
            ],
            [
                'name'=> 'price',
                'label' => 'Price',
                'type'=> 'number'
            ],
               
                
            
        ];
    }
    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Reservation::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/reservation');
        CRUD::setEntityNameStrings('reservation', 'reservations');

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
        $this->crud->set('show.setFromDb', false);
        $this->crud->addColumns($this->getFieldsData(TRUE));
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ReservationRequest::class);

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
