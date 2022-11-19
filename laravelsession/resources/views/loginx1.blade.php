<h1>flash login</h1>
<h2>add a new member</h2>
@if(session('flashuser'))
<h3 style="color:blue;">Data saved for {{session('flashuser')}}</h3>
@endif
<form action="/gotocontrollerx" method="post">
    @csrf
    <br>
    <input type="text" name="username" placeholder="Enter User Name">
    <br>
    <input type="text" name="email" placeholder="Enter User email">
    <br>
    <input type="password" name="password" placeholder="Enter Password">
    <br>    
    <button type="submit">add new user</button>
    <br>

</form>

<a href="/"> - session login -</a>