@extends('layouts.layouts')
@section('content')

    <body>
        <div style="background-image:url(https://i.ibb.co/0VGFhfP/Rectangle-48.png); background-size: cover">
            <div>
                <div class="d-flex justify-content-around text-light">
                    <div class="container1">
                        <ul class="align-items-center " style="padding-top: 80px;padding-right: 50px">
                            <h1 style="font-size: 84px;padding-top: 50px font-family: 'Inter'; font-weight:bolder ">
                                Gather your <br> rare OCULUX <br> clothes and<br> accessories.<br>
                            </h1>
                            <p class="d-flex justify-content-start"
                                style="padding-top: 50px;font-size: 24px;padding-bottom: 250px;font-weight: 500">
                                Get started with the easiest and most secure <br>platforms to buy and sell the rarest <br>of
                                premium clothes and accessories.
                            </p>
                        </ul>
                    </div>
                    <div class="container2">
                        <div class="align-items-center d-flex justify-content-center"
                            style="padding-top: 10px;padding-left: 50px">
                            <img src="https://i.ibb.co/yFQKjrP/7-E85-BCA9-CD58-4532-A557-F72985-A98-C8-D-removebg-preview-1.png"
                                style="zoom: 125%" alt="">
                        </div>
                    </div>
                </div>
                <div>
                </div>
                <div>
                    <h2 class="d-flex justify-content-center text-light"
                        style="padding-bottom:50px; font-family: 'Inter'; font-size: 48px;font-weight: bold">
                        Artwork of the week
                    </h2>
                    <div class="d-flex justify-content-around" style="padding-bottom: 100px">
                        <div class="card"
                            style="width: 26rem; height: 28rem; background-size: cover; background-image:url(https://i.ibb.co/VJkZ4Cj/Artwork-BG1.png); ">
                            <div class="d-flex justify-content-center">
                                <img src="https://i.ibb.co/gZYJ2Fs/41-A0263-D-7-D20-4929-AB46-C6180-D05-E213-removebg-preview-1.png"
                                    style="height: 400px; max-width: 350px;" class="card-img-top" alt="...">
                            </div>
                            <div class="d-flex justify-content-center" style="padding-top: 20px">
                                <p style="font-weight: bold; font-family: 'Inter'; padding-right: 15px">
                                    #56775
                                </p>
                                <p>
                                    RAPHAEL-FITS
                                </p>
                            </div>
                        </div>
                        <div class="card"
                            style="width: 26rem; height: 28rem; background-size: cover; background-image:url(https://i.ibb.co/02xCJCN/Artwork-BG2.png)">
                            <div class="d-flex justify-content-center">
                                <img src="https://i.ibb.co/GFf4hGN/9468-AF95-7175-4342-A10-E-9960-E947-FACB-removebg-preview-1.png"
                                    style="height: 400px; max-width: 350px;" class="card-img-top" alt="...">
                            </div>
                            <div class="d-flex justify-content-center text-light" style="padding-top: 20px">
                                <p style="font-weight: bold; font-family: 'Inter'; padding-right: 15px">
                                    #56775
                                </p>
                                <p>
                                    AEROLOGY
                                </p>
                            </div>
                        </div>
                        <div class="card"
                            style="width: 26rem; height: 28rem; background-size: cover; background-image:url(https://i.ibb.co/nLgDXbW/Artwork-BG3.png)">
                            <div class="d-flex justify-content-center">
                                <img src="https://i.ibb.co/2M6DKVH/045-C64-FA-E8-FD-4-CBF-BC1-E-ED2-CA364-C8-A5-removebg-preview-2.png"
                                    style="padding-left: 15px;height: 400px; max-width: 315px;" class="card-img-top"
                                    alt="...">
                            </div>
                            <div class="d-flex justify-content-center" style="padding-top: 20px">
                                <p style="font-weight: bold; font-family: 'Inter'; padding-right: 15px">
                                    53075
                                </p>
                                <p>
                                    GUCCI DRIP
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center" style="padding-bottom: 40px">
                    <a>
                        <button type="button" class="btn btn-outline-light btn-lg" onClick="location.href='explore'">
                        Explore</button>
                    </a>
                </div>
            </div>
        </div>
        </div>
    @endsection
