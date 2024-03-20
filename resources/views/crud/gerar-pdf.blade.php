<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <title>Produto</title>

  <h2>Produtos</h2>

  <table style="border-collapse: collapse; width:100%">
      <thead>
          <tr style="border-collapse: collapse; width: 100%"">
              <th style="background-color:  #adb5bd">ID</th>
              <th style="background-color:  #adb5bd">Nome</th>
              <th style="background-color:  #adb5bd">Categoria</th>
              <th style="background-color:  #adb5bd">Validade</th>
              <th style="background-color:  #adb5bd">Preço</th>
              <th style="background-color:  #adb5bd">Comentario</th>
          </tr>
      </thead>

      <tbody>
          @forelse ($produtos as $produto)
              <tr>
                  <td style="border: 1px solid #ccc; border-top:none">{{$produto->id}}</td>
                  <td style="border: 1px solid #ccc; border-top:none">{{$produto->name}}</td>
                  <td style="border: 1px solid #ccc; border-top:none">{{$produto->categoria}}</td>
                  <td style="border: 1px solid #ccc; border-top:none">{{\Carbon\Carbon::parse($produto->validade)->tz('America/Sao_Paulo')->format('d/m/Y')}}</td>
                  <td style="border: 1px solid #ccc; border-top:none">{{$produto->preco}}</td>
                  <td style="border: 1px solid #ccc; border-top:none">{{$produto->comentario}}</td>
              </tr>
          @empty
          <tr>
              <td colspan="4">Nenhum produto encontrado</td>
          </tr>
          @endforelse
      </tbody>
  </table>

</body>
</html>
 