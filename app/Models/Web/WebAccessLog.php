<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-23 17:36:14             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Models\Web; use Illuminate\Database\Eloquent\Factories\HasFactory; use Illuminate\Database\Eloquent\Model; class WebAccessLog extends Model { use HasFactory; protected $table = "\x77\145\x62\x5f\141\143\143\x65\163\x73\137\154\157\x67\163"; protected $fillable = array("\x61\x63\x63\x65\163\x73\x5f\165\151\144", "\x61\143\143\x65\x73\x73\x5f\155\151\x64", "\141\x63\x63\x65\x73\163\137\165\162\x6c", "\141\x63\143\x65\163\x73\x5f\161\163\164\x72\x69\156\x67", "\141\x63\143\x65\x73\163\x5f\x69\x70", "\x6d\145\164\150\157\x64", "\141\x63\x63\x65\163\163\137\x64\141\164\x65", "\154\x65\x61\166\x65\x5f\144\x61\164\x65"); public $timestamps = false; public function user() { return $this->belongsTo(User::class, "\x61\x63\143\145\x73\x73\x5f\x75\x69\144", "\145\x6d\x61\151\x6c"); } public function web_menu() { return $this->belongsTo(WebMenu::class, "\x61\x63\x63\145\x73\x73\x5f\x6d\x69\x64"); } }
