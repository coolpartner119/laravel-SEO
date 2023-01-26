<?php
  
namespace App;
  
use Illuminate\Database\Eloquent\Model;
   
class Data extends Model
{
    protected $fillable = [
        "app_number",
			"id_card",
			"com_reg",
			"name",
			"doc_number",
			"status",
    ];
}