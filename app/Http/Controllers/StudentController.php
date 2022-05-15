<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Mockery\Exception;

class StudentController extends Controller
{


    public function Role(){

    if(Auth::user()->role == 'recruiter'){
        return view('dashboard');
    } else if (Auth::user()->role == 'student'){

        return StudentController::DashboardApprenant();
    }
   }


    public function DashboardApprenant(){

      /*  $client = new \GuzzleHttp\Client();

        $response = $client->request('POST', 'http://admin.youcode.school/api/login', [
            'form_params' => [
                'email' => 'sedraoui.fatimaezzahra@gmail.com',
                'password'     => '',
            ]
        ]);

        // echo $response->getStatusCode(); // 200
        // echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'


        $body = json_decode($response->getBody(), true); // '{"id": 1420053, "name": "guzzle", ...}'
        $res = $client->request('GET', 'http://admin.youcode.school/api/promotions', [
            'headers' => [
                'User-Agent' => 'testing/1.0',
                'Accept'     => 'application/json',
                'Authorization'      => 'Bearer ' . $body['access_token']
            ]
        ]);

       // $body = json_decode($res->getBody(), true); // '{"id": 1420053, "name": "guzzle", ...}'
       // print_r($body);*/
        $currentUser = Auth::user();
        //var_dump($currentUser);
        try{
            $student = Student::where('id_user', Auth::user()->id)->firstOrFail();
        }
        catch(Exception $exception){
            dd($exception);
        }

        // $projectsBystudent=$student->projects;
        //($student)
        //$student->projects();

        $allTechnologiesStudent = [];
       foreach ($student->projects as $project) {
        $tags = trim($project->tags,'"');
        $tags = explode(',', $tags);
        $project->tags = $tags;
        $technologies = trim($project->technologies,'"');
        $technologies = explode(',', $technologies);
        $project->technologies = $technologies;
        foreach($technologies as $technology){
            array_push($allTechnologiesStudent, $technology);
        }
        $allTechnologies = array_unique($allTechnologiesStudent);
    }


//        $acceptedProjects = [];
//
//       foreach ($student->acceptedProjects as $acceptedProject){
//           $acceptedProjects[] = $project->id;
//       }
//        dd($acceptedProjects);

        $projectsCountByStatus = [];
        $projectsCountByStatus['accepted'] = $student->acceptedProjects()->count();
        $projectsCountByStatus['pending'] = $student->pendingProjects()->count();
        $projectsCountByStatus['all'] = $student->projects()->count();

    return view('dashboard',compact("student", "projectsCountByStatus", "allTechnologiesStudent"));
}

    public function studentDashboard()
    {
        $currentUserId = Auth::id();
        $student = Student::where('id_user', $currentUserId)->firstOrFail();

        $allTechnologiesStudent = [];
        foreach ($student->project as $project) {
            $tags = trim($project->tags,'"');
            $tags = explode(',', $tags);
            $project->tags = $tags;
            $technologies = trim($project->technologies,'"');
            $technologies = explode(',', $technologies);
            $project->technologies = $technologies;
            foreach($technologies as $technology){
                array_push($allTechnologiesStudent, $technology);
            }
            $allTechnologies = array_unique($allTechnologiesStudent);
        }

        $acceptedProjects = $student->acceptedProjects();
        dd((new \App\Models\Student)->belongsToMany(Project::class));


    }

/*public function projectsByTechnology($technology){


        $projects = Project::where('technologies', 'like', '%'.$technology.'%')->get();

        $allTechnologies = [];

        $allProjects = Project::all();


   foreach ($projects as $project) {
        $tags = trim($project->tags,'"');
        $tags = explode(',', $tags);
        $project->tags = $tags;
        $technologies = trim($project->technologies,'"');
        $technologies = explode(',', $technologies);
        $project->technologies = $technologies;

    }

    foreach ($allProjects as $project) {
        $technologies = trim($project->technologies,'"');
        $technologies = explode(',', $technologies);
        $project->technologies = $technologies;
        foreach($technologies as $technology){
            array_push($allTechnologies, $technology);

        }
        $allTechnologies = array_unique($allTechnologies);
    }


    $currentUser = Auth::user();
    return view('blog-grid',compact("projects","currentUser", "allTechnologies"));
}
*/

public function studentByIdUser($currentUser){
    $student = Student::where('user',$currentUser);
    //var_dump($student);
    return $student;
    //whereHas var_dump($student);
   /* $allTechnologies = [];

    if( $project != null)

 {   $tags = trim($project->tags,'"');
    $tags = explode(',', $tags);
    $project->tags = $tags;
    $technologies = trim($project->technologies,'"');
    $technologies = explode(',', $technologies);
    $project->technologies = $technologies;

}
*/
}
public function ProjectBystudent($currentUser){
    //$student = Student::where('id_user',$currentUser->id)->get();;
     //DB::table('students')->where('id_user', $currentUser->id)->first();
     $idStudent =Student::select('id')->where('id_user', $currentUser->id)->pluck('id');
    //$ = $student[0]->id_user;
    $projectBystudent = Project::with('students')->whereHas('students')->get();
    /* {
        $query->where('project_student.student_id','$idStudent');
    }*/

    return $projectBystudent;
    //whereHas var_dump($student);
   /* $allTechnologies = [];

    if( $project != null)

 {   $tags = trim($project->tags,'"');
    $tags = explode(',', $tags);
    $project->tags = $tags;
    $technologies = trim($project->technologies,'"');
    $technologies = explode(',', $technologies);
    $project->technologies = $technologies;

}
*/
}

}
