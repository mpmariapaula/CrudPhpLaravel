@extends('templates.template')

@section('content')
<h1 class="text-center"> Crud Laravel</h1>
<hr>


<div class="col-8 m-auto">
  @csrf
  <table class="table text-center">
    <thead class="thead-dark">
      <tr>
        <th scope="col">id</th>
        <th scope="col">Titulo</th>
        <th scope="col">Paginas</th>
        <th scope="col">Pertence a</th>
        <th scope="col">Preço</th>
        <th scope="col">Açoes</th>
      </tr>
    </thead>
    <tbody>

      @foreach($book as $books)
      @php
      $user=$books->find($books->id)->relUsers;
      @endphp

      <tr>
        <th scope="row">{{$books->id}}</th>
        <td>{{$books->Titulo}}</td>
        <td>{{$books->Paginas}}</td>
        <td>{{$user->Nome}}</td>
        <td>{{$books->Preço}}</td>
        <td>


          <a href="{{url("books/$books->id")}}">
            <button class="btn btn-outline-dark"> Visualizar </button>
          </a>

          <a href="{{url("books/$books->id/edit")}}">
            <button class="btn btn-outline-primary"> Editar </button>
          </a>
          <br>
          <form action="/books/{{$books->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">
              <ion-icon name="trash-outline"></ion-icon>Deletar
            </button>
          </form>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<div class="text-center mt-3 mb-4">
  <a href="{{url('books/create')}}">
    <button class="btn btn-success"> Cadastrar </button>
  </a>
  <br>
  <br>
</div>

<div class=" col-8 m-auto">
  {{$book->links("pagination::bootstrap-4")}}
</div>
@endsection