<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:20             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Http\Controllers; use App\Logs; use Carbon\Carbon; use App\Models\Parameter; use Illuminate\Support\Arr; use Illuminate\Support\Str; use Illuminate\Http\Request; use Illuminate\Support\Facades\DB; class GameController extends Controller { protected $client_id = ''; public function __construct() { $this->middleware("\141\x75\164\150"); $this->client_id = config("\141\x70\x70\x2e\x63\x6c\151\x65\x6e\164\137\x69\x64", ''); } public function getInfoBaca() { goto m81jD; Ja_7e: goto SJtel; goto jVQhD; crlsX: SJtel: goto ORr8F; Dd2_Y: $parameter = Parameter::where("\x63\154\151\145\x6e\x74\x5f\x69\144", $this->client_id)->where("\x6e\141\155\x65", "\162\x65\141\x64\137\142\x65\x66\157\162\145\137\147\x61\155\145")->first(); goto p8fwS; m81jD: $user = auth()->user(); goto MZ9ol; TAokS: $message = ''; goto gJQ2V; MZ9ol: $code = 0; goto TAokS; gvWdH: $results = DB::table("\x74\x74\162\170\x5f\x72\145\x61\144\x20\141\163\40\141")->select([DB::raw("\143\x6f\x75\156\164\50\x64\x69\163\x74\x69\x6e\x63\164\x20\x62\157\x6f\x6b\137\151\144\51\x20\141\x73\40\x62\141\143\141")])->where("\141\x2e\x63\154\151\x65\x6e\x74\x5f\x69\x64", "\x3d", $this->client_id)->where("\141\56\165\163\x65\162\137\x69\x64", "\75", $user->id)->whereRaw("\103\117\116\126\x45\x52\124\x28\x61\x2e\x73\164\141\162\x74\137\x72\145\141\x64\x2c\x20\104\x41\124\105\51\40\75\40\103\117\x4e\x56\x45\x52\x54\50\x4e\x4f\127\50\x29\x2c\x20\104\x41\124\105\x29")->first(); goto d87an; jVQhD: z4xj2: goto ap3H4; d87an: if (!$results) { goto gAejw; } goto AKunA; Z0Qxj: gAejw: goto Ci0fj; ORr8F: return response()->json(["\x63\x6f\144\145" => $code, "\x6d\x65\x73\163\x61\147\145" => $message], 200); goto qcNM5; a0aoW: $message = "\x41\156\144\141\x20\150\x61\x72\165\163\x20\155\145\x6d\142\x61\x63\141\x20\155\x69\156\x69\155\x61\x6c\x20" . $parameter_baca . "\x20\142\x75\x6b\165\x20\x68\x61\x72\x69\x20\x69\x6e\151\x20\x75\156\x74\x75\153\x20\x62\145\x72\155\x61\x69\x6e\x20\147\x61\x6d\145\41"; goto Ja_7e; Ci0fj: if ($baca >= $parameter_baca) { goto z4xj2; } goto a0aoW; gJQ2V: $parameter_baca = 0; goto Dd2_Y; p8fwS: $parameter_baca = $parameter->value; goto gvWdH; ap3H4: $code = 1; goto crlsX; AKunA: $baca = $results->baca; goto Z0Qxj; qcNM5: } public function getWords() { goto U0MJ9; WphlP: $results = DB::table("\x74\x6b\141\x6d\x75\163\x5f\153\x61\x74\141\x20\141\163\40\141")->select(["\141\x2e\167\x6f\x72\x64"])->get()->pluck("\x77\x6f\162\x64")->toArray(); goto MLtdq; MLtdq: return response()->json($results, 200); goto i0tNR; U0MJ9: $user = auth()->user(); goto WphlP; i0tNR: } }
