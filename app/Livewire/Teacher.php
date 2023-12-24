<?php

namespace App\Livewire;

use App\Models\Teacher as ModelsTeacher;
use Livewire\Component;


class Teacher extends Component
{

    public $id = '';
    public $nip = '';
    public $name = '';
    public $phone = '';
    public $gender = '';


    public function save()
    {

        $this->validate([
            'nip'       => 'required|unique:teachers|max:3|min:3',
            'gender'    => 'required|in:L,P'

        ]);

        // 1. insert database yang pertama
        // ModelsTeacher::create(
        //     $this->only(['nip', 'name', 'phone','gender'])
        // );

        //2 cara insert database yang kedua

        ModelsTeacher::create([
            'nip' => $this->nip,
            'name' => $this->name,
            'phone' => $this->phone,
            'gender' => $this->gender,

        ]);

        $this->dispatch('notify', 'Created !');
        $this->dispatch('closeDialog', 'dialogForm');

        $this->reset();
    }

    public function delete($id)
    {
        $data = ModelsTeacher::find($id);
        $data->delete();

        $this->dispatch('notify', 'Deleted !');
    }


    public function edit($id)
    {
        $data = ModelsTeacher::find($id);
        $this->id = $data->id;
        $this->nip = $data->nip;
        $this->name = $data->name;
        $this->phone = $data->phone;
        $this->gender = $data->gender;
    }

    public function create()
    {
        $this->reset();
    }

    public function update()
    {

        $this->validate([
            // 'nip'       => 'required|unique:teachers|max:3|min:3',
            'gender'    => 'required|in:L,P'

        ]);

        $data = ModelsTeacher::find($this->id);
        $data->update([
            'name' => $this->name,
            'phone' => $this->phone,
            'gender' => $this->gender,
        ]);

        $this->dispatch('notify', 'Updated !');
        $this->dispatch('closeDialog', 'dialogForm');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.teacher', [
            'data' => ModelsTeacher::get()
        ]);
    }
}
