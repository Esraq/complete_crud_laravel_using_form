<html>
  <head>
     <title>Product</title>
</head>  
     <body>
<center>
     <table border="5" height="300px" width="300px">
  <tr>
    <th><center>Serial No</center></th>
    <th><center>Name</center></th>
    <th><center>Price</center></th>
    <th><center>Image</center></th>
  </tr>
  @foreach($products as $product)
  <tr>
    <td><center>{{$product->id}}</center></td>
    <td><center><img src="image/{{$product->image}}" height="50px" width="50px"></center></td>
    <td><center>{{$product->name}}</center></td>
    <td><center>{{$product->price}}</center></td>
  </tr>
  @endforeach
</table>
</center>
</body>

</html>