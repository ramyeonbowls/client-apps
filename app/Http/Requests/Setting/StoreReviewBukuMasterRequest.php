<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:20             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Http\Requests\Setting; use Illuminate\Foundation\Http\FormRequest; use Illuminate\Validation\Rule; class StoreReviewBukuMasterRequest extends FormRequest { public function authorize() : bool { return true; } public function rules() : array { return ["\151\144" => "\162\x65\x71\x75\x69\162\145\144\174\165\156\x69\x71\165\x65\72\x74\146\151\164\x75\162\54\151\144\x2c\143\x61\164\x65\x67\x6f\162\x79\174\155\x61\170\x3a\65\60", "\164\151\x74\x6c\145" => "\x72\145\x71\165\x69\162\145\144\174\155\x61\170\x3a\x32\x35\x35", "\x61\165\x74\x68\157\x72" => "\x6d\141\170\x3a\65\60", "\144\145\163\143\x72\x69\x70\164\151\157\156" => "\162\x65\x71\165\x69\x72\x65\x64", "\146\x6c\x61\147\137\141\x6b\164\151\146" => "\162\x65\x71\165\151\x72\x65\x64\174\155\141\170\72\65", "\x66\x69\154\145" => ["\162\x65\x71\165\151\x72\x65\x64", "\x6d\151\155\145\x73\72\x6a\160\x65\x67\54\160\x6e\147\54\152\160\x67", "\155\x61\x78\x3a\61\65\60\60", Rule::dimensions()->maxWidth(700)->maxHeight(350)], "\143\x75\x72\162\145\156\164\x5f\x66\x69\154\x65" => "\x6e\x75\154\x6c\141\142\154\145"]; } public function attributes() : array { return ["\x69\x64" => "\x49\104\40\x52\x65\166\x69\145\x77\x20\102\x75\153\x75", "\164\x69\x74\154\x65" => "\x4a\x75\x64\165\154\x20\122\145\x76\151\x65\167\x20\x42\x75\153\165", "\146\x6c\141\x67\x5f\141\153\x74\x69\x66" => "\x41\x6b\164\x69\146\x20\x52\x65\x76\x69\145\167\40\x42\x75\x6b\x75", "\144\x65\x73\143\x72\151\x70\x74\x69\157\156" => "\x4b\x6f\x6e\x74\x65\x6e\x20\122\x65\166\x69\145\167\x20\102\165\153\x75", "\146\151\154\x65" => "\106\x69\x6c\145\40\x52\x65\x76\x69\145\x77\40\x42\x75\x6b\165"]; } public function messages() : array { goto p0dcX; p0dcX: $dimensionMessage = "\x54\x68\x65\40\146\x69\x6c\145\40\x64\x69\x6d\145\156\163\x69\157\156\163\40\141\162\x65\40\151\x6e\166\x61\154\x69\144\x2e"; goto S8CPV; ih1d9: return ["\x66\x69\154\x65\x2e\162\x65\x71\165\151\x72\145\x64" => "\x54\150\145\40\x66\151\154\x65\40\x69\163\40\x72\x65\x71\x75\151\x72\145\x64\x2e", "\x66\x69\154\x65\56\155\x69\x6d\x65\x73" => "\x54\x68\145\x20\x66\151\x6c\x65\40\x6d\165\163\x74\40\142\145\40\x61\x20\166\141\x6c\151\144\40\x69\155\141\147\x65\x20\164\x79\160\x65\40\x28\152\160\145\x67\54\x20\160\x6e\147\x2c\x20\152\x70\x67\51\x2e", "\x66\x69\154\145\56\155\141\x78" => "\124\150\x65\40\146\151\154\145\40\163\151\x7a\145\40\143\x61\x6e\156\157\164\x20\142\145\x20\154\141\x72\x67\x65\162\40\x74\150\141\x6e\40\61\x35\x30\x30\40\x4b\102\x2e", "\x66\151\154\x65\x2e\x64\x69\x6d\x65\x6e\163\x69\x6f\x6e\x73" => $dimensionMessage]; goto r2PXw; S8CPV: $dimensionMessage = "\124\150\x65\x20\146\151\x6c\145\x20\x64\151\x6d\145\156\x73\x69\x6f\x6e\163\x20\143\141\x6e\x27\x74\40\x62\x65\x20\154\141\x72\x67\145\x72\40\x74\x68\141\156\40\67\x30\x30\40\170\x20\x33\x35\x30\x20\x70\151\x78\x65\x6c\x73\x2e"; goto ih1d9; r2PXw: } }
