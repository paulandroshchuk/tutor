@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron" style="background-color: lightslategreye;">
                    <div class="row">
                        <div class="col-md-9">
                            <h1 class="display-4">Master Your English</h1>
                            <p class="lead">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Pellentesque fermentum lacinia orci auctor ullamcorper.
                                Integer vel purus in quam convallis pretium vel nec orci.
                                Proin sed vulputate nisl, et fringilla lorem. Duis eu nulla nunc.
                                Nunc mi neque, sodales auctor euismod sed, scelerisque nec massa. Aliquam erat volutpat.
                            </p>
                        </div>
                        <div class="col-md-1">
                            <img src="img/student.png" class="img-fluid" style="max-width: 200px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body text-dark">
                        <h5 class="card-title">Dark card title</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                        <a href="{{ route('register') }}" class="btn btn-block btn-outline-secondary">Start Learning</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body text-dark">
                        <h5 class="card-title">Dark card title</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                        <a href="{{ route('register') }}" class="btn btn-block btn-outline-secondary">Start Learning</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body text-dark">
                        <h5 class="card-title">Dark card title</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                        <a href="{{ route('register') }}" class="btn btn-block btn-outline-secondary">Start Learning</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection