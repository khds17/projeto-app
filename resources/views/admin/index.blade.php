<h1> Listagem dos usuarios</h1>

<a href="{{ route('user.create') }}">
    <button>Criar usuario</button>
  </a> 

<table>
    <thead>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td> {{$user->name}} </td>
                <td> {{$user->email}} </td>
                <td> 
                     <a href="{{route('user.edit', $user->id)}}">Editar</a>    
                </td>
                <td> 
                    <a href="">Excluir</a>    
               </td>
            </tr>
        @endforeach
    </tbody>
</table>