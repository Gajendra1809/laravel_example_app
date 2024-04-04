<ul>
    @foreach($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
</ul>

<form action="{{route('products.update.post')}}" method="POST">
@csrf
    <input type="text" name="name" value="{{old("name")}}"><br><br>
    <input type="text" name="slug" value="{{old("slug")}}"><br><br>
    <input type="number" name="price" value="{{old("price")}}"><br><br>
    <input type="date" name="date" ><br><br>
    <button type="submit">Submit</button>
</form>