<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:18             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Console\Commands\Development; use Illuminate\Support\Arr; use Illuminate\Console\Command; use Illuminate\Support\Facades\Storage; class ServiceCommand extends Command { protected $signature = "\155\x61\153\x65\72\x73\145\x72\x76\151\143\x65\40\x7b\x6e\x61\x6d\145\175"; protected $description = "\x43\x72\145\141\x74\145\x20\141\40\x6e\x65\167\40\163\145\x72\x76\x69\143\x65\x20\143\154\x61\163\163\40\x66\x6f\162\x20\x44\x65\x76\145\154\157\160\155\145\156\164"; public function __construct() { parent::__construct(); } public function handle() { goto fY38y; k5FFM: $i = 0; goto s4XyJ; hGX_y: $namespace = "\134"; goto k5FFM; GchZ1: $namespace .= $name_array[$i] . "\134"; goto Sh7Rz; rh7L4: $namespace = ''; goto YKDWv; BLZkq: xZimB: goto sNfkR; sNfkR: $i++; goto NPgbD; w9OsI: $name_array = explode("\x2f", str_replace("\134", "\x2f", $name)); goto nMMkI; kKPLP: $namespace = substr($namespace, 0, -1); goto Y99Bn; fY38y: $name = $this->argument("\x6e\141\x6d\145"); goto w9OsI; YKDWv: if (!(count($name_array) > 1)) { goto OHJR_; } goto hGX_y; NPgbD: goto XLMnp; goto gYFJs; KBat6: if (!($name_array[$i] != $classname)) { goto F1ots; } goto GchZ1; s4XyJ: XLMnp: goto XZtBz; Bd1nC: try { goto HC5jW; Rwfo2: $file_path = file_exists(app_path("\123\x65\162\166\151\143\145\x73\57" . $name . "\56\160\x68\160")); goto EdA9Y; n3hCm: file_put_contents(app_path("\123\145\x72\x76\x69\143\145\x73\57" . $name . "\x2e\x70\x68\x70"), $fileContents); goto UPqWc; EdA9Y: if ($file_path) { goto pcrAf; } goto n3hCm; f1e3M: goto oNS03; goto hsGHQ; hsGHQ: pcrAf: goto IeQL4; gU5ik: $fileContents .= "\12\xa\143\154\141\163\x73\40" . $classname . "\x20\12\x7b\xa\11\57\57\12\x7d"; goto Rwfo2; N3rOV: oNS03: goto SRJIV; UPqWc: $this->info("\123\x65\x72\166\151\143\x65\40\x63\162\x65\x61\x74\x65\144\40\163\x75\143\x63\x65\163\x73\x66\x75\x6c\154\171\41"); goto f1e3M; Gzzr6: $fileContents = "\74\x3f\160\x68\x70\12\12\x6e\x61\155\x65\x73\160\141\x63\x65\40\x41\x70\160\x5c\123\x65\162\x76\151\x63\145\163" . $namespace . "\x3b"; goto gU5ik; IeQL4: $this->error("\x53\145\x72\x76\151\143\145\40\x61\x6c\162\x65\141\x64\171\x20\145\x78\x69\x73\164\163\41"); goto N3rOV; HC5jW: @mkdir(app_path("\123\x65\x72\x76\x69\x63\145\163\57" . $namespace), 0777, true); goto Gzzr6; SRJIV: } catch (\Throwable $th) { goto qHsRf; CXBwK: $this->error($th->getTraceAsString() . "\12"); goto y_9tn; y_9tn: sjvI1: goto yYHRy; qHsRf: $this->error($th->getMessage() . "\12"); goto bRDJZ; bRDJZ: if (!(config("\141\x70\160\x2e\x65\x6e\x76") != "\x70\x72\157\144\x75\x63\x74\151\157\156")) { goto sjvI1; } goto CXBwK; yYHRy: } goto lsTvF; XZtBz: if (!($i < count($name_array))) { goto YQHQc; } goto KBat6; Sh7Rz: F1ots: goto BLZkq; nMMkI: $classname = Arr::last($name_array); goto rh7L4; Y99Bn: OHJR_: goto Bd1nC; gYFJs: YQHQc: goto kKPLP; lsTvF: } }
