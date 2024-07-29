@extends('layouts.master')
@section('content')
    <div class="col-12 col-md-12 mt-2">
        <div class="card">
            <h5 class="card-header">Thêm mới khách hàng</h5>
            <div class="card-body">
                <form action="{{ route('customers.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên khách hàng</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="birthdate" class="form-label">Ngày sinh</label>
                        <input type="date" class="form-control" id="birthdate" name="birthdate">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </form>
            </div>
        </div>
    </div>
@endsection