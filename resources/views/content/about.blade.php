@extends('layout.master')

@section('title', 'About')

@section('content')
    <div>
        <h1>About Me</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem eum sed illo. Perferendis culpa possimus,
            alias nostrum sed minus nulla ducimus earum, nam quisquam iste, reiciendis eius. Ratione, harum laudantium?
        </p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis nemo hic minus quasi. Adipisci ullam perferendis architecto deleniti
            vitae distinctio ab voluptatibus tempora expedita nihil eveniet corrupti, itaque quo accusamus?
        </p>

        <div class="text-center">
            <img src="{{ asset('images/Najwan.jpg') }}" class="img-fluid" alt="About Me">
        </div>
    </div>
@endsection
