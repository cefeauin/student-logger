<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
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
        'student_no',
        'last_name',
        'first_name',
        'middle_name',
        'sex',
        'civil_status',
        'nationality',
        'birthdate',
        'birthplace',
        'address',
        'phone',
        'email',
        'account_type'
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
            ->useLogName('Student')
            ->setDescriptionForEvent(function (string $eventName) {
                $attributes = $this->getDirty();
                $old = $this->getAttributes();

                switch ($eventName) {
                    case 'created':
                        return "Added New Student: \"" . ($attributes['first_name'] . ' ' . $attributes['last_name']) . "\"";
                    case 'updated':
                        return "Updated Student: \"" . ($old['first_name'] . ' ' . $old['last_name']) . "\"";
                    case 'deleted':
                        return "Archived Student: \"" . ($old['first_name'] . ' ' . $old['last_name']) . "\"";
                    case 'restored':
                        return "Restored Student: \"" . ($old['first_name'] . ' ' . $old['last_name']) . "\"";
                    case 'forceDeleted':
                        return "Deleted Student Permanently: \"" . ($old['first_name'] . ' ' . $old['last_name']) . "\"";
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
        $query->where('student_no', 'like', "%{$value}%")
            ->orWhere('last_name', 'like', "%{$value}%")
            ->orWhere('first_name', 'like', "%{$value}%");
    }

    /**
     * Relationships
     */
    public function admissions(): HasMany
    {
        return $this->hasMany(Admission::class);
    }

    public function family_members(): BelongsToMany
    {
        return $this->belongsToMany(FamilyMember::class);
    }

    public function cards(): HasMany
    {
        return $this->hasMany(Card::class);
    }
}
