<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:19             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Http\Controllers\Core\Setting; use App\Logs; use Exception; use Throwable; use Carbon\Carbon; use Illuminate\Support\Arr; use Illuminate\Http\Request; use Illuminate\Http\JsonResponse; use Illuminate\Support\Facades\DB; use Illuminate\Support\Facades\Log; use App\Http\Controllers\Controller; use Yajra\DataTables\Facades\DataTables; use App\Services\Setting\LayarPenulisMasterService; use App\Http\Requests\Setting\StoreLayarPenulisMasterRequest; use App\Http\Requests\Setting\UpdateLayarPenulisMasterRequest; class LayarPenulisMasterController extends Controller { private LayarPenulisMasterService $LayarPenulis_service; public function __construct() { $this->middleware("\x61\165\x74\150"); $this->LayarPenulis_service = new LayarPenulisMasterService(); } public function index(Request $request) : JsonResponse { goto RGe69; k5fcY: $logs->write(__FUNCTION__, "\x53\x54\x41\x52\124"); goto MzNTk; sGy2k: $logs->write(__FUNCTION__, "\x53\124\117\x50\xd\12"); goto UXf4w; RGe69: $logs = new Logs(Arr::last(explode("\134", get_class())) . "\x4c\157\x67"); goto k5fcY; VSzBE: try { goto Rfqls; XKt1T: $logs->write("\x42\111\x4e\x44\111\x4e\107", "\x5b" . implode("\x2c\40", $queries[$q]["\142\x69\x6e\x64\x69\156\147\163"]) . "\x5d"); goto D6UE9; wnhgv: kK8bC: goto bggew; R894l: goto sVtLP; goto wnhgv; TsV_O: $results = $this->LayarPenulis_service->get(); goto RCf_C; ySrIJ: UhNH2: goto rSSf7; RCf_C: $queries = DB::getQueryLog(); goto PuNcZ; PuNcZ: $q = 0; goto v5Z4x; D6UE9: $logs->write("\x53\121\x4c", $queries[$q]["\x71\165\x65\162\x79"]); goto ySrIJ; tzQsk: if (!($q < count($queries))) { goto kK8bC; } goto XKt1T; rSSf7: $q++; goto R894l; Rfqls: DB::enableQueryLog(); goto TsV_O; v5Z4x: sVtLP: goto tzQsk; bggew: } catch (Throwable $th) { $logs->write("\x45\122\122\117\x52", $th->getMessage()); } goto sGy2k; UXf4w: return DataTables::of($results)->escapeColumns()->editColumn("\143\x72\x65\x61\x74\x65\x64\x5f\141\x74", function ($value) { return Carbon::parse($value->created_at)->toDateTimeString(); })->editColumn("\x75\x70\x64\x61\x74\x65\x64\137\141\164", function ($value) { return Carbon::parse($value->updated_at)->toDateTimeString(); })->addIndexColumn()->toJson(); goto gQ1kX; MzNTk: $results = []; goto VSzBE; gQ1kX: } public function store(StoreLayarPenulisMasterRequest $request) : JsonResponse { goto ZuzJc; ZuzJc: $validated = $request->validated(); goto QxtJQ; Qk3b5: try { goto xk3uw; PgVch: try { goto oa603; Te6xs: $extension = $request->file("\146\x69\154\145")->getClientOriginalExtension(); goto s9mDo; s9mDo: $LayarPenulis_name = "\114\x50\137" . $request->id . "\x2e" . $extension; goto cFhJ4; oa603: $LayarPenulis_file = $request->file("\x66\x69\x6c\x65")->getClientOriginalName(); goto Te6xs; TOH20: $validated["\146\x69\154\x65"] = $LayarPenulis_name; goto GWF04; cFhJ4: $request->file("\146\151\x6c\x65")->storeAs("\57\160\x75\x62\154\151\143\x2f\151\x6d\141\147\145\x73\x2f\156\x65\167\163", $LayarPenulis_name); goto TOH20; GWF04: } catch (Throwable $th) { $logs->write("\x45\x52\x52\117\x52", $th->getMessage()); } goto a4Yly; E8fc7: if (!$created) { goto bKjAb; } goto quZt8; shHjG: goto WaJr0; goto PFNpY; xk3uw: DB::enableQueryLog(); goto bR6SD; a4Yly: wKHMq: goto fIb3A; CwOKd: if (!($q < count($queries))) { goto janj0; } goto xfyFW; qcBaM: $logs->write("\123\x51\114", $queries[$q]["\x71\x75\x65\x72\171"]); goto oHw3Q; eGb3C: $queries = DB::getQueryLog(); goto csGwZ; t6Buj: $result["\x6d\145\163\x73\141\x67\x65"] = "\x44\x61\164\141\x20\142\x65\162\150\141\163\151\154\40\144\x69\x62\165\141\164\x2e"; goto Ga1W0; XCKAy: $q++; goto shHjG; PFNpY: janj0: goto qnbo0; Ga1W0: bKjAb: goto eGb3C; bR6SD: if (!$request->hasFile("\x66\x69\x6c\145")) { goto wKHMq; } goto PgVch; O4YV0: WaJr0: goto CwOKd; fIb3A: $created = $this->LayarPenulis_service->store((object) $validated); goto E8fc7; xfyFW: $logs->write("\102\x49\116\104\111\x4e\107", "\133" . implode("\x2c\x20", $queries[$q]["\142\x69\x6e\144\x69\156\x67\x73"]) . "\135"); goto qcBaM; hGwRH: $result["\163\x74\141\164\x75\163"] = 201; goto t6Buj; oHw3Q: bVr5T: goto XCKAy; quZt8: $logs->write("\111\x4e\106\117", "\123\x75\x63\143\x65\x73\163\x66\x75\x6c\x6c\x79\x20\143\x72\145\141\164\145\144"); goto hGwRH; csGwZ: $q = 0; goto O4YV0; qnbo0: } catch (Throwable $th) { $logs->write("\x45\x52\x52\117\122", $th->getMessage()); $result["\x6d\x65\163\163\x61\147\x65"] = "\x44\x61\x74\x61\40\x67\x61\147\x61\x6c\40\x64\151\142\165\x61\164\x2e\x3c\142\x72\x3e" . $th->getMessage(); } goto HPY__; HPY__: $logs->write(__FUNCTION__, "\x53\x54\x4f\120\15\12"); goto CqBD0; QxtJQ: $logs = new Logs(Arr::last(explode("\x5c", get_class())) . "\114\157\147"); goto aQV12; OCc8R: $result["\x73\x74\141\164\x75\163"] = 200; goto HqVqU; aQV12: $logs->write(__FUNCTION__, "\123\x54\x41\122\x54"); goto OCc8R; HqVqU: $result["\155\145\x73\x73\x61\x67\145"] = ''; goto Qk3b5; CqBD0: return response()->json($result["\x6d\145\163\163\x61\147\145"], $result["\163\x74\x61\164\x75\163"]); goto mfWoJ; mfWoJ: } public function show(string $id) : JsonResponse { return response()->json($id, 200); } public function update(UpdateLayarPenulisMasterRequest $request, string $id) : JsonResponse { goto faI8j; yhTtK: $logs->write(__FUNCTION__, "\x53\x54\x41\122\x54"); goto ULbZM; faI8j: try { $validated = $request->validated(); } catch (ValidationException $e) { return response()->json(["\x65\162\x72\157\162" => $e->errors()], 422); } goto PTSvs; rcSCv: return response()->json($result["\155\145\163\163\x61\147\x65"], $result["\x73\x74\141\x74\165\x73"]); goto ZnhnX; MJwLB: try { goto xmD8H; tiC2y: BZw4i: goto pvdxT; v9xbF: goto Ir9QN; goto At9DK; QEhYi: $result["\155\x65\163\x73\141\147\145"] = "\104\141\x74\x61\x20\x62\145\x72\150\141\x73\x69\154\40\x64\x69\160\x65\x72\x62\x61\162\165\151\x2e"; goto tiC2y; Z3UBa: if (!$updated) { goto BZw4i; } goto I03zV; xzOhJ: $logs->write("\x53\121\114", $queries[$q]["\161\x75\145\x72\171"]); goto M3lvc; kBZZR: $logs->write("\102\111\x4e\x44\111\x4e\x47", "\x5b" . implode("\54\40", $queries[$q]["\x62\x69\156\x64\x69\x6e\147\x73"]) . "\x5d"); goto xzOhJ; gr0T0: if (!$request->hasFile("\x66\x69\x6c\145")) { goto a34nT; } goto A5BZh; A5BZh: try { goto APmhT; f8odI: $extension = $request->file("\x66\x69\154\145")->getClientOriginalExtension(); goto btz2X; vlmhD: $validated["\146\x69\x6c\145"] = $LayarPenulis_name; goto MePNZ; oDXdD: $request->file("\146\x69\154\145")->storeAs("\57\160\x75\142\x6c\x69\143\x2f\151\x6d\x61\147\x65\x73\57\156\x65\x77\163", $LayarPenulis_name); goto vlmhD; btz2X: $LayarPenulis_name = "\114\x50\x5f" . $request->id . "\56" . $extension; goto oDXdD; APmhT: $LayarPenulis_file = $request->file("\146\x69\x6c\145")->getClientOriginalName(); goto f8odI; MePNZ: } catch (Throwable $th) { $logs->write("\105\x52\122\117\122", $th->getMessage()); } goto GwWBv; GfTWc: if (!($q < count($queries))) { goto JaVDk; } goto kBZZR; At9DK: JaVDk: goto koxPS; I03zV: $logs->write("\111\116\106\117", "\x53\x75\143\x63\x65\x73\x73\146\x75\x6c\x6c\171\x20\165\160\x64\x61\164\145\144"); goto UAkex; uMLIt: Ir9QN: goto GfTWc; GwWBv: a34nT: goto EDc4E; xmD8H: DB::enableQueryLog(); goto gr0T0; mCc32: $q = 0; goto uMLIt; M3lvc: SEUda: goto mfdzq; UAkex: $result["\x73\x74\x61\x74\165\x73"] = 201; goto QEhYi; EDc4E: $updated = $this->LayarPenulis_service->update((object) $validated, $id); goto Z3UBa; pvdxT: $queries = DB::getQueryLog(); goto mCc32; mfdzq: $q++; goto v9xbF; koxPS: } catch (Throwable $th) { $logs->write("\x45\122\122\x4f\x52", $th->getMessage()); $result["\x6d\145\163\163\141\x67\x65"] = "\104\141\x74\141\40\147\141\x67\141\154\x20\144\151\x70\145\x72\x62\141\162\165\x69\x2e\x3c\x62\x72\76" . $th->getMessage(); } goto rcSCv; PTSvs: $logs = new Logs(Arr::last(explode("\134", get_class())) . "\114\x6f\x67"); goto yhTtK; ULbZM: $result["\x73\x74\x61\164\x75\x73"] = 200; goto NcVv9; NcVv9: $result["\155\x65\x73\163\141\147\145"] = ''; goto MJwLB; ZnhnX: } public function destroy(string $id) : JsonResponse { goto syFSp; ltWks: $result["\155\145\163\x73\141\147\145"] = ''; goto eITYQ; f55rR: $logs->write(__FUNCTION__, "\123\x54\117\120\15\xa"); goto b7mfY; DBkmY: $logs->write(__FUNCTION__, "\x53\x54\101\122\124"); goto qbncS; qbncS: $result["\163\x74\141\164\165\x73"] = 200; goto ltWks; b7mfY: return response()->json($result["\155\x65\163\x73\141\147\x65"], $result["\163\164\141\x74\165\163"]); goto r_jju; syFSp: $logs = new Logs(Arr::last(explode("\134", get_class())) . "\x4c\x6f\x67"); goto DBkmY; eITYQ: try { goto m4QII; HMFJm: $logs->write("\123\x51\x4c", $queries[$q]["\x71\x75\x65\x72\171"]); goto qR6cI; QcL5B: if (!($q < count($queries))) { goto x10Ma; } goto fRnhL; tsCUv: $result["\155\145\163\x73\x61\x67\x65"] = "\x44\x61\x74\141\x20\x62\x65\162\x68\x61\163\151\154\40\x64\151\x68\x61\160\x75\x73"; goto HCtk2; fRnhL: $logs->write("\x42\x49\116\104\x49\x4e\x47", "\133" . implode("\x2c\x20", $queries[$q]["\142\151\156\144\x69\156\147\x73"]) . "\x5d"); goto HMFJm; HCtk2: sJWoC: goto S15lZ; m4QII: DB::enableQueryLog(); goto W2P1F; W2P1F: $deleted = $this->LayarPenulis_service->delete($id); goto myETO; myETO: $queries = DB::getQueryLog(); goto xrmkT; xrmkT: $q = 0; goto AtWjq; qR6cI: wHMwV: goto A5rLI; rommu: if (!$deleted) { goto sJWoC; } goto tsCUv; A5rLI: $q++; goto hPsyN; cRl25: x10Ma: goto rommu; AtWjq: BByKF: goto QcL5B; hPsyN: goto BByKF; goto cRl25; S15lZ: } catch (Throwable $th) { $logs->write("\105\122\x52\117\122", $th->getMessage()); $result["\x6d\145\163\163\141\147\x65"] = "\104\x61\x74\x61\40\147\x61\147\x61\x6c\40\144\x69\142\165\141\164\x2e\74\142\x72\x3e" . $th->getMessage(); } goto f55rR; r_jju: } }
