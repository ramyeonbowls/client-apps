<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:20             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Models\Web; use Illuminate\Database\Eloquent\Factories\HasFactory; use Illuminate\Database\Eloquent\Model; class WebAccessLog extends Model { use HasFactory; protected $table = "\167\145\x62\137\x61\x63\x63\x65\163\x73\x5f\x6c\x6f\147\163"; protected $fillable = array("\141\x63\x63\x65\163\x73\137\165\x69\144", "\x61\x63\143\x65\x73\x73\x5f\155\151\144", "\x61\143\143\145\163\163\137\x75\162\154", "\141\143\143\145\163\163\137\161\x73\164\162\151\156\x67", "\141\143\x63\x65\163\163\137\x69\160", "\155\145\164\150\x6f\x64", "\x61\x63\143\x65\x73\x73\137\x64\141\x74\x65", "\x6c\x65\x61\x76\145\x5f\x64\x61\164\x65"); public $timestamps = false; public function user() { return $this->belongsTo(User::class, "\x61\x63\x63\x65\x73\x73\137\165\x69\144", "\x65\155\x61\151\154"); } public function web_menu() { return $this->belongsTo(WebMenu::class, "\141\143\x63\145\x73\x73\137\x6d\151\x64"); } }
