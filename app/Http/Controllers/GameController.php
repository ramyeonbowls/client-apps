<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-23 17:36:14             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Http\Controllers; use App\Logs; use Carbon\Carbon; use App\Models\Parameter; use Illuminate\Support\Arr; use Illuminate\Support\Str; use Illuminate\Http\Request; use Illuminate\Support\Facades\DB; class GameController extends Controller { protected $client_id = ''; public function __construct() { $this->middleware("\x61\165\164\x68"); $this->client_id = config("\x61\160\160\x2e\x63\154\x69\145\156\x74\x5f\151\x64", ''); } public function getInfoBaca() { goto MGxv7; l0T9b: $baca = $results->baca; goto ZCTiv; ho_jL: return response()->json(["\x63\157\144\145" => $code, "\155\145\x73\x73\141\147\145" => $message], 200); goto bmER6; fs1V4: $code = 0; goto ZZvmD; hKhTM: $parameter = Parameter::where("\143\x6c\151\x65\x6e\x74\x5f\x69\x64", $this->client_id)->where("\x6e\x61\155\x65", "\x72\x65\141\x64\137\x62\145\146\x6f\162\145\x5f\147\x61\x6d\x65")->first(); goto Kb0E4; TUxyh: goto RiLkj; goto J_34x; ZCTiv: lp1N2: goto c0WQw; J_34x: OBciE: goto AJ_m3; oOAQz: RiLkj: goto ho_jL; Kb0E4: $parameter_baca = $parameter->value; goto rcIKS; RIQFi: $message = "\x41\x6e\144\141\x20\150\x61\x72\165\163\x20\x6d\x65\155\142\141\143\x61\40\155\x69\156\x69\155\141\154\40" . $parameter_baca . "\x20\142\x75\153\165\40\150\141\x72\x69\40\x69\x6e\151\x20\x75\x6e\x74\x75\153\40\x62\x65\162\155\141\x69\x6e\x20\147\141\x6d\145\41"; goto TUxyh; ZZvmD: $message = ''; goto Uvqh_; MGxv7: $user = auth()->user(); goto fs1V4; rcIKS: $results = DB::table("\x74\x74\x72\x78\137\x72\x65\x61\144\40\x61\163\x20\141")->select([DB::raw("\143\x6f\x75\x6e\x74\50\x64\151\163\164\151\156\143\164\x20\x62\157\x6f\153\137\x69\x64\x29\x20\141\x73\x20\142\x61\143\141")])->where("\141\x2e\143\154\x69\145\x6e\x74\137\x69\x64", "\x3d", $this->client_id)->where("\141\56\x75\x73\x65\x72\x5f\x69\144", "\75", $user->id)->whereRaw("\x43\117\116\x56\105\x52\124\x28\x61\56\x73\164\x61\x72\x74\137\162\x65\x61\144\x2c\40\x44\101\124\x45\x29\40\x3d\40\x43\x4f\x4e\126\105\x52\124\x28\x4e\x4f\x57\x28\x29\x2c\40\104\101\x54\x45\x29")->first(); goto xIrlJ; xIrlJ: if (!$results) { goto lp1N2; } goto l0T9b; Uvqh_: $parameter_baca = 0; goto hKhTM; AJ_m3: $code = 1; goto oOAQz; c0WQw: if ($baca >= $parameter_baca) { goto OBciE; } goto RIQFi; bmER6: } public function getWords() { goto V7d25; V8kku: $results = DB::table("\x74\153\x61\x6d\165\x73\x5f\x6b\x61\164\141\40\x61\163\x20\141")->select(["\x61\56\167\x6f\x72\x64"])->get()->pluck("\167\x6f\x72\x64")->toArray(); goto NNcts; NNcts: return response()->json($results, 200); goto o2vEP; V7d25: $user = auth()->user(); goto V8kku; o2vEP: } }
