<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
        'contact_name','contact_email','contact_mess'
    ];
    protected $primaryKey = 'contact_id';
    protected $table = 'tbl_contact';
}
