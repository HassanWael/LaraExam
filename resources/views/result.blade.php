@extends('layouts.app')
@section('style')
<link rel="stylesheet" href="{{asset('css/result.css')}}" />
@endsection
@section('content')

    <!-- Result Pages -->
    <div class="myContainer">
{{-- @php
    $correct_answer_array="";
@endphp
@foreach ( $correct_answers as $item)
{{$item}}
@endforeach --}}
<p id="correct" style="display: none">{{$correct_answers}}</p>

    <section class="resultContainer">
        <img class="winnerImage" src="{{asset('img/Success factors-amico.png')}}" alt="" />
        <img class="loserImage" src="{{asset('img/looser.png')}}" alt="" />
        <div class="textResult">
          <div class="resultQout"> Wow! You are brilliant!</div>
          <div class="resultDiscription"></div>
          <div class="result"></div>
          <button class="viewAnswersBtn">View Answers</button>
          <div class="resultTable"></div>
        </div>

        <div class="finshBtnsContainer">
          <button class="BackToCourseBtn btn">
            <a href="../pages/choice.html">Back to course</a>
          </button>
          <button class="logoutBtn btn"><a href="{{route('home')}}">Home </a></button>
        </div>
      </section>
    </div>
      <script src="{{asset("js/result.js")}}"></script>
@endsection
