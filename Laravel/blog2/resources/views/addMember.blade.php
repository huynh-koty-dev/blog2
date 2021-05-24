<h1>Add Member</h1>

<form action="add" method="POST">
    @csrf
    <input type="text" name="name" placeholder="enter the name"><br><br>
    <input type="email" name="email" placeholder="enter the email"><br><br>
    <input type="text" name="address" placeholder="enter the address"><br><br>
    <button type="submit">Add Member</button>
</form>