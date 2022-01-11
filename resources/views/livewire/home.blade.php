<div class="bg-white min-h-screen overflow-hidden">

    <div class="row">

        <div class="col-2 bg-hijau text-white shadow-lg" style="height:100vh; text-decoration:none">

            <div class="font-r fs-1 text-center" style="margin-top:10%">
                <form action="/home"><button> Prove It</button></form>
            </div>

            <button class="px-4 pt-5" style="">
                <div class="flex items-center w-full" style="padding-left: 35%">
                    <img src="{{asset('asset/Home Page.png')}}" style="width: 30%;margin-right:5%">
                    <a href ="/home" style="text-decoration:none; color:white">Home</a>
                </div>
            </button>

            <button class="px-4 pt-5" style="">
                <div class="flex items-center w-full" style="padding-left: 30%">
                    <img src="{{asset('asset/Todo List.png')}}" style="width: 20%;margin-right:4%">
                    <a href ="todo" style="text-decoration:none; color:white">To-do List</a>
                </div>
            </button>

            <button class="px-4 pt-5" style="">
                <div class="flex items-center w-full" style="padding-left: 40%">
                    <img src="{{asset('asset/Note.png')}}" style="width: 35%;margin-right:4%">
                    <a href ="note" style="text-decoration:none; color:white">Note</a>
                </div>
            </button>
                @auth
                <div class="position-relative">

                    <button class="shadow-lg bg-white text-body" style="position:absolute; top:46vh;width:100%;left:0.7vh;height:50px">
                        <livewire:logout />
                    </button>
                </div>

                @endauth

        </div>


        <div class="col-10">


            <div class="flex justify-between " style="margin:2.5%">

                <div class="my-auto text-center">
                    <p class="my-auto"> Tanggal/Waktu: <span id="tanggalwaktu"></span></p>
                    <script>
                    var tw = new Date();
                    if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
                    else (a=tw.getTime());
                    tw.setTime(a);
                    var tahun= tw.getFullYear ();
                    var hari= tw.getDay ();
                    var bulan= tw.getMonth ();
                    var tanggal= tw.getDate ();
                    var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
                    var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
                    document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
                    </script>
                </div>

                <div class="flex my-auto">
                    <div class="">
                        <img src="{{asset('asset/image 3.png')}}" alt="">
                    </div>

                    <div class="p-3">
                        @auth
                            {{Auth::user()->name}}
                        @endauth
                    </div>
                </div>

            </div>


            {{-- <div class="" style=" margin-left:20% ;padding-top:1%">
                <lottie-player class="" src="https://assets4.lottiefiles.com/packages/lf20_281NDP.json" mode="bounce" background="transparent"  speed="1.5"  style="width: 600px; height: 600px;"  loop  autoplay></lottie-player>
            </div> --}}


                <div class="flex" style="padding-top: 8%">

                    <div class="mx-auto rounded  border-success border-3 text-center" style="padding: 5%; width:30%; margin:3%;top:10%">
                        <button class="">
                            <a href="todo" style="text-decoration: none; color:black">
                                To-do List
                                    <br>
                                You have {{$count_todo}} task
                            </a>
                        </button>
                    </div>


                    <div class="mx-auto rounded  border-success border-3 text-center" style="padding: 5%; width: 30%; margin:3%">
                        <button>
                            <a href="note" style="text-decoration: none; color:black">
                                    Note
                                    <br>
                                    You have {{$count_note}} note
                            </a>
                        </button>
                    </div>

                </div>
                <livewire:jam />
        </div>
    </div>



</div>

