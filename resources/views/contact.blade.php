@extends('layouts.layouts')
@section('content')

    <body class="text-light" style="font-family: 'Inter">
        <div
            style="height: 1080px;padding-top: 50px; font-size: 48px;background-size: cover; background-image:url(https://iili.io/HTnPbxR.md.png); font-family: 'Inter'">
            <p class="d-flex justify-content-center text-light" style="font-size: 54px;font-weight: bold">
                Let's have a talk
            </p>
            <div class="d-flex justify-content-center align-items-center">
                <div class="container text-center">
                    <h3 style="padding-top: 100px;padding-bottom: 50px">Send us your feedback</h3>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label" style="font-size: 20px">Full Name</label>
                        <input type="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label" style="font-size: 20px">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail">
                        <p style="padding-top:5px; font-size: 13px">We'll never
                            share your
                            email with anyone else.</p>
                        <label for="exampleInputEmail" class="form-label" style="font-size: 20px">Comment</label>
                        <input type="email" class="form-control" id="exampleInputEmail">

                    </div>
                    <div class="d-flex justify-content-center pt-3">
                        <button type="button" class="btn btn-outline-light" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Submit
                        </button>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body text-dark text-center"
                                    style="font-family: 'Roboto'; font-size: 16px">
                                    <img src="https://static.vecteezy.com/system/resources/previews/010/152/358/original/tick-icon-sign-symbol-design-free-png.png"
                                        style="width: 75px; height: 75px" alt="">
                                    <h3 style="padding-top: 30px">Thank you!</h3>
                                    <p>Your feedback has been successfully submitted.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" onClick="location.href='home'">Back to
                                        Home</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
@endsection
