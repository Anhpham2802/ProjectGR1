<?php
namespace App\Service;

class BaseService implements ServiceInterface
{
    public $repository;
    // public function __construct($repository)
    // {
    //     $this->repository = $repository;
    // }
    public function all()
    {
        return $this->repository->all();
    }
    public function find(int $id)
    {
        return $this->repository->find($id);
    }
    public function create(array $data)
    {
        return $this->repository->create($data);
    }
    public function update($id, array $data)
    {
        return $this->repository->update($id, $data);
    }
    public function delete($id)
    {
        return $this->repository->delete($id);
    }
}