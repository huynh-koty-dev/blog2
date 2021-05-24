<h1>Update Member</h1>

<form action="../update" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    <input type="text" name="name" placeholder="enter the name" value="{{$data['name']}}"><br><br>
    <input type="email" name="email" placeholder="enter the email" value="{{$data['email']}}"><br><br>
    <input type="text" name="address" placeholder="enter the address" value="{{$data['address']}}"><br><br>
    <button type="submit">Update Member</button>
</form>