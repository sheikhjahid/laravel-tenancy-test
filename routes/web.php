<?php

use App\Customer\Models\User;

Route::domain('{customer}.laravel-tenancy.test')->group(function () {
    Route::get('users', function ($customer) {
        return App\Customer\Models\User::all();
    });
    Route::get('users/{id}', function($customer,$id)
	{
		return App\Customer\Models\User::find($id);
	});
	Route::get('deleteusers/{id}', function ($customer, $id)
	{
		$del =  User::where('id',$id)->delete();
		if($del==1)
		{
			return "User deleted";
		}
		else
		{
			return "User not deleted";
		}
	});
});


/*Route::get('users', function () {
    return response()->json([
    	'data' => User::all()

    ]);
});*/

Auth::routes();

Route::get('/home', function(){

	return 'hi';
});