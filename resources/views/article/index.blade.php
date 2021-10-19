@foreach ($articles as $article)

<h1>{{ $article->title }}</h1>
<!-- <p>{{ str_limit($article->content, 100) }}</p> -->
<p>{{ \Illuminate\Support\Str::limit($article->content, 100, '...') }}</p>

@endforeach