<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-23 17:36:15             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Services\Report; use App\Repositories\Report\QuizReportRepository; use Carbon\Carbon; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Query\Builder; use Illuminate\Support\Collection; class QuizReportService { private QuizReportRepository $loans_repo; protected $client_id = ''; public function __construct() { $this->loans_repo = new QuizReportRepository(); $this->client_id = config("\x61\x70\160\x2e\143\x6c\x69\x65\156\164\x5f\x69\x64", ''); } public function get($filter) { return new Collection($this->loans_repo->get($filter)); } public function getQuestion($filter) { return new Collection($this->loans_repo->getQuestion($filter)); } public function getAnswer($filter, $question_id) { return new Collection($this->loans_repo->getAnswer($filter, $question_id)); } }
