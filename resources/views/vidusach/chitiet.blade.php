<x-sach-layout title="Chi tiết sách">

    <style>
        .info {
            display: grid;
            grid-template-columns: 30% 70%;
        }
    </style>

    <h4>{{ $data->tieu_de }}</h4>
    <div class='info'>
        <div>
            <img src="{{ asset('uploads/image/'.$data->file_anh_bia) }}" width="200px" height="200px">
        </div>
        <div>
            Nhà cung cấp: <b>{{ $data->nha_cung_cap }}</b><br>
            Nhà xuất bản: <b>{{ $data->nha_xuat_ban }}</b><br>
            Tác giả: <b>{{ $data->tac_gia }}</b><br>
            Hình thức bìa: <b>{{ $data->hinh_thuc_bia }}</b><br>
        </div>
    </div>
    <div class='row mt-3'>
        <div class='col-sm-12'>
            <b>Mô tả:</b><br>
            {{ $data->mo_ta }}
        </div>
    </div>

</x-sach-layout>
