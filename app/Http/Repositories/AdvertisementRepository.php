<?php

namespace App\Repositories;

use App\Models\Advertisement;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AdvertisementRepository
{
    use UploadTrait;

    public function store($request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;

        // Check if a profile image has been uploaded
        if ($request->has('image')) {
            // Get image file
            $image = $request->file('image');
            // Make a image name based on user name and current timestamp
            $name = Str::slug($request->input('name')).'_'.time();
            // Define folder path
            $folder = '/uploads/images/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $data['image'] = $filePath;
        }

        Advertisement::query()->create($data);
    }

    public function getAll()
    {
        $result = Advertisement::query()
            ->select('id', 'image', 'description', 'user_id', 'title', 'created_at')
            ->with('user')
            ->orderByDesc('created_at')
            ->paginate(10);

        return $result;
    }
}
