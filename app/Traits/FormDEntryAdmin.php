<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use App\Models\Issue;
use App\Models\Iaecproject;
use App\Models\Projectstrains;

use App\Traits\Base;
use App\Traits\Notes;

trait FormDEntryAdmin
{
	public function enterFormD($issueRequest, $input)
	{
		foreach($issueRequest as $row)
		{
			$iaecproject_id = $row->iaecproject_id;
			$formD['usage_id'] = $input['usage_id'];
			$formD['staff_id'] = $row->pi_id;
			//$formD['staff_name'] = "";
			$formD['entry_date'] = date('Y-m-d');
			$formD['req_anim_number'] = $row->number;
			$formD['species'] = $row->species->species_id;
			$formD['strain'] = $row->strain->strain_id;
			$formD['sex'] = $row->sex;
			$formD['age'] = $row->age;
			$formD['ageunit'] = $row->ageunit;
			$formD['breeder_add'] = "to be inserted";
			$formD['approval_date'] = date('Y-m-d');
			$formD['expt_start_date'] = date('Y-m-d');
      $formD['expt_end_date'] = date('Y-m-d');
			//$formD['expt_description'] = $row->species->species_name." issued";
			//$formD['authorized_person'] = $row->user->id;
			//$formD['signature'] = $row->user->id;
			$formD['remarks'] = $input['remarks'];
			$res = Iaecproject::with('user')->where('iaecproject_id',$iaecproject_id)->first();
			foreach($res as $x)
			{
        $tableFormD = $res->formD;
				$formD['staff_name'] = $res->user->name;
				$formD['authorized_person'] = "[ Auto Entry For ]".$res->user->name;
				$formD['authorized_signature'] = $res->user->name;
			}
			//$tableFormD = $row->project_id."nformd";
      //dd($tableFormD, $formD);
			$qry = DB::table($tableFormD)->insert($formD);

			if( $qry)
			{
	      return true;
			}
			else {
	      return false;
			}
		}
	}
}
