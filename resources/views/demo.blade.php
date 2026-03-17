

<!-- @foreach ($users as $user )
    <p> {{$user['name']}} </p>
@endforeach -->
@include('inc.comment', ['title' =>'Comment bài viết'])
@php
    foreach($users as $user){
        echo "<p> {$user['name']} </p>";
    }
@endphp