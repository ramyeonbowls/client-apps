<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-23 17:36:14             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Models; use Illuminate\Contracts\Auth\MustVerifyEmail; use Illuminate\Database\Eloquent\Factories\HasFactory; use Illuminate\Foundation\Auth\User as Authenticatable; use Illuminate\Notifications\Notifiable; class User extends Authenticatable implements MustVerifyEmail { use HasFactory, Notifiable; protected $fillable = array("\156\141\155\145", "\145\155\141\x69\154", "\160\141\x73\x73\167\x6f\x72\144", "\x72\157\x6c\145", "\143\x6c\x69\x65\156\164\137\x69\x64", "\x66\154\x61\147\x5f\x61\x70\160\x72\157\166\145", "\145\x6d\x61\x69\x6c\137\x76\145\x72\151\146\x69\x65\144\137\x61\x74", "\143\x72\x65\141\164\145\144\137\x61\x74"); protected $hidden = array("\x70\141\163\163\x77\157\162\x64", "\162\x65\155\145\x6d\142\145\x72\137\164\157\x6b\x65\156"); protected function casts() : array { return ["\145\155\141\151\154\137\166\x65\x72\x69\146\151\x65\144\x5f\x61\x74" => "\x64\x61\x74\x65\164\151\x6d\x65", "\x70\141\163\x73\167\x6f\x72\144" => "\x68\141\163\x68\x65\x64"]; } }
