<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('studentnumber')->unique();   
            $table->date('application');
            $table->string('schoolyear');
            $table->enum('level', ['','PRESCHOOL', 'GRADESCHOOL', 'MIDDLE SCHOOL', 'HIGH SCHOOL']);
            $table->longText('photo')->nullable(); //notsure
            $table->string('firstname');
            $table->string('lastname');
            $table->string('middlename');
            $table->enum('gender', ['Male', 'Female']);
            $table->date('birthdate');
            $table->string('citizenship');
            //$table->string('passport');
            $table->string('birthplace');
            $table->longText('residentialaddress');
            $table->string('email');
            $table->string('religion');
            $table->longText('living');
            $table->string('legalguardian')->nullable();
            $table->string('contactnumber');
            $table->enum('readingwriting', ['Good', 'Fair', 'Limited', 'None']);
            $table->enum('verbalproficiency', ['Good', 'Fair', 'Limited', 'None']);
            $table->longText('mojorlanguages');
            $table->longText('otherlanguages')->nullable();
            $table->longText('classparticipation')->nullable();
            $table->boolean('remedialhelp')->nullable();
            $table->longText('remedialhelpexplantion')->nullable();
            $table->longText('specialtalent')->nullable(); //remove nullable ----testss
            //$table->string('athletics')->nullable(); //may not be needed
            //$table->string('band')->nullable();//may not be needed
            //$table->string('string')->nullable();//may not be needed
            $table->boolean('otherinfo')->nullable();
            $table->longText('otherinfofield')->nullable(); //new field 
            $table->boolean('disciplinaryproblem')->nullable(); //may not be needed
            $table->longText('disciplinaryproblemexplanation')->nullable();
            //-----------------
            $table->longText('previousschool');
            $table->longText('previousschooladdress');
            $table->longText('schooltable');
            //------------------------------------------------------------------
            $table->enum('father', ['Father', 'Step-father', 'Legal Guardian']);
            $table->string('fatherfirstname');
            $table->string('fatherlastname');
            $table->string('fathermiddlename');
            $table->string('fathercitizenship');
            //$table->string('fatherpassport');//may mot be needed // ----not needed
            $table->string('fathervisastatus');
            $table->longText('fatheremployer');
            $table->string('fatherofficenumber');
            $table->longText('fatherdegree');
            $table->longText('fatherschool');
            $table->string('fathernumber');
            $table->boolean('fatherreceivetext')->nullable();
            //-------------------------------------------------------------------
            $table->enum('mother', ['Mother', 'Step-mother', 'Legal Guardian']);
            $table->string('motherfirstname');
            $table->string('motherlastname');
            $table->string('mothermiddlename');
            $table->string('mothercitizenship');
            //$table->string('motherpassport'); //may mot be needed // ----not needed
            $table->string('mothervisastatus');
            $table->longText('motheremployer');
            $table->string('motherofficenumber');
            $table->longText('motherdegree');
            $table->longText('motherschool');
            $table->string('mothernumber');
            $table->boolean('motherreceivetext')->nullable();
            //------------------------------------------------------------------

            $table->longText('emergencycontactname');
            $table->string('emergencyofficephone');
            $table->string('emergencymobilenumber');
            $table->longText('emergencyaddress');
            $table->string('emergencyhomephone');

            $table->boolean('isagree')->nullable();//not sure
            $table->boolean('formiscorrect')->nullable();//not sure

            $table->longText('fathersignature')->nullable();
            $table->longText('mothersignature')->nullable();
            $table->date('date');
            //------------------3rd page
            
            $table->boolean('asthma')->nullable();
            $table->boolean('asthmainhaler')->nullable();
            $table->boolean('allergy')->nullable();
            $table->longText('allergies')->nullable();
            $table->longText('allergyreaction')->nullable();
            $table->boolean('drugallergy')->nullable();
            $table->longText('drugallergies')->nullable();
            $table->longText('drugallergyreaction')->nullable();
            $table->boolean('visionproblem')->nullable();
            $table->longText('visionproblemdescription')->nullable();
            $table->boolean('hearingproblem')->nullable();
            $table->longText('hearingproblemdescription')->nullable();
            $table->boolean('hashealthcondition')->nullable();
            $table->longText('healthcondition')->nullable();
            $table->boolean('ishospitalized')->nullable();
            $table->longText('hospitalized')->nullable();
            $table->boolean('hadinjuries')->nullable();
            $table->longText('injuries')->nullable();
            $table->boolean('medication')->nullable();
            $table->longText('medications')->nullable();
            $table->boolean('schoolhourmedication')->nullable();
            //---------------------
            $table->boolean('firstaidd')->nullable();
            $table->boolean('emergencycare')->nullable();
            $table->boolean('hospitalemergencycare')->nullable();
            $table->boolean('oralmedication')->nullable();
            $table->longText('parentsignature')->nullable();
            $table->date('date2');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
