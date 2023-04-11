@extends('layout')
@section('content')

    <div class="login-form-1" style="width:790px;margin-top:50px">

        <form action={{ route('prescolaires.update' , $item->id ) }} method="post">
            {{ csrf_field() }}
            @method('put')
            <div class="form-group">
                        
                <label for="nom" class="col-2"> اسم المسؤول </label><br>
                <input type="text" name="nomR"  value={{$item->nomR}}>
                <br />

                <label for="CIN" class="col-2"> رقم البطاقة الوطنية </label> <br>
                <input type="text" name="CIN" value={{$item->CIN}}>
                <br />

                <label for="commune" class="col-2"> الجماعة </label> <br>
                <input type="text" name="commune" value={{$item->commune}}>
                <br />

                <label for="imageCIN" class="col-2"> اسم الوحدة </label><br>
                <input type="text" name='nomU' value={{$item->nom}}>
                <br />

                <label for="type" class="col-2"> نوعها </label><br>
                <input type="text" name='typeU' value={{$item->type}}>
                <br />

                <label for="assoc" class="col-2"> الجمعية المكلفة </label><br>
                <input type="text" name='assoc' value={{$item->assoc}}>
                <br />

                <label for="assoc" class="col-2">  المؤسسة </label><br>
                <input type="text" name='etab'value={{$item->etab}}>
                <br />

                <label for="assoc" class="col-2"> عدد الاقسام </label><br>
                <input type="text" name='nbrC' value={{$item->nbClasses}}>
                <br />

                <label for="anneeSco" class="col-2"> الموسم الدراسي </label><br>
                <input type="text" name='anneeSc' value={{$item->anneeSco}}>
                <br />

                <label for="imageCIN" class="col-2"> صورة البطاقة الوطنية </label><br>
                <input type="file" name='img'>
                <br />
                
                <br>
                <button type="submit" class=" col-md-4 btn btn-primary"> تغيير  </button>
            </div>
        </form>
    @endsection
    @section('title', 'بطاقة فردية')
