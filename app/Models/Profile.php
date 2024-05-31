<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public function getById($id)
    {
        return Profile::where('Id', '=', $id)->first();
    }

    public function getWithPagination()
    {
        return Profile::paginate(10);
    }

    public function saveData($data)
    {
        $profile = new Profile();
        $profile->name = $data['name'];
        $profile->save();
    }

    public function updateData($id, $data)
    {
        Profile::where('id', '=', $id)
        ->update([
            'name' => $data['name']
        ]);
    }
}
