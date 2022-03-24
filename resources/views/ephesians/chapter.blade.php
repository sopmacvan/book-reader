<h1>{{$book_name}}</h1>
<h2>{{$bible_version}}</h2>
<h3>Chapter {{$chapter_number}}</h3>
<pre>@include('ephesians.chapter' . $chapter_number)
</pre>

