<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-23 17:36:13             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Http\Controllers\Auth; use App\Logs; use Carbon\Carbon; use App\Models\User; use App\NetworkHelper; use App\Models\Parameter; use Illuminate\Support\Arr; use Illuminate\Support\Str; use Illuminate\Http\Request; use Illuminate\Support\Facades\DB; use Illuminate\Support\Facades\Log; use App\Http\Controllers\Controller; use Illuminate\Support\Facades\Hash; use Illuminate\Auth\Events\Registered; use Illuminate\Support\Facades\Validator; use Illuminate\Foundation\Auth\RegistersUsers; class RegisterController extends Controller { use RegistersUsers; protected $redirectTo = "\x2f"; protected $client_id = ''; public function __construct() { $this->middleware("\147\x75\145\163\x74"); $this->client_id = config("\141\x70\x70\56\143\154\151\145\156\x74\137\x69\x64", ''); } protected function validator(array $data) { return Validator::make($data, ["\x6e\141\155\145" => ["\x72\x65\x71\x75\x69\x72\145\x64", "\x73\164\x72\151\x6e\x67", "\x6d\x61\x78\x3a\x32\x35\65"], "\145\155\x61\x69\154" => ["\162\x65\161\165\x69\162\145\144", "\163\164\162\151\x6e\x67", "\145\155\141\151\154", "\x6d\141\170\72\x32\65\x35", "\165\x6e\x69\x71\165\145\x3a\165\163\x65\162\x73"], "\160\141\163\163\x77\x6f\x72\x64" => ["\162\145\x71\x75\x69\x72\x65\144", "\x73\x74\x72\x69\x6e\147", "\155\x69\x6e\x3a\70", "\x63\157\x6e\x66\x69\162\x6d\145\x64"]]); } protected function create(array $data) { return User::create(["\x6e\141\155\145" => $data["\x6e\x61\155\145"], "\145\x6d\141\x69\154" => $data["\145\x6d\x61\151\x6c"], "\x70\141\x73\x73\167\x6f\x72\144" => Hash::make($data["\x70\141\x73\x73\167\x6f\162\x64"]), "\x72\x6f\x6c\x65" => $data["\162\157\154\x65"], "\x66\x6c\141\147\x5f\x61\x70\160\x72\157\166\x65" => $data["\146\x6c\x61\x67\137\141\x70\x70\162\157\166\145"], "\143\x6c\151\145\x6e\x74\137\x69\144" => $this->client_id]); } public function mregist(Request $request) { goto Mh6Ej; bF4pB: return response()->json("\x50\x65\156\144\141\x66\164\x61\x72\141\x6e\x20\144\151\x74\165\x74\165\x70\54\x20\163\151\154\x61\x68\x6b\141\x6e\x20\150\x75\142\x75\156\147\151\40\x70\x65\164\x75\x67\x61\163\x20\160\x65\x72\160\x75\x73\164\141\153\141\141\156\56", 500); goto f5VKW; f5VKW: EZTKz: goto xB63O; Mh6Ej: $this->validator($request->all())->validate(); goto Pf4ne; xB63O: try { goto JHceT; a7ED5: goto sfG60; goto M3ZKr; rOGKg: $request["\146\154\x61\147\x5f\x61\x70\160\x72\157\166\x65"] = "\x4e"; goto A5OlH; JHceT: $flag_approve = Parameter::where("\143\x6c\x69\x65\x6e\164\x5f\151\x64", $this->client_id)->where("\156\141\155\145", "\141\160\160\x5f\162\x65\147\x5f\155\145\155\x62\145\162")->first(); goto boLNP; eHgI_: $request["\146\154\141\x67\x5f\141\160\x70\162\x6f\x76\x65"] = "\x59"; goto a7ED5; phf51: \DB::commit(); goto fapS0; vhb7J: $attr = DB::table("\164\141\x74\164\162\137\155\145\x6d\x62\x65\x72")->insert(["\151\x64" => $user->id, "\x63\154\x69\x65\156\164\x5f\x69\144" => $this->client_id, "\156\x69\153" => $request->nik, "\160\150\157\x6e\145" => $request->phone, "\142\151\162\164\150\144\x61\171" => $request->birthday, "\x67\x65\x6e\144\145\162" => $request->gender, "\143\x72\145\x61\x74\x65\x64\x5f\141\164" => Carbon::now("\101\163\x69\x61\x2f\112\x61\153\141\162\164\141")]); goto phf51; dpzch: event(new Registered($user)); goto GBEEb; MFtg_: $statusCode = 201; goto v3mO5; boLNP: $request["\x66\154\141\147\x5f\x61\x70\160\162\157\166\x65"] = "\131"; goto nGXq1; v3mO5: goto lza6b; goto iUX3L; GBEEb: $user->sendEmailVerificationNotification(); goto Q__Ty; v97on: $user = $this->create($request->all()); goto vhb7J; iUX3L: Zlyro: goto dpzch; nGXq1: if ($flag_approve->value) { goto nz0gf; } goto eHgI_; fapS0: if (NetworkHelper::hasInternetConnection()) { goto Zlyro; } goto gztMV; Q__Ty: $message = "\120\145\156\144\x61\146\164\x61\162\141\156\40\142\145\162\150\141\163\151\x6c\x21\40\123\151\x6c\141\150\x6b\141\x6e\x20\x6b\x6f\x6e\146\x69\162\x6d\x61\x73\151\40\x65\x6d\x61\x69\154\x20\x61\156\x64\x61\x2e"; goto Wa7K1; Wa7K1: $statusCode = 201; goto efHlW; A5OlH: sfG60: goto v97on; gztMV: Log::warning("\105\x6d\141\151\154\40\166\x65\162\151\146\151\x63\x61\x74\151\157\x6e\40\143\x6f\x75\x6c\144\40\x6e\157\164\40\142\145\x20\163\x65\x6e\x74\x20\146\157\162\40\165\x73\x65\162\40" . $user->email . "\x20\142\x65\143\141\x75\163\x65\x20\164\x68\x65\x72\145\40\151\163\x20\x6e\157\40\x69\x6e\164\145\x72\x6e\145\x74\x20\143\x6f\x6e\x6e\145\x63\164\151\x6f\x6e\x2e"); goto ukgPH; efHlW: lza6b: goto H03zM; ukgPH: $message = "\120\x65\156\x64\141\146\164\141\162\141\156\x20\x62\145\162\x68\141\163\x69\x6c\41\56"; goto MFtg_; H03zM: return response()->json($message, $statusCode); goto znKZ1; M3ZKr: nz0gf: goto rOGKg; znKZ1: } catch (\Exception $e) { \DB::rollBack(); return response()->json("\x50\x65\x6e\144\x61\x66\164\141\162\x61\x6e\40\x67\141\147\x61\x6c\41\x20\123\151\x6c\141\x68\x6b\x61\156\40\x63\x6f\142\x61\x20\154\x61\147\x69\x2e", 500); } goto DO8WP; zwJBK: $registrasi = Parameter::where("\143\x6c\x69\145\156\x74\x5f\151\144", $this->client_id)->where("\156\141\x6d\145", "\x72\x65\147\x5f\155\145\155\142\x65\162")->first(); goto oaq2M; Pf4ne: \DB::beginTransaction(); goto zwJBK; oaq2M: if ($registrasi->value) { goto EZTKz; } goto bF4pB; DO8WP: } }
