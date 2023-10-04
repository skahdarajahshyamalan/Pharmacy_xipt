@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card w-100">
                    <div class="card-header"></div>

                    <div class="card-body">
                        <div class="row p-1">
                            <div class="col-6 border border-2 ml-auto ">
                                <div class="row border border-2 m-1 ml-2 mt-2">
                                    <div class="text-center mt-auto mr-auto mr-auto mb-auto"><img
                                            src="{{ asset('images/1696412939_Capturey.PNG') }}"
                                            class=" img-fluid w-50 h-50 m-2" alt="" sizes="" srcset="">
                                    </div>
                                </div>
                                <div class="row mr-1 ml-1 m-1 mt-2 ">
                                    <div class="col-2 border border-1 m-1"><img
                                            src="{{ asset('images/1696412939_image1.png') }}" class=" img-fluid"
                                            alt="" sizes="" srcset=""></div>
                                    <div class="col-2 border border-1 m-1 ml-auto"><img
                                            src="{{ asset('images/1696412939_screenshot.PNG') }}" class=" img-fluid"
                                            alt="" sizes="" srcset=""></div>
                                    <div class="col-2 border border-1 m-1 ml-auto"><img
                                            src="{{ asset('images/1696412939_vlcsnap-2022-12-19-01h59m50s530.png') }}" class=" img-fluid w-5 h-5"
                                            alt="" sizes="" srcset=""></div>
                                    <div class="col-2 border border-1 m-1 ml-auto"><a href="#">
                                        <img
                                            src="{{ asset('images/1696412939_wordpressscreen.PNG') }}" class=" img-fluid w-5 h-5"
                                            alt="" sizes="" srcset=""></a></div>
                                </div>
                            </div>
                            <div class="m-1"></div>
                            <div class="col-5  border  border-bottom-0 mr-auto   border-end-0">
                                <div class="row border  border-top-0 border-start-0 ">
                                    <div class="row">
                                        <!--head-->
                                        <div class="container text-center ">
                                            <div class="row mt-3">
                                                <div class="col"><h5><b>Drug</b></h5></div>
                                                <div class="col"><h5><b>Quantity</b></h5></div>
                                                <div class="col"><h5><b>Amount</b></h5></div>
                                            </div>
                                        </div>
                                        <!--endhead-->
                                        <!--invocenoby-->
                                        <div class="container text-center">
                                            <div class="row mt-2">
                                                <div class="col">Amoxicillin 250mg</div>
                                                <div class="col">10.00 x 5</div>
                                                <div class="col">50.00</div>
                                            </div>
                                            <div class="row">
                                                <div class="col">Amoxicillin 250mg</div>
                                                <div class="col">10.00 x 5</div>
                                                <div class="col">50.00</div>
                                            </div>
                                            <div class="row">
                                                <div class="col">Amoxicillin 250mg</div>
                                                <div class="col">10.00 x 5</div>
                                                <div class="col">50.00</div>
                                            </div>
                                            <div class="row">
                                                <div class="col"> Amoxicillin 250mg</div>
                                                <div class="col"> 10.00 x 5 </div>
                                                <div class="col"> 50.00 </div>
                                            </div>
                                        </div>
                                        <!--endinvocenoby-->
                                        <!--footer-->
                                        <div class="container text-center">
                                            <div class="row mt-2">
                                                <div class="col"></div>
                                                <div class="col"><h5><b>Total</b></h5></div>
                                                <div class="col"><h5><b>75.00</b></h5></div>
                                            </div>
                                        </div>
                                        <!--endfooter-->
                                    </div>
                                </div>
                                <!--durg-->
                                <div class="container text-center">
                                    <div class="row mt-2">
                                        
                                        <div class="col"><h5><b>Drug</b></h5></div>
                                        <div class="col"> <input type="text" name="" class="form-control" id=""></div>
                                    </div>
                                </div>
                                <div class="container text-center">
                                    <div class="row mt-2">
                                        
                                        <div class="col"><h5><b>Quantity</b></h5></div>
                                        <div class="col"> <input type="text" name="" class="form-control" id=""></div>
                                    </div>
                                </div>
                                <div class="container text-center">
                                    <div class="row mt-2">
                                        <div class="col"></div>
                                        <div class="col"></div>
                                        <div class="col"><button class="form-control">Add</button></div>
                                    </div>
                                </div>
                                <!--enddurg-->
                            </div>
                        </div>
                        <!--send quotation-->
                       
                        <div class="row">
                            <div class="col"></div>
                            <div class="col"> 
                                <div class="container text-right"><hr>
                                    <div class="row mt-2">
                                        <div class="col"></div>
                                        <div class="col"></div>
                                        <div class="col"><button class="form-control " onclick="sendbill()">Send Quotation</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <!--endsend quot--->
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@endsection

