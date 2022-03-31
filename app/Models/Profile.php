<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Profile extends Model
{

	protected $guard = [];
	protected $fillable = ['title'];

	public function profileImage(){
		$imagePath = $this->image ? $this->image : 'profile/CzUofijmbDlwbka9CzLhrIVfrmMmco2qYxeoug1Y.jpg';

		return '/storage/' . $imagePath;
	}

	public function follower(){
		return $this->belongsToMany(User::class);
	}

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
