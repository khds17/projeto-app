<form action="{{ route('user.update', $user->id) }}" method="POST" id="formulario" autocomplete="off" >
    @csrf
    @method('PUT')
    <input type="text" placeholder="Nome completo" value="{{$user->name}}" name="name" id="name">
    <input type="text" placeholder="E-mail" value="{{$user->email}}" name="email" id="email">
    <input type="password" placeholder="Senha" value="" name="password" id="password">
    <input type="submit" value="Enviar">
</form>