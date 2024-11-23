<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-23 17:36:13             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Exports\Report; use Maatwebsite\Excel\Sheet; use Maatwebsite\Excel\Events\AfterSheet; use Maatwebsite\Excel\Concerns\WithTitle; use Maatwebsite\Excel\Concerns\WithEvents; use Maatwebsite\Excel\Events\BeforeExport; use Maatwebsite\Excel\Concerns\WithHeadings; use Maatwebsite\Excel\Concerns\ShouldAutoSize; use Maatwebsite\Excel\Concerns\WithCustomStartCell; class ReadBookUserExport implements WithCustomStartCell, WithHeadings, WithTitle, WithEvents, ShouldAutoSize { private $data; public function __construct($data = array()) { goto sM15r; sM15r: $this->data = $data; goto tbEz1; hNpQl: Sheet::macro("\163\164\171\x6c\x65\103\x65\154\x6c\x73", function (Sheet $sheet, string $cellRange, array $style) { $sheet->getDelegate()->getStyle($cellRange)->applyFromArray($style); }); goto HJaNq; tbEz1: Sheet::macro("\x73\145\164\x4f\x72\x69\x65\x6e\x74\141\164\x69\x6f\156", function (Sheet $sheet, $orientation) { $sheet->getDelegate()->getPageSetup()->setOrientation($orientation); }); goto hNpQl; HJaNq: } public function startCell() : string { $starCell = "\x41\x31"; return $starCell; } public function title() : string { return "\114\x61\x70\x6f\162\141\x6e\x20\x42\141\143\141\40\x42\x75\x6b\165\40\125\x73\145\x72"; } public function headings() : array { return ["\116\x61\x6d\141\40\x57\114", "\120\162\x6f\166\151\156\x73\151", "\x4b\141\142\x2f\x4b\157\x74\141", "\x4e\x61\155\141\x20\120\145\155\x62\x61\143\141", "\x4a\165\155\x6c\x61\150\x20\102\165\x6b\165\40\x64\151\40\x42\x61\143\141", "\124\157\x74\141\154\40\x4a\x61\155"]; } public function registerEvents() : array { return [BeforeExport::class => function (BeforeExport $event) { $event->writer->getProperties()->setTitle("\114\141\x70\x6f\x72\141\x6e\x20\x42\x61\143\x61\x20\102\x75\x6b\x75\40\125\163\145\162"); $event->writer->getProperties()->setCreator(config("\141\160\160\x2e\x6e\141\155\145")); }, AfterSheet::class => function (AfterSheet $event) { goto Dc_va; i5IxH: $event->sheet->styleCells("\x41\61\x3a\106\61", ["\x62\x6f\x72\x64\x65\x72\x73" => ["\141\154\154\x42\x6f\162\144\145\162\x73" => ["\142\157\162\x64\x65\162\123\164\x79\x6c\x65" => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN, "\143\157\154\157\162" => ["\162\147\142" => "\70\x30\70\60\70\60"]]]]); goto ZB2cE; ZB2cE: $row = 2; goto stTkm; DAY3S: $event->sheet->styleCells("\x41\x31\x3a\x46\61", ["\146\x6f\156\x74" => ["\142\x6f\154\144" => true], "\141\154\151\x67\x6e\155\145\156\x74" => ["\x68\x6f\x72\x69\x7a\x6f\x6e\164\x61\x6c" => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER, "\166\145\x72\x74\x69\143\141\154" => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER], "\146\151\x6c\154" => ["\x66\151\x6c\154\x54\x79\160\x65" => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID, "\143\x6f\x6c\157\x72" => ["\x61\x72\x67\x62" => "\x66\x66\x62\64\143\x36\x65\67"]]]); goto i5IxH; uK5kg: if (!(count($this->data) > 0)) { goto YQ_tG; } goto Ms0Hn; stTkm: foreach ($this->data as $val) { goto NyYcF; wPn5H: $event->sheet->setCellValue("\x45" . $row, $val["\144\x69\x62\x61\143\x61"]); goto CqzH5; GIBpw: $event->sheet->setCellValue("\x42" . $row, $val["\160\162\x6f\x76\x69\x6e\163\151\137\x6e\141\155\x65"]); goto a7Qzw; CqzH5: $event->sheet->setCellValue("\x46" . $row, $val["\144\165\162\141\163\x69"])->getStyle("\106" . $row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT); goto X7B5_; NyYcF: $event->sheet->setCellValue("\x41" . $row, $val["\167\154\x5f\156\x61\155\145"]); goto GIBpw; Vngw4: $event->sheet->setCellValue("\104" . $row, $val["\x6e\x61\155\145"]); goto wPn5H; X7B5_: $row++; goto s7TDb; s7TDb: u0L2i: goto NY6Ms; a7Qzw: $event->sheet->setCellValue("\103" . $row, $val["\153\141\142\x75\160\x61\x74\x65\x6e\137\156\141\x6d\145"]); goto Vngw4; NY6Ms: } goto QXivQ; Ms0Hn: $event->sheet->styleCells("\x41\62\x3a\106" . ($row - 1), ["\142\x6f\x72\144\x65\x72\x73" => ["\141\154\x6c\102\157\x72\144\x65\162\163" => ["\x62\157\162\x64\x65\162\x53\x74\x79\x6c\145" => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN, "\143\x6f\154\x6f\162" => ["\x72\147\142" => "\70\60\70\60\70\x30"]]]]); goto p6S1D; Dc_va: $event->sheet->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE); goto DAY3S; QXivQ: NOcnF: goto uK5kg; p6S1D: YQ_tG: goto X2nAJ; X2nAJ: }]; } }
