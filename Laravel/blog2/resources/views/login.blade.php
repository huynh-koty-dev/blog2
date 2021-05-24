<h1>User Login</h1>
<form action="user" method="POST">
    @csrf
    <input type="text" name="userName" placeholder="userName"> <br><br>
    <input type="password" name="password" placeholder="Password"> <br><br>
    <button type="submit">Login</button>
</form>