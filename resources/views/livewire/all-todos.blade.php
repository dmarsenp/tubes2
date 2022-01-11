
<div class="bg-white h-full overflow-hidden">

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


            <div class="h-40 w-full flex items-center justify-center bg-teal-lightest font-sans">
                <div class="bg-white rounded shadow p-6 m-4 w-full lg:w-3/4 lg:max-w-lg">
                    <div class="mb-4">
                        <h1 class="text-grey-darkest">Todo List</h1>
                        <div class="flex mt-4">
                            <input wire:model="item" class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker" placeholder="Add Todo">
                            <button wire:click="insert" class="flex-no-shrink p-2 border-2 rounded text-teal border-teal hover:text-white hover:bg-teal">Add</button>
                        </div>
                    </div>
                    <div class="overflow-auto" style="max-height: 350px">

                        <div>

                            @foreach ($todo_undone as $todos_undone)
                              <div class="flex mb-4 items-center">
                                <p class="w-full line-through text-green bg-danger">{{$todos_undone->item}}</p>
                                <button wire:click="undone({{$todos_undone->id}})" class="flex-no-shrink p-2 ml-4 mr-2 border-2 rounded hover:text-white text-grey border-grey hover:bg-grey">Done</button>
                                <button wire:click="delete({{$todos_undone->id}})" class="flex-no-shrink p-2 ml-2 border-2 rounded text-red border-red hover:text-white hover:bg-red">Remove</button>
                            </div>
                            @endforeach

                            @foreach ($todo_done as $todos_done)

                            <div class="flex mb-4 items-center ">
                                <p class="w-full text-grey-darkest  bg-hijau">{{$todos_done->item}}</p>
                                <button wire:click="done({{$todos_done->id}})" class="flex-no-shrink p-2 ml-4 mr-2 border-2 rounded hover:text-white text-green border-green hover:bg-green">Not done</button>
                                <button wire:click="delete({{$todos_done->id}})" class="flex-no-shrink p-2 ml-2 border-2 rounded text-red border-red hover:text-white hover:bg-red">Remove</button>
                            </div>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>


            <livewire:jam />
        </div>
    </div>


</div>




