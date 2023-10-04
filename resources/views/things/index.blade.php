@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card w-100">
                    <div class="card-header"></div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 border border-2 mr-auto">
                                <div class="row border border-2 m-1 ml-2 ">
                                    <div class="text-center mt-auto mr-auto mr-auto mb-auto"><img
                                            src="{{ asset('images/1696412939_Capturey.PNG') }}"
                                            class=" img-fluid w-50 h-50 m-2" alt="" sizes="" srcset="">
                                    </div>
                                </div>
                                <div class="row mr-1 ml-1 m-1">
                                    <div class="col-3 border border-1"><img
                                            src="{{ asset('images/1696412939_image1.png') }}" class=" img-fluid w-5 h-5"
                                            alt="" sizes="" srcset=""></div>
                                    <div class="col-3 border border-1"><img
                                            src="{{ asset('images/1696412939_screenshot.PNG') }}" class=" img-fluid w-5 h-5"
                                            alt="" sizes="" srcset=""></div>
                                    <div class="col-3 border border-1"><img
                                            src="{{ asset('images/1696412939_vlcsnap-2022-12-19-01h59m50s530.png') }}" class=" img-fluid w-5 h-5"
                                            alt="" sizes="" srcset=""></div>
                                    <div class="col-3 border border-1"><img
                                            src="{{ asset('images/1696412939_wordpressscreen.PNG') }}" class=" img-fluid w-5 h-5"
                                            alt="" sizes="" srcset=""></div>
                                </div>
                            </div>
                            {{-- <div class="m-0"></div> --}}
                            <div class="col-6  border border-2 border-bottom-0">
                                <div class="row border border-2 ">
                                    <div class="row">
                                        <!--head-->
                                        <div class="container text-center">
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
                        <hr>
                        <div class="container text-right">
                            <div class="row mt-2">
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"><button class="form-control">Send Quotation</button></div>
                            </div>
                        </div>
                        <!--endsend quot--->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
