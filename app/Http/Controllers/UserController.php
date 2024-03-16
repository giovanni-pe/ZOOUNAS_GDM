<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;
use App\Helpers\Json;

class UserController extends Controller
{
    // Controller code with example implementation

    public function __construct(
        // protected UserControllerUseCase $userControllerUseCase,
    ){}

    public function index(){
        // return $this->userControllerUseCase->renderIndex();
    }

    public function datatable(Request $request){
        try {
            // Render from use case

            // DB::beginTransaction();
            // $datatable = $this->userControllerUseCase->renderDatatable($request);
            // DB::commit();

            // return $datatable;
        } catch (Throwable $th) {
            // DB::rollBack();

            // return Json::error($th->getMessage());
        }
    }

    public function create(){
        // return $this->userControllerUseCase->renderCreate();
    }

    // Please generate StoreUserControllerRequest using layerize:dto
    public function store(StoreUserControllerRequest $request){
        try{
            // Render from use case

            // DB::beginTransaction();
            // $this->userControllerUseCase->execStore($request);
            // DB::commit();

            // return redirect()->back()->with('success', "Data Successfully Added");
        }catch(Throwable $th){
            // DB::rollBack();

            // return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function edit(string $id){
        // return $this->userControllerUseCase->renderEdit($id);
    }

    // Please generate StoreUserControllerRequest using layerize:dto
    public function update(UpdateUserControllerRequest $request, string $id){
        try{
            // Render from use case

            // DB::beginTransaction();
            // $this->userControllerUseCase->execUpdate($request, $id);
            // DB::commit();

            // return redirect()->back()->with('success', "Data Successfully Updated");
        }catch(Throwable $th){
            // DB::rollBack();

            // return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function delete(string $id){
        try{
            // Render from use case

            // DB::beginTransaction();
            // $this->userControllerUseCase->execDelete($request);
            // DB::commit();

            // return redirect()->back()->with('success', "Data Successfully Delete");
        }catch(Throwable $th){
            // DB::rollBack();

            // return redirect()->back()->with('error', $th->getMessage());
        }
    }
}