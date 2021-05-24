<h1>Add member</h1>
@if(session('user'))

<h3 style="color: green;">{{session('user')}} user has been added.</h3>
@endif
<form action="member" method="POST">
    @csrf
    <input type="text" name="user" placeholder="enter the user"> <br><br>
    <input type="password" name="password" placeholder="enter the password"><br><br>
    <input type="email" name="email" placeholder="enter the email"><br><br>
    <button type="submit">Add Member</button>
</form>