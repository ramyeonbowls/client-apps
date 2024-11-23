<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-23 17:36:14             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Http\Controllers\Core\Setting; use App\Logs; use Exception; use Throwable; use Carbon\Carbon; use Illuminate\Support\Arr; use Illuminate\Http\Request; use Illuminate\Http\JsonResponse; use Illuminate\Support\Facades\DB; use Illuminate\Support\Facades\Log; use App\Http\Controllers\Controller; use Yajra\DataTables\Facades\DataTables; use App\Services\Setting\TajukUtamaMasterService; use App\Http\Requests\Setting\StoreTajukUtamaMasterRequest; use App\Http\Requests\Setting\UpdateTajukUtamaMasterRequest; class TajukUtamaMasterController extends Controller { private TajukUtamaMasterService $TajukUtama_service; public function __construct() { $this->middleware("\x61\x75\164\x68"); $this->TajukUtama_service = new TajukUtamaMasterService(); } public function index(Request $request) : JsonResponse { goto SROep; Ax42C: $results = []; goto WY_uP; RHvlq: $logs->write(__FUNCTION__, "\123\124\x41\122\124"); goto Ax42C; SROep: $logs = new Logs(Arr::last(explode("\x5c", get_class())) . "\114\x6f\x67"); goto RHvlq; Y1tjD: return DataTables::of($results)->escapeColumns()->editColumn("\143\x72\x65\141\164\145\x64\137\x61\x74", function ($value) { return Carbon::parse($value->created_at)->toDateTimeString(); })->editColumn("\x75\x70\x64\141\x74\x65\x64\137\141\164", function ($value) { return Carbon::parse($value->updated_at)->toDateTimeString(); })->addIndexColumn()->toJson(); goto nNygX; WY_uP: try { goto P7zSm; gEnTz: goto W76Ls; goto uzlIj; Li0Sl: W76Ls: goto aU2rP; P7zSm: DB::enableQueryLog(); goto zPRcr; aU2rP: if (!($q < count($queries))) { goto SglFV; } goto UL6Z8; zPRcr: $results = $this->TajukUtama_service->get(); goto Rm1mE; q0GtI: $logs->write("\x53\121\114", $queries[$q]["\x71\165\x65\x72\x79"]); goto PmqWl; pKxjD: $q++; goto gEnTz; UL6Z8: $logs->write("\x42\x49\x4e\104\111\116\107", "\x5b" . implode("\x2c\x20", $queries[$q]["\x62\x69\x6e\x64\151\x6e\147\163"]) . "\135"); goto q0GtI; uzlIj: SglFV: goto nXNWS; Rm1mE: $queries = DB::getQueryLog(); goto Pmm_e; PmqWl: mHjme: goto pKxjD; Pmm_e: $q = 0; goto Li0Sl; nXNWS: } catch (Throwable $th) { $logs->write("\105\x52\x52\117\122", $th->getMessage()); } goto IfJMA; IfJMA: $logs->write(__FUNCTION__, "\123\x54\117\120\xd\12"); goto Y1tjD; nNygX: } public function store(StoreTajukUtamaMasterRequest $request) : JsonResponse { goto f3bBK; VLAqR: $logs->write(__FUNCTION__, "\123\124\117\x50\xd\xa"); goto KozCm; Y9FPR: $logs = new Logs(Arr::last(explode("\134", get_class())) . "\114\157\147"); goto hbtLj; KozCm: return response()->json($result["\x6d\x65\x73\163\x61\147\x65"], $result["\x73\164\x61\164\x75\x73"]); goto zfcAW; f3bBK: $validated = $request->validated(); goto Y9FPR; SCCzD: try { goto gmloJ; W9JSk: ySC0C: goto nu7VF; gmloJ: DB::enableQueryLog(); goto bxL3I; ykItE: $q++; goto XZsDk; nu7VF: $queries = DB::getQueryLog(); goto ovPv1; FFAgu: $result["\155\x65\163\x73\x61\x67\x65"] = "\x44\141\x74\x61\x20\142\145\x72\150\x61\x73\x69\154\40\x64\151\x62\x75\x61\164\56"; goto W9JSk; ykBIs: $logs->write("\x53\x51\x4c", $queries[$q]["\x71\165\145\x72\171"]); goto pSAEA; ovPv1: $q = 0; goto I3pwV; DrhNf: qNXZ_: goto hGFC9; RLh9F: $created = $this->TajukUtama_service->store((object) $validated); goto TtAPo; Bi1m5: $result["\x73\x74\141\x74\165\163"] = 201; goto FFAgu; I3pwV: baA9L: goto X8ltX; pSAEA: fWpWn: goto ykItE; R0MF7: $logs->write("\x49\x4e\106\x4f", "\123\x75\143\143\x65\163\163\146\x75\154\x6c\x79\40\x63\162\145\141\x74\145\x64"); goto Bi1m5; Jr2lE: try { goto k9Gr2; k9Gr2: $TajukUtama_file = $request->file("\146\x69\154\x65")->getClientOriginalName(); goto s3GHL; e5Vrr: $validated["\146\x69\154\145"] = $TajukUtama_name; goto XuILb; V_efW: $request->file("\146\151\x6c\145")->storeAs("\57\160\165\x62\x6c\x69\x63\57\x69\x6d\141\x67\x65\x73\x2f\x6e\x65\x77\x73", $TajukUtama_name); goto e5Vrr; s3GHL: $extension = $request->file("\x66\x69\x6c\x65")->getClientOriginalExtension(); goto rf9U8; rf9U8: $TajukUtama_name = "\x54\x55\137" . $request->id . "\56" . $extension; goto V_efW; XuILb: } catch (Throwable $th) { $logs->write("\x45\x52\122\x4f\x52", $th->getMessage()); } goto sEbyW; TtAPo: if (!$created) { goto ySC0C; } goto R0MF7; sEbyW: NFvC1: goto RLh9F; gwhm3: $logs->write("\x42\x49\x4e\104\111\116\x47", "\x5b" . implode("\54\40", $queries[$q]["\x62\151\x6e\x64\151\156\x67\x73"]) . "\135"); goto ykBIs; X8ltX: if (!($q < count($queries))) { goto qNXZ_; } goto gwhm3; bxL3I: if (!$request->hasFile("\146\151\154\x65")) { goto NFvC1; } goto Jr2lE; XZsDk: goto baA9L; goto DrhNf; hGFC9: } catch (Throwable $th) { $logs->write("\105\122\122\117\x52", $th->getMessage()); $result["\x6d\145\x73\x73\x61\147\x65"] = "\104\141\x74\x61\x20\x67\141\147\141\x6c\40\x64\x69\x62\165\141\x74\56\x3c\x62\x72\x3e" . $th->getMessage(); } goto VLAqR; wvYxO: $result["\x73\164\x61\164\x75\x73"] = 200; goto oTnZG; oTnZG: $result["\x6d\x65\163\x73\141\x67\145"] = ''; goto SCCzD; hbtLj: $logs->write(__FUNCTION__, "\123\124\101\x52\x54"); goto wvYxO; zfcAW: } public function show(string $id) : JsonResponse { return response()->json($id, 200); } public function update(UpdateTajukUtamaMasterRequest $request, string $id) : JsonResponse { goto DPIV4; JW9Fb: return response()->json($result["\155\x65\163\x73\141\x67\x65"], $result["\x73\164\141\164\165\163"]); goto rEaCX; UUzr0: $logs = new Logs(Arr::last(explode("\134", get_class())) . "\114\157\147"); goto UEcyu; mOXLn: try { goto Clb19; FNZLg: $logs->write("\102\111\116\x44\x49\116\107", "\133" . implode("\x2c\40", $queries[$q]["\142\151\x6e\144\x69\156\147\x73"]) . "\x5d"); goto LKtaq; jTTqA: $logs->write("\111\x4e\x46\x4f", "\x53\x75\x63\143\x65\163\x73\146\x75\x6c\x6c\171\x20\x75\160\x64\141\x74\x65\x64"); goto JtDXS; IXM0v: $queries = DB::getQueryLog(); goto END_R; czdp9: zDqQo: goto d_PPr; ksMVF: $updated = $this->TajukUtama_service->update((object) $validated, $id); goto YXs2u; w09pW: Xue9H: goto c6xc7; END_R: $q = 0; goto w09pW; Clb19: DB::enableQueryLog(); goto es1Q4; CD921: eGD6q: goto jbfPO; AY2KJ: try { goto KdTy_; UjIQ6: $request->file("\146\151\154\x65")->storeAs("\x2f\x70\x75\142\154\x69\x63\x2f\x69\155\141\x67\145\163\x2f\x6e\x65\167\x73", $TajukUtama_name); goto ghzsc; mmaIG: $TajukUtama_name = "\124\125\137" . $request->id . "\56" . $extension; goto UjIQ6; KdTy_: $TajukUtama_file = $request->file("\x66\151\x6c\145")->getClientOriginalName(); goto VCFKl; VCFKl: $extension = $request->file("\x66\151\x6c\145")->getClientOriginalExtension(); goto mmaIG; ghzsc: $validated["\146\x69\154\145"] = $TajukUtama_name; goto XeEUi; XeEUi: } catch (Throwable $th) { $logs->write("\x45\122\x52\x4f\x52", $th->getMessage()); } goto M7oS2; es1Q4: if (!$request->hasFile("\x66\151\x6c\145")) { goto XyohO; } goto AY2KJ; c6xc7: if (!($q < count($queries))) { goto zDqQo; } goto FNZLg; a8a0Q: xAadM: goto IXM0v; oMZew: $result["\155\x65\163\163\x61\147\145"] = "\x44\x61\164\x61\x20\x62\145\x72\x68\141\x73\x69\154\40\x64\151\x70\145\x72\x62\x61\162\x75\151\x2e"; goto a8a0Q; LKtaq: $logs->write("\123\121\x4c", $queries[$q]["\161\x75\145\162\171"]); goto CD921; JtDXS: $result["\163\164\141\x74\x75\163"] = 201; goto oMZew; sEe4x: goto Xue9H; goto czdp9; YXs2u: if (!$updated) { goto xAadM; } goto jTTqA; M7oS2: XyohO: goto ksMVF; jbfPO: $q++; goto sEe4x; d_PPr: } catch (Throwable $th) { $logs->write("\105\x52\122\117\x52", $th->getMessage()); $result["\155\x65\163\x73\141\147\x65"] = "\104\141\164\141\x20\147\141\147\x61\x6c\x20\x64\x69\x70\x65\162\x62\141\162\165\151\56\74\x62\x72\76" . $th->getMessage(); } goto JW9Fb; s16vM: $result["\x6d\145\163\x73\141\147\145"] = ''; goto mOXLn; UEcyu: $logs->write(__FUNCTION__, "\x53\124\x41\x52\124"); goto NNrGc; NNrGc: $result["\163\x74\x61\164\x75\163"] = 200; goto s16vM; DPIV4: try { $validated = $request->validated(); } catch (ValidationException $e) { return response()->json(["\145\162\162\x6f\162" => $e->errors()], 422); } goto UUzr0; rEaCX: } public function destroy(string $id) : JsonResponse { goto Mt7R3; DbmuQ: try { goto RP_zD; o4nYJ: if (!$deleted) { goto Gbj9Y; } goto ASztv; RP_zD: DB::enableQueryLog(); goto ww3rc; bmqAp: $queries = DB::getQueryLog(); goto QeIJA; QeIJA: $q = 0; goto KGEei; Jw331: LkBcH: goto o4nYJ; ww3rc: $deleted = $this->TajukUtama_service->delete($id); goto bmqAp; ASztv: $result["\155\x65\163\x73\141\x67\x65"] = "\x44\x61\x74\x61\x20\x62\x65\162\150\141\x73\151\154\40\x64\151\x68\141\x70\165\x73"; goto m3fz3; nxlPG: $logs->write("\x42\x49\x4e\x44\x49\x4e\107", "\x5b" . implode("\x2c\x20", $queries[$q]["\142\151\156\x64\x69\156\x67\163"]) . "\135"); goto BgGEf; lhdHh: v_h8F: goto Ll5Sb; DjEw_: if (!($q < count($queries))) { goto LkBcH; } goto nxlPG; BgGEf: $logs->write("\123\121\x4c", $queries[$q]["\161\x75\x65\162\x79"]); goto lhdHh; m3fz3: Gbj9Y: goto ApW9R; Ll5Sb: $q++; goto LBL5u; KGEei: Q08E8: goto DjEw_; LBL5u: goto Q08E8; goto Jw331; ApW9R: } catch (Throwable $th) { $logs->write("\105\122\x52\117\122", $th->getMessage()); $result["\x6d\145\163\163\141\147\x65"] = "\104\141\164\141\x20\x67\141\x67\141\x6c\x20\x64\x69\150\141\160\x75\x73\x2e\x3c\x62\x72\76" . $th->getMessage(); } goto Yozf2; kds4r: $logs->write(__FUNCTION__, "\123\x54\101\122\124"); goto F1jIz; kjWtA: return response()->json($result["\x6d\x65\163\163\x61\x67\x65"], $result["\163\x74\141\x74\165\x73"]); goto gGqIp; Mt7R3: $logs = new Logs(Arr::last(explode("\134", get_class())) . "\114\157\x67"); goto kds4r; Yozf2: $logs->write(__FUNCTION__, "\x53\124\x4f\120\xd\xa"); goto kjWtA; F1jIz: $result["\x73\x74\141\x74\165\x73"] = 200; goto vx5mF; vx5mF: $result["\x6d\x65\x73\163\141\147\145"] = ''; goto DbmuQ; gGqIp: } }
