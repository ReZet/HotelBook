<?php
namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
* Interface RepositoryInterface
* @package App\Repositories
*/
interface RepositoryInterface
{
   /**
    * @param array $attributes
    * @return Model
    */
   public function create(array $attributes): Model;

   /**
    * @param $id
    * @return Model
    */
   public function find($id): ?Model;
   
   /**
    * @return Collection
    */
   public function all(): Collection;

   /**
    * @param $id
    * @param array $attributes
    * @return bool
    */
   public function update($id, array $attributes): bool;

   /**
    * @param $id
    * @return bool
    */
   public function delete($id): bool;
}