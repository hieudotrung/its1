<?php

namespace App\Repository\Eloquent;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepositoryEloquent
{
    protected $model;

    protected $withs;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function newQuery()
    {
        return $this->getModel()->query();
    }

    public function countAll()
    {
        return $this->getModel()->count();
    }

    public function with(array $withs)
    {
        $this->withs = $withs;

        return $this;
    }

    public function all($fields = ['*'])
    {
        if ($this->withs != null) {
            $withs = $this->withs;
            $this->withs = null;

            return $this->getModel()->with($withs)->orderBy('id', 'DESC')->get($fields);
        }

        return $this->getModel()->orderBy('id', 'DESC')->get($fields);
    }

    public function first($fields = ['*'])
    {
        if ($this->withs != null) {
            $withs = $this->withs;
            $this->withs = null;

            return $this->getModel()->with($withs)->orderBy('id', 'DESC')->first($fields);
        }

        return $this->getModel()->orderBy('id', 'DESC')->first($fields);
    }

    public function paginate($limit = 15, $fields = ['*'])
    {
        if ($this->withs != null) {
            $withs = $this->withs;
            $this->withs = null;

            return $this->getModel()->with($withs)->orderBy('id', 'DESC')->paginate($limit, $fields);
        }

        return $this->getModel()->orderBy('id', 'DESC')->paginate($limit, $fields);
    }

    public function find($ids, $fields = ['*'])
    {
        if ($this->withs != null) {
            $withs = $this->withs;
            $this->withs = null;

            return $this->getModel()->with($withs)->find($ids, $fields);
        }

        return $this->getModel()->find($ids, $fields);
    }

    public function findOrFail($id, $fields = ['*'])
    {
        if ($this->withs != null) {
            $withs = $this->withs;
            $this->withs = null;

            return $this->getModel()->with($withs)->findOrFail($ids, $fields);
        }

        return $this->getModel()->findOrFail($id, $fields);
    }

    public function findBy($field, $value, $fields = ['*'])
    {
        if ($this->withs != null) {
            $withs = $this->withs;
            $this->withs = null;

            return $this->getModel()->with($withs)->where($field, $value)->first($fields);
        }

        return $this->getModel()->where($field, $value)->first($fields);
    }

    public function getBy($field, $value, $fields = ['*'])
    {
        if ($this->withs != null) {
            $withs = $this->withs;
            $this->withs = null;

            return $this->getModel()->with($withs)->where($field, $value)->get($fields);
        }

        return $this->getModel()->where($field, $value)->get($fields);
    }

    public function store(array $data)
    {
        return $this->getModel()->create($data);
    }

    public function update(Model $model, array $data)
    {
        return $model->update($data);
    }

    public function delete(Model $model)
    {
        return $model->delete();
    }

    public function destroy($ids)
    {
        return $this->getModel()->destroy($ids);
    }

    protected function recursive($items, $parent = 0, $str = '', $options = [])
    {
        if ($items) {
            foreach ($items as $key => $item) {
                if ($item['parent'] == $parent) {
                    $options[$item['id']] = $str . $item['name'];
                    unset($items[$key]);
                    $options = $this->recursive($items, $item['id'], $str . '---', $options);
                }
            }
        }

        return $options;
    }
}

}