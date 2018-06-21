<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Student extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'students';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['application','level','studentnumber','photo','firstname','lastname','middlename','gender','birthdate','citizenship','birthplace','residentialaddress','email','religion','living','legalguardian','contactnumber','readingwriting','verbalproficiency','mojorlanguages','otherlanguages','classparticipation','remedialhelp','remedialhelpexplantion','specialtalent','otherinfo','otherinfofield','disciplinaryproblem','disciplinaryproblemexplanation','previousschool','previousschooladdress','schooltable','father','fatherfirstname','fatherlastname','fathermiddlename','fathercitizenship','fathervisastatus','fatheremployer','fatherofficenumber','fatherdegree','fatherschool','fathernumber','fatherreceivetext','mother','motherfirstname','motherlastname','mothermiddlename','mothercitizenship','mothervisastatus','motheremployer','motherofficenumber','motherdegree','motherschool','mothernumber','motherreceivetext','emergencycontactname','emergencyofficephone','emergencymobilenumber','emergencyaddress','emergencyhomephone','isagree','formiscorrect','fathersignature','mothersignature','date','schoolyear','asthma','asthmainhaler','allergy','allergies','allergyreaction','drugallergy','drugallergies','drugallergyreaction','visionproblem','visionproblemdescription','hearingproblem','hearingproblemdescription','hashealthcondition','healthcondition','ishospitalized','hospitalized','hadinjuries','injuries','medication','medications','schoolhourmedication','firstaidd','emergencycare','hospitalemergencycare','oralmedication','parentsignature','date2',];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
