<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:20             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Http\Controllers\Core\Transaction; use Exception; use Throwable; use App\Logs; use App\Http\Controllers\Controller; use App\Services\Transaction\ApporvalUserService; use Carbon\Carbon; use Illuminate\Support\Arr; use Illuminate\Support\Str; use Illuminate\Http\Request; use Illuminate\Http\JsonResponse; use Illuminate\Support\Facades\DB; use Illuminate\Support\Facades\Log; use Yajra\DataTables\Facades\DataTables; class ApporvalUserController extends Controller { private ApporvalUserService $user_service; public function __construct() { $this->middleware("\x61\x75\x74\150"); $this->user_service = new ApporvalUserService(); } public function index(Request $request) : JsonResponse { goto dlerp; Y7S_a: $logs->write(__FUNCTION__, "\123\x54\101\122\x54"); goto JbrUt; dlerp: $logs = new Logs(Arr::last(explode("\x5c", get_class())) . "\x4c\x6f\x67"); goto Y7S_a; fB0bt: $logs->write(__FUNCTION__, "\123\124\117\120\xd\12"); goto ZQELd; JbrUt: $results = []; goto rxP2x; ZQELd: return DataTables::of($results)->escapeColumns([])->addIndexColumn()->toJson(); goto ITQnr; rxP2x: try { goto gBrA0; UEHs3: goto Ow0X3; goto rNxza; urVmp: $q++; goto UEHs3; p9wQd: $sql = Str::replaceArray("\x3f", $queries[$q]["\142\151\x6e\144\151\x6e\x67\x73"], str_replace("\x3f", "\x27\77\47", $queries[$q]["\x71\165\145\x72\171"])); goto xhoqa; mBelA: if (!($q < count($queries))) { goto J_V8J; } goto p9wQd; nX2ga: $logs->write("\123\121\114", $sql); goto PmYKi; WykzU: $results = $this->user_service->get(); goto kFj3H; gBrA0: DB::enableQueryLog(); goto WykzU; xhoqa: $logs->write("\102\x49\116\x44\111\x4e\107", "\x5b" . implode("\54\x20", $queries[$q]["\x62\x69\x6e\144\x69\x6e\147\x73"]) . "\135"); goto nX2ga; PmYKi: j2O1F: goto urVmp; PeDjL: Ow0X3: goto mBelA; Fvd0Q: $q = 0; goto PeDjL; rNxza: J_V8J: goto Nw6NP; kFj3H: $queries = DB::getQueryLog(); goto Fvd0Q; Nw6NP: } catch (Throwable $th) { $logs->write("\x45\x52\122\x4f\122", $th->getMessage()); } goto fB0bt; ITQnr: } public function store(Request $request) : JsonResponse { goto dm9i_; dm9i_: $logs = new Logs(Arr::last(explode("\134", get_class())) . "\114\x6f\x67"); goto O24wN; a2Z3u: try { goto ZL_L9; qSL70: $result["\163\x74\141\x74\x75\163"] = 201; goto WCBqO; FjQs4: $q++; goto u6e16; u6e16: goto PspSM; goto X_da_; Hzz0a: if (!($q < count($queries))) { goto NRW3C; } goto K5HsI; ZLCSv: if (!$store) { goto Y0TBO; } goto g4Vqm; K5HsI: $sql = Str::replaceArray("\77", $queries[$q]["\x62\x69\156\x64\151\156\147\163"], str_replace("\x3f", "\47\x3f\47", $queries[$q]["\161\165\145\162\x79"])); goto KkqWV; PCLmT: PspSM: goto Hzz0a; RHpp3: IaAgD: goto FjQs4; WCBqO: $result["\155\x65\x73\x73\141\x67\x65"] = "\x44\141\x74\141\x20\x62\x65\162\150\141\163\151\x6c\x20\144\x69\40\141\x70\160\162\x6f\166\145\x2e"; goto kj6VH; HoO8T: $q = 0; goto PCLmT; kj6VH: Y0TBO: goto bZ_x2; g4Vqm: $logs->write("\x49\x4e\106\117", "\123\x75\143\143\x65\163\x73\146\165\x6c\x6c\x79\40\101\x70\x70\162\157\x76\145"); goto qSL70; KkqWV: $logs->write("\102\x49\116\104\111\116\107", "\x5b" . implode("\x2c\x20", $queries[$q]["\x62\151\156\x64\151\156\x67\x73"]) . "\x5d"); goto rcZSc; EejTB: $store = $this->user_service->store($request->all()); goto ZLCSv; ZL_L9: DB::enableQueryLog(); goto EejTB; rcZSc: $logs->write("\x53\121\114", $sql); goto RHpp3; X_da_: NRW3C: goto CSX5x; bZ_x2: $queries = DB::getQueryLog(); goto HoO8T; CSX5x: } catch (Throwable $th) { $logs->write("\x45\x52\122\117\x52", $th->getMessage()); $result["\155\x65\x73\x73\x61\147\x65"] = "\x44\141\164\141\x20\x67\141\147\141\x6c\x20\x64\x69\x20\141\160\160\162\x6f\166\145\56\x3c\x62\x72\x3e" . $th->getMessage(); } goto ZTLho; O24wN: $logs->write(__FUNCTION__, "\123\124\101\122\x54"); goto aqQ18; aqQ18: $result["\x73\x74\x61\164\x75\x73"] = 200; goto qvC23; ZTLho: return response()->json($result["\155\x65\163\x73\141\147\145"], $result["\x73\164\141\x74\165\x73"]); goto YcWIH; qvC23: $result["\x6d\145\x73\163\141\x67\x65"] = ''; goto a2Z3u; YcWIH: } public function show(string $id) : JsonResponse { return response()->json($id, 200); } public function update(Request $request, string $id) : JsonResponse { return response()->json($request, 200); } public function destroy(string $id) : JsonResponse { return response()->json($id, 200); } }
