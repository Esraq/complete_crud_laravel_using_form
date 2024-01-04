<html>
  <head>
     <title>Product</title>
</head>  
     <body>

     <form action="/product" method="post" enctype="multipart/form-data">
        @csrf
      <br>
     <b>Product Name:</b><input type="text" name="name">
     @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif
     <br> <br>
    
     <b>Product Price:</b><input type="text" name="price"> 
     @if ($errors->first('price'))<div class="alert alert-danger">{!! $errors->first('price') !!}</div> @endif
     <br> <br>
     <b>Enter Image:</b><input type="file" name="image"> 
     @if ($errors->first('image'))<div class="alert alert-danger">{!! $errors->first('image') !!}</div> @endif
     <br> <br>
    <input type="submit" >

</form>




</body>

</html>