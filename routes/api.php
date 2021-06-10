<?php
use App\Models\Pending;
use Illuminate\Http\Request;
use App\Http\Resources\PendingResource;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//peding task
Route::get('/pending', function(){
	$pending = Pending::all();
	return PendingResource::collection($pending);
});
