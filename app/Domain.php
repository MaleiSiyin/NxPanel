<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function web()
  {
    return $this->hasOne(Web::class);
  }

  public function mails()
  {
    return $this->hasMany(Mail::class);
  }

  public function Dns()
  {
    return $this->hasMany(Dns::class);
  }

}
