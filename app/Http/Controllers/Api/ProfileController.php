<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Profile\StoreRequest;
use App\Http\Requests\Api\Profile\UpdateRequest;
use App\Models\Profile;
use Illuminate\Http\Response;

class ProfileController extends Controller
{
    public function index()
    {
        return Profile::all();
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $profile = Profile::create($data);
        return $profile;
    }

    public function show(Profile $profile)
    {
        return $profile;
    }

    public function update(UpdateRequest $request, Profile $profile)
    {
        $data = $request->validated();
        $profile->update($data);
        return $profile;
    }

    public function destroy(Profile $profile)
    {
        $profile->delete();
        return response([], response::HTTP_NO_CONTENT);
    }
}
