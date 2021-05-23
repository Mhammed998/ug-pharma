@extends('layouts.app')
@section('front-title' , 'UG pharma | Contact')
@section('front-content')


    <!--start keep in touch -->
    <section id="contact" class="keep-touch text-center mt-5 mb-5">
        <div class="container">
            <h3>
                {{__('lang.LETSKEEPINTOUCH')}}
            </h3>
            <p>{{__('lang.WRITEYOURMESSAGE')}}</p>
            <form class="row g-3">
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="{{__('lang.SNAME')}}">
                </div>
                <div class="col-md">
                    <input type="email" class="form-control" placeholder="{{__('lang.SEMAIL')}}">
                </div>
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="{{__('lang.SPHONE')}}">
                </div>
                <div class="form-group col-md-12">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="{{__('lang.SMESSAGE')}}"></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-outline rounded-pill">{{__('lang.SUBMITNOW')}}</button>
                </div>
            </form>
        </div>
    </section>






@endsection
