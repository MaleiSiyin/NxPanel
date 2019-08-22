<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MailAccount extends Model
{
    public function domain()
    {
        return $this->hasOneThrough(Domain::class, Mail::class);
    }

    public function service()
    {
        return $this->hasOneThrough(Service::class, Mail::class);
    }
}
