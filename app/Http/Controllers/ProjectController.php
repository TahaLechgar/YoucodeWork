<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProjectController extends Controller
{
    //

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'repoLink' => 'required',
            'lienImage1' => 'required',
            'tags' => 'required',
            'technologies' => 'required'
        ]);

        $project = new Project;
        $project->name = $request->name;
        $pTag = array("<p>", "</p>");
        $project->description = str_replace($pTag, "", $request->description);
        $project->repoLink = $request->repoLink;
        $project->lienImage1 = $request->lienImage1;
        $project->technologies = json_encode( $request->technologies);
        $project->tags = json_encode($request->tags);
//        $project->authorId = Auth::user()->id;
        $project->status = 'PENDING';
        $project->instructorId = 2;
        $project->authorId = Student::firstWhere('id_user', Auth::user()->id)->id;

        $contributorsEmail = explode(",", $request->contributors);
        $contributorsId = [];
        foreach ($contributorsEmail as $contributor){
            $student = Student::firstWhere('email', $contributor);
            if(!$student) dd($contributor . ' => this email is not exist');
            $contributorsId[] = $student->id;
        }
        $request->contributors = $contributorsId;
        $project->save();

       /* $student = Student::find([3, 4]);
        $product->categories()->attach($category);*/
        return redirect()->route('dashboard');
    }


//all project
    public function allProjects(){

            $projects = Project::all();
            $allTechnologies = [];
           foreach ($projects as $project) {
            $tags = trim($project->tags,'"');
            $tags = explode(',', $tags);
            $project->tags = $tags;
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

    public function projectsByTechnology($technology){


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


    public function projectById($projectId){

        $project = Project::find($projectId);

        $allTechnologies = [];

        if( $project != null)

     {   $tags = trim($project->tags,'"');
        $tags = explode(',', $tags);
        $project->tags = $tags;
        $technologies = trim($project->technologies,'"');
        $technologies = explode(',', $technologies);
        $project->technologies = $technologies;

    }

    $currentUser = Auth::user();

    return view('project-details',compact("project","currentUser"));
    }



}
