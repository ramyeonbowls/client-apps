<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-23 17:36:14             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Http\Requests\Setting; use Illuminate\Foundation\Http\FormRequest; use Illuminate\Validation\Rule; class StoreBannerMasterRequest extends FormRequest { public function authorize() : bool { return true; } public function rules() : array { goto BrZeL; V9e6d: if ($type === "\167\x65\142") { goto VCR5N; } goto jUirx; XKfTD: NDjOO: goto Zl7s6; pFp4i: $dimensionRule = Rule::dimensions(); goto V9e6d; Zl7s6: return ["\x69\x64" => "\x72\x65\161\165\151\162\145\144\x7c\x75\x6e\x69\x71\165\145\72\x74\142\x61\156\156\145\x72\54\x69\x64\x7c\x6d\141\x78\72\61\x30\x30", "\144\145\x73\143" => "\162\145\x71\165\x69\x72\x65\x64\174\x6d\x61\x78\72\61\60\x30", "\164\171\x70\145" => "\x72\145\x71\x75\151\x72\x65\144\x7c\155\x61\x78\x3a\61\x30\x30", "\146\x69\154\145" => ["\x72\x65\161\165\151\x72\x65\144", "\155\x69\155\145\x73\72\x6a\160\145\x67\x2c\x70\x6e\x67\x2c\x6a\x70\x67", "\155\141\170\x3a\61\x35\60\x30", $dimensionRule], "\x63\x75\162\162\145\156\x74\x5f\x66\x69\x6c\145" => "\156\x75\154\154\x61\142\154\145"]; goto iEspF; tbsY0: $dimensionRule = $dimensionRule->maxWidth(1300)->maxHeight(500); goto m2KCJ; AB8GN: VCR5N: goto tbsY0; CE2p2: $dimensionRule = $dimensionRule->maxWidth(400)->maxHeight(250); goto XKfTD; haY7V: goto NDjOO; goto AB8GN; m2KCJ: goto NDjOO; goto NVQ24; NVQ24: BXZBj: goto CE2p2; BrZeL: $type = request()->type; goto pFp4i; jUirx: if ($type === "\155\157\142\151\154\145") { goto BXZBj; } goto haY7V; iEspF: } public function attributes() : array { return ["\x69\x64" => "\x49\x44\x20\102\141\x6e\156\x65\162", "\144\x65\x73\143" => "\104\x65\x73\143\40\102\x61\x6e\156\145\162", "\x74\x79\160\x65" => "\124\x79\160\x65\40\x42\141\156\156\x65\x72", "\x66\151\x6c\145" => "\106\151\x6c\x65\40\102\x61\156\x6e\x65\162"]; } public function messages() : array { goto tkPHP; MPxPb: goto kHpfr; goto kePub; G4to2: $dimensionMessage = "\124\150\x65\x20\146\x69\x6c\x65\40\x64\x69\x6d\x65\x6e\163\x69\x6f\x6e\x73\x20\x63\x61\156\x27\164\x20\142\145\40\x6c\x61\162\x67\145\x72\40\x74\150\x61\x6e\x20\61\x33\x30\x30\40\170\40\65\60\x30\x20\x70\x69\170\x65\x6c\x73\40\146\157\162\40\x77\x65\x62\56"; goto MPxPb; kePub: jHcJo: goto h4ywY; nMEmc: if ($type === "\155\157\x62\151\154\x65") { goto jHcJo; } goto C8JLP; JNpdf: kHpfr: goto twlYf; WLf_P: if ($type === "\167\x65\142") { goto LjHIu; } goto nMEmc; twlYf: return ["\x66\x69\x6c\145\x2e\x72\145\x71\x75\x69\162\145\144" => "\124\x68\x65\x20\146\x69\154\x65\x20\151\x73\x20\x72\145\x71\x75\151\162\145\144\56", "\x66\x69\154\x65\56\155\x69\155\145\163" => "\x54\x68\145\40\x66\151\x6c\x65\x20\155\x75\163\164\40\x62\x65\40\x61\40\166\x61\x6c\x69\144\x20\151\155\141\147\145\40\164\x79\160\x65\x20\x28\x6a\160\145\147\x2c\40\x70\x6e\147\x2c\x20\x6a\160\x67\x29\56", "\x66\151\154\145\56\x6d\141\170" => "\124\x68\145\40\146\151\154\145\x20\x73\151\172\145\x20\x63\141\x6e\156\157\164\x20\x62\145\40\x6c\x61\x72\x67\x65\x72\40\164\x68\x61\x6e\40\61\x35\60\x30\40\x4b\x42\x2e", "\x66\x69\154\145\56\144\151\155\145\x6e\x73\x69\x6f\156\163" => $dimensionMessage]; goto RiH20; QzRy3: LjHIu: goto G4to2; C8JLP: goto kHpfr; goto QzRy3; h4ywY: $dimensionMessage = "\124\x68\x65\40\x66\x69\x6c\145\x20\144\x69\155\145\x6e\163\x69\x6f\156\163\x20\143\x61\156\x27\x74\x20\142\145\x20\154\x61\x72\147\145\x72\x20\164\150\141\x6e\x20\64\x30\60\40\170\40\62\65\60\x20\x70\x69\x78\145\154\163\40\146\157\162\40\x6d\x6f\142\151\x6c\145\56"; goto JNpdf; tkPHP: $type = request()->type; goto E8sRT; E8sRT: $dimensionMessage = "\124\150\145\x20\146\151\154\145\40\144\151\155\x65\156\163\x69\x6f\156\x73\40\141\x72\x65\40\x69\x6e\166\x61\154\151\144\x2e"; goto WLf_P; RiH20: } }
