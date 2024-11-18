<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:19             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Exports\Report; use Maatwebsite\Excel\Sheet; use Maatwebsite\Excel\Events\AfterSheet; use Maatwebsite\Excel\Concerns\WithTitle; use Maatwebsite\Excel\Concerns\WithEvents; use Maatwebsite\Excel\Events\BeforeExport; use Maatwebsite\Excel\Concerns\WithHeadings; use Maatwebsite\Excel\Concerns\ShouldAutoSize; use Maatwebsite\Excel\Concerns\WithCustomStartCell; class MemberReportExport implements WithCustomStartCell, WithHeadings, WithTitle, WithEvents, ShouldAutoSize { private $data; public function __construct($data = array()) { goto txHxD; ApYmR: Sheet::macro("\x73\x74\x79\x6c\x65\103\145\x6c\x6c\x73", function (Sheet $sheet, string $cellRange, array $style) { $sheet->getDelegate()->getStyle($cellRange)->applyFromArray($style); }); goto hwgc5; BR7Or: Sheet::macro("\x73\145\x74\117\162\x69\145\x6e\164\141\164\151\x6f\x6e", function (Sheet $sheet, $orientation) { $sheet->getDelegate()->getPageSetup()->setOrientation($orientation); }); goto ApYmR; txHxD: $this->data = $data; goto BR7Or; hwgc5: } public function startCell() : string { $starCell = "\x41\x31"; return $starCell; } public function title() : string { return "\x4c\141\x70\157\162\x61\156\x20\115\145\x6d\x62\145\x72"; } public function headings() : array { return ["\116\x61\x6d\x61\40\127\114", "\x50\x72\x6f\x76\x69\x6e\163\x69", "\113\x61\142\x2f\x4b\157\164\x61", "\116\x61\155\x61\x20\115\x65\155\142\145\162", "\105\x6d\141\151\x6c\40\115\x65\x6d\x62\x65\162", "\127\x61\153\x74\x75\x20\x44\x61\x66\164\x61\x72"]; } public function registerEvents() : array { return [BeforeExport::class => function (BeforeExport $event) { $event->writer->getProperties()->setTitle("\x4c\141\x70\157\162\x61\x6e\40\x4d\145\155\x62\145\x72"); $event->writer->getProperties()->setCreator(config("\141\x70\x70\56\x6e\x61\x6d\x65")); }, AfterSheet::class => function (AfterSheet $event) { goto qaFhV; xzlsi: $row = 2; goto L6yC4; W0L2a: $event->sheet->styleCells("\101\x31\x3a\x46\x31", ["\x66\x6f\156\x74" => ["\x62\157\154\144" => true], "\x61\x6c\151\x67\x6e\x6d\x65\x6e\164" => ["\x68\x6f\x72\x69\x7a\x6f\156\x74\x61\154" => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER, "\166\145\162\164\151\x63\141\154" => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER], "\146\x69\154\x6c" => ["\x66\151\154\154\x54\x79\160\x65" => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID, "\x63\x6f\x6c\157\162" => ["\141\162\147\142" => "\x66\146\x62\64\143\66\x65\67"]]]); goto RlemD; qaFhV: $event->sheet->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE); goto W0L2a; wRZGD: $event->sheet->styleCells("\101\x32\x3a\x46" . ($row - 1), ["\142\157\x72\x64\x65\x72\x73" => ["\141\x6c\154\x42\157\162\144\145\x72\x73" => ["\142\157\x72\x64\145\162\123\164\171\x6c\x65" => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN, "\143\157\154\157\162" => ["\162\x67\142" => "\70\x30\x38\60\x38\x30"]]]]); goto gwqDP; JgG_y: if (!(count($this->data) > 0)) { goto dn6VD; } goto wRZGD; RlemD: $event->sheet->styleCells("\101\61\72\106\x31", ["\142\x6f\162\x64\x65\162\x73" => ["\x61\x6c\x6c\102\157\162\x64\145\162\163" => ["\x62\x6f\162\x64\x65\162\x53\164\x79\x6c\x65" => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN, "\143\157\154\157\162" => ["\162\147\142" => "\x38\60\x38\x30\x38\x30"]]]]); goto xzlsi; L6yC4: foreach ($this->data as $val) { goto NgCtR; zqugv: $event->sheet->setCellValue("\x43" . $row, $val["\x6b\x61\142\165\160\x61\x74\145\x6e\137\156\141\x6d\x65"]); goto JDO_r; NgCtR: $event->sheet->setCellValue("\x41" . $row, $val["\167\154\x5f\156\x61\x6d\145"]); goto iRue_; w_t7O: $event->sheet->setCellValue("\x45" . $row, $val["\145\x6d\x61\x69\154"]); goto LPdlk; iRue_: $event->sheet->setCellValue("\x42" . $row, $val["\160\162\x6f\166\151\156\163\151\137\156\x61\155\145"]); goto zqugv; JDO_r: $event->sheet->setCellValue("\x44" . $row, $val["\156\141\x6d\x65"]); goto w_t7O; msZn0: NxDe9: goto N4zpw; F7ADt: $row++; goto msZn0; LPdlk: $event->sheet->setCellValue("\x46" . $row, $val["\x63\x72\145\x61\x74\x65\x64\137\141\164"]); goto F7ADt; N4zpw: } goto rfAil; gwqDP: dn6VD: goto cAc21; rfAil: k3Xb0: goto JgG_y; cAc21: }]; } }
