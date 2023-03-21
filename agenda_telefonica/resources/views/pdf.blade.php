<!DOCTYPE html>
<html>
  <body>
    <h1>PDF!</h1>
    @foreach ( $relatorio as $relatorios )
    <h4>nome : {{ $relatorio-> nome}} </h4> 
    <h4> Data de Nascimento: {{ $relatorio-> data_nasc}} </h4>
    <h4>email: { $relatorio-> email}} </h4>
    <h4>CPF: {{ $relatorio-> cpf}} </h4>
    <h4>Nuero:{{ $relatorio-> numero}} </h4></br>
        
    @endforeach
  </body>
</html>