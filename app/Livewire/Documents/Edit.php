<?php

namespace App\Http\Livewire\Document;

use Livewire\Component;
use App\Models\Document;

class Edit extends Component
{
    public $document_id, $document_type, $date, $path;

    protected $rules = [
        'document_type' => 'required|string|max:255',
        'date' => 'required|date',
        'path' => 'nullable|file|mimes:pdf,docx,jpg,png',
    ];

    public function mount($documentId)
    {
        $document = Document::find($documentId);
        $this->document_id = $document->id;
        $this->document_type = $document->document_type;
        $this->date = $document->date;
        $this->path = $document->path;
    }

    public function updateDocument()
    {
        $this->validate();

        $document = Document::find($this->document_id);

        if ($this->path) {
            $path = $this->path->store('documents', 'public');
            $document->path = $path;
        }

        $document->update([
            'document_type' => $this->document_type,
            'date' => $this->date,
        ]);

        session()->flash('message', 'เอกสารถูกแก้ไขสำเร็จ!');
    }

    public function render()
    {
        return view('livewire.document.edit');
    }
}
