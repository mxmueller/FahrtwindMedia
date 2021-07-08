<div id="loading" wire:loading
    class="fixed top-0 left-0 right-0 bottom-0 w-full h-screen z-50 overflow-hidden bg-white flex flex-col items-center justify-center">
    <div class="box"></div>
    <script>
        $(function () {
            setTimeout(function () {
                $("#loading").fadeOut("slow");
            }, 100);
        })
    </script>
</div>
