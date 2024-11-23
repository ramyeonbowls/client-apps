<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-23 17:36:13             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Http\Controllers\Core\Report; use App\Logs; use Exception; use Throwable; use Carbon\Carbon; use Illuminate\Support\Arr; use Illuminate\Support\Str; use Illuminate\Http\Request; use Illuminate\Http\JsonResponse; use Illuminate\Support\Facades\DB; use App\Http\Controllers\Controller; use Maatwebsite\Excel\Facades\Excel; use App\Exports\Report\ReadBookContentExport; use App\Services\Report\ReadBookContentService; use Yajra\DataTables\Facades\DataTables; class ReadBookContentController extends Controller { private ReadBookContentService $book_service; public function __construct() { $this->middleware("\141\x75\x74\x68"); $this->book_service = new ReadBookContentService(); } public function index(Request $request) : JsonResponse { goto cinph; QHA3K: $results = []; goto nL2BE; G7nr1: $logs->write(__FUNCTION__, "\123\x54\117\x50\xd\xa"); goto P8Cft; m9dY3: $logs = new Logs(Arr::last(explode("\134", get_class())) . "\114\157\147"); goto xt9hM; P8Cft: return DataTables::of($results)->escapeColumns()->addIndexColumn()->toJson(); goto LuSL6; nL2BE: try { goto hyLwD; LEdVt: $q++; goto kF0hp; FQIKx: $logs->write("\102\x49\116\104\x49\x4e\107", "\x5b" . implode("\54\x20", $queries[$q]["\x62\x69\156\144\151\x6e\x67\163"]) . "\135"); goto I8GyI; l2B2Q: $filter["\105\x4e\x44\137\x44\x41\x54\x45"] = $request->END_DATE ?? ''; goto NsExX; TU2zC: $filter["\x4b\x41\102\x55\x50\x41\124\x45\x4e"] = $request->KABUPATEN ?? ''; goto OpnSg; Z1PjI: lFkv3: goto wEDq5; ZzqjU: $queries = DB::getQueryLog(); goto GKPvS; OpnSg: $filter["\127\114"] = $request->WL ?? ''; goto M4SHF; NsExX: $results = $this->book_service->get($filter); goto ZzqjU; hyLwD: DB::enableQueryLog(); goto i5D52; GEqzH: ataKQ: goto LEdVt; i5D52: $filter["\x50\122\117\x56\x49\x4e\123\x49"] = $request->PROVINSI ?? ''; goto TU2zC; M4SHF: $filter["\x53\124\101\122\124\137\104\x41\124\105"] = $request->START_DATE ?? ''; goto l2B2Q; kF0hp: goto lFkv3; goto BCYlQ; GKPvS: $q = 0; goto Z1PjI; BCYlQ: TV0eS: goto p1MMs; I8GyI: $logs->write("\x53\x51\114", $sql); goto GEqzH; TMADa: $sql = Str::replaceArray("\77", $queries[$q]["\x62\x69\x6e\x64\x69\x6e\147\163"], str_replace("\77", "\47\77\47", $queries[$q]["\161\165\x65\162\171"])); goto FQIKx; wEDq5: if (!($q < count($queries))) { goto TV0eS; } goto TMADa; p1MMs: } catch (Throwable $th) { $logs->write("\x45\122\x52\117\122", $th->getMessage()); } goto G7nr1; xt9hM: $logs->write(__FUNCTION__, "\x53\124\101\122\124"); goto QHA3K; JcbXc: r9d4i: goto m9dY3; cinph: if (!$request->has("\156\x6f\x64\141\164\x61")) { goto r9d4i; } goto asOsQ; asOsQ: return DataTables::of([])->toJson(); goto JcbXc; LuSL6: } public function store() { } public function show(string $id) : JsonResponse { return response()->json($id, 200); } public function update() { } public function destroy(string $id) : JsonResponse { } public function ExportXLS(Request $request) { goto CjqTv; sejGM: RaiqC: goto E59ZF; VTMs4: $sql = Str::replaceArray("\77", $queries[$q]["\142\151\x6e\144\151\x6e\x67\163"], str_replace("\x3f", "\47\77\x27", $queries[$q]["\x71\x75\x65\162\171"])); goto xxKpt; IjoK0: goto l4C3M; goto RCRsq; E59ZF: $q++; goto IjoK0; fZ2nU: return Excel::download(new ReadBookContentExport($results), "\x4c\141\160\x6f\x72\x61\x6e\x5f\x42\x61\x63\141\x5f\x42\165\x6b\165\56\x78\154\x73\170"); goto VvcZF; WJLkA: $logs->write(__FUNCTION__, "\123\x54\x4f\x50\xd\12"); goto fZ2nU; bIFzJ: $logs->write("\123\121\x4c", $sql); goto sejGM; mX4YF: $queries = DB::getQueryLog(); goto MCwrK; tp0Vk: try { goto F5XnP; A0c5o: $filter["\123\x54\x41\x52\x54\137\104\101\x54\x45"] = $request->START_DATE ?? ''; goto lgsJ7; Jg9T1: $filter["\x57\114"] = $request->WL ?? ''; goto A0c5o; nramF: $this->book_service->get($filter)->map(function ($value, $i) use(&$results) { goto Cqw6r; grNm_: $results[$i]["\164\151\164\154\145"] = $value->title; goto hqb2O; hqb2O: $results[$i]["\x64\x75\162\x61\x73\x69"] = $value->durasi; goto nA_3T; Cqw6r: $results[$i]["\167\x6c\x5f\156\x61\x6d\145"] = $value->wl_name; goto JGZpU; XJXlF: $results[$i]["\160\x65\155\x62\141\x63\141"] = $value->pembaca; goto grNm_; uTEau: $results[$i]["\153\141\x62\x75\160\141\164\x65\156\137\156\x61\155\145"] = $value->kabupaten_name; goto XJXlF; JGZpU: $results[$i]["\160\162\x6f\x76\151\156\x73\x69\137\156\x61\155\145"] = $value->provinsi_name; goto uTEau; nA_3T: }); goto nRKJZ; FYipI: $filter["\120\122\117\126\111\116\x53\x49"] = $request->PROVINSI ?? ''; goto k9mcY; k9mcY: $filter["\113\101\102\x55\120\x41\124\105\116"] = $request->KABUPATEN ?? ''; goto Jg9T1; F5XnP: DB::enableQueryLog(); goto FYipI; lgsJ7: $filter["\x45\x4e\104\137\x44\101\124\105"] = $request->END_DATE ?? ''; goto nramF; nRKJZ: } catch (\Exception $e) { $logs->write("\x45\x52\122\117\x52", $e->getMessage()); } goto mX4YF; M3tsK: $logs->write(__FUNCTION__, "\x53\124\x41\122\124"); goto oRMRp; Ybgod: if (!($q < count($queries))) { goto HtBe6; } goto VTMs4; oRMRp: $results = []; goto tp0Vk; xxKpt: $logs->write("\x42\111\116\x44\111\116\x47", "\x5b" . implode("\54\40", $queries[$q]["\x62\151\156\x64\151\156\147\163"]) . "\135"); goto bIFzJ; MCwrK: $q = 0; goto AdzcJ; RCRsq: HtBe6: goto WJLkA; AdzcJ: l4C3M: goto Ybgod; CjqTv: $logs = new Logs(Arr::last(explode("\134", get_class())) . "\x4c\157\147"); goto M3tsK; VvcZF: } }
