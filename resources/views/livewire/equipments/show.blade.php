<x-layouts.app>
    <div>
        <div class="card w-auto mx-auto shadow-lg p-3 mb-5 bg-body rounded">

            <div class="card-body">
                <div class="row">
                    <form action="">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <label for="equipments-search" class="form-label">ค้นหา</label>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="equipments-search">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary">ค้นหา</button>
                            </div>
                        </div>
                    </form>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3 mb-3 mb-sm-0">
                        <form action="#">
                            <label for="" class="form-label" for="equipment_status_form">สถานะ</label>
                            <select class="form-select" aria-label="Default select example" id="equipment_status_form">
                                <option selected>ทั้งหมด</option>
                                <option value="1">พบ</option>
                                <option value="2">ชำรุด</option>
                                <option value="3">ยื่นแทงจำหน่าย</option>
                                <option value="4">แทงจำหน่าย</option>
                                <option value="5">โอน</option>
                            </select>
                        </form>
                    </div>
                    <div class="col-md-3 mb-3 mb-sm-0">
                        <form action="#">
                            <label for="unit" class="form-label">หน่วยนับ</label>
                            <select class="form-select" id="unit" name="unit">
                                <option value="">ทั้งหมด</option>
                                @foreach ($equipment_units as $unit)
                                    <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                @endforeach
                            </select>
                        </form>
                    </div>
                    <div class="col-md-3 mb-3 mb-sm-0">
                        <form action="#">
                            <label for="storage" class="form-label">สถานที่</label>
                            <select class="form-select" id="storage" name="storage">
                                <option value="">ทั้งหมด</option>
                                @foreach ($locations as $location)
                                    <option value="{{ $location->id }}">{{ $location->name }}</option>
                                @endforeach
                            </select>
                        </form>
                    </div>
                    <div class="col-md-3 mb-3 mb-sm-0">
                        <form action="#">
                            <label for="user" class="form-label">ผู้ดูแล</label>
                            <select class="form-select" id="user" name="user">
                                <option value="">ทั้งหมด</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->prefix->name }}{{ $user->firstname }}
                                        {{ $user->lastname }}</option>
                                @endforeach
                            </select>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="row mt-3">
                    <div class="col-md-3 mb-sm-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" style="transform: scale(1.5);">
                            <label class="form-check-label" for="defaultCheck1">
                              Default checkbox
                            </label>
                          </div>                      
                    </div>
                    <div class="col-md-3 mb-sm-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck2" style="transform: scale(1.5);">
                            <label class="form-check-label" for="defaultCheck2">
                              Default checkbox
                            </label>
                          </div>                      
                    </div>
                </div>
                <hr>
                <!-- ปุ่ม Export Excel -->
                <div class="d-flex justify-content-end mb-3">
                    <a href="#" class="btn btn-success">
                        Export Excel
                    </a>
                </div>
                <hr>
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr class="text-center">
                            <th class="border align-middle">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="selectAll" style="transform: scale(1.5);">
                                </div>
                            </th>
                            <th class="border align-middle">ลำดับ</th>
                            <th class="border align-middle">รหัสครุภัณฑ์</th>
                            <th class="border align-middle" style="width: 20%">รายการ <br>( ยี่ห้อ, ชนิด, แบบ, ขนาดและลักษณะ )</th>
                            <th class="border align-middle">หน่วยนับ</th>
                            <th class="border align-middle">จำนวน<br>คงเหลือ</th>
                            <th class="border align-middle">ราคาต่อหน่วย <br>(บาท)</th>
                            <th class="border align-middle">ราคารวม</th>
                            <th class="border align-middle">สถานะ</th>
                            {{-- <th class="border align-middle">สถานที่</th>
                            <th class="border align-middle">ผู้ดูแลครุภัณฑ์</th> --}}
                            <th class="border align-middle">หมายเหตุ</th>
                            <th class="border align-middle">หลักฐาน</th>
                            <th class="border align-middle">ระยะเวลาเพิ่ม</th>
                            <th class="border align-middle">ระยะเวลาแก้ไข</th>
                            <th class="border align-middle">จัดการ</th>
                        </tr>

                    </thead>
                    <tbody>
                        @forelse ($equipments as $key => $equipment)
                            <tr class="text-center border border-dark">
                                <td class="border border-dark align-middle">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="selectAll" style="transform: scale(1.5);">
                                    </div>
                                </td>
                                <td class="border border-dark align-middle">{{ $key + 1 }} <br>
                                    ({{ $equipment->amount }})
                                </td>
                                <td class="border border-dark align-middle">{{ $equipment->number }}</td>
                                <td class="border border-dark align-middle">{{ $equipment->name }}</td>
                                <td class="border border-dark align-middle">{{ $equipment->equipmentUnit->name }}</td>
                                <td class="border border-dark align-middle">{{ $equipment->amount }}</td>
                                <td class="border border-dark align-middle">{{ $equipment->price }}</td>
                                <td class="border border-dark align-middle">{{ $equipment->total_price }}</td>
                                <td class="border border-dark align-middle">{{ $equipment->status }}</td>
                                {{-- <td class="border border-dark align-middle">{{ optional($equipment->location)->name }}
                                </td>
                                <td class="border border-dark align-middle">{{ optional($equipment->user)->name }}
                                </td> --}}
                                <td class="border border-dark align-middle">{{ $equipment->description }}</td>
                                <td class="border border-dark align-middle">sldf</td>
                                <td class="border border-dark align-middle">{{ $equipment->updated_at }}</td>
                                <td class="border border-dark align-middle">{{ $equipment->created_at }}</td>
                                <td class="border border-dark align-middle">
                                    <!-- ปุ่มเปิดฟอร์มแก้ไข -->
                                    {{-- <button @click="open = true; equipmentToEdit = @json($item)"
                                        class="btn btn-warning">แก้ไข</button> --}}
                                    <button class="btn btn-warning">แก้ไข</button>

                                    <!-- ปุ่มลบ (จะใช้ฟอร์ม POST เพื่อป้องกันการใช้ GET method) -->
                                    <form action="#" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE') <!-- ใช้ HTTP DELETE สำหรับการลบ -->
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('คุณต้องการลบข้อมูลนี้จริงหรือไม่?')">ลบ</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">ไม่มีข้อมูล</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-layouts.app>
