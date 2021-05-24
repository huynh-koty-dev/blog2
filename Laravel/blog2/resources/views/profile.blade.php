<h1>{{__('profile.welcome')}}</h1>
<h2>{{session('user')}}</h2>
<a href="../profile/en">English</a> || <a href="../profile/vie">Vietnamese</a>
<div>
    <a href="">{{__('profile.about')}}</a>
    <a href="">{{__('profile.contact')}}</a>
    <a href="">{{__('profile.list')}}</a>
</div>
<br>
<a href="/logout">Log out</a>