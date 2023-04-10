@extends('layout')
@section('content')

    <div class="login-form-1" style="width:790px;margin-top:50px">

        <form action="{{ url('/prescolaire') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">

                <label for="commune" class="col-2"> الجماعة </label>
                <select required class="form-select form-select" aria-label=".form-select-sm" name="commune" id="commune">
                    <option selected disabled> -- </option>
                    <option value="تزنيت"> تزنيت </option>
                    <option value="تارودانت">تارودانت</option>
                    <option value="جماعة">جماعة</option>
                    @error('commune')
                        <div class="alert alert-danger">{{ 'please choose' }}</div>
                    @enderror
                </select>
                <br />

                <label for="etab" class="col-2"> المؤسسة </label>
                <select class="form-select form-select" aria-label=".form-select-sm" name="etab" id="etab">
                    <option value="الحسن 1"> الحسن الاول </option>
                    <option value="ابن سينا">ابن سينا</option>
                    <option value="مؤسسة">مؤسسة</option>
                </select>
                <br />

                <label for="unit" class="col-2"> الوحدة </label>
                <select class="form-select form-select" aria-label=".form-select-sm" name="unit" id="unit">
                    <option value="التفوق"> التفوق </option>
                    <option value="الامل">الامل</option>
                    <option value="وحدة">وحدة</option>
                </select>
                <br />

                <label for="anneeSco" class="col-2"> الموسم الدراسي </label>
                <select class="form-select form-select" aria-label=".form-select-sm" name="anneeSco" id="anneeSco">
                    <option value="2022/2023"> 2022/2023 </option>
                    <option value="2021/2023">2021/2022</option>
                    <option value="الموسم الدراسي">الموسم الدراسي</option>
                </select>
                <br>
                <button type="submit" class=" col-md-4 btn btn-primary"> بحث </button>
                @if ($errors->any())
                    <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                    </div>
                @endif
            </div>
        </form>
    @endsection
    @section('title', 'البحث عن وحدة')
