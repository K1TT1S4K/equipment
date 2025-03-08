<?php

namespace App\Http\Livewire\Document;

use Livewire\Component;
use App\Models\Document;

class Add extends Component
{
    public $document_type, $date, $path;

    protected $rules = [
        'document_type' => 'required|string|max:255',
        'date' => 'required|date',
        'path' => 'nullable|file|mimes:pdf,docx,jpg,png', // ใส่รูปแบบไฟล์ที่ต้องการ
    ];

    public function addDocument()
    {
        $this->validate();

        $path = null;
        if ($this->path) {
            $path = $this->path->store('documents', 'public');
        }

        Document::create([
            'document_type' => $this->document_type,
            'date' => $this->date,
            'path' => $path,
        ]);

        session()->flash('message', 'เอกสารถูกเพิ่มสำเร็จ!');
        $this->reset();  // ล้างค่าหลังจากเพิ่มข้อมูล
    }

    public function render()
    {
        return view('livewire.document.add');
    }
}

