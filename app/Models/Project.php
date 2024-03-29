<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Project extends Model
{
    use HasFactory, HasUuids, SoftDeletes, HasTranslations;

    protected static function booted(): void
    {
        static::addGlobalScope('localized', function (Builder $builder) {
            $language = app()->getLocale();
            return $builder->whereNotNull("title->$language")
                ->whereNotNull("summary->$language");
        });
    }

    public $translatable = [
        'title',
        'summary',
        'body',
    ];

    protected $fillable = [
        'title',
        'slug',
        'preview_path',
        'link',
        'code_link',
        'summary',
        'body'
    ];


}
