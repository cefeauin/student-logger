<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Employee extends Model
{
    use HasFactory, SoftDeletes, LogsActivity;

    /**
     * Events only recorded in activity log
     */
    protected static $recordEvents = [
        'created',
        'updated',
        'deleted',
        'restored',
        'forceDeleted',
    ];

    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'sex',
        'birthdate',
        'address',
        'phone',
    ];


    /**
     * Activity logs option
     */
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logFillable()
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs()
            ->useLogName('Employee')
            ->setDescriptionForEvent(function (string $eventName) {
                $attributes = $this->getDirty();
                $old = $this->getAttributes();

                switch ($eventName) {
                    case 'created':
                        return "Added New Employee: \"" . ($attributes['first_name'] . ' ' . $attributes['last_name']) . "\"";
                    case 'updated':
                        return "Updated Employee: \"" . ($old['first_name'] . ' ' . $old['last_name']) . "\"";
                    case 'deleted':
                        return "Archived Employee: \"" . ($old['first_name'] . ' ' . $old['last_name']) . "\"";
                    case 'restored':
                        return "Restored Employee: \"" . ($old['first_name'] . ' ' . $old['last_name']) . "\"";
                    case 'forceDeleted':
                        return "Deleted Employee Permanently: \"" . ($old['first_name'] . ' ' . $old['last_name']) . "\"";
                    default:
                        break;
                }
            });
    }


    /**
     * Filtering search
     */
    public function scopeSearch($query, $value)
    {
        $subvalue = substr($value, 1);

        $query->where('last_name', 'like', "%{$value}%")
            ->orWhere('first_name', 'like', "%{$value}%")
            ->orWhere('middle_name', 'like', "%{$value}%")
            ->orWhere('sex', 'like', "%{$value}%")
            ->orWhere('phone', 'like', "%{$value}%")
            ->orWhere('phone', 'like', "%{$subvalue}%");
    }

    /**
     * Relationships
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
