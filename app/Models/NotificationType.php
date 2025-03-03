<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationType extends Model
{


    use HasFactory;

    protected $fillable = ['name'];


    public function notificationSettings()
    {
        return $this->hasMany(NotificationSetting::class);
    }
}
