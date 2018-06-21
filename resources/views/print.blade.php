@php
	//echo json_decode($student[0]->living,true)['step-mother'];
@endphp
<head>

	<style type="text/css">
		body{
			font-family: helvetica;
			font-size: 10px;
		}
		.border-red{
			border: 1px solid red;
		}
		.border-black{
			border: 1px solid grey;
		}
		.width-30p{
			width: 70%;
		}
		.center-align{
			text-align: center;
		}

		td,tr,table{
			border: 0px solid grey;
			margin: 0px;
		}
		div{
			border: 0px solid red;
		}

		.border1pxsolid{
			border: 1px solid #2c063f;
		}

	</style>
</head>
<body>
	<div style="position: relative;">
		<div class="border-black" style="width:35%">
			<table style="width:100%">
				<tr>
					<td style="text-align: right; padding-right: 5px;">Date of Application:</td><td>
						<table style="width:100%">
						<tr>
							<td class="center-align">{{ date('d',strtotime($student[0]->application)) }}</td><td class="center-align">{{ date('m',strtotime($student[0]->application)) }}</td><td class="center-align">{{ date('Y',strtotime($student[0]->application)) }}</td>
						</tr>
						<tr>
							<td class="center-align">DAY</td><td class="center-align">MO</td><td class="center-align">YEAR</td>
						</tr>
					</table>
					</td>
				</tr>
			</table>
		</div>
		<div style="width: 10%; position: absolute; height: 0%; right: 45%; top: -25px; ">
			<img width="100%" src="{{public_path()}}\uploads\logo.jpg">			
		</div>
		<div style="position: absolute; height: 0%; right: 1px; top: -25px;">
				<div align="center" style="height: 128px; width: 128px; border: 1px solid #2c063f;">
					<img width="100%" id="mainImage" src="{{$student[0]->photo}}">
				</div>
		</div>
	</div>
	<div style="margin-bottom: 40px;">
		<table style="width: 80%;">
			<tr>
				<td width="16px"><input
						@if ($student[0]->level == 'PRESCHOOL')
									checked
						@endif type="checkbox"></td>
				<td>PRESCHOOL</td>
				<td width="16px"><input 
						@if ($student[0]->level == 'GRADESCHOOL')
									checked
						@endif type="checkbox"></td>
				<td>GRADE SCHOOL</td>
				<td width="16px"><input 
						@if ($student[0]->level == 'MIDDLE SCHOOL')
									checked
						@endif type="checkbox"></td>
				<td>MIDDLE SCHOOL</td>
				<td width="16px"><input
						@if ($student[0]->level == 'HIGH SCHOOL')
									checked
						@endif type="checkbox"></td>
				<td>HIGH SCHOOL</td>
			</tr>
		</table>
	</div>
	<div style="width:100%;border:1px solid #2c063f;">
		<table width="100%" cellspacing="0px" cellpadding="2px">
			<tr>
				<td colspan="5" style="background-color: #2c063f; color: #ff9900">APPLICANT INFORMATION</td>
			</tr>
			<tr>
				<td style="border-right:1px solid #2c063f;" colspan="4">Name of Child</td>
				<td rowspan="3" width="20%">
					<table width="100%">
						<tr>
							<td>Gender</td>
							<td><input 
								@if ($student[0]->gender == 'Male')
									checked
								@endif type="checkbox"></td>
							<td><input 
								@if ($student[0]->gender == 'Female')
									checked
								@endif type="checkbox"></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>Male</td>
							<td>Female</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr align="CENTER">
				<td>{{ ucwords($student[0]->lastname) }}</td>
				<td>{{ ucwords($student[0]->firstname) }}</td>
				<td>{{ ucwords($student[0]->middlename) }}</td>
				<td style="border-right:1px solid #2c063f;">(PNAME)</td>
			</tr>
			<tr align="CENTER">
				<td>Last Name</td>
				<td>First Name</td>
				<td>Middle Name</td>
				<td style="border-right:1px solid #2c063f;">Preferred Name</td>
			</tr>			
		</table>
		<table width="100%" style="border-top: 1px solid #2c063f;" cellspacing="0px" cellpadding="2px">
			<tr>
				<td width="12%" rowspan="2">Date of Birth:</td>
				<td>{{ date('d',strtotime($student[0]->birthdate)) }}</td>
				<td>{{ date('m',strtotime($student[0]->birthdate)) }}</td>
				<td style="border-right:1px solid #2c063f">{{ date('Y',strtotime($student[0]->birthdate)) }}</td>
				<td width="30%" style="border-right:1px solid #2c063f;">Citizenship</td>
				<td width="30%">Place of Birth:</td>
			</tr>	
			<tr>
				<td>DAY</td>
				<td>MO</td>
				<td style="border-right:1px solid #2c063f;">YEAR</td>
				<td style="border-right:1px solid #2c063f;">(PASSPORT):{{ " ".ucwords($student[0]->citizenship) }}</td>
				<td>{{ ucwords($student[0]->birthplace) }}</td>
			</tr>			
		</table>
		</table>
		<table width="100%" style="border-top: 1px solid #2c063f;" cellspacing="0px" cellpadding="2px">
			<tr>
				<td>Residential Address in the Philippines</td>
			</tr>
			<tr>
				<td>{{ ucwords($student[0]->residentialaddress) }}</td>
			</tr>			
		</table>
		<table width="100%" style="border-top: 1px solid #2c063f;" cellspacing="0px" cellpadding="2px">
			<tr>
				<td width="30%" style="border-right:1px solid #2c063f">Mobile/Home Phone Numbers:</td>
				<td width="30%" style="border-right:1px solid #2c063f">Email Address:</td>
				<td width="30%">Religion:</td>
			</tr>
			<tr>
				<td style="border-right:1px solid #2c063f">{{ ucwords($student[0]->residentialaddress) }}</td>
				<td style="border-right:1px solid #2c063f">{{ $student[0]->email }}</td>
				<td>{{ ucwords($student[0]->religion) }}</td>
			</tr>			
		</table>
	</div>
	<div style="width:100%;">
		<table width="100%" cellspacing="0px" cellpadding="2px">
			<tr><td colspan="8">1. The student will be living in the philippines with (pls. check all that apply):</td></tr>			
			<tr>
				<td width="14px"><input type="checkbox"
					@if (json_decode($student[0]->living,true)['father'] == 1)
						checked
					@endif name=""></td>
				<td>Father</td>
				<td width="14px"><input type="checkbox"
					@if (json_decode($student[0]->living,true)['mother'] == 1)
						checked
					@endif name=""></td>
				<td colspan="5">Mother</td>
			</tr>			
			<tr>
				<td><input type="checkbox"
					@if (json_decode($student[0]->living,true)['step-father'] == 1)
						checked
					@endif name=""></td>
				<td>Step-Father</td>
				<td><input type="checkbox"
					@if (json_decode($student[0]->living,true)['step-mother'] == 1)
						checked
					@endif name=""></td>
				<td>Step-Mother</td>
				<td width="14px"><input type="checkbox"
					@if (json_decode($student[0]->living,true)['legal_guardian'] == 1)
						checked
					@endif name=""></td>
				<td>Legal Guardian:</td>
				<td align="center" width="40%" style="border-bottom: 1px solid grey;">{{$student[0]->legalguardian}}</td>
				<td align="center" width="30%" style="border-bottom: 1px solid grey">{{$student[0]->contactnumber}}</td>
			</tr>
			<tr>
				<td colspan="6"></td>
				<td align="center">Name</td>
				<td align="center">Contact Number</td>
			</tr>		
		</table>
		<table width="100%" cellspacing="0px" cellpadding="2px">
			<tr>
				<td>2. Your child's English reading and writing level:</td>
				<td width="14px"><input type="checkbox" name=""
						@if ($student[0]->readingwriting ==  'Good')
						checked
						@endif
					></td>
				<td width="90px">Good</td>
				<td width="14px"><input type="checkbox" name=""
						@if ($student[0]->readingwriting ==  'Fair')
						checked
						@endif
					></td>
				<td width="90px">Fair</td>
				<td width="14px"><input type="checkbox" name=""
						@if ($student[0]->readingwriting ==  'Limited')
						checked
						@endif
					></td>
				<td width="90px">Limited</td>
				<td width="14px"><input type="checkbox" name=""
						@if ($student[0]->readingwriting ==  'None')
						checked
						@endif
					></td>
				<td width="90px">None</td>
			</tr>
			<tr>
				<td>3. Your child's English verbal proficiency:</td>
				<td><input type="checkbox" name=""
						@if ($student[0]->verbalproficiency ==  'Good')
						checked
						@endif
					></td>
				<td>Good</td>
				<td><input type="checkbox" name=""
						@if ($student[0]->verbalproficiency ==  'Fair')
						checked
						@endif
					></td>
				<td>Fair</td>
				<td><input type="checkbox" name=""
						@if ($student[0]->verbalproficiency ==  'Limited')
						checked
						@endif
					></td>
				<td>Limited</td>
				<td><input type="checkbox" name=""
						@if ($student[0]->verbalproficiency ==  'None')
						checked
						@endif
					></td>
				<td>None</td>
			</tr>
		</table><!--  -->
		<table width="100%" cellspacing="0px" cellpadding="2px">
			<tr>
				<td width="25%">4. Major language(2) used at home:</td>
				<td width="30%" style="border-bottom: 1px solid grey">
					@if($student[0]->mojorlanguages != '[{}]')
						@foreach (json_decode($student[0]->mojorlanguages,true) as $language)
							{{ucwords($language['languages'])}}
						@endforeach
					@endif
				</td>
				<td width="23%" align="right">Other languages/dialects spoken:</td>
				<td style="border-bottom: 1px solid grey">
					@if($student[0]->otherlanguages != '[{}]')
						@foreach (json_decode($student[0]->otherlanguages,true) as $language)
							{{ucwords($language['languages'])}}
						@endforeach
					@endif
				</td>
			</tr>
		</table>
		<table style="margin-top: 7px" width="100%" cellspacing="0px" cellpadding="2px">
			<tr>
				<td>5. List any participation in advanced level classes (i.e., Advanced Math, Gifted or Talented, Gateway, Writing, etc.):</td>
			</tr>
			<tr>
				<td style="border-bottom: 1px solid grey" colspan="2">
					@foreach (json_decode($student[0]->classparticipation,true) as $participation)
						{{ucwords($participation['participation'])}}
					@endforeach
				</td>
			</tr>
		</table>
		<table style="margin-top: 7px" width="100%" cellspacing="0px" cellpadding="2px">
			<tr>
				<td>6. Did your child receive any remedial help in previous school? (i.e., Remedial Program, Special Education, Speech Therapy, IEP, IDR, etc.) if yes, please explain and provide latest testing results. </td>
			</tr>
			<tr>
				<td style="border-bottom: 1px solid grey" colspan="2">{{$student[0]->remedialhelpexplantion}}</td>
			</tr>
		</table>
		<table style="margin-top: 7px" width="100%" cellspacing="0px" cellpadding="2px">
			<tr>
				<td valign="top" width="270px">7. Does you child have any special talent or interest in:</td>
				<td width="14px"><input type="checkbox" name=""
						@if (json_decode($student[0]->specialtalent,true)['dance'] == 1)
							checked
						@endif name=""></td>
					></td>
				<td width="50px">Dance</td>
				<td width="14px"><input type="checkbox" name=""
						@if (json_decode($student[0]->specialtalent,true)['drama'] == 1)
							checked
						@endif name=""></td>
					></td>
				<td>Drama</td>
				<td width="14px"><input type="checkbox" name=""
						@if (json_decode($student[0]->specialtalent,true)['art'] == 1)
							checked
						@endif name=""></td>
					></td>
				<td>Art</td>
				<td width="14px"><input type="checkbox" name=""
						@if (json_decode($student[0]->specialtalent,true)['computer'] == 1)
							checked
						@endif name=""></td>
					></td>
				<td>Computer</td>
				<td width="14px"><input type="checkbox" name=""
						@if (json_decode($student[0]->specialtalent,true)['vocal'] == 1)
							checked
						@endif name=""></td>
					></td>
				<td>Vocal/Chorus</td>
			</tr>
		</table>
		<table width="100%" cellspacing="0px" cellpadding="2px">
			<tr>
				<td width="270px">&nbsp;</td>
				<td width="14px"><input type="checkbox" name="" 
						@if (json_decode($student[0]->specialtalent,true)['athletics']['isChecked'] == 1)
							checked
						@endif></td>
					></td>
				<td width="150px">Athlectics - Favorite sport(s):</td>
				<td style="border-bottom: 1px solid grey">{{json_decode($student[0]->specialtalent,true)['athletics']['sports']}}</td>
			</tr>
		</table>
		<table width="100%" cellspacing="0px" cellpadding="2px">
			<tr>
				<td width="270px">&nbsp;</td>
				<td width="14px"><input type="checkbox" name=""
						@if (json_decode($student[0]->specialtalent,true)['band']['isChecked'] == 1)
							checked
						@endif
					></td>
				<td width="90px">Band(Instrument)</td>
				<td style="border-bottom: 1px solid grey">{{json_decode($student[0]->specialtalent,true)['band']['instrument']}}</td>
				<td width="14px"><input type="checkbox" name=""
						@if (json_decode($student[0]->specialtalent,true)['string']['isChecked'] == 1)
							checked
						@endif
					></td>
				<td width="90px">String(Instrument)</td>
				<td style="border-bottom: 1px solid grey">{{json_decode($student[0]->specialtalent,true)['string']['instrument']}}</td>
			</tr>
		</table>
		<table style="margin-top: 7px" width="100%" cellspacing="0px" cellpadding="2px">
			<tr>
				<td>8. Is there any other information you think the teacher should know about your child?</td>
			</tr>
			<tr>
				<td style="border-bottom: 1px solid grey" colspan="2">{{$student[0]->otherinfofield}}</td>
			</tr>
		</table>
		<table style="margin-top: 7px" width="100%" cellspacing="0px" cellpadding="2px">
			<tr><td>9. Has your child ever been asked to leave school because of any behavioral/disciplinary problems? If yes, please explain.</td>
			</tr>
			<tr>
				<td style="border-bottom: 1px solid grey" colspan="2">{{$student[0]->disciplinaryproblemexplanation}}</td>
			</tr>
		</table>
	</div>
	<!--SECOND PAGE -->
	<div style="width:100%; margin-top: 10px">
		**REQUIRED INFORMATION: Provide (print) the complete name and address of your child's most recent school. WIS reserves the right to contact the previous Head of School directly for further information on your child's school documents/records.
		<table width="57%%" cellspacing="0px" cellpadding="2px">
			<tr>
				<td width="33%">Name of Previous School:</td>
				<td style="border-bottom: 1px solid grey">{{$student[0]->previousschool}}</td>
			</tr>
		</table>
		<table width="100%" cellspacing="0px" cellpadding="2px">
			<tr>
				<td width="200px">Complete Address (including zip code):</td>
				<td style="border-bottom: 1px solid grey">{{$student[0]->previousschooladdress}}</td>
			</tr>
		</table>
	</div>
	<div style="width:100%; margin-top: 10px">
		<table cellspacing="0px" width="100%" style="border: 1px solid #2c063f">
			<tr>
				<td style="background-color: #2c063f;color: #ff9900;" class="border1pxsolid" align="center">GRADE/LEVEL</td>
				<td style="background-color: #2c063f;color: #ff9900;" class="border1pxsolid" align="center">NAME OF SCHOOL</td>
				<td style="background-color: #2c063f;color: #ff9900;" class="border1pxsolid" align="center">ACADEMIC YEAR ATTENDED</td>
			</tr>
			<tr>
				<td width="23%" class="border1pxsolid">
					@if (count(json_decode($student[0]->schooltable,true)) >= 1 && count(json_decode($student[0]->schooltable,true)[0]) != 0)
						{{json_decode($student[0]->schooltable,true)[0]['level']}}
					@else
						&nbsp;
					@endif
				</td>
				<td width="50%" class="border1pxsolid">
					@if (count(json_decode($student[0]->schooltable,true)) >= 1 && count(json_decode($student[0]->schooltable,true)[0]) != 0)
						{{json_decode($student[0]->schooltable,true)[0]['school']}}
					@endif
				</td>
				<td class="border1pxsolid">
					@if (count(json_decode($student[0]->schooltable,true)) >= 1 && count(json_decode($student[0]->schooltable,true)[0]) != 0)
						{{json_decode($student[0]->schooltable,true)[0]['yearattended']}}
					@endif
				</td>
			</tr>
			<tr>
				<td class="border1pxsolid">
					@if (count(json_decode($student[0]->schooltable,true)) >= 2)
						{{json_decode($student[0]->schooltable,true)[1]['level']}}	
					@else
						&nbsp;
					@endif
				</td>
				<td class="border1pxsolid">
					@if (count(json_decode($student[0]->schooltable,true)) >= 2)
						{{json_decode($student[0]->schooltable,true)[1]['school']}}	
					@endif
				</td>
				<td class="border1pxsolid">
					@if (count(json_decode($student[0]->schooltable,true)) >= 2)
						{{json_decode($student[0]->schooltable,true)[1]['yearattended']}}	
					@endif
				</td>
			</tr>
			<tr>
				<td class="border1pxsolid">
					@if (count(json_decode($student[0]->schooltable,true)) >= 3)
						{{json_decode($student[0]->schooltable,true)[2]['level']}}
					@else
						&nbsp;
					@endif
				</td>
				<td class="border1pxsolid">
					@if (count(json_decode($student[0]->schooltable,true)) >= 3)
						{{json_decode($student[0]->schooltable,true)[2]['school']}}
					@endif
				</td>
				<td class="border1pxsolid">
					@if (count(json_decode($student[0]->schooltable,true)) >= 3)
						{{json_decode($student[0]->schooltable,true)[2]['yearattended']}}
					@endif
				</td>
			</tr>
		</table>

		<table cellspacing="0px" width="100%" style="border: 1px solid #2c063f; margin-top: 10px; border-bottom: none;">
			<tr>
				<td colspan="2" style="background-color: #2c063f;color: #ff9900; padding-left: 5px" class="border1pxsolid">PARENT/LEGAL GUARDIAN INFORMATION</td>
			</tr>
			<tr>
				<td style="border-right: 1px solid #2c063f" width="50%">
					<table width="100%">
						<tr>
							<td width="15px" style="padding-left: 5px"><input type="checkbox" name=""
								@if ($student[0]->father == 'Father')
									checked
								@endif
							></td>
							<td>Father</td>
							<td width="15px"><input type="checkbox" name=""
								@if ($student[0]->father == 'Step-father')
									checked
								@endif
							></td>
							<td>Step-father</td>
							<td width="15px"><input type="checkbox" name=""
								@if ($student[0]->father == 'Legal Guardian')
									checked
								@endif
							></td>
							<td>Legal Guardian</td>
						</tr>
					</table>
				</td>
				<td>
					<table width="100%">
						<tr>
							<td width="15px"><input type="checkbox" name=""
								@if ($student[0]->mother == 'Mother')
									checked
								@endif
							></td>
							<td>Mother</td>
							<td width="15px"><input type="checkbox" name=""
								@if ($student[0]->mother == 'Step-mother')
									checked
								@endif
							></td>
							<td>Step-mother</td>
							<td width="15px"><input type="checkbox" name=""
								@if ($student[0]->mother == 'Legal Guardian')
									checked
								@endif
							></td>
							<td>Legal Guardian</td>
						</tr>
					</table>
				</td>
			</tr>
			{{-- <tr>
				<td width="15px" style="padding-left: 5px"><input type="checkbox" name=""></td>
				<td>Father</td>
				<td width="15px"><input type="checkbox" name=""></td>
				<td>Step-father</td>
				<td width="15px"><input type="checkbox" name=""></td>
				<td>Legal Guardian</td>
				<td width="15px"><input type="checkbox" name=""></td>
				<td>Mother</td>
				<td width="15px"><input type="checkbox" name=""></td>
				<td>Step-mother</td>
				<td width="15px"><input type="checkbox" name=""></td>
				<td>Legal Guardian</td>
			</tr> --}}
		</table>
		<table cellspacing="0px" width="100%" style="border: 1px solid #2c063f; margin-top: 0px; border-bottom: none; border-top: none;">
			<tr>
				<td width="50%" style="border-right: 1px solid #2c063f">
					<table width="100%" style="margin: 0px 15px 0px 3px;">
						<tr>
							<td width="60px">Last Name:</td>
							<td style="border-bottom: 1px solid  grey">{{ucwords($student[0]->fatherlastname)}}</td>
						</tr>
						<tr>
							<td width="60px">First Name:</td>
							<td style="border-bottom: 1px solid  grey">{{ucwords($student[0]->fatherfirstname)}}</td>
						</tr>
					</table>
				</td>
				<td>
					<table width="100%" style="margin: 0px 15px 0px 3px;">
						<tr>
							<td width="60px">Last Name:</td>
							<td style="border-bottom: 1px solid  grey">{{ucwords($student[0]->motherlastname)}}</td>
						</tr>
						<tr>
							<td width="60px">First Name:</td>
							<td style="border-bottom: 1px solid  grey">{{ucwords($student[0]->motherfirstname)}}</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table cellspacing="0px" width="100%" style="border: 1px solid #2c063f; margin-top: -5px; border-bottom: none; border-top: none;">
			<tr>
				<td width="50%" style="border-right: 1px solid #2c063f">
					<table width="100%" style="margin: 0px 15px 0px 3px;">
						<tr>
							<td width="72px">Middle Name:</td>
							<td style="border-bottom: 1px solid  grey">{{ucwords($student[0]->fathermiddlename)}}</td>
						</tr>
						<tr>
							<td colspan="2"></td>
						</tr>
					</table>
				</td>
				<td>
					<table width="100%" style="margin: 0px 15px 0px 3px;">
						<tr>
							<td width="72px">Middle Name:</td>
							<td style="border-bottom: 1px solid  grey">{{ucwords($student[0]->mothermiddlename)}}</td>
						</tr>
						<tr>
							<td height="2px" colspan="2"></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table cellspacing="0px" width="100%" style="border: 1px solid #2c063f; margin-top: -5px;margin-bottom: 0px;">
			<tr>
				<td width="25%" style="border-right: 1px solid #2c063f">
					<table width="100%" style="margin: 0px 15px 0px 3px;">
						<tr>
							<td>Citizenship</td>
							<td rowspan="2">{{ucwords($student[0]->fathercitizenship)}}</td>
						</tr>
						<tr>
							<td>(Passport)</td>
						</tr>
					</table>
				</td>
				<td width="25%" style="border-right: 1px solid #2c063f">
					<table width="100%" style="margin: 0px 15px 0px 3px;">
						<tr>
							<td>Philippines</td>
							<td rowspan="2">{{ucwords($student[0]->fathervisastatus)}}</td>
						</tr>
						<tr>
							<td>Visa Status</td>
						</tr>
					</table>
				</td>
				<td width="25%" style="border-right: 1px solid #2c063f">
					<table width="100%" style="margin: 0px 15px 0px 3px;">
						<tr>
							<td>Citizenship</td>
							<td rowspan="2">{{ucwords($student[0]->mothercitizenship)}}</td>
						</tr>
						<tr>
							<td>(Passport)</td>
						</tr>
					</table>
				</td>
				<td  width="25%">
					<table width="100%" style="margin: 0px 15px 0px 3px;">
						<tr>
							<td>Philippines</td>
							<td rowspan="2">{{ucwords($student[0]->mothervisastatus)}}</td>
						</tr>
						<tr>
							<td>Visa Status</td>
						</tr>
					</table>
				</td>	
			</tr>
		</table>
		<table cellspacing="0px" width="100%" style="border: 1px solid #2c063f; margin-top: -2px;">
			<tr>
				<td width="25%" style="border-right: 1px solid #2c063f">
					<table width="100%" style="margin: 0px 15px 0px 3px;">
						<tr>
							<td>Employer or Organization:</td>
						</tr>
						<tr>
							<td>{{ucwords($student[0]->fatheremployer)}}</td>
						</tr>
					</table>
				</td>
				<td style="border-right: 1px solid #2c063f">
					<table width="100%" style="margin: 0px 15px 0px 3px;">
						<tr>
							<td>Office Phone Number:</td>
							
						</tr>
						<tr>
							<td>{{ucwords($student[0]->fatherofficenumber)}}</td>
						</tr>
					</table>
				</td>
				<td width="25%" style="border-right: 1px solid #2c063f">
					<table width="100%" style="margin: 0px 15px 0px 3px;">
						<tr>
							<td>Employer or Organization:</td>
						</tr>
						<tr>
							<td>{{ucwords($student[0]->motheremployer)}}</td>
						</tr>
					</table>
				</td>
				<td width="25%">
					<table width="100%" style="margin: 0px 15px 0px 3px;">
						<tr>
							<td>Office Phone Number:</td>
						</tr>
						<tr>
							<td>{{ucwords($student[0]->motherofficenumber)}}</td>
						</tr>
					</table>
				</td>	
			</tr>
		</table>
		<table cellspacing="0px" width="100%" style="border: 1px solid #2c063f; margin-top: -2px;">
			<tr>
				<td width="50%" style="border-right: 1px solid #2c063f">
					<table width="100%" style="margin: 0px 15px 0px 3px;">
						<tr>
							<td width="90px">Graduate Degree:</td>
							<td>{{ucwords($student[0]->fatherdegree)}}</td>
						</tr>
						<tr>
							<td>School:</td>
							<td>{{ucwords($student[0]->fatherschool)}}</td>
						</tr>
					</table>
				</td>
				<td>
					<table width="100%" style="margin: 0px 15px 0px 3px;">
						<tr>
							<td width="90px">Graduate Degree:</td>
							<td>{{ucwords($student[0]->motherdegree)}}</td>
						</tr>
						<tr>
							<td>School:</td>
							<td>{{ucwords($student[0]->motherschool)}}</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table cellspacing="0px" width="100%" style="border: 1px solid #2c063f; margin-top: -2px;">
			<tr>
				<td width="50%" style="border-right: 1px solid #2c063f">
					<table width="100%" style="margin: 0px 15px 0px 3px;">
						<tr>
							<td width="80px">Mobile Number:</td>
							<td>{{$student[0]->fathernumber}}</td>
						</tr>
						<tr>
							<td style="font-size: 8px;" colspan="2">Would you like to receive text messages about upcoming events, activities and other school announcement on this number? 
								@if($student[0]->fatherreceivetext == 1)
									(<u>Yes</u> or No)
								@else
									(Yes or <u>No</u>)
								@endif
							</td>
							
						</tr>
					</table>
				</td>
				<td>
					<table width="100%" style="margin: 0px 15px 0px 3px;">
						<tr>
							<td width="80px">Mobile Number:</td>
							<td>{{$student[0]->mothernumber}}</td>
						</tr>
						<tr>
							<td style="font-size: 8px;" colspan="2">Would you like to receive text messages about upcoming events, activities and other school announcement on this number? 
								@if($student[0]->motherreceivetext == 1)
									(<u>Yes</u> or No)
								@else
									(Yes or <u>No</u>)
								@endif
							</td>
							
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table cellspacing="0px" width="100%" style="border: 1px solid #2c063f; margin-top: -2px; border-bottom: none;">
			<tr>
				<td width="50%" style="border-right: 1px solid #2c063f">
					<table width="100%" style="margin: 2px 15px 0px 3px;">
						<tr>
							<td colspan="4">EMERGENCY CONTACT INFORMATION</td>
						</tr>
						<tr>
							<td width="35px">Name:</td>
							<td style="border-bottom: 1px solid grey">{{ucwords($student[0]->emergencycontactname)}}</td>
							<td width="45px">Address:</td>
							<td style="border-bottom: 1px solid grey">{{ucwords($student[0]->emergencyaddress)}}</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table cellspacing="0px" width="100%" style="border: 1px solid #2c063f; margin-top: -2px; border-top: none;">
			<tr>
				<td width="50%" style="border-right: 1px solid #2c063f">
					<table width="100%" style="margin: 0px 15px 8px 3px;">
						<tr>
							<td width="66px">Office Phone:</td>
							<td width="260px" style="border-bottom: 1px solid grey">{{ucwords($student[0]->emergencyofficephone)}}</td>
							<td width="68px">Home Phone:</td>
							<td style="border-bottom: 1px solid grey">{{ucwords($student[0]->emergencyhomephone)}}</td>
						</tr>
						<tr>
							<td>Mobile No.:</td>
							<td style="border-bottom: 1px solid grey">{{ucwords($student[0]->emergencymobilenumber)}}</td>
							<td></td>
							<td></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table cellspacing="0px" width="100%" style="border: 1px solid #2c063f; margin-top: -2px; border-bottom: none; border-top: none;">
			<tr>
				<td width="50%" style="border-right: 1px solid #2c063f">
					<table width="100%" style="margin: 0px 15px 2px 3px;">
						<tr>
							<td style="vertical-align: top" width="15px"><input type="checkbox" name=""
									@if ($student[0]->isagree ==  1)
										checked
									@endif
								></td>
							<td style="padding-top: 5px;">Failure to provide complete and accurate information of any kind on this form will void the application and may result to it's cancellation. WESTFIELDS INTERNATIONAL SCHOOL reserves the right to determine the placement of the applicant in the grade level or subjects deemed most appropriate for the student's school experience/performance.</td>
						</tr>
						<tr>
							<td width="15px"><input type="checkbox" name=""
									@if ($student[0]->formiscorrect ==  1)
										checked
									@endif
								></td>
							<td>To the best of my knowledge the information written on this form is true and correct.</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table cellspacing="0px" width="100%" style="border: 1px solid #2c063f; margin-top: -2px; border-top: none;">
			<tr>
				<td width="50%" style="border-right: 1px solid #2c063f">
					<table width="100%" style="margin: 35px 15px 2px 3px;">
						<tr>
							<td align="center">(data here)</td>
							<td width="10px">&nbsp;</td>
							<td align="center">(data here)</td>
							<td width="10px">&nbsp;</td>
							<td align="center" width="20%">{{ date('d-m-Y',strtotime($student[0]->date)) }}</td>
						</tr>
						<tr>
							<td style="border-top: 1px solid grey" align="center">Signature of Father</td>
							<td>&nbsp;</td>
							<td style="border-top: 1px solid grey" align="center">Signature of Mother</td>
							<td>&nbsp;</td>
							<td style="border-top: 1px solid grey" align="center">Date</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
	<div style="margin-top: 30px; position: relative;  height: 70px;">
		<div style="border: 1px solid black; width: 28%; margin-top: 10px;">
			<table width="100%">
				<tr>
					<td colspan="3" align="center"><u>FOR OFFICE USE:</u></td>
				</tr>
				<tr>
					<td>SCHOOL YEAR:</td>
					<td colspan="2">{{ $student[0]->schoolyear }}</td>
					<td></td>
				</tr>
			</table>
		</div>
		<div style="width: 10%; position: absolute; height: 0%; right: 45%; top: -9px; ">
			<img width="100%" src="{{public_path()}}\uploads\logo.jpg">			
		</div>
	</div>
	<div style="width: 100%;">
		<table width="100%">
			<tr><td style="padding: 3px; background-color: #2c063f; color: #ff9900">MEDICAL INFORMATION and HEALTH HISTORY</td></tr>
			<tr><td>1. Does your child have the following?</td></tr>
		</table>
		<table cellpadding="0px" cellspacing="0px" width="76%" style="padding-left: 20px;">
			<tr>
				<td width="120px">Asthma</td>
				<td width="17px"><input type="checkbox" name=""
					@if ($student[0]->asthma ==  0)
						checked
					@endif
				></td>
				<td width="22px">No</td>
				<td width="17px"><input type="checkbox" name=""
					@if ($student[0]->asthma ==  1)
						checked
					@endif
				></td>
				<td width="30px">Yes</td>
				<td>Does your child carry an asthma inhaler?</td>
				<td width="17px"><input type="checkbox" name=""
					@if ($student[0]->asthmainhaler ==  0)
						checked
					@endif
				></td>
				<td width="22px">No</td>
				<td width="17px"><input type="checkbox" name=""
					@if ($student[0]->asthmainhaler ==  1)
						checked
					@endif
				></td>
				<td width="30px">Yes</td>
			</tr>
		</table>
		<table cellpadding="0px" cellspacing="0px" width="100%" style="padding-left: 20px; margin-top: -3px;">
			<tr>
				<td style="padding-bottom: -5px;" width="120px">Allergies</td>
				<td style="padding-bottom: -5px;" width="17px"><input type="checkbox" name=""
					@if ($student[0]->allergy ==  0)
						checked
					@endif
				></td>
				<td style="padding-bottom: -5px;" width="22px">No</td>
				<td style="padding-bottom: -5px;" width="17px"><input type="checkbox" name=""
					@if ($student[0]->allergy ==  1)
						checked
					@endif
				></td>
				<td style="padding-bottom: -5px;" width="30px">Yes</td>
				<td style="padding-bottom: -5px;" width="88px">If yes, pls. specify:</td>
				<td style="padding-bottom: -5px; border-bottom: 1px solid grey">{{ ucfirst($student[0]->allergies) }}</td>
				<td style="padding-bottom: -5px;" width="50px">Reaction:</td>
				<td style="padding-bottom: -5px; border-bottom: 1px solid grey">{{ ucfirst($student[0]->allergyreaction) }}</td>
			</tr>
		</table>
		<table cellpadding="0px" cellspacing="0px" width="100%" style="padding-left: 20px; margin-top: 2px;">
			<tr>
				<td style="padding-bottom: -5px;" width="120px">Drug Allergies</td>
				<td style="padding-bottom: -5px;" width="17px"><input type="checkbox" name=""
					@if ($student[0]->drugallergy ==  0)
						checked
					@endif
				></td>
				<td style="padding-bottom: -5px;" width="22px">No</td>
				<td style="padding-bottom: -5px;" width="17px"><input type="checkbox" name=""
					@if ($student[0]->drugallergy ==  1)
						checked
					@endif
				></td>
				<td style="padding-bottom: -5px;" width="30px">Yes</td>
				<td style="padding-bottom: -5px;" width="88px">If yes, pls. specify:</td>
				<td style="padding-bottom: -5px;border-bottom: 1px solid grey">{{ ucfirst($student[0]->drugallergies) }}</td>
				<td style="padding-bottom: -5px;" width="50px">Reaction:</td>
				<td style="padding-bottom: -5px;border-bottom: 1px solid grey">{{ ucfirst($student[0]->drugallergyreaction) }}</td>
			</tr>
		</table>
		<table cellpadding="0px" cellspacing="0px" width="100%" style="padding-left: 20px; margin-top: 2px;">
			<tr>
				<td style="padding-bottom: -5px;" width="120px">Eye or vision problems</td>
				<td style="padding-bottom: -5px;" width="17px"><input type="checkbox" name=""
					@if ($student[0]->visionproblem ==  0)
						checked
					@endif
				></td>
				<td style="padding-bottom: -5px;" width="22px">No</td>
				<td style="padding-bottom: -5px;" width="17px"><input type="checkbox" name=""
					@if ($student[0]->visionproblem ==  1)
						checked
					@endif>
				</td>
				<td style="padding-bottom: -5px;" width="30px">Yes</td>
				<td style="padding-bottom: -5px;" width="45px">Describe:</td>
				<td style="padding-bottom: -5px; border-bottom: 1px solid grey">{{ ucfirst($student[0]->hearingproblemdescription) }}</td>
			</tr>
		</table>
		<table cellpadding="0px" cellspacing="0px" width="100%" style="padding-left: 20px; margin-top: 2px;">
			<tr>
				<td style="padding-bottom: -5px;" width="120px">Ear or hearing problems</td>
				<td style="padding-bottom: -5px;" width="17px"><input type="checkbox" name=""
					@if ($student[0]->hearingproblem ==  0)
						checked
					@endif
				></td>
				<td style="padding-bottom: -5px;" width="22px">No</td>
				<td style="padding-bottom: -5px;" width="17px"><input type="checkbox" name=""
					@if ($student[0]->hearingproblem ==  1)
						checked
					@endif
				></td>
				<td style="padding-bottom: -5px;" width="30px">Yes</td>
				<td style="padding-bottom: -5px;" width="45px">Describe:</td>
				<td style="padding-bottom: -5px; border-bottom: 1px solid grey">{{ ucfirst($student[0]->hearingproblemdescription) }}</td>
			</tr>
		</table>
		<table cellpadding="0px" cellspacing="0px" width="100%" style="margin-top: 9px;">
			<tr>
				<td style="padding-bottom: -5px;" width="419px">2. Any other health condition that the school should be aware of (e.g. epilepsy, diabetes etc):</td>
				<td style="border-bottom:1px solid grey;">{{ $student[0]->healthcondition }}</td>
			</tr>
		</table>
		<table cellpadding="0px" cellspacing="0px" width="100%" style="margin-top: 9px;">
			<tr>
				<td style="padding-bottom: -5px;" width="270px">3. Has your child recently been hospitalized? Why?/When?</td>
				<td style="border-bottom:1px solid grey;">{{ $student[0]->hospitalized }}</td>
			</tr>
		</table>
		<table cellpadding="0px" cellspacing="0px" width="100%" style="margin-top: 9px;">
			<tr>
				<td style="padding-bottom: -5px;" width="295px">4. Has your child recently had any serious injuries: Why?/When?</td>
				<td style="border-bottom:1px solid grey;">{{ $student[0]->injuries }}</td>
			</tr>
		</table>
		<table cellpadding="0px" cellspacing="0px" width="100%" style="margin-top: 7px;">
			<tr>
				<td style="padding-bottom: -5px;" width="190px">5. Is your child on a regular medication?</td>
				<td style="padding-bottom: -5px;" width="17px"><input type="checkbox" name=""
					@if ($student[0]->medication ==  0)
						checked
					@endif
				></td>
				<td style="padding-bottom: -5px;" width="18px">No</td>
				<td style="padding-bottom: -5px;" width="17px"><input type="checkbox" name=""
					@if ($student[0]->medication ==  1)
						checked
					@endif
				></td>
				<td style="padding-bottom: -5px;" width="27px">Yes</td>
				<td style="padding-bottom: -5px;" width="180px">Name of medication(s) and frequency:</td>
				<td style="border-bottom: 1px solid grey;padding-bottom: -5px;">{{ $student[0]->medications }}</td>
			</tr>
		</table>
		<table cellpadding="0px" cellspacing="0px" width="100%" style="margin-top: 3px;">
			<tr>
				<td width="330px">6. Does your child need to take any medication(s) during school hours?</td>
				<td width="17px"><input type="checkbox" name=""
					@if ($student[0]->schoolhourmedication ==  0)
						checked
					@endif
				></td>
				<td width="18px">No</td>
				<td width="17px"><input type="checkbox" name=""
					@if ($student[0]->schoolhourmedication ==  1	)
						checked
					@endif
				></td>
				<td width="27px">Yes</td>
				<td>if so, a letter from Medical Doctor must be submitted</td>
			</tr>
			<tr>
				<td style="padding-left: 12px;" colspan="6">and be kept on file and medication(s) will also be kept in school, to be dispensed only by the teacher or authorized person.</td>
			</tr>
		</table>
		<table width="100%" style="margin-top: 8px;">
			<tr><td style="padding: 3px; background-color: #2c063f; color: #ff9900;">AUTHORIZATION</td></tr>
			<tr><td>I give consent for my child to receive the following:</td></tr>
		</table>
		<table cellpadding="0px" cellspacing="0px" width="100%" style="padding-left: 20px;">
			<tr>
				<td style="padding-bottom: -3px;" width="210px">*1. Minor first aid</td>
				<td style="padding-bottom: -3px;" width="17px"><input type="checkbox" name=""
					@if ($student[0]->firstaidd ==  1	)
						checked
					@endif
				></td>
				<td style="padding-bottom: -3px;" width="30px">Yes</td>
				<td style="padding-bottom: -3px;" width="17px"><input type="checkbox" name=""
					@if ($student[0]->firstaidd ==  0	)
						checked
					@endif
				></td>
				<td style="padding-bottom: -3px;">No</td>
			</tr>
			<tr>
				<td style="padding-bottom: -3px;">*2.Emergency care</td>
				<td style="padding-bottom: -3px;" width="17px"><input type="checkbox" name=""
					@if ($student[0]->emergencycare ==  1	)
						checked
					@endif
				></td>
				<td style="padding-bottom: -3px;" width="30px">Yes</td>
				<td style="padding-bottom: -3px;" width="17px"><input type="checkbox" name=""
					@if ($student[0]->emergencycare ==  0	)
						checked
					@endif
				></td>
				<td style="padding-bottom: -3px;">No</td>
			</tr>
			<tr>
				<td style="padding-bottom: -3px;">*3. Emergency care at the nearest hospital</td>
				<td style="padding-bottom: -3px;" width="17px"><input type="checkbox" name=""
					@if ($student[0]->hospitalemergencycare ==  1	)
						checked
					@endif
				></td>
				<td style="padding-bottom: -3px;" width="30px">Yes</td>
				<td style="padding-bottom: -3px;" width="17px"><input type="checkbox" name=""
					@if ($student[0]->hospitalemergencycare ==  0	)
						checked
					@endif
				></td>
				<td style="padding-bottom: -3px;">No</td>
			</tr>
			<tr>
				<td style="padding-bottom: -3px;">*4. Oral non-presciption medication</td>
				<td style="padding-bottom: -3px;" width="17px"><input type="checkbox" name=""
					@if ($student[0]->oralmedication ==  1	)
						checked
					@endif
				></td>
				<td style="padding-bottom: -3px;" width="30px">Yes</td>
				<td style="padding-bottom: -3px;" width="17px"><input type="checkbox" name=""
					@if ($student[0]->oralmedication ==  0	)
						checked
					@endif
				></td>
				<td style="padding-bottom: -3px;">No</td>
			</tr>
		</table>
		<table width="100%" style="margin-top: 8px;">
			<tr valign="top"><td width="50px">***NOTE:</td><td> if you answered "NO" to number 1, 2, and/or 3, you must provide the school with alternative emergency care instruction, to be kept in your child's school records/file.</td></tr>
			<tr>
				<td colspan="2"><br><br>Permission is hereby given for emergency measures to be initiated in case of accident or sudden illness with the understanding that I will be notified as soon as possible.<br><br><br></td>
			</tr>
			<tr>
				<td colspan="2">I certify that all information given is complete and correct.<br><br><br></td>
			</tr>
			<tr>
				<td colspan="2">I acknowledge that it is my responsibility to inform Westfields IS of any changes in my child's health, physical condition or medical needs and any changes in our address and/or contact number(s).<br><br><br><br><br></td>
			</tr>
		</table>
		<table cellpadding="0px" cellspacing="0px" width="100%" style="margin-top: 9px;">
			<tr>
				<td style="padding-bottom: -5px;" width="90px">Parent's Signature</td>
				<td align="center" style="border-bottom:1px solid grey;" width="150px">(data here)</td>
				<td>&nbsp;</td>
				<td style="padding-bottom: -5px;" width="92px">Parent's Signature</td>
				<td align="center" style="border-bottom:1px solid grey;" width="150px">(data here)</td>
			</tr>
		</table>
	</div>

</body>

