<?php

declare(strict_types=1);

namespace App\Controller\Api;

use App\Model\Project;
use App\Request\ProjectRequest;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Contract\ResponseInterface;

#[AutoController]
class ProjectController
{
    public function index(ResponseInterface $response)
    {
        $projects = Project::get();

        return $response->json($projects);
    }

    public function show(string $id)
    {
        return Project::find($id);
    }

    public function store(ProjectRequest $request)
    {
        return Project::create($request->validated());
    }

    public function update(ProjectRequest $request, int $id)
    {
        $project = Project::findOrFail($id);

        return $project->update($request->validated());
    }

    public function delete(string $id)
    {
        return Project::destroy($id);
    }
}
