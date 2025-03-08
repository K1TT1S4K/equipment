<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    //
    public function index() {
        // dd(Document::all());
        $documents = Document::all();

        // dd(Document::all());

        return view('livewire.documents.show', compact('documents'));
    }



    public function search(Request $request)
    {
        // รับค่าค้นหา
        $query = $request->input('query');
        $documentType = $request->input('document_type');

        // ค้นหาข้อมูล
        $documents = Document::query();

        // กรองตามคำค้นหา (ค้นหาใน path)
        if (!empty($query)) {
            $documents->where('path', 'like', "%{$query}%");
        }

        // กรองประเภทเอกสาร (ถ้ามีการเลือก)
        if (!empty($documentType)) {
            $documents->where('document_type', $documentType);
        }

        // ดึงข้อมูลพร้อมแบ่งหน้า
        $documents = Document::all();
        // $documents = $documents->paginate(10);

        // ส่งข้อมูลไปที่ View
        return view('livewire.documents.show', compact('documents'));
    }


    // ฟังก์ชันสำหรับแสดงฟอร์มเพิ่มข้อมูล
    public function create()
    {
        return view('livewire.documents.add');
    }

    // ฟังก์ชันสำหรับบันทึกข้อมูล
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'document_type' => 'required',
            'date' => 'required|date',
            'document' => 'required|file|mimes:pdf,doc,docx|max:2048' // ตรวจสอบให้แน่ใจว่าไฟล์เป็นประเภทที่ต้องการ
        ]);

        // Get the file and store it in 'public/documents' folder
        $file = $request->file('document');
        $filename = time() . '_' . $file->getClientOriginalName(); // สร้างชื่อไฟล์ที่ไม่ซ้ำ
        $file->storeAs('documents', $filename, 'public'); // ใช้ storeAs เพื่อกำหนดชื่อไฟล์เอง

        // บันทึกข้อมูลงฐานข้อมูล
        Document::create([
            'document_type' => $request->document_type,
            'date' => $request->date,
            'path' => $filename, // บันทึกเฉพาะชื่อไฟล์
        ]);

        return redirect()->route('document')->with('success', 'เพิ่มเอกสารสำเร็จ');
    }

    public function edit($id)
{
    $document = Document::findOrFail($id);
    return view('document.edit', compact('document'));
}



public function update(Request $request, $id)
{
    $request->validate([
        'document_type' => 'required|string',
        'date' => 'required|date',
        'path' => 'nullable|file|mimes:pdf,doc,docx|max:10240', // รองรับ PDF, DOC, DOCX ขนาดไม่เกิน 10MB
    ]);

    // ดึงข้อมูลเอกสารจากฐานข้อมูล
    $document = Document::findOrFail($id);

    // ตรวจสอบข้อมูลในตัวแปร $document
    // dd($document); // จะแสดงข้อมูลของ $document และหยุดการทำงานที่จุดนี้

    // ตรวจสอบว่าอัปโหลดไฟล์ใหม่หรือไม่
    if ($request->hasFile('file')) {
        // ลบไฟล์เก่า (ถ้ามี)
        if ($document->path) {
            Storage::delete('public/' . $document->path);
        }

        // อัปโหลดไฟล์ใหม่
        $filePath = $request->file('file')->store('documents', 'public');
        $document->path = $filePath;
    }

    // อัปเดตข้อมูลเอกสาร
    $document->update([
        'document_type' => $request->document_type,
        'date' => $request->date,
        'path' => $document->path,
    ]);

    return redirect()->route('livewire.document.show')->with('success', 'อัปเดตเอกสารเรียบร้อยแล้ว');
}




public function destroy($id)
{
    $document = Document::findOrFail($id);
    $document->delete();

    return redirect()->route('document')->with('success', 'เอกสารได้ถูกลบ');
}






}
