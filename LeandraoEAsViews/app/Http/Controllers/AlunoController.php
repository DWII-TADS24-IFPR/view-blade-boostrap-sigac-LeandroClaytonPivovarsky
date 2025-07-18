<?php

namespace App\Http\Controllers;

use App\Repositories\RepositoryAluno;
use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{

    private $repository;

    public function __construct() {
        $repository = new RepositoryAluno();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aluno = $this->repository->selectAllWith(['user', 'curso', 'turma'], $this->repository->getRows());
        return view('aluno.index', compact($aluno));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Aluno $aluno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aluno $aluno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aluno $aluno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aluno $aluno)
    {
        //
    }
}
