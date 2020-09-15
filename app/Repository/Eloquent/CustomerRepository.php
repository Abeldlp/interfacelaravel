<?php

namespace App\Repository\Eloquent;

use App\Models\Customer;
use App\Repository\CustomerRepositoryInterface;
use Illuminate\Support\Collection;

class CustomerRepository extends BaseRepository implements CustomerRepositoryInterface
{

    /**
     * UserRepository constructor.
     *
     * @param Customer $model
     */
    public function __construct(Customer $model)
    {
        parent::__construct($model);
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->model->all();
    }

    public function findTheId($id)
    {
        return $this->model->findOrFail($id);
    }
}
