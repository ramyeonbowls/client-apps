<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:20             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Http\Requests\Register; use Illuminate\Foundation\Http\FormRequest; use Illuminate\Support\Facades\Validator; use Illuminate\Validation\Rule; class StoreFormRegisterRequest extends FormRequest { public function authorize() : bool { return true; } public function rules() : array { return ["\x73\165\160\x70\154\151\x65\162" => "\162\145\x71\x75\151\x72\145\144\137\167\151\x74\x68\x6f\165\x74\x3a\144\151\163\x74\162\x69\x62\x75\x74\157\x72\174\x73\164\x72\151\x6e\147", "\x64\151\163\x74\162\151\142\x75\164\x6f\x72" => "\x72\x65\161\x75\151\x72\x65\144\x5f\x77\x69\x74\x68\x6f\165\x74\72\163\165\160\160\154\151\145\x72\x7c\x73\164\162\x69\x6e\x67", "\x6e\141\155\141\137\x70\145\x72\165\x73\141\x68\x61\x61\x6e" => "\162\145\161\165\151\x72\x65\144\174\163\164\162\x69\156\147\174\x6d\141\x78\x3a\x31\60\60", "\x65\x6d\141\151\154\x5f\x70\145\162\165\x73\141\150\x61\x61\x6e" => "\x72\x65\x71\165\151\x72\x65\x64\174\163\164\x72\x69\x6e\x67\174\x75\156\x69\161\x75\x65\x3a\165\x73\145\x72\163\x2c\145\155\141\x69\x6c\137\x61\x64\144\x72\145\x73\163\174\x6d\141\170\72\x31\60\60", "\160\x61\x73\x73\x77\x6f\x72\x64" => "\162\x65\161\x75\x69\162\145\x64\x7c\x73\164\x72\x69\x6e\147\x7c\x6d\x69\x6e\x3a\x38\174\143\x6f\156\x66\x69\x72\x6d\x65\144", "\160\x61\x73\x73\167\157\162\144\x5f\x63\x6f\156\x66\x69\162\x6d\141\164\x69\157\x6e" => "\x72\x65\x71\x75\x69\x72\145\144\174\x73\x74\x72\x69\x6e\x67\x7c\155\x69\x6e\x3a\70", "\x6e\x65\147\x61\162\x61" => "\x72\145\161\x75\x69\x72\x65\x64\174\163\x74\162\x69\x6e\147\x7c\x6d\141\x78\x3a\65\x30", "\160\162\157\x76\151\156\163\x69" => "\x72\x65\x71\165\x69\x72\x65\144\174\x73\164\162\x69\156\x67\174\x6d\x61\170\x3a\65\60", "\x6b\x61\142\x75\x70\141\x74\145\x6e" => "\x72\145\161\165\151\x72\145\144\174\163\x74\162\151\156\x67\174\155\141\170\72\x35\x30", "\153\145\143\141\x6d\141\164\x61\156" => "\x72\145\161\165\x69\x72\x65\x64\174\163\164\162\x69\156\x67\x7c\x6d\141\170\72\65\60", "\153\x65\x6c\x75\x61\162\x61\x68\141\x6e" => "\x72\145\x71\x75\x69\x72\145\x64\174\x73\164\x72\151\156\x67\x7c\155\141\x78\72\65\60", "\153\157\144\145\x5f\160\157\x73" => "\162\145\x71\x75\151\x72\x65\x64\174\x73\x74\x72\151\x6e\147\174\155\x61\170\72\62\60", "\x61\x6c\x61\155\141\164" => "\x72\x65\x71\165\x69\x72\145\x64\x7c\163\164\x72\151\156\147\x7c\155\x61\x78\72\x31\x35\60", "\x74\145\x6c\145\x70\157\x6e" => "\x72\x65\x71\165\151\x72\x65\x64\174\163\164\x72\151\x6e\147\x7c\x6d\x61\x78\72\62\60", "\150\x61\156\144\x70\x68\157\x6e\145" => "\x72\x65\161\165\151\162\x65\x64\174\x73\x74\162\151\156\x67\x7c\155\x61\170\x3a\x32\60", "\x70\151\x6d\160\151\156\141\156" => "\x72\145\161\x75\x69\x72\x65\x64\x7c\163\164\162\x69\156\147\174\155\x61\x78\72\65\60", "\x6a\141\142\x61\164\x61\156" => "\162\145\x71\x75\x69\162\x65\x64\x7c\163\x74\162\151\x6e\147\174\155\x61\x78\x3a\65\x30", "\150\x70\x69\x6d\x70\x69\156\x61\156" => "\x72\145\161\165\151\x72\x65\x64\x7c\x73\x74\x72\151\x6e\147\174\155\141\170\x3a\x32\60", "\160\151\x63" => "\162\x65\161\165\151\162\x65\144\x7c\x73\164\x72\x69\156\x67\x7c\x6d\x61\170\x3a\65\x30", "\x68\x70\151\x63" => "\162\145\x71\x75\x69\x72\x65\x64\x7c\163\164\x72\x69\156\x67\174\155\x61\170\72\x32\x30", "\x69\155\x70\x72\x69\x6e\164" => "\x6e\x75\x6c\154\141\x62\154\x65", "\153\x75\x61\163\x61" => "\x6e\165\154\x6c\x61\142\154\x65", "\153\x61\164\145\147\157\162\x69" => "\156\165\154\154\141\142\154\145", "\162\145\153\x65\x6e\x69\156\147" => "\156\165\x6c\x6c\141\x62\x6c\x65", "\x66\151\x6c\145" => "\156\x75\x6c\x6c\x61\x62\154\x65\x7c\155\x69\155\x65\163\72\x6a\160\x65\147\54\x70\156\x67\54\x6a\160\x67\174\144\x69\155\x65\x6e\163\x69\157\x6e\x73\72\x6d\x61\170\137\167\x69\x64\164\150\x3d\61\x39\x38\x30\54\x6d\141\x78\x5f\x68\145\x69\147\150\x74\75\x37\65\x30\174\x6d\141\x78\x3a\61\x30\x30\x30", "\143\x75\162\x72\x65\x6e\164\137\146\151\x6c\x65" => "\156\165\154\x6c\x61\142\x6c\x65"]; } public function attributes() : array { return ["\x73\x75\160\x70\x6c\151\145\x72" => "\123\165\x70\x70\x6c\x69\145\x72", "\144\x69\163\164\x72\x69\142\165\164\157\162" => "\x44\151\x73\x74\x72\x69\x62\x75\x74\x6f\x72", "\156\141\x6d\x61\137\x70\x65\x72\165\163\141\x68\141\141\x6e" => "\x4e\x61\x6d\x61\40\120\x65\162\x75\163\141\x68\x61\141\156", "\145\155\x61\151\x6c\x5f\160\x65\x72\x75\163\141\150\x61\x61\156" => "\x45\155\141\x69\x6c\40\x50\x65\x72\165\x73\x61\x68\141\141\x6e", "\x70\141\163\163\167\x6f\x72\144" => "\120\141\163\163\x77\157\x72\x64", "\x70\x61\x73\163\167\x6f\x72\144\137\x63\157\x6e\146\x69\x72\x6d\x61\x74\151\x6f\156" => "\103\x6f\x6e\x66\x69\x72\x6d\40\x50\141\163\163\x77\157\162\144", "\x6e\x65\147\141\162\x61" => "\116\x65\147\141\162\x61", "\x70\x72\157\x76\x69\x6e\x73\x69" => "\120\162\x6f\x76\151\156\163\151", "\x6b\x61\x62\x75\x70\141\x74\x65\156" => "\x4b\x61\x62\165\x70\141\x74\x65\156", "\x6b\x65\143\x61\x6d\x61\164\x61\x6e" => "\x4b\x65\143\141\155\x61\x74\141\x6e", "\153\145\154\165\x61\162\141\150\141\156" => "\x4b\x65\154\165\141\x72\141\x68\x61\x6e", "\153\157\x64\145\x5f\160\x6f\x73" => "\113\x6f\144\145\40\x50\x6f\163", "\141\154\x61\155\x61\x74" => "\x41\154\141\x6d\x61\x74", "\164\x65\154\x65\160\157\156" => "\124\145\x6c\x65\x70\x6f\156", "\x68\141\156\x64\x70\x68\x6f\156\x65" => "\110\141\156\x64\160\x68\157\x6e\145", "\160\x69\x6d\x70\151\156\141\156" => "\120\151\x6d\160\151\156\x61\156", "\152\x61\142\141\x74\141\156" => "\112\x61\142\x61\164\141\x6e", "\150\x70\151\155\x70\151\156\141\x6e" => "\x4e\x6f\x2e\40\110\x50\x20\120\x69\155\x70\x69\x6e\141\156", "\160\151\143" => "\x50\x69\143", "\150\160\x69\x63" => "\116\157\56\40\110\x50\40\x50\x69\143", "\x69\x6d\x70\162\151\156\164" => "\111\x6d\160\x72\151\156\x74", "\x6b\x75\141\x73\141" => "\x4b\165\141\163\141", "\x6b\x61\164\145\147\157\x72\x69" => "\113\x61\164\x65\147\x6f\x72\x69", "\162\x65\153\145\x6e\x69\x6e\147" => "\x52\145\x6b\145\156\151\156\x67", "\x66\x69\154\x65" => "\x66\x69\154\145", "\x63\165\162\162\x65\156\164\x5f\x66\x69\x6c\x65" => "\x63\165\x72\x72\x65\156\164\x20\146\151\x6c\145"]; } public function messages() : array { return ["\146\151\154\145\x2e\144\151\155\145\x6e\x73\x69\157\x6e\x73" => "\124\150\145\40\72\x61\x74\164\x72\151\142\165\164\x65\x20\x64\151\155\x65\x6e\x73\151\x6f\156\163\40\143\141\x6e\x74\x20\142\145\x20\x6c\x61\x72\x67\145\162\40\x74\x68\141\156\x20\65\x30\x20\x78\40\x35\60\x20\x70\x69\x78\145\154\163\x2e"]; } }
