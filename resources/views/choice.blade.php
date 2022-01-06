{{-- <!DOCTYPE html>
<html>

<head>
    <title>Courses</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body> --}}
    @extends('layouts.appChoice')

@section('content')

<div class="box">
    @foreach ($categories as $category)


    <div class="card">
        <i class="fa fa-rocket" aria-hidden="true"></i>
        <h3 class="question">{{$category->exam_name}}</h3>
        <p>
            If you want to learn {{$category->exam_name}}, go
            <a class="link" href="#" target="blank">here</a>.
        </p>
        <a class="button" href="/exams/{{$category->id}}" onclick="goto('{{$category->exam_name}}')">Start quiz</a>
    </div>

    @endforeach
</div>

<!-----------------------choice quis end------------------------------>
<script src="../js/choice.js"></script>

@endsection
    <!-----------------------------choice quis start------------------------------>
    {{-- <div class="choice">
        <div class="title">
            <h2>
                "Welcome <span class="user-N"> Ahmed</span> the exam page"<img class="imgLable"
                    src="../img/img-removebg-preview.png" alt="" />
            </h2>
        </div>

        <!-- start card  -->
        </body>

</html> --}}
