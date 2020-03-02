<?php

namespace Cris\Modelhelpers\Abstracts;

use Cris\Modelhelpers\Traits\HasUuid;
use Illuminate\Database\Eloquent\SoftDeletes;

abstract class ModelWithUuidSoftDeletes extends AbstractModel
{
    use HasUuid, SoftDeletes;
}
