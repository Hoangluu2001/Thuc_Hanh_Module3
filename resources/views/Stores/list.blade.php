@extends('home')
@section('search')
    <div class="search-box">
        <form class="input" action="{{route('stores.search')}}" method="get">

            @csrf
            <input class="sb-search-input input__field--madoka" name="keyword" placeholder="Search..." type="search" id="input-31" />
            <label class="input__label" for="input-31">
                <svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                    <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                </svg>
            </label>
        </form>
    </div>
@endsection

@section('store')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Cửa Hàng Xe Đạp</h1>
            </div>
            <a  class="btn btn-primary" href="{{ route('stores.create') }}">Thêm mới</a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Mã Số Đại Lý </th>
                    <th scope="col"> Tên Đại Lý </th>
                    <th scope="col">Điện THoại </th>
                    <th scope="col">Email </th>
                    <th scope="col">Địa Chỉ </th>
                    <th scope="col">Tên Người quản Lý </th>
                    <th scope="col">Trạng Thái </th>
                    <th scope="col">Chức Năng  </th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
{{--                @if(count($stores) == 0)--}}
{{--                    <tr>--}}
{{--                        <td colspan="7" class="text-center">Không có dữ liệu</td>--}}
{{--                    </tr>--}}
{{--                @else--}}
                    @foreach($stores as $key => $store)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $store->code }}</td>
                            <td>{{ $store->name }}</td>
                            <td>{{ $store->phone }}</td>
                            <td>{{ $store->email }}</td>
                            <td>{{ $store->address }}</td>
                            <td>{{ $store->manager }}</td>
                            <td>{{ $store->status}}</td>
                            <td><a class="btn btn-warning" href="{{ route('stores.edit', $store->id) }}">sửa</a>
                            <a class="btn btn-danger"  href="{{ route('stores.destroy', $store->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                        </tr>
                    @endforeach
{{--                @endif--}}
                </tbody>
            </table>

        </div>

    </div>
@endsection
