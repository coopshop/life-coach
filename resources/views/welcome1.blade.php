@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div width="100%" height="100%" style="background-image: 'https://scontent-amt2-1.xx.fbcdn.net/v/t31.0-8/17917220_1903938663183323_101221719318303106_o.jpg?_nc_cat=0&_nc_eui2=v1%3AAeGjUbSgt2i80lX4EiQOeFL3_nPrNmDFiwfQ2ZhTy8g4ee5BlCvgd386LjKm6we2yMYB2YO8UGGyELJzVlvns0k6tCz588RoFCwzHtSM1vCMsw&oh=270e888127460f820059903906050df7&oe=5B6E153A'">
                            
                        </div>
                        <img src="https://scontent-amt2-1.xx.fbcdn.net/v/t31.0-8/17917220_1903938663183323_101221719318303106_o.jpg?_nc_cat=0&_nc_eui2=v1%3AAeGjUbSgt2i80lX4EiQOeFL3_nPrNmDFiwfQ2ZhTy8g4ee5BlCvgd386LjKm6we2yMYB2YO8UGGyELJzVlvns0k6tCz588RoFCwzHtSM1vCMsw&oh=270e888127460f820059903906050df7&oe=5B6E153A" alt="Success" width="100%" height="100%">
                        <h1 align="center">There is nothing you cannot do!</h1>
                        <br>
                        <h4>You just need some <b>motivation</b>, an <u><b>action</b></u> plan and <i><b>application</b></i></h4>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <a href="{{ url('/goals/create') }}">Create a <b>goal</b> TODAY!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
