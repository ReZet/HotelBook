<?php
namespace App\Repositories\Eloquent;

use App\Repositories\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

abstract class BaseRepository implements RepositoryInterface
{
	/**      
     * @var Model      
     */     
     protected $model;       

    /**      
     * BaseRepository constructor.      
     *      
     * @param Model $model      
     */     
    public function __construct(Model $model)     
    {         
        $this->model = $model;
    }
 
    /**
    * @param array $attributes
    *
    * @return Model
    */
    public function create(array $attributes): Model
    {
		return $this->model->create($attributes);
    }
 
    /**
    * @param $id
    * @return Model
    */
    public function find($id): ?Model
    {
		return $this->model->find($id);
    }
	
	/**
    * @return Collection
    */
	public function all(): Collection
	{
		return $this->model->all();    
	}
	
	public function update($id, array $attributes): bool
	{
		$result = $this->find($id)->update($attributes);

		if ($result) {
			return true;
		}

		return false;
	}
	
	public function delete($id): bool
	{
		$result = $this->find($id);

		if ($result) {
			return $result->delete();
		}

		return false;
	}
}