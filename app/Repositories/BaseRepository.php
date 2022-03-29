<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository {

    protected $model;

    public function __construct(Model $model) {
        $this->model = $model;
    }

    public function ObtenerTodoActivo() {
        return $this->model->whereEstado(true)->get();
    }

    public function ObtenerUnoActivo(int $id) {
        return $this->model->whereId($id)->whereEstado(true)->first();
    }

    public function ObtenerTodoActivoPluck(array $data) {
        return $this->model->whereEstado(true)->orderBy($data['valor'],'asc')->pluck($data['valor'],$data['clave']);
    }

}