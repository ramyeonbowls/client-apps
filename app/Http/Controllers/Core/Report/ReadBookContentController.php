<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:19             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Http\Controllers\Core\Report; use App\Logs; use Exception; use Throwable; use Carbon\Carbon; use Illuminate\Support\Arr; use Illuminate\Support\Str; use Illuminate\Http\Request; use Illuminate\Http\JsonResponse; use Illuminate\Support\Facades\DB; use App\Http\Controllers\Controller; use Maatwebsite\Excel\Facades\Excel; use App\Exports\Report\ReadBookContentExport; use App\Services\Report\ReadBookContentService; use Yajra\DataTables\Facades\DataTables; class ReadBookContentController extends Controller { private ReadBookContentService $book_service; public function __construct() { $this->middleware("\141\x75\x74\x68"); $this->book_service = new ReadBookContentService(); } public function index(Request $request) : JsonResponse { goto inbNW; I_65g: $logs->write(__FUNCTION__, "\x53\x54\101\x52\124"); goto mKHaX; jzfLM: A2DAe: goto pysSm; WQv1K: try { goto b0JMR; F5hPm: o1O6T: goto AkH9t; G6zxz: beI6E: goto zT2h8; Aalub: $filter["\x53\124\101\x52\x54\x5f\104\x41\x54\105"] = $request->START_DATE ?? ''; goto QrSCf; rYLsu: $results = $this->book_service->get($filter); goto QCJjR; AkH9t: $q++; goto bNaKL; LfAXA: if (!($q < count($queries))) { goto beI6E; } goto wuhcy; bNaKL: goto INAG1; goto G6zxz; wuhcy: $sql = Str::replaceArray("\x3f", $queries[$q]["\x62\x69\x6e\x64\151\x6e\147\x73"], str_replace("\x3f", "\47\77\47", $queries[$q]["\x71\x75\x65\x72\171"])); goto kWf7k; QrSCf: $filter["\105\x4e\104\x5f\x44\101\124\105"] = $request->END_DATE ?? ''; goto rYLsu; c0f0J: $logs->write("\123\x51\114", $sql); goto F5hPm; e0318: $filter["\127\x4c"] = $request->WL ?? ''; goto Aalub; kSnSv: $filter["\113\x41\x42\x55\x50\x41\124\x45\116"] = $request->KABUPATEN ?? ''; goto e0318; kt0Cz: INAG1: goto LfAXA; QCJjR: $queries = DB::getQueryLog(); goto CtMQs; b0JMR: DB::enableQueryLog(); goto z1Gkp; CtMQs: $q = 0; goto kt0Cz; kWf7k: $logs->write("\x42\x49\116\104\111\x4e\107", "\x5b" . implode("\x2c\x20", $queries[$q]["\x62\151\x6e\144\x69\x6e\147\x73"]) . "\135"); goto c0f0J; z1Gkp: $filter["\120\x52\117\x56\x49\116\x53\x49"] = $request->PROVINSI ?? ''; goto kSnSv; zT2h8: } catch (Throwable $th) { $logs->write("\105\x52\x52\x4f\x52", $th->getMessage()); } goto vXOJi; inbNW: if (!$request->has("\x6e\x6f\x64\x61\x74\x61")) { goto A2DAe; } goto YwRAp; vXOJi: $logs->write(__FUNCTION__, "\x53\124\x4f\x50\xd\12"); goto QeJUD; pysSm: $logs = new Logs(Arr::last(explode("\134", get_class())) . "\114\x6f\x67"); goto I_65g; QeJUD: return DataTables::of($results)->escapeColumns()->addIndexColumn()->toJson(); goto Rks3o; mKHaX: $results = []; goto WQv1K; YwRAp: return DataTables::of([])->toJson(); goto jzfLM; Rks3o: } public function store() { } public function show(string $id) : JsonResponse { return response()->json($id, 200); } public function update() { } public function destroy(string $id) : JsonResponse { } public function ExportXLS(Request $request) { goto RQhzc; tuESR: $logs->write("\x42\x49\116\x44\x49\116\x47", "\x5b" . implode("\x2c\40", $queries[$q]["\x62\151\156\144\151\x6e\x67\163"]) . "\x5d"); goto BiFmZ; v9BUC: if (!($q < count($queries))) { goto BNXZ3; } goto Vkpe0; xA1Cq: $queries = DB::getQueryLog(); goto MO9hR; EcpyB: $q++; goto ZoW2g; RLvvb: $logs->write(__FUNCTION__, "\x53\124\x41\x52\x54"); goto ADL1O; uHyMW: try { goto qdzow; uRUiL: $filter["\x4b\101\102\x55\x50\x41\124\x45\x4e"] = $request->KABUPATEN ?? ''; goto Z576q; JC9Pe: $filter["\x50\122\117\x56\x49\116\123\x49"] = $request->PROVINSI ?? ''; goto uRUiL; aj2MT: $filter["\x53\124\101\122\x54\137\x44\101\124\105"] = $request->START_DATE ?? ''; goto AD5Eo; Z576q: $filter["\127\114"] = $request->WL ?? ''; goto aj2MT; AD5Eo: $filter["\x45\116\104\x5f\x44\x41\124\105"] = $request->END_DATE ?? ''; goto VI9hw; VI9hw: $this->book_service->get($filter)->map(function ($value, $i) use(&$results) { goto Aa8cN; EQAug: $results[$i]["\144\x75\162\141\163\x69"] = $value->durasi; goto vbbNg; O7eL_: $results[$i]["\x6b\141\x62\x75\x70\141\x74\x65\x6e\137\156\141\155\145"] = $value->kabupaten_name; goto mR3Oc; Aa8cN: $results[$i]["\x77\154\x5f\156\x61\155\145"] = $value->wl_name; goto qoiKg; J6aLc: $results[$i]["\x74\x69\164\x6c\x65"] = $value->title; goto EQAug; mR3Oc: $results[$i]["\160\145\x6d\142\x61\x63\x61"] = $value->pembaca; goto J6aLc; qoiKg: $results[$i]["\160\162\157\x76\x69\156\163\151\x5f\156\x61\x6d\145"] = $value->provinsi_name; goto O7eL_; vbbNg: }); goto GEKLO; qdzow: DB::enableQueryLog(); goto JC9Pe; GEKLO: } catch (\Exception $e) { $logs->write("\105\x52\x52\x4f\122", $e->getMessage()); } goto xA1Cq; ZoW2g: goto KpOD2; goto a8uW7; RQhzc: $logs = new Logs(Arr::last(explode("\x5c", get_class())) . "\x4c\x6f\x67"); goto RLvvb; a8uW7: BNXZ3: goto F4Shw; Vkpe0: $sql = Str::replaceArray("\x3f", $queries[$q]["\142\x69\x6e\144\x69\x6e\x67\x73"], str_replace("\77", "\47\77\x27", $queries[$q]["\x71\x75\145\x72\171"])); goto tuESR; BiFmZ: $logs->write("\123\x51\x4c", $sql); goto g9t0i; MohCZ: KpOD2: goto v9BUC; F4Shw: $logs->write(__FUNCTION__, "\x53\x54\x4f\120\xd\xa"); goto xFk47; ADL1O: $results = []; goto uHyMW; xFk47: return Excel::download(new ReadBookContentExport($results), "\x4c\141\x70\157\162\141\x6e\137\102\x61\x63\141\x5f\x42\165\153\x75\x2e\x78\154\x73\170"); goto mHSjk; g9t0i: hyZ58: goto EcpyB; MO9hR: $q = 0; goto MohCZ; mHSjk: } }
