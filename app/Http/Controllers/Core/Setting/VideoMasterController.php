<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:19             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Http\Controllers\Core\Setting; use App\Logs; use Exception; use Throwable; use Carbon\Carbon; use Illuminate\Support\Arr; use Illuminate\Support\Str; use Illuminate\Http\Request; use Illuminate\Http\JsonResponse; use Illuminate\Support\Facades\DB; use Illuminate\Support\Facades\Log; use App\Http\Controllers\Controller; use Yajra\DataTables\Facades\DataTables; use App\Services\Setting\VideoMasterService; use App\Http\Requests\Setting\StoreVideoMasterRequest; use App\Http\Requests\Setting\UpdateVideoMasterRequest; class VideoMasterController extends Controller { private VideoMasterService $video_service; public function __construct() { $this->middleware("\141\x75\164\x68"); $this->video_service = new VideoMasterService(); } public function index(Request $request) : JsonResponse { goto hrNFW; CCb4d: $results = []; goto kbgTG; kbgTG: try { goto Zfukk; qfVnG: $logs->write("\x53\x51\114", $sql); goto G6rff; drfu7: goto eltfs; goto Hs0G2; Y8cfb: $queries = DB::getQueryLog(); goto FkkiJ; FkkiJ: $q = 0; goto R3mW6; zaGRS: $results = $this->video_service->get(); goto Y8cfb; BdmwT: if (!($q < count($queries))) { goto ppfgb; } goto S1QPr; ayvp9: $q++; goto drfu7; Zfukk: DB::enableQueryLog(); goto zaGRS; Hs0G2: ppfgb: goto M2tDl; R3mW6: eltfs: goto BdmwT; S1QPr: $sql = Str::replaceArray("\x3f", $queries[$q]["\x62\x69\x6e\144\151\156\147\x73"], str_replace("\x3f", "\x27\77\x27", $queries[$q]["\x71\x75\145\x72\x79"])); goto XwObg; G6rff: MFBC2: goto ayvp9; XwObg: $logs->write("\102\111\x4e\104\x49\x4e\x47", "\133" . implode("\x2c\x20", $queries[$q]["\x62\x69\156\144\x69\156\x67\x73"]) . "\135"); goto qfVnG; M2tDl: } catch (Throwable $th) { $logs->write("\x45\x52\x52\117\122", $th->getMessage()); } goto aLGzv; FVrWT: return DataTables::of($results)->escapeColumns()->editColumn("\143\162\x65\141\x74\x65\x64\137\x61\x74", function ($value) { return Carbon::parse($value->created_at)->toDateTimeString(); })->editColumn("\165\x70\144\141\164\x65\144\x5f\141\x74", function ($value) { return Carbon::parse($value->updated_at)->toDateTimeString(); })->addIndexColumn()->toJson(); goto d9TOd; hrNFW: $logs = new Logs(Arr::last(explode("\134", get_class())) . "\114\x6f\x67"); goto kr4in; kr4in: $logs->write(__FUNCTION__, "\x53\124\101\122\124"); goto CCb4d; aLGzv: $logs->write(__FUNCTION__, "\x53\x54\x4f\120\15\xa"); goto FVrWT; d9TOd: } public function store(StoreVideoMasterRequest $request) : JsonResponse { goto o59fu; o59fu: $validated = $request->validated(); goto pGiqi; vq_Nn: try { goto oOgxt; ll634: $logs->write("\x49\116\x46\x4f", "\123\x75\x63\143\x65\x73\163\146\x75\154\x6c\x79\x20\143\162\x65\141\164\x65\x64"); goto cMUpj; oqani: if (!($q < count($queries))) { goto bspx9; } goto ky6N9; Yd7Cm: goto Ek8Yp; goto Ukfk9; ky6N9: $sql = Str::replaceArray("\77", $queries[$q]["\142\151\x6e\x64\151\156\x67\163"], str_replace("\x3f", "\47\x3f\x27", $queries[$q]["\161\x75\145\x72\x79"])); goto ag5Tl; ag5Tl: $logs->write("\102\111\x4e\104\111\x4e\x47", "\x5b" . implode("\54\x20", $queries[$q]["\x62\151\x6e\x64\x69\156\x67\x73"]) . "\x5d"); goto S5M7c; U3Deo: if (!$created) { goto lhyyT; } goto ll634; Ukfk9: bspx9: goto Zqq3_; YYfPo: if (!$request->hasFile("\x66\x69\x6c\145")) { goto MEVm2; } goto m13NM; BEXuS: $queries = DB::getQueryLog(); goto a37nb; cMUpj: $result["\x73\x74\x61\x74\x75\x73"] = 201; goto atuxG; m13NM: try { goto Ro_oO; DCNf8: $request->file("\146\x69\154\145")->storeAs("\57\x70\165\x62\x6c\151\x63\57\x69\x6d\x61\x67\145\x73\x2f\x6e\145\x77\x73", $Frasa_name); goto YWteM; YEVls: $extension = $request->file("\x66\x69\x6c\145")->getClientOriginalExtension(); goto WYhqp; WYhqp: $Frasa_name = "\106\x52\137" . $request->id . "\x2e" . $extension; goto DCNf8; YWteM: $validated["\146\x69\154\145"] = $Frasa_name; goto RJ9Cu; Ro_oO: $Frasa_file = $request->file("\x66\x69\x6c\x65")->getClientOriginalName(); goto YEVls; RJ9Cu: } catch (Throwable $th) { $logs->write("\105\122\x52\x4f\122", $th->getMessage()); } goto ejK9d; D6tOJ: Ek8Yp: goto oqani; a37nb: $q = 0; goto D6tOJ; atuxG: $result["\x6d\x65\x73\163\141\x67\x65"] = "\104\141\x74\141\x20\142\145\x72\x68\x61\163\151\154\x20\144\151\x62\165\x61\x74\56"; goto in9V2; in9V2: lhyyT: goto BEXuS; oOgxt: DB::enableQueryLog(); goto YYfPo; ejK9d: MEVm2: goto QX2iV; QX2iV: $created = $this->video_service->store((object) $validated); goto U3Deo; S5M7c: $logs->write("\x53\x51\x4c", $sql); goto bQxHA; bQxHA: eNgYk: goto OOyCD; OOyCD: $q++; goto Yd7Cm; Zqq3_: } catch (Throwable $th) { $logs->write("\105\122\x52\117\x52", $th->getMessage()); $result["\x6d\145\163\163\x61\147\x65"] = "\x44\141\164\x61\x20\147\x61\147\x61\154\x20\144\x69\x62\165\x61\x74\56\x3c\142\162\x3e" . $th->getMessage(); } goto aNbKW; pGiqi: $logs = new Logs(Arr::last(explode("\134", get_class())) . "\114\157\x67"); goto Cn2u_; SeLNz: $result["\x6d\145\163\x73\x61\x67\145"] = ''; goto vq_Nn; GmLah: return response()->json($result["\x6d\145\x73\163\x61\x67\145"], $result["\163\x74\141\164\165\163"]); goto boUWR; aNbKW: $logs->write(__FUNCTION__, "\123\124\117\120\15\12"); goto GmLah; Cn2u_: $logs->write(__FUNCTION__, "\x53\x54\x41\122\124"); goto N5EWx; N5EWx: $result["\x73\164\141\x74\x75\163"] = 200; goto SeLNz; boUWR: } public function show(string $id) : JsonResponse { return response()->json($id, 200); } public function update(UpdateVideoMasterRequest $request, string $id) : JsonResponse { goto G5nO6; EYLYt: try { goto XtSE8; iUVOg: F_4HW: goto ITgR2; MfsDX: $logs->write("\111\x4e\106\117", "\123\x75\143\x63\145\163\163\x66\165\154\154\171\40\165\160\144\x61\164\x65\144"); goto pDBx8; IgT7h: kGYxO: goto jcfb9; M8Kt3: $q = 0; goto lXRXH; pDBx8: $result["\163\x74\141\164\x75\x73"] = 201; goto hB0Ox; hB0Ox: $result["\x6d\x65\163\x73\141\x67\x65"] = "\x44\x61\x74\141\x20\142\x65\x72\150\x61\x73\x69\x6c\40\144\151\160\x65\x72\x62\x61\162\165\151\56"; goto iUVOg; hseR7: cYfEz: goto xFXIE; qbA40: $updated = $this->video_service->update((object) $validated, $id); goto HL0L7; HL0L7: if (!$updated) { goto F_4HW; } goto MfsDX; xFXIE: $q++; goto AxON3; L39r1: if (!($q < count($queries))) { goto kGYxO; } goto iO0Aw; lXRXH: uzBHI: goto L39r1; i3Sfv: $logs->write("\123\x51\114", $sql); goto hseR7; ITgR2: $queries = DB::getQueryLog(); goto M8Kt3; XtSE8: DB::enableQueryLog(); goto vOdT8; iO0Aw: $sql = Str::replaceArray("\77", $queries[$q]["\x62\151\x6e\x64\151\x6e\x67\163"], str_replace("\x3f", "\x27\x3f\47", $queries[$q]["\161\x75\145\x72\171"])); goto Qie5E; Qie5E: $logs->write("\x42\x49\116\104\111\x4e\x47", "\133" . implode("\x2c\x20", $queries[$q]["\142\x69\x6e\x64\151\156\147\x73"]) . "\x5d"); goto i3Sfv; fYIlx: SXppp: goto qbA40; AxON3: goto uzBHI; goto IgT7h; M7uyt: try { goto B3ycQ; QzfCv: $extension = $request->file("\146\x69\x6c\x65")->getClientOriginalExtension(); goto bSjV1; B3ycQ: $Frasa_file = $request->file("\x66\151\154\x65")->getClientOriginalName(); goto QzfCv; B1hLs: $validated["\x66\x69\154\x65"] = $Frasa_name; goto bD1yi; bSjV1: $Frasa_name = "\x46\122\137" . $request->id . "\56" . $extension; goto yQfia; yQfia: $request->file("\x66\x69\154\x65")->storeAs("\57\x70\x75\x62\x6c\x69\143\x2f\x69\x6d\x61\x67\145\163\x2f\x6e\x65\x77\x73", $Frasa_name); goto B1hLs; bD1yi: } catch (Throwable $th) { $logs->write("\105\122\x52\x4f\122", $th->getMessage()); } goto fYIlx; vOdT8: if (!$request->hasFile("\x66\151\x6c\x65")) { goto SXppp; } goto M7uyt; jcfb9: } catch (Throwable $th) { $logs->write("\105\122\x52\117\122", $th->getMessage()); $result["\155\x65\x73\x73\141\x67\x65"] = "\104\141\164\141\x20\147\141\x67\141\x6c\40\144\x69\160\x65\162\142\x61\162\x75\x69\56\74\x62\162\x3e" . $th->getMessage(); } goto swKBP; G5nO6: try { $validated = $request->validated(); } catch (ValidationException $e) { return response()->json(["\145\x72\162\x6f\162" => $e->errors()], 422); } goto lnbcu; lnbcu: $logs = new Logs(Arr::last(explode("\x5c", get_class())) . "\114\x6f\x67"); goto NksCn; el7ID: $result["\x73\164\x61\164\x75\x73"] = 200; goto Y30Zb; NksCn: $logs->write(__FUNCTION__, "\x53\x54\101\x52\x54"); goto el7ID; swKBP: return response()->json($result["\x6d\145\x73\x73\x61\147\145"], $result["\163\164\x61\x74\165\163"]); goto Pm_Ei; Y30Zb: $result["\155\145\163\x73\141\147\145"] = ''; goto EYLYt; Pm_Ei: } public function destroy(string $id) : JsonResponse { goto wd9sL; T8MIz: $result["\x6d\x65\163\x73\141\147\145"] = ''; goto tcf8r; zEVGA: $logs->write(__FUNCTION__, "\123\x54\x41\122\x54"); goto GcGdP; tcf8r: try { goto rOo00; GE5vN: $logs->write("\x53\121\114", $sql); goto S3QOv; G8FIR: if (!$deleted) { goto rloHi; } goto SL57q; wemfP: goto E7EvV; goto Z_YWA; x2SH0: rloHi: goto zhsfV; rOo00: DB::enableQueryLog(); goto DGhSs; I9psG: $q++; goto wemfP; uWT9s: if (!($q < count($queries))) { goto Ohq9H; } goto F0bxv; EdoMA: E7EvV: goto uWT9s; SL57q: $result["\155\145\x73\x73\141\147\x65"] = "\x44\x61\164\x61\40\142\x65\162\150\141\x73\151\154\40\144\x69\150\x61\x70\165\x73"; goto x2SH0; S3QOv: TT7La: goto I9psG; F0bxv: $sql = Str::replaceArray("\77", $queries[$q]["\142\x69\156\144\x69\156\x67\163"], str_replace("\77", "\x27\x3f\47", $queries[$q]["\x71\165\145\x72\171"])); goto nl479; Z_YWA: Ohq9H: goto G8FIR; nl479: $logs->write("\x42\x49\x4e\104\111\x4e\x47", "\x5b" . implode("\x2c\x20", $queries[$q]["\x62\151\x6e\144\151\156\x67\x73"]) . "\x5d"); goto GE5vN; TndT3: $q = 0; goto EdoMA; DGhSs: $deleted = $this->video_service->delete($id); goto EtN1b; EtN1b: $queries = DB::getQueryLog(); goto TndT3; zhsfV: } catch (Throwable $th) { $logs->write("\x45\122\122\117\122", $th->getMessage()); $result["\155\145\163\163\141\x67\145"] = "\x44\x61\164\141\x20\x67\141\147\x61\154\40\144\151\x68\x61\x70\165\163\56\x3c\x62\x72\x3e" . $th->getMessage(); } goto guhFg; UOgvI: return response()->json($result["\155\145\163\163\x61\x67\145"], $result["\x73\164\x61\164\165\x73"]); goto Nxte5; wd9sL: $logs = new Logs(Arr::last(explode("\x5c", get_class())) . "\114\x6f\147"); goto zEVGA; guhFg: $logs->write(__FUNCTION__, "\x53\124\117\x50\15\12"); goto UOgvI; GcGdP: $result["\163\x74\x61\164\165\163"] = 200; goto T8MIz; Nxte5: } }
