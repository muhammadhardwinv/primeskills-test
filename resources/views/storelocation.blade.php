@extends('layouts.layouts')
@section('content')

    <body style="background-size: cover; background-image: url(https://i.ibb.co/0VGFhfP/Rectangle-48.png)">
        <h2 class="text-light d-flex justify-content-center" style="font-family: 'Roboto'; padding-top: 100px; padding-bottom: 150px">Our store near you</h2>
        <div class="container d-flex justify-content-around text-light">
            <form class="d-flex justify-space-between">
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label" style="font-size: 20px">Enter your location</label>
                    <input type="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                    <iframe class="pt-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.527376755157!2d106.63191151529493!3d-6.193927362408001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f9bf18e93217%3A0xdcbd7b5bf0b8b249!2sTangcity%20Mall!5e0!3m2!1sen!2sid!4v1672195849824!5m2!1sen!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </form>
        </div>
        <div class="d-flex justify-content-center pt-5 pb-5">
            <button type="submit" class=" btn btn-outline-light" href>Submit</button>
        </div>
    </body>
 @endsection
