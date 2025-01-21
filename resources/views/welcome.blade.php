<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Wire Test</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    .container{
        margin-top: 5rem;
        background-color: #0fff9c;
        color: #000;
        width:50%;
        margin-left: auto;
        margin-right: auto;
        padding: 1rem;
    }
</style>
<body>
    <div class="container">
        <div class="flex justify-center items-center">
            {{-- <div style="width: 50%; margin-top: 5rem;">
                <livewire:first-component />
            </div> --}}
            <div>
                <h1>Send Event</h1>
                <livewire:send-event />
            </div>
        </div>
        <hr>
        <div class="flex justify-center items-center">
            <div>
                <h1>Recieved Event</h1>
                <livewire:recieve-event />
            </div>
        </div>
    </div>
</body>
</html>