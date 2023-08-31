<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Greeting Page</div>
        {{URL::full()}}
        <div class="card-body">
          <ul class="list-group">
            {{-- @foreach($category as $category)
            <li class="list-group-item">{{$category->title }}</li>
            @endforeach --}}
            <li>
              <a href="/main">main</a>
              <a href="/">welcome</a>
            </li>
          </ul>
        </div>
        <div>Current URL: {{ url()->current()}}</div>
        <div>Full URL: {{ url()->full()}}</div>
        <div>Previous URL: {{ url()->previous()}}</div>
        <div>Route URL: {{ route('about-us')}}</div>
        <div>Route URL with parameter:{{ route('about-us', ['apple' => 1, 'ball' => 2])}}</div>
        <div>Route URL with parameter:{{ route('post.comment', ['post' => 'first-post', 'comment' => 'first-comment'])}}</div>
        <div>Route URL with slug:{{ route('about-us', ['slug' => 'english', 'apple' => 1, 'ball' => 2])}}</div>
        <div>Route URL with query string:{{ route('about-us', ['apple' => 1, 'ball' => 2])}}</div>
        <div>{{ url('main', ['apple' => 1, 'ball' => 2])}}</div>
        </div>
      </div>
        </div>
    </div>
