@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card w-100">
                    <div class="card-header"></div>

                    <div class="card-body">

                        @foreach ($prescription as $item)
                            <div class="row p-1">
                                <div class="col-6 border border-2 ml-auto ">
                                    @if (!empty($item->images))
                                        <?php
                                        $img = json_decode($item->images);
                                        ?>
                                        @php
                                            
                                        @endphp
                                    @endif
                                    <div class="row border border-2 m-1 ml-2 mt-2">
                                        <div class="text-center mt-auto mr-auto mr-auto mb-auto" onclick="addthing()">
                                            @if (!empty($img[0]))
                                                <img src="{{ asset('images/' . $img[0]) }}" class=" img-fluid w-50 h-50 m-2"
                                                    alt="" sizes="" srcset="">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row mr-1 ml-1 m-1 mt-2 ">
                                        <div class="col-2 border border-1 m-1" onclick="addthing()">
                                            @if (!empty($img[1]))
                                                <img src="{{ asset('images/' . $img[1]) }}" class=" img-fluid"
                                                    alt="" sizes="" srcset="">
                                            @endif
                                        </div>
                                        <div class="col-2 border border-1 m-1 ml-auto" onclick="addthing()"><img
                                                src="{{ asset('images/' . $img[2]) }}" class=" img-fluid" alt=""
                                                sizes="" srcset=""></div>
                                        <div class="col-2 border border-1 m-1 ml-auto" onclick="addthing()">
                                            @if (!empty($img[3]))
                                                <img src="{{ asset('images/' . $img[3]) }}" class=" img-fluid w-5 h-5"
                                                    alt="" sizes="" srcset="">
                                            @endif

                                        </div>
                                        <div class="col-2 border border-1 m-1 ml-auto" onclick="addthing()"><a
                                                href="#">
                                                @if (!empty($img[3]))
                                                    <img src="{{ asset('images/' . $img[3]) }}" class=" img-fluid w-5 h-5"
                                                        alt="" sizes="" srcset="" onclick="addthing()">
                                                @endif
                                            </a></div>
                                    </div>
                                </div>
                                <div class="m-1"></div>
                                <div class="col-5  border  border-bottom-0 mr-auto   border-end-0">
                                    <div class="row border  border-top-0 border-start-0 ">
                                        <div class="row">
                                            <!--head-->
                                            <div class="container text-center ">
                                                <div class="row mt-3">
                                                    <div class="col">
                                                        <h5><b>Drug</b></h5>
                                                    </div>
                                                    <div class="col">
                                                        <h5><b>Quantity</b></h5>
                                                    </div>
                                                    <div class="col">
                                                        <h5><b>Amount</b></h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--endhead-->
                                            <!--invocenoby-->
                                            <div class="container text-center invvicename">
                                               
                                               
                                                <div class="row">
                                                    <div class="col"> </div>
                                                    <div class="col">  </div>
                                                    <div class="col">  </div>
                                                </div>
                                            </div>
                                            <!--endinvocenoby-->
                                            <!--footer-->
                                            <div class="container text-center price">
                                                <div class="row mt-2">
                                                    <div class="col"></div>
                                                    <div class="col">
                                                        <h5><b class="totamoutprice"></b></h5>
                                                    </div>
                                                    <div class="col">
                                                        <h5><b class="totprice"></b></h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--endfooter-->
                                        </div>
                                    </div>
                                    <!--durg-->
                                    <div class="container text-center">
                                        <div class="row mt-2">

                                            <div class="col">
                                                <h5><b>Drug</b></h5>
                                            </div>
                                            <div class="col">
                                                <input class="form-control" list="datalistOptions" id="exampleDataList">
                                                <datalist id="datalistOptions">
                                                    <option value="Azithromycin">
                                                    <option value="Naproxen">
                                                    <option value="Amoxicillin">
                                                    <option value="Atorvastatin">
                                                    <option value="Amlodipine">
                                                </datalist>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container text-center">
                                        <div class="row mt-2">

                                            <div class="col">
                                                <h5><b>Quantity</b></h5>
                                            </div>
                                            <div class="col"> <input type="number" name="" class="form-control"
                                                    id="Quantity"></div>
                                        </div>
                                    </div>
                                    <div class="container text-center">
                                        <div class="row mt-2">
                                            <div class="col"></div>
                                            <div class="col"></div>
                                            <div class="col"><button class="form-control"
                                                    onclick="addinvice()">Add</button></div>
                                        </div>
                                    </div>
                                    <!--enddurg-->
                                </div>
                            </div>
                            <!--send quotation-->

                            <div class="row">
                                <div class="col"></div>
                                <div class="col">
                                    <div class="container text-right">
                                        <hr>
                                        <div class="row mt-2">
                                            <div class="col"></div>
                                            <div class="col"></div>
                                            <div class="col"><button class="form-control">Send Quotation</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--endsend quot--->
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script>
        function addthing() {
             $('.invvicename').hide();
            $('.price').hide();
        }

        function addinvice() {
            if ($('#exampleDataList').val().trim() === '' || $('#Quantity').val().trim()==='') {
            alert('please check inputs')
} else {
    $('.invvicename').show();
            $('.price').show();
    function getRandomInt(min, max) {
                return Math.floor(Math.random() * (max - min + 1)) + min;
            }
            var randomNumber = getRandomInt(1, 100);

            const myArray = [];

            // Create objects
            var obj1 = {
                thing: $('#exampleDataList').val(),
                qunty: $('#Quantity').val(),
                Amount: getRandomInt(1, 100) * parseInt($('#Quantity').val())
            };
           
            // Function to check if an object exists in the array
            function doesObjectExist(arr, obj) {
                for (var i = 0; i < arr.length; i++) {
                    if (JSON.stringify(arr[i]) === JSON.stringify(obj)) {
                        return true; // Object already exists in the array
                    }
                }
                return false; // Object does not exist in the array
            }

            // Check if obj1 already exists in myArray before adding it
            if (!doesObjectExist(myArray, obj1)) {
                myArray.push(obj1);
            }

            // Check if obj2 already exists in myArray before adding it
            if (!doesObjectExist(myArray, obj1)) {
                myArray.push(obj2);
            }

            // Check if obj3 already exists in myArray before adding it
            if (!doesObjectExist(myArray, obj1)) {
                myArray.push(obj3);
            }

            // Check if obj4 already exists in myArray before adding it
            if (!doesObjectExist(myArray, obj1)) {
                myArray.push(obj4);
            }

            // Display the contents of the array
            console.log(myArray);
            $.each(myArray, function(index, obj) {
        // Create the HTML structure as a jQuery object
        var htmlStructure = $(
            '<div class="row">' +
            '<div class="col">' + obj.thing + '</div>' +
            '<div class="col">'+obj.Amount/obj.qunty+'.00'+' x' + obj.qunty + '</div>' +
            '<div class="col countprice">' + obj.Amount + '</div>' +
            '</div>'
        );

        // Append the HTML structure to the element with ID "container"
        $('.invvicename').append(htmlStructure);
    });
    var totalPrice = 0;
    $('.countprice').each(function(index, element) {
        var price = parseFloat($(element).text());
        if (!isNaN(price)) {
        totalPrice += price;
          }
        });

    
}
$('.totprice').html(totalPrice.toFixed(2));
$('.totamoutprice').html('Total');
//console.log("Total Price: " + totalPrice.toFixed(2));
           
        }
    </script>
@endsection
