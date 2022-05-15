<?php

namespace App\Observers;

use App\Models\Project;
use App\Models\StudentsProject;

class ProjectObserver
{
    public function created(Project $project)
    {
        $studentproject = new StudentsProject();

        $studentproject->project_id = $project->id;
        $studentproject->student_id = $project->authorId;
        $studentproject->save();

        if(empty(request()->contributors)) return;

        $contributors = request()->contributors;
        foreach ($contributors as $contributor){
            $newStudentProject = new StudentsProject();
            $newStudentProject->project_id = $project->id;
            $newStudentProject->student_id = $contributor;
            $newStudentProject->save();
        }
    }
}
