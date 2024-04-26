<h1> Adicionar usuarios</h1>

<form action="{{ route('user.store') }}" method="POST" id="formulario" autocomplete="off" >
    @csrf
    <input type="text" placeholder="Nome completo" name="name" id="name">
    <input type="text" placeholder="E-mail" name="email" id="email">
    <input type="password" placeholder="Senha" name="password" id="password">
    <input type="submit" value="Enviar">
</form>