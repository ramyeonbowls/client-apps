<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:19             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Exports\Report; use Maatwebsite\Excel\Sheet; use Maatwebsite\Excel\Events\AfterSheet; use Maatwebsite\Excel\Concerns\WithTitle; use Maatwebsite\Excel\Concerns\WithEvents; use Maatwebsite\Excel\Events\BeforeExport; use Maatwebsite\Excel\Concerns\WithHeadings; use Maatwebsite\Excel\Concerns\ShouldAutoSize; use Maatwebsite\Excel\Concerns\WithCustomStartCell; class LoansReportExport implements WithCustomStartCell, WithHeadings, WithTitle, WithEvents, ShouldAutoSize { private $data; public function __construct($data = array()) { goto W0vbg; W0vbg: $this->data = $data; goto ifq71; ifq71: Sheet::macro("\x73\x65\x74\117\162\x69\x65\156\x74\x61\164\151\157\x6e", function (Sheet $sheet, $orientation) { $sheet->getDelegate()->getPageSetup()->setOrientation($orientation); }); goto wRwG9; wRwG9: Sheet::macro("\163\164\171\154\x65\103\145\x6c\x6c\x73", function (Sheet $sheet, string $cellRange, array $style) { $sheet->getDelegate()->getStyle($cellRange)->applyFromArray($style); }); goto c9_I4; c9_I4: } public function startCell() : string { $starCell = "\x41\61"; return $starCell; } public function title() : string { return "\114\141\x70\x6f\x72\141\156\40\120\151\156\x6a\141\155\x61\x6e\40\102\x75\153\x75"; } public function headings() : array { return ["\116\x61\155\x61\x20\x57\x4c", "\x50\162\x6f\x76\x69\156\163\151", "\113\x61\x62\57\113\x6f\x74\141", "\116\x61\x6d\x61\x20\x4d\x65\155\142\145\162", "\x4a\165\x64\165\x6c\x20\102\x75\153\x75", "\124\x61\156\x67\x67\141\154\x20\x50\151\x6e\152\141\155", "\x54\141\x6e\147\147\x61\154\40\113\x65\155\x62\141\x6c\151", "\123\164\x61\164\165\x73"]; } public function registerEvents() : array { return [BeforeExport::class => function (BeforeExport $event) { $event->writer->getProperties()->setTitle("\114\141\160\157\x72\x61\x6e\x20\120\x69\156\152\x61\x6d\x61\156\x20\102\165\153\165"); $event->writer->getProperties()->setCreator(config("\141\x70\x70\56\x6e\141\155\x65")); }, AfterSheet::class => function (AfterSheet $event) { goto WO5M8; KTLE5: $row = 2; goto rlAuf; Yi5_h: $event->sheet->styleCells("\101\61\72\x48\x31", ["\142\157\x72\144\x65\162\163" => ["\x61\x6c\154\x42\157\162\144\145\162\163" => ["\x62\x6f\x72\x64\x65\x72\123\164\x79\154\145" => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN, "\143\157\x6c\x6f\x72" => ["\162\x67\142" => "\70\x30\70\60\x38\60"]]]]); goto KTLE5; DAC5T: Wjvgc: goto QxM3S; rlAuf: foreach ($this->data as $val) { goto zKWUX; mbgGU: $event->sheet->setCellValue("\102" . $row, $val["\x70\162\157\166\151\x6e\x73\x69\x5f\156\x61\155\145"]); goto RmR62; zKWUX: $event->sheet->setCellValue("\101" . $row, $val["\x77\154\137\x6e\141\155\x65"]); goto mbgGU; gJaqi: $event->sheet->setCellValue("\106" . $row, $val["\163\164\141\x72\x74\x5f\144\x61\x74\145"]); goto IhLuh; YX7Ex: qND8R: goto Why5f; jQM5L: $row++; goto YX7Ex; cARtq: $event->sheet->setCellValue("\105" . $row, $val["\164\151\164\154\x65"]); goto gJaqi; RmR62: $event->sheet->setCellValue("\x43" . $row, $val["\153\x61\142\165\x70\141\164\145\156\x5f\156\x61\x6d\145"]); goto ietF7; IhLuh: $event->sheet->setCellValue("\x47" . $row, $val["\x65\x6e\x64\x5f\144\x61\164\x65"]); goto TaOax; ietF7: $event->sheet->setCellValue("\x44" . $row, $val["\156\x61\x6d\145"]); goto cARtq; TaOax: $event->sheet->setCellValue("\x48" . $row, $val["\146\154\141\147\137\145\x6e\x64"]); goto jQM5L; Why5f: } goto DAC5T; cqjM7: $event->sheet->styleCells("\x41\x32\72\x48" . ($row - 1), ["\142\x6f\x72\x64\145\162\163" => ["\x61\154\154\102\x6f\162\144\x65\x72\x73" => ["\142\x6f\x72\x64\145\x72\123\164\171\154\x65" => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN, "\143\x6f\154\157\162" => ["\x72\147\x62" => "\70\60\x38\60\70\60"]]]]); goto HIuoN; gItHT: $event->sheet->styleCells("\x41\61\x3a\110\x31", ["\146\157\156\x74" => ["\x62\157\154\144" => true], "\x61\x6c\x69\x67\x6e\x6d\145\x6e\164" => ["\x68\157\162\151\172\x6f\x6e\164\141\x6c" => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER, "\x76\x65\x72\164\x69\143\x61\x6c" => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER], "\x66\151\154\x6c" => ["\146\151\154\x6c\x54\x79\x70\145" => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID, "\143\157\154\x6f\x72" => ["\141\162\147\x62" => "\x66\146\142\64\x63\66\145\67"]]]); goto Yi5_h; WO5M8: $event->sheet->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE); goto gItHT; HIuoN: VGo0m: goto DUn93; QxM3S: if (!(count($this->data) > 0)) { goto VGo0m; } goto cqjM7; DUn93: }]; } }
