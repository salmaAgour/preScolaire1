@extends('layout')
@section('content')

    <div class="login-form-1" style="width:790px;margin-top:50px">
        <h2> اضافة وحدة جديدة </h2>
        <br>
        <form action="{{ route('prescolaires.store') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">

                <label for="nom" class="form-label"> اسم المسؤول </label>
                <input type="text" name="nomR" class="form-control w-50 invalid" required>
                <br />

                <label for="CIN"> رقم البطاقة الوطنية </label> 
                <input type="text" name="CIN" class="form-control w-50" required>
                <br />

                <label for="commune"> الجماعة </label> 
                <input type="text" name="commune" class="form-control w-50" required>
                <br />

                <label for="imageCIN"> اسم الوحدة </label>
                <input type="text" name='nomU' class="form-control w-50" required>
                <br />

                <label for="type"> نوعها </label>
                <select required class="form-select form-select w-50" aria-label=".form-select-sm" name="commune" required>
                    <option selected disabled> -- </option>
                    <option value="شراكة"> شراكة </option>
                    <option value="خصوصية"> خصوصية </option>
                    <option value="عمومية"> عمومية </option>
                    <option value="غير مهيكل"> غير مهيكل </option>
                </select> 
                <br />

                <label for="assoc"> الجمعية المكلفة </label>
                <input type="text" name='assoc' class='form-control w-50' required>
                <br />

                <label for="assoc"> المؤسسة </label>
                <input type="text" name='etab' class='form-control w-50' required>
                <br />

                <label for="assoc"> عدد الاقسام </label>
                <input type="text" name='nbrC' class='form-control w-50' required>
                <br />

                <label for="anneeSco"> الموسم الدراسي </label>
                <input type="text" name='anneeSc' class='form-control w-50' required>
                <br />

                <label for="imageCIN"> صورة البطاقة الوطنية </label>
                <input type="file" name='img' class='form-control w-50' required>

                <br>
                <button type="submit" class=" col-md-4 btn btn-primary"> إضافة </button>
                <br>
                <br>
            </div>
        </form>
        @if ($errors->any())
                    <div>
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger mt-1">{{ $error }}</div>
                            @endforeach
                    </div>
                @endif
    @endsection
    @section('title', 'بطاقة فردية')
