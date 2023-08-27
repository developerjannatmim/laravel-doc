<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                        <p>{{ time() }}</p>
                        {!! '<h1>hello</h1>' !!}
                        {!! '<h2>hello</h2>' !!}
                        {!! '<h3>hello</h3>' !!}
                        {!! '<h4>hello</h4>' !!}
                        {!! '<h5>hello</h5>' !!}
                        {!! '<h6>hello</h6>' !!}
                        {{-- comment statement --}}
                        {{-- {!! "<script>alert('Yahoo Baba')</script>" !!} --}} {{-- alert message --}}
                        {{ "<script>alert('Yahoo Baba')</script>" }} {{-- as it is print --}}
                        @php
                        $names = ['lam','mim','asha','lam','mim','asha'];
                        $user = 'User Yahoo Baba';
                        @endphp
                        <ul>
                            @foreach ( $names as $n )
                               {{-- <li>{{ $loop->count }} - {{ $n }}</li> --}}
                               @if ($loop->even)
                                   {{-- This is the first iteration --}}
                                   <li style="color: red">{{ $n }}</li>
                               @elseif($loop->odd)
                               <li style="color: green">{{ $n }}</li>
                               @else
                               <li>{{ $n }}</li>
                               @endif
                            @endforeach
                            <br>
                            {{ $user }}
                            @@if()
                        </ul>
                    <div class="card-body">
                       <ul class="list-group">
                           @foreach($category as $category)
                           <li class="list-group-item">{{$category->title }}</li>
                            @endforeach
                       </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div>
  <x-greeting />
</div>