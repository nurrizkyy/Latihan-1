<?php

namespace App\Livewire;

use App\Models\Teacher;
use App\Models\TeacherBook as ModelsTeacherBook;
use Livewire\Component;

class TeacherBook extends Component
{

    public $id = '';
    public $teacher_id = '';
    public $title = '';
    public $total_page = '';
    public $author = '';
    public $published = '';


    public function save()
    {
        $this->validate([
            'teacher_id'    => 'required|exists:teachers,id',
            'title'         => 'required',
            'total_page'    => 'required',
            'author'        => 'required',
            'published'     => 'required'
        ]);

        // Insert to DB Cara 1
        ModelsTeacherBook::create(
            $this->only([
                'teacher_id',
                'title',
                'total_page',
                'author',
                'published',
            ])
        );

        $this->dispatch('notify', 'Created !');

        $this->reset();
    }

    public function edit($id)
    {
        // Insert to Form
        $data = ModelsTeacherBook::find($id);

        $this->id           = $data->id;
        $this->teacher_id   = $data->teacher_id;
        $this->title        = $data->title;
        $this->total_page   = $data->total_page;
        $this->author       = $data->author;
        $this->published    = $data->published;
    }


    public function update()
    {
        // Insert to Form
        $data = ModelsTeacherBook::find($this->id);
        $data->update([
            'teacher_id'    => $this->teacher_id,
            'title'         => $this->title,
            'total_page'    => $this->total_page,
            'author'        => $this->author,
            'published'     => $this->published,
        ]);

        $this->dispatch('notify', 'Updated !');
        $this->reset();
    }

    public function delete($id)
    {
        $data = ModelsTeacherBook::find($id);
        $data->delete();

        $this->dispatch('notify', 'Deleted !');
    }

    public function render()
    {
        return view('livewire.teacher-book', [
            'data' => ModelsTeacherBook::get(),
            'teacher' => Teacher::get(),
        ]);
    }
}
