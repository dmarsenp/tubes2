<div>


    <div class="jam-digital-malasngoding btn  btn-primary position-fixed" style="
    text-align:center;
    float: left;top:95%; right:37%">
        <div class="flex ">

        <div class="kotak px-2">
        <p id="jam"></p>
        </div>

        <div class="kotak px-2">
        <p id="menit"></p>
        </div>

        <div class="kotak px-2">
        <p id="detik"></p>
        </div>

        </div>
    </div>


        <script>
        window.setTimeout("waktu()", 1000);

        function waktu() {
        var waktu = new Date();
        setTimeout("waktu()", 1000);
        document.getElementById("jam").innerHTML = waktu.getHours();
        document.getElementById("menit").innerHTML = waktu.getMinutes();
        document.getElementById("detik").innerHTML = waktu.getSeconds();
        }
        </script>

</div>
