<?php

namespace Cris\Modelhelpers\Traits;

use Ramsey\Uuid\Uuid;

trait HasUuid
{

    protected static function bootHasUuid()
    {
        static::creating(function ($model) {
            $model->{$model->getRouteKeyName()} = (string) Uuid::uuid4();
        });
    }

    public function getRouteKeyName()
    {
        return 'uuid';
    }
}
