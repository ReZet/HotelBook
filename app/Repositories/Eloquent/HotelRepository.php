<?php
namespace App\Repositories\Eloquent;

use App\Models\Hotel;
use App\Repositories\HotelRepositoryInterface;
use Illuminate\Support\Collection;


Class HotelRepository extends BaseRepository implements HotelRepositoryInterface
{
	/**
    * UserRepository constructor.
    *
    * @param Hotel $model
    */
	public function __construct(Hotel $model)
	{
		parent::__construct($model);
	}
	
	/**
    * @return Collection
    */
	public function all(): Collection
	{
		return $this->model::all();    
		//return $this->model::with('location')->get();    
	}
}