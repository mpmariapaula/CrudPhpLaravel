@extends('templates.template')

@section('content')
<h1 class="text-center">
  @if(isset($book)) Editar
  @else Cadastrar
  @endif
</h1>
<hr>

<div class="col-8 m-auto">
  @if(isset($errors) && count($errors)>0)
  <div class="text-center mt-4 mb-4 p-2 alert-danger">
    @foreach($errors->all() as $erro)
    {{$erro}} <br>
    @endforeach
  </div>
  @endif

  @if(isset($book))
  <form name="formEdit" id="formEdit" method="post" action="{{url("books/$book->id")}}">
    @method('PUT')
    @else
    <form name="formCad" id="formCad" method="post" action="{{url('books')}}">
      @endif
      <form name="formCad" id="formCad" method="post" action="{{url('books')}}">
        @csrf

        <table class="table table-borderless">
          <tr>
            <td>Titulo:</td>
            <td><input class="form-Control" type="text" name="Titulo" id="Titulo" placeholder="Titulo" value="{{$book->Titulo ?? ''}}" required> </td>
          </tr>

          <td>Pertence a:</td>
          <td><select class="form-Control" name="id_user" id="id_user" required>
              <option value="{{$book->relUsers->id ?? ''}}">{{$book->relUsers->Nome ?? ''}}</option>
              @foreach($users as $user)
              <option value="{{$user->id}}">{{$user->Nome}}</option>
              @endforeach
            </select>
          </td>
          <tr>
            <td>Páginas:</td>
            <td> <input class="form-Control" type="text" name="Paginas" id="Paginas" placeholder="Paginas" value="{{$book->Paginas ?? ''}}" required></td>
          </tr>
          <tr>
            <td>Preço:</td>
            <td> <input class="form-Control" type="text" name="Preço" id="Preço" placeholder="Preço" value="{{$book->Preço ?? ''}}" required> </td>
          </tr>
        </table>
</div>

<div class="text-center">
  <input class="btn btn-primary" type="submit" value="@if(isset($book)) Editar @else Cadastrar @endif">

  <a href="{{url("books")}}">
    <button class="btn btn-outline-primary"> Tela Inicial </button>
</div>
@endsection