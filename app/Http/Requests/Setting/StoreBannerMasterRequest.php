<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:20             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Http\Requests\Setting; use Illuminate\Foundation\Http\FormRequest; use Illuminate\Validation\Rule; class StoreBannerMasterRequest extends FormRequest { public function authorize() : bool { return true; } public function rules() : array { goto QZZ8W; iE9Q9: $dimensionRule = Rule::dimensions(); goto IQ0j0; sWNIL: tfyTo: goto GLvGk; h_6nZ: $dimensionRule = $dimensionRule->maxWidth(1300)->maxHeight(500); goto x3YHF; x_7U1: if ($type === "\x6d\x6f\142\151\x6c\x65") { goto i0IYS; } goto NzxuE; lz450: i0IYS: goto Jyk4u; gGaAH: bsQAQ: goto h_6nZ; GLvGk: return ["\151\144" => "\162\145\161\165\151\x72\145\x64\174\165\x6e\x69\161\x75\145\x3a\x74\x62\141\156\x6e\145\x72\54\151\144\x7c\155\141\x78\72\x31\60\x30", "\144\x65\163\x63" => "\162\x65\x71\x75\x69\x72\145\144\174\x6d\x61\170\x3a\x31\60\60", "\164\171\x70\x65" => "\162\x65\x71\x75\151\162\x65\144\x7c\155\x61\x78\x3a\x31\x30\60", "\x66\151\x6c\145" => ["\162\145\x71\165\x69\162\x65\144", "\155\151\x6d\145\x73\72\x6a\x70\x65\x67\54\160\x6e\147\x2c\x6a\160\x67", "\155\x61\170\72\61\65\x30\x30", $dimensionRule], "\143\x75\x72\x72\x65\x6e\164\x5f\x66\x69\154\x65" => "\x6e\x75\154\154\141\x62\x6c\x65"]; goto UXIYJ; NzxuE: goto tfyTo; goto gGaAH; x3YHF: goto tfyTo; goto lz450; QZZ8W: $type = request()->type; goto iE9Q9; IQ0j0: if ($type === "\x77\x65\142") { goto bsQAQ; } goto x_7U1; Jyk4u: $dimensionRule = $dimensionRule->maxWidth(400)->maxHeight(250); goto sWNIL; UXIYJ: } public function attributes() : array { return ["\151\x64" => "\x49\x44\x20\102\x61\156\156\145\x72", "\144\145\x73\143" => "\x44\x65\163\x63\x20\102\x61\x6e\156\145\162", "\x74\171\160\x65" => "\x54\x79\x70\x65\40\x42\x61\x6e\156\145\162", "\x66\x69\x6c\x65" => "\106\151\x6c\145\40\x42\141\156\x6e\145\162"]; } public function messages() : array { goto aHc2k; L4XOl: $dimensionMessage = "\x54\x68\145\40\146\151\x6c\145\x20\144\151\x6d\145\x6e\x73\151\x6f\156\x73\x20\x63\141\x6e\x27\x74\40\x62\145\x20\154\x61\x72\x67\x65\162\x20\164\x68\141\156\40\x31\63\60\x30\40\170\40\x35\60\x30\40\x70\x69\170\145\x6c\x73\40\146\x6f\x72\40\x77\x65\x62\56"; goto vS3Nd; ysqHM: VZl6Y: goto qIF_N; aHc2k: $type = request()->type; goto ZGmVN; PvV7i: if ($type === "\155\157\142\x69\x6c\145") { goto VZl6Y; } goto Dcrpc; ZGmVN: $dimensionMessage = "\x54\150\145\40\146\151\x6c\145\40\144\151\x6d\145\156\x73\151\x6f\156\163\40\x61\162\x65\x20\x69\x6e\166\x61\x6c\151\x64\x2e"; goto w5ndV; qIF_N: $dimensionMessage = "\x54\150\x65\x20\x66\151\154\x65\x20\144\x69\x6d\x65\x6e\x73\151\x6f\156\x73\x20\143\141\x6e\47\x74\40\x62\145\x20\154\141\x72\147\145\x72\x20\x74\150\x61\156\x20\64\60\60\x20\x78\40\x32\65\x30\40\160\x69\x78\145\154\163\x20\x66\x6f\x72\x20\x6d\157\x62\151\154\x65\x2e"; goto tcoUm; vS3Nd: goto szKQY; goto ysqHM; Y5Jz4: return ["\146\x69\154\145\x2e\162\x65\161\x75\151\162\145\144" => "\124\x68\145\x20\x66\x69\x6c\145\40\151\x73\40\x72\145\x71\x75\x69\x72\x65\x64\x2e", "\x66\x69\154\145\x2e\155\151\155\145\x73" => "\x54\x68\x65\x20\146\151\x6c\x65\x20\x6d\165\163\x74\x20\x62\145\40\141\x20\166\x61\x6c\151\x64\x20\151\x6d\141\x67\145\x20\164\171\160\x65\x20\x28\152\160\x65\x67\x2c\40\x70\x6e\x67\x2c\x20\152\x70\147\51\56", "\x66\151\154\145\x2e\x6d\x61\x78" => "\124\x68\145\40\x66\x69\x6c\145\40\x73\151\x7a\x65\x20\x63\141\x6e\156\157\x74\x20\142\145\x20\x6c\141\x72\147\x65\x72\40\164\x68\141\156\40\x31\x35\x30\x30\x20\113\x42\x2e", "\x66\x69\x6c\x65\56\x64\151\155\145\x6e\x73\151\157\156\x73" => $dimensionMessage]; goto FHUbw; tcoUm: szKQY: goto Y5Jz4; ahpuk: sYryr: goto L4XOl; Dcrpc: goto szKQY; goto ahpuk; w5ndV: if ($type === "\x77\145\x62") { goto sYryr; } goto PvV7i; FHUbw: } }
