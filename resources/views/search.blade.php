@extends('layout')
@section('content')

    <div class="login-form-1" style="width:790px;margin-top:50px">

        <form action="{{ url('/prescolaires') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for=""> اكتب اسم الوحدة </label>
                <input type="text" name="nom" id="" class="form-control">
                <br>

                <label for="com" class="col-2"> الجماعة </label>
                <select name="com" id="com">
                    <option value=""></option>
                    <option value="جماعة">جماعة</option>
                    <option value="جماعة">جماعة</option>
                </select>
                <br />

                <label for="etab" class="col-2"> المؤسسة </label>
                <select name="etab" id="etab">
                    <option value=""></option>
                    <option value="مؤسسة">مؤسسة</option>
                    <option value="مؤسسة">مؤسسة</option>
                </select>
                <br />

                <label for="nom" class="col-2"> الوحدة </label>
                <select name="nom" id="nom">
                    <option value=""></option>
                    <option value="وحدة">وحدة</option>
                    <option value="وحدة">وحدة</option>
                </select>
                <br />

                <label for="anneeSco" class="col-2"> الموسم الدراسي </label>
                <select name="anneeSco" id="anneeSco">
                    <option value=""></option>
                    <option value="الموسم الدراسي">الموسم الدراسي</option>
                    <option value="الموسم الدراسي">الموسم الدراسي</option>
                </select>
                
                <button type="submit" class=" col-md-4 btn btn-primary"> بحث </button>
            </div>
        </form>
    @endsection
    @section('title', 'البحث عن وحدة')
