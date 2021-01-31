@extends('admin.admin')
@section('title', "Tài khoản")
<style>
    .paginate_button{
        /* background-color: red !important */
    }
    #myTable_filter{
        display: none;
    }

</style>
<link href="{!!  asset('css/css_loading.css') !!}" rel="stylesheet" type="text/css" />
@section('content')
    <div class="m-content">
        <div class="m-portlet">
            <div class="m-portlet__body">
                <div class="tab-content">
                    <div class="tab-pane active show" id="m_tabs_3_1" role="tabpanel">
                        <div class="m-portlet__body table-responsive">
                            {{-- Thông báo --}}
                            <div id="thongbaokhoiphuc">

                            </div>
                            <table id="myTable"  class="table table-striped- table-bordered table-hover table-checkable dataTable dtr-inline">
                                <thead>
                                <tr align="center">

                                    <th>STT</th>
                                    <th>Mã giáo viên</th>
                                    <th>Họ và tên</th>
                                    <th>Ảnh</th>
                                    <th>Khối</th>
                                    <th>Lớp</th>
                                    <th>Chức vụ</th>
                                    <th style="width:100px">Thôi dạy</th>
                                    <th style="width:100px">Chi tiết</th>
                                </tr>
                                </thead>
                                <thead>
                                <tr align="center">

                                    <td scope="row"><input class="search1 form-control m-input" type="text" hidden></td>
                                    <td scope="row"><input class="search2 form-control m-input" style="width: 100px;" type="text"></td>
                                    <td scope="row"><input class="search3 form-control m-input" style="width: 100px;" type="text"></td>
                                    <td scope="row"><input class="search4 form-control m-input" type="text" hidden></td>
                                    <td scope="row"><input class="search5 form-control m-input" style="width: 100px;" type="text"></td>
                                    <td scope="row"><input class="search6 form-control m-input" style="width: 100px;" type="text"></td>
                                    <td scope="row">
                                        <select name="" id="" class="search7 form-control form-control-sm form-filter m-input" style="width: 100px">
                                            <option  value="">Chọn</option>
                                            <option  value="GV chính">GV chính</option>
                                            <option  value="GV phụ">GV phụ</option>
                                        </select>
                                    </td>
                                    <td scope="row"><input class=" form-control m-input" hidden style="width: 100px;"></td>
                                    <td scope="row"><input class=" form-control m-input" hidden style="width: 100px;"></td>

                                </tr>
                                </thead>
                                <tbody align="center">
                                @php
                                    $i = !isset($_GET['page']) ? 1 : ($limit * ($_GET['page']-1) + 1)
                                @endphp

                                @foreach ($user as $item)
                                    <tr id="tr{{$item->id}}">

                                        <td scope="row">{{$i++}}</td>
                                        <td>{{$item->role}}</td>
                                        <td>{{$item->name}}</td>
                                        @if ($item->anh == "")
                                            <td><img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png"
                                                     height="75px" width="60px" alt=""></td>
                                        @else
                                            <td><img src="{{$item->anh}}" height="75px" width="60px" alt=""></td>
                                        @endif
                                        @if($item->ten_khoi == "")
                                            <td><span class="m-badge m-badge--danger m-badge--wide m-badge--rounded">không có</span></td>
                                        @else
                                            <td>{{$item->ten_khoi}}</td>
                                        @endif
                                        @if($item->ten_lop == "")
                                            <td><span class="m-badge m-badge--danger m-badge--wide m-badge--rounded">không có</span></td>
                                        @else
                                            <td>{{$item->ten_lop}}</td>
                                        @endif
                                        <td>
                                            @if($item->type == 0)<span class="m-badge m-badge--danger m-badge--wide m-badge--rounded">không có</span> @endif
                                            @if($item->type == 1)GV chính @endif
                                            @if($item->type == 2)GV phụ @endif

                                        </td>
                                        <td>
                                            <a href="#" onclick="ThoiDay({{$item->id}})" class="btn btn-outline-dark m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air">
                                                <i class="fa fa-user-lock"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a target="_blank" href="" class="btn btn-outline-dark m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air">
                                                <i class="fa fa-pen-alt"></i>
                                            </a>
                                        </td>


                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
