<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:20             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Http\Requests\Setting; use Illuminate\Foundation\Http\FormRequest; use Illuminate\Validation\Rule; class UpdateFrasaMasterRequest extends FormRequest { public function authorize() : bool { return true; } public function rules() : array { return ["\x69\144" => "\x72\x65\x71\x75\x69\x72\145\144", "\155\141\170\x3a\65\x30", Rule::exists("\x74\146\151\164\165\x72")->where(function ($query) { return $query->where("\143\x61\164\x65\147\157\x72\x79", $this->category); }), "\x74\x69\x74\x6c\x65" => "\155\141\170\x3a\x32\x35\65", "\x61\165\x74\150\x6f\162" => "\162\x65\161\x75\x69\162\145\x64\174\x6d\141\x78\72\x32\x30\60", "\144\145\163\143\x72\x69\x70\164\151\157\x6e" => "\x72\x65\x71\x75\151\162\145\x64", "\x66\154\141\x67\x5f\141\x6b\164\151\146" => "\162\145\x71\165\151\x72\145\x64\x7c\x6d\141\x78\72\65", "\x66\x69\x6c\x65" => ["\x72\x65\x71\165\151\162\145\144", "\155\x69\155\x65\163\72\x6a\160\x65\147\54\x70\x6e\147\x2c\x6a\x70\147", "\x6d\141\170\72\61\x35\x30\60", Rule::dimensions()->maxWidth(300)->maxHeight(300)], "\x63\x75\x72\162\x65\x6e\164\x5f\146\x69\x6c\x65" => "\156\165\x6c\154\x61\x62\x6c\145"]; } public function attributes() : array { return ["\x69\x64" => "\x49\104\40\x46\x72\x61\163\x61", "\x74\x69\164\154\145" => "\x4a\165\x64\165\154\40\x46\162\x61\163\141", "\146\154\x61\x67\137\141\153\x74\151\x66" => "\x41\153\x74\151\146\40\x46\162\x61\163\x61", "\144\x65\x73\143\162\x69\x70\164\151\157\x6e" => "\113\157\x6e\x74\x65\x6e\40\106\x72\x61\x73\141", "\146\x69\x6c\145" => "\x46\151\x6c\145\40\x46\162\x61\163\141"]; } public function messages() : array { goto CVazB; oMZh4: $dimensionMessage = "\x54\x68\145\x20\146\x69\154\x65\40\144\x69\x6d\x65\156\163\151\x6f\x6e\x73\x20\143\141\x6e\47\x74\x20\x62\x65\x20\154\141\x72\147\145\x72\x20\x74\x68\141\x6e\x20\x33\x30\x30\40\170\x20\x33\x30\x30\40\x70\x69\x78\145\154\163\56"; goto uAXku; uAXku: return ["\x66\151\x6c\x65\x2e\x72\x65\161\x75\x69\162\145\144" => "\x54\x68\x65\40\x66\151\154\145\x20\x69\163\40\x72\x65\161\165\151\162\x65\144\x2e", "\x66\151\x6c\x65\56\x6d\x69\x6d\145\x73" => "\x54\150\x65\40\146\x69\x6c\x65\40\155\x75\163\x74\40\142\x65\40\x61\40\166\141\x6c\x69\144\x20\x69\x6d\141\147\x65\40\164\x79\160\x65\x20\50\152\x70\145\147\x2c\x20\160\x6e\x67\x2c\40\152\160\x67\x29\56", "\146\x69\154\x65\56\155\x61\170" => "\x54\x68\145\40\x66\x69\x6c\x65\x20\x73\x69\x7a\x65\40\143\141\x6e\156\157\x74\x20\x62\145\40\x6c\x61\162\x67\145\x72\40\x74\x68\141\156\x20\61\x35\60\x30\x20\113\102\x2e", "\x66\x69\154\x65\56\x64\x69\155\x65\x6e\x73\x69\x6f\x6e\x73" => $dimensionMessage]; goto JSj8H; CVazB: $dimensionMessage = "\x54\x68\x65\x20\x66\x69\154\x65\x20\144\x69\x6d\x65\x6e\163\x69\157\x6e\163\x20\x61\162\145\x20\x69\x6e\x76\x61\154\x69\144\56"; goto oMZh4; JSj8H: } }
