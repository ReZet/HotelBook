<?php
namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\HotelRepositoryInterface;
use App\Http\Resources\Hotel as HotelResource;
use App\Http\Resources\HotelCollection;


class HotelController extends Controller
{
	protected $hotelRepo;

    public function __construct (HotelRepositoryInterface $hotelRepo) {
		$this->hotelRepo = $hotelRepo;
    }
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		//return HotelResource::collection($this->hotelRepo->all());
        return new HotelCollection($this->hotelRepo->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->hotelRepo->create($request->all());
        return $hotel;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return $this->hotelRepo->find($id);
        return new HotelResource($this->hotelRepo->find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$hotel = $this->hotelRepo->update($id, $request->all());
		if ($hotel) {
			$this->hotelRepo->find($id);
		}
 
        return $hotel;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel = Hotel::findOrFail($id);
        $hotel->delete();
        return '';
    }
}
