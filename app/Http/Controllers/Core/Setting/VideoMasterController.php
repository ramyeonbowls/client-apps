<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-23 17:36:14             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Http\Controllers\Core\Setting; use App\Logs; use Exception; use Throwable; use Carbon\Carbon; use Illuminate\Support\Arr; use Illuminate\Support\Str; use Illuminate\Http\Request; use Illuminate\Http\JsonResponse; use Illuminate\Support\Facades\DB; use Illuminate\Support\Facades\Log; use App\Http\Controllers\Controller; use Yajra\DataTables\Facades\DataTables; use App\Services\Setting\VideoMasterService; use App\Http\Requests\Setting\StoreVideoMasterRequest; use App\Http\Requests\Setting\UpdateVideoMasterRequest; class VideoMasterController extends Controller { private VideoMasterService $video_service; public function __construct() { $this->middleware("\141\165\164\150"); $this->video_service = new VideoMasterService(); } public function index(Request $request) : JsonResponse { goto ki7gF; In9iR: $logs->write(__FUNCTION__, "\123\124\x41\122\124"); goto HP0dz; ki7gF: $logs = new Logs(Arr::last(explode("\x5c", get_class())) . "\114\157\147"); goto In9iR; HP0dz: $results = []; goto fvpqT; YQGZ9: $logs->write(__FUNCTION__, "\x53\124\117\x50\15\12"); goto QKPYk; fvpqT: try { goto jkw1V; jQTRP: $q = 0; goto RT3CH; RT3CH: uTKgd: goto Zvw4m; bo3O7: J3P3I: goto POLa3; jkw1V: DB::enableQueryLog(); goto JC39F; almBG: $queries = DB::getQueryLog(); goto jQTRP; POLa3: $q++; goto INknM; ofojk: $logs->write("\x42\x49\x4e\104\111\x4e\x47", "\x5b" . implode("\54\40", $queries[$q]["\142\151\x6e\x64\x69\x6e\147\x73"]) . "\x5d"); goto T1mJd; T1mJd: $logs->write("\x53\x51\x4c", $sql); goto bo3O7; JC39F: $results = $this->video_service->get(); goto almBG; ibLzX: $sql = Str::replaceArray("\77", $queries[$q]["\142\151\156\x64\x69\x6e\147\163"], str_replace("\x3f", "\x27\77\x27", $queries[$q]["\x71\165\145\162\x79"])); goto ofojk; Zvw4m: if (!($q < count($queries))) { goto y0rDt; } goto ibLzX; INknM: goto uTKgd; goto mwiUS; mwiUS: y0rDt: goto RVDtR; RVDtR: } catch (Throwable $th) { $logs->write("\105\122\x52\117\x52", $th->getMessage()); } goto YQGZ9; QKPYk: return DataTables::of($results)->escapeColumns()->editColumn("\x63\162\x65\x61\164\145\144\137\141\x74", function ($value) { return Carbon::parse($value->created_at)->toDateTimeString(); })->editColumn("\x75\x70\x64\141\x74\145\x64\x5f\x61\164", function ($value) { return Carbon::parse($value->updated_at)->toDateTimeString(); })->addIndexColumn()->toJson(); goto SLFZ1; SLFZ1: } public function store(StoreVideoMasterRequest $request) : JsonResponse { goto R1xLi; beod9: $logs->write(__FUNCTION__, "\123\x54\101\122\124"); goto Jg7ee; Jg7ee: $result["\163\164\141\x74\165\163"] = 200; goto Opeiw; wD0aB: $logs = new Logs(Arr::last(explode("\x5c", get_class())) . "\x4c\157\x67"); goto beod9; MBd8H: try { goto BJxQp; uxHzz: if (!$request->hasFile("\x66\151\154\x65")) { goto zc42H; } goto PzS0G; CQtj7: $logs->write("\x53\x51\x4c", $sql); goto gwPjC; jrPK0: $logs->write("\102\x49\x4e\x44\x49\116\107", "\x5b" . implode("\x2c\x20", $queries[$q]["\x62\x69\x6e\x64\x69\156\147\x73"]) . "\x5d"); goto CQtj7; iEBMX: o8gLB: goto nRuVt; x75st: $logs->write("\x49\x4e\x46\117", "\123\x75\143\x63\145\x73\163\x66\x75\154\154\171\x20\x63\x72\x65\x61\x74\x65\144"); goto eRv5T; nDfID: $created = $this->video_service->store((object) $validated); goto uu4a_; uu4a_: if (!$created) { goto AOZ0P; } goto x75st; gwPjC: dh3wm: goto n9aKE; BJxQp: DB::enableQueryLog(); goto uxHzz; aVcNC: AOZ0P: goto V6MNy; V6MNy: $queries = DB::getQueryLog(); goto bMLAD; LiR2B: NibyQ: goto BVodW; AOxyD: $result["\x6d\x65\x73\x73\141\147\x65"] = "\x44\x61\x74\x61\40\x62\145\162\x68\x61\163\x69\154\x20\x64\x69\142\165\x61\164\56"; goto aVcNC; tm18j: $sql = Str::replaceArray("\x3f", $queries[$q]["\x62\x69\156\x64\151\x6e\147\x73"], str_replace("\77", "\47\x3f\47", $queries[$q]["\161\165\145\x72\171"])); goto jrPK0; rUa2_: goto o8gLB; goto LiR2B; ElQV0: zc42H: goto nDfID; nRuVt: if (!($q < count($queries))) { goto NibyQ; } goto tm18j; eRv5T: $result["\x73\x74\x61\x74\165\x73"] = 201; goto AOxyD; bMLAD: $q = 0; goto iEBMX; n9aKE: $q++; goto rUa2_; PzS0G: try { goto biYWx; hyEMB: $validated["\146\151\x6c\x65"] = $Frasa_name; goto KUP1x; B6DOS: $Frasa_name = "\106\x52\x5f" . $request->id . "\56" . $extension; goto Z0RlZ; biYWx: $Frasa_file = $request->file("\x66\151\x6c\145")->getClientOriginalName(); goto h9w3q; h9w3q: $extension = $request->file("\146\x69\154\145")->getClientOriginalExtension(); goto B6DOS; Z0RlZ: $request->file("\146\151\x6c\x65")->storeAs("\57\x70\x75\142\x6c\151\x63\x2f\x69\155\x61\x67\x65\163\x2f\x6e\145\167\x73", $Frasa_name); goto hyEMB; KUP1x: } catch (Throwable $th) { $logs->write("\x45\x52\x52\x4f\122", $th->getMessage()); } goto ElQV0; BVodW: } catch (Throwable $th) { $logs->write("\x45\122\122\x4f\122", $th->getMessage()); $result["\x6d\x65\163\163\x61\147\145"] = "\x44\x61\x74\x61\40\x67\x61\147\141\x6c\40\x64\x69\142\165\141\x74\56\74\x62\162\76" . $th->getMessage(); } goto m5Km8; OnXoq: return response()->json($result["\x6d\x65\163\x73\141\x67\145"], $result["\x73\x74\141\164\x75\163"]); goto wo_Zd; R1xLi: $validated = $request->validated(); goto wD0aB; Opeiw: $result["\155\x65\x73\163\x61\x67\145"] = ''; goto MBd8H; m5Km8: $logs->write(__FUNCTION__, "\x53\124\117\120\xd\12"); goto OnXoq; wo_Zd: } public function show(string $id) : JsonResponse { return response()->json($id, 200); } public function update(UpdateVideoMasterRequest $request, string $id) : JsonResponse { goto b6QeN; ETFzB: $logs = new Logs(Arr::last(explode("\x5c", get_class())) . "\114\157\147"); goto klCP0; SeBzJ: return response()->json($result["\x6d\x65\x73\163\141\x67\x65"], $result["\163\x74\141\x74\x75\163"]); goto rplgz; mzSE7: try { goto yAj2c; jvaVb: $updated = $this->video_service->update((object) $validated, $id); goto j_P4a; YSmVt: if (!$request->hasFile("\146\151\x6c\145")) { goto dWXcG; } goto r_ELw; ebhCd: dWXcG: goto jvaVb; l3ANu: $logs->write("\102\x49\x4e\x44\111\x4e\107", "\133" . implode("\54\x20", $queries[$q]["\x62\x69\x6e\x64\151\156\147\163"]) . "\x5d"); goto ULGfr; X5z3p: $queries = DB::getQueryLog(); goto mPyGI; mPyGI: $q = 0; goto M9Bca; gsoks: $result["\x73\x74\x61\164\165\x73"] = 201; goto KM5ax; LwkjI: ERLED: goto bpg0a; M9Bca: czYjd: goto EP4CW; uQ1eo: qh6a0: goto tcG4T; j_P4a: if (!$updated) { goto WJET5; } goto OAy45; KM5ax: $result["\x6d\145\x73\163\x61\147\145"] = "\x44\141\164\141\40\142\145\x72\150\141\x73\151\154\x20\144\x69\x70\x65\162\142\x61\162\x75\151\56"; goto jee4p; EP4CW: if (!($q < count($queries))) { goto qh6a0; } goto aUK3F; r_ELw: try { goto en705; kav9t: $request->file("\x66\x69\x6c\x65")->storeAs("\x2f\x70\165\142\x6c\151\143\x2f\151\155\x61\x67\x65\163\x2f\x6e\x65\x77\x73", $Frasa_name); goto FkmnE; en705: $Frasa_file = $request->file("\x66\151\154\x65")->getClientOriginalName(); goto WVRQ9; KZ4sZ: $Frasa_name = "\106\122\x5f" . $request->id . "\56" . $extension; goto kav9t; WVRQ9: $extension = $request->file("\146\151\154\x65")->getClientOriginalExtension(); goto KZ4sZ; FkmnE: $validated["\146\151\154\x65"] = $Frasa_name; goto l7tP7; l7tP7: } catch (Throwable $th) { $logs->write("\105\122\x52\x4f\122", $th->getMessage()); } goto ebhCd; ULGfr: $logs->write("\x53\121\x4c", $sql); goto LwkjI; yAj2c: DB::enableQueryLog(); goto YSmVt; jee4p: WJET5: goto X5z3p; bpg0a: $q++; goto unL2T; aUK3F: $sql = Str::replaceArray("\x3f", $queries[$q]["\x62\151\156\144\x69\156\147\x73"], str_replace("\x3f", "\x27\77\x27", $queries[$q]["\161\x75\145\x72\x79"])); goto l3ANu; OAy45: $logs->write("\x49\x4e\106\117", "\123\x75\x63\x63\x65\x73\x73\146\165\x6c\154\x79\40\165\x70\x64\141\164\145\144"); goto gsoks; unL2T: goto czYjd; goto uQ1eo; tcG4T: } catch (Throwable $th) { $logs->write("\105\x52\122\x4f\x52", $th->getMessage()); $result["\x6d\145\163\163\141\147\x65"] = "\104\141\164\141\40\147\x61\147\141\x6c\x20\144\x69\160\145\x72\142\141\x72\165\x69\x2e\74\142\x72\x3e" . $th->getMessage(); } goto SeBzJ; b6QeN: try { $validated = $request->validated(); } catch (ValidationException $e) { return response()->json(["\145\x72\x72\x6f\162" => $e->errors()], 422); } goto ETFzB; epLek: $result["\155\x65\163\x73\141\147\145"] = ''; goto mzSE7; mNZtu: $result["\x73\164\141\x74\x75\x73"] = 200; goto epLek; klCP0: $logs->write(__FUNCTION__, "\x53\x54\101\122\124"); goto mNZtu; rplgz: } public function destroy(string $id) : JsonResponse { goto UrccC; r0qCg: try { goto FJEcM; d_OLd: $sql = Str::replaceArray("\x3f", $queries[$q]["\142\x69\156\144\x69\156\147\x73"], str_replace("\x3f", "\x27\x3f\x27", $queries[$q]["\161\x75\x65\x72\x79"])); goto Bab_Q; VDNPK: $result["\x6d\x65\x73\x73\x61\147\145"] = "\x44\141\164\141\40\x62\145\x72\x68\141\x73\x69\x6c\40\144\x69\150\x61\160\x75\x73"; goto hnmgp; x15RR: if (!$deleted) { goto wtHaJ; } goto VDNPK; jqINn: Qmv3g: goto CfjtG; CfjtG: $q++; goto ysMnO; FJEcM: DB::enableQueryLog(); goto V3UZc; PciKO: hbjXT: goto x15RR; Wv8Cs: $q = 0; goto wK0A5; hnmgp: wtHaJ: goto ZZ4P3; Bab_Q: $logs->write("\102\111\116\x44\x49\x4e\107", "\x5b" . implode("\54\40", $queries[$q]["\x62\151\156\144\151\156\147\163"]) . "\x5d"); goto tjJ0V; tjJ0V: $logs->write("\x53\x51\x4c", $sql); goto jqINn; wK0A5: c98Yz: goto TTAx5; ysMnO: goto c98Yz; goto PciKO; TTAx5: if (!($q < count($queries))) { goto hbjXT; } goto d_OLd; BIelB: $queries = DB::getQueryLog(); goto Wv8Cs; V3UZc: $deleted = $this->video_service->delete($id); goto BIelB; ZZ4P3: } catch (Throwable $th) { $logs->write("\x45\x52\x52\x4f\122", $th->getMessage()); $result["\x6d\145\163\x73\141\147\145"] = "\x44\x61\164\141\40\x67\141\x67\141\154\x20\144\151\150\141\160\x75\163\x2e\x3c\x62\x72\76" . $th->getMessage(); } goto VlZXz; VlZXz: $logs->write(__FUNCTION__, "\x53\124\117\x50\xd\xa"); goto esii1; UrccC: $logs = new Logs(Arr::last(explode("\x5c", get_class())) . "\x4c\157\x67"); goto mm0z6; mm0z6: $logs->write(__FUNCTION__, "\x53\124\x41\x52\x54"); goto sh_Zf; esii1: return response()->json($result["\x6d\145\x73\x73\x61\147\145"], $result["\x73\x74\x61\x74\x75\163"]); goto ijDKi; jtslV: $result["\x6d\145\x73\163\x61\147\145"] = ''; goto r0qCg; sh_Zf: $result["\163\164\141\x74\165\x73"] = 200; goto jtslV; ijDKi: } }
