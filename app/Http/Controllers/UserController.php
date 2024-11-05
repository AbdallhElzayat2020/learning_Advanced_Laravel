<?php

namespace App\Http\Controllers;

use App\Jobs\ActiveUsersJob;
use App\Models\User;
use App\Services\PriceServices;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // use PriceTrait;

    // protected $priceServices;
    // public function __construct(PriceServices $priceServices)
    // {
    //     $this->priceServices = $priceServices;
    // }

    public function index()
    {
        // $priceData['price'] = $this->priceServices->concvertPrice(100);
        // dd($priceData);
        $users_id = User::where('status', 0)->pluck('id');


        ActiveUsersJob::dispatch($users_id)->delay(now()->second(40));

        return "جاري العمل في الوقت الحالي";
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}