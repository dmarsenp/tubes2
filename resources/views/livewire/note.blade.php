<div class="bg-white min-h-screen overflow-hidden shadow-lg">

    <div class="row">

        <div class="col-2 bg-hijau text-white shadow-lg" style="height:100vh; text-decoration:none">
            <div class="font-r fs-1 text-center" style="margin-top:10%">
                <form action="/home"><button> Prove It</button></form>
            </div>
            <button class="px-4 pt-5" style="">
                <div class="flex items-center w-full " style="padding-left: 35%">
                    <img src="{{asset('asset/Home Page.png')}}" style="width: 30%;margin-right:5%">
                    <a  href ="/home" style="text-decoration:none; color:white">Home</a>
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
                    <a href ="/note" style="text-decoration:none; color:white">Note</a>
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


        <div class="col-10 ">

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


            <div class="mx-4 py-4">

                <div class="flex justify-between">
                    <div class="font-reem fs-3 ">
                        Notes
                    </div>

                    <div class="fs-6" style="margin-right: 2%">
                      <button wire:click="modalOpen"><img src="{{(asset('asset/Add.png'))}}" width="30vh"></button>
                    </div>

                </div>
                @if($modalOpen)
                @include('livewire.modalnote')
                @endif
                <div class="mx-auto overflow-hidden">

                    <div class="flex overflow-scroll" style="max-width: 1200px ">

                        @foreach ($notes as $note)


                            <div class="shadow-sm p-3 mb-2 bg-light text-dark overflow-auto" style="min-width: 300px; min-height:200px; margin:1%">
                                <div class="overflow-auto" style="max-height: 420px">
                                <button wire:click="delete({{$note->id}})" style="margin-right:10%"><img src="{{(asset('asset/Add.png'))}}" width="30vh"></button>
                                    {{$note->note}}
                                </div>
                            </div>




                        @endforeach

                    </div>
                </div>
            </div>



            <livewire:jam />

        </div>
    </div>



</div>

