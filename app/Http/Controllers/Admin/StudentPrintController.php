<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App;

class StudentPrintController extends Controller {
	public function index($id){
		$students = DB::select("select * from students where id = $id");
		$pdf = App::make('dompdf.wrapper');
		$pdf->setPaper(array(0, 0, 595, 1670), 'portrait');
		$pdf->loadHTML(view('print',['student'=>$students]));
		return $pdf->stream();
	}
}