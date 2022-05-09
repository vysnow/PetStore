<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Entities\Pet as Petty;
use App\Traits\ResponseTrait;

class Pet extends ResourceController
{
    use ResponseTrait;

    protected $modelName = 'App\Models\PetModel';
    protected $format    = 'json';

    /**
     * list all, use GET / 
     */
    public function index() {
        return $this->respond($this->model->findAll());
    }

    /**
     * list the specific, use GET /by/{id}
     */
    public function show($id = null) {
        $pet = $this->model->find($id);

        if ($pet) {
            return $this->respond($pet);
        } else {
            return $this->failGeneral("no this pet");
        }
    }

    /**
     * create new one, use POST
     */
    public function create() {
        $pet = new Petty();
        $pet->fill((array)$this->request->getVar());
        $res = $this->model->save($pet);

        if ($res) {
            return $this->respond($this->model->find($this->model->getInsertId()));
        }

        return $this->failGeneral('failed to create');
    }

    /**
     * update, use POST/PUT
     */
    public function update($id = null) {
        $pet = new Petty();
        $pet->fill((array)$this->request->getVar());
        if ($pet->id) {
            return $this->respond($this->model->update($id, $pet));
        } else {
            return $this->fail("Wrong input");
        }
    }

    /**
     * delete, use DELETE
     */
    public function delete($id = null) {
        return $this->respond("deleted $id");
    }
}
