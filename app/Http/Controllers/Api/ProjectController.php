<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Resources\ProjectResource;
use App\Http\Requests\ProjectRequest;

final class ProjectController extends Controller
{
    public function index()
    {
        return ProjectResource::collection(Project::all());
    }

    public function show(Project $project)
    {
        return new ProjectResource($project);
    }

    public function store(ProjectRequest $request)
    {
        $created_project = Project::create($request->validated());

        return new ProjectResource($created_project);
    }

    public function update(ProjectRequest $request, Project $project)
    {
        $project->update($request->validated());

        return new ProjectResource($project);
    }

    public function delete(Project $project)
    {
        $project->delete();

        return response()->noContent();
    }
}
