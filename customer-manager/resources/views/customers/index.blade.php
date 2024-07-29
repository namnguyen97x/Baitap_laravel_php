@extends('layouts.master')
@section('content')
    <div class="col-12 col-md-12 mt-2">
        <div class="card">
            <h5 class="card-header">Danh sách khách hàng</h5>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên khách hàng</th>
                        <th scope="col">Email</th>
                        <th scope="col">Số điện thoại</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($customers as $index => $customer)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $customer['name'] }}</td>
                        <td>{{ $customer['email'] }}</td>
                        <td>{{ $customer['phone'] }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection