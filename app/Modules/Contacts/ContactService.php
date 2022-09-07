<?php

namespace App\Modules\Contacts;

use Illuminate\Support\Facades\DB;

class ContactService
{
    public function __construct(Contact $model){
        $this->model = $model;
    }
    public function get()
    {
        return $this->model->get();
    }
    public function find($id)
    {
        return $this->model->find($id);
    }
    public function create($data)
    {
        try{
            DB::beginTransaction();
            
            $this->model->create($data);

            DB::commit();
        }
        catch(\Throwable $e){
            DB::rollBack();
            return false;
        }
        return true;
    }
    public function update($data)
    {
        try{
            DB::beginTransaction();
            
            $this->model->find($data['id'])->update($data);

            DB::commit();
        }
        catch(\Throwable $e){
            DB::rollBack();
            return false;
        }
        return true;
    }
    public function delete($data)
    {
        try{
            DB::beginTransaction();
            
            $this->model->destroy($data['id']);

            DB::commit();
        }
        catch(\Throwable $e){
            DB::rollBack();
            return false;
        }
        return true;
    }
}
