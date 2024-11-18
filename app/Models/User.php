<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:20             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Models; use Illuminate\Contracts\Auth\MustVerifyEmail; use Illuminate\Database\Eloquent\Factories\HasFactory; use Illuminate\Foundation\Auth\User as Authenticatable; use Illuminate\Notifications\Notifiable; class User extends Authenticatable implements MustVerifyEmail { use HasFactory, Notifiable; protected $fillable = array("\x6e\x61\155\x65", "\145\155\x61\x69\x6c", "\x70\x61\x73\x73\x77\x6f\x72\144", "\x72\157\154\x65", "\x63\154\151\x65\156\x74\x5f\151\144", "\x66\154\x61\x67\137\141\160\x70\162\157\x76\x65", "\145\155\141\151\x6c\137\166\x65\162\151\146\151\145\144\137\141\x74", "\x63\162\145\x61\x74\145\144\x5f\x61\164"); protected $hidden = array("\160\141\x73\x73\x77\x6f\x72\x64", "\162\145\155\x65\x6d\x62\x65\x72\137\164\157\x6b\145\x6e"); protected function casts() : array { return ["\145\x6d\x61\x69\x6c\137\x76\x65\x72\151\x66\x69\145\144\137\141\x74" => "\144\x61\x74\x65\164\151\x6d\145", "\160\x61\163\x73\x77\x6f\x72\x64" => "\150\x61\x73\150\x65\144"]; } }
