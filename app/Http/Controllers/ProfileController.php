<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Response;

class ProfileController extends Controller
{
    public function store()
    {
        $profile = $this->getData();
        $data = Profile::create($profile);
        dd($data);
    }

    public function index()
    {
        return Profile::all();
    }

    public function show(Profile $profile)
    {
        return $profile;
    }

    public function update(Profile $profile)
    {
        $profile->update(
            [
                'gender' => 0,
                'birthed_at' => '2009-01-03',
                'avatar_path' => 'path',
                'is_active' => true,
                'first_name' => 'Anastasia',
                'second_name' => 'Voroncova',
                'third_name' => 'Alekseevna',
                'login' => 'nastya2009',
            ]
        );

        return $profile;
    }

    public function destroy()
    {
        $profile = Profile::find(1);

        $profile->delete();

        return Response::HTTP_NO_CONTENT;
    }

    protected function getData()
    {
        return [
            'gender' => 1,
            'birthed_at' => '2011-03-06',
            'avatar_path' => 'path',
            'is_active' => true,
            'first_name' => 'Nikita',
            'second_name' => 'Matveev',
            'third_name' => 'Sergeevich',
            'login' => 'nikita2011',
        ];
    }
}
