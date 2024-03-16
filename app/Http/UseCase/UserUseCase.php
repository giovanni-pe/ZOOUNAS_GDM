<?php

namespace App\Http\UseCase;
use Illuminate\Http\Request;

class UserUseCase
{
    // Use case code with example implementation

    public function __construct(
        // protected UserUseCaseQuery $userUseCaseQuery,
        // protected UserUseCaseCommand $userUseCaseCommand,
        // protected UserUseCaseDatatable $userUseCaseDatatable,
    ){}

    public function renderIndex(){
        // render view index
        // return view('index');
    }

    public function renderDatatable(Request $request){
        // render datatable
        // return $this->userUseCaseDatatable->datatable($request);
    }

    public function renderCreate(){
        // render view create
        // return view('create');
    }

    // Please generate StoreUserUseCaseRequest using layerize:dto, must be same with request send by controller
    public function execStore(StoreUserUseCaseRequest $request){
        // exec store data
        // return $this->userUseCaseCommand->store($request),
    }

    public function renderEdit(string $id){
        // render view edit, general query can be use when activate Query service __construct
        // $findId = $this->userUseCaseQuery->findOrFail(['id' => $id]);
        // return view('edit', compact('findId'));
    }

    // Please generate StoreUserUseCaseRequest using layerize:dto, must be same with request send by controller
    public function execUpdate(UpdateUserUseCaseRequest $request, string $id){
        // exec store data
        // return $this->userUseCaseCommand->update($request, $id),
    }

    public function execDelete(string $id){
        // exec store data
        // return $this->userUseCaseCommand->delete($id),
    }
}