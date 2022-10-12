<form action="/menus/store" method="POST">
     @csrf
     <input type="text" name="name" placeholder="Name">
     @error('name')
          {{ $message }}
     @enderror
     <textarea name="description"  cols="30" rows="10"></textarea>
     @error('description')
          {{ $message }}
     @enderror
     <input type="text" name="price" placeholder="Price">
     @error('price')
          {{ $message }}
     @enderror
     <input type="submit" value="Add">
</form>