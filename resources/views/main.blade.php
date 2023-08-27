<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

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