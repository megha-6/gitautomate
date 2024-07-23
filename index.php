<!DOCTYPE html>
<html>
<head>
    <title>Dynamic PHP Project</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #B3D1FF, red);
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            background: rgba(255, 255, 255, 0.8);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
            animation: fadeIn 2s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 2em;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }
        p {
            color: #666;
            font-size: 1.2em;
        }
        button {
            padding: 15px 30px;
            font-size: 1.1em;
            border: none;
            background: linear-gradient(135deg, #FF6B6B, #F2A365);
            color: white;
            border-radius: 10px;
            cursor: pointer;
            outline: none;
            transition: background 0.3s ease, transform 0.2s ease;
        }
        button:hover {
            background: linear-gradient(135deg, #F2A365, #FF6B6B);
            transform: scale(1.05);
        }
        #clock {
            margin-top: 20px;
            font-size: 2em;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the "GitAutomate" Team</h1>
        <p>Click the button below to start the live clock</p>
        <button onclick="startClock()">Start Clock</button>
        <div id="clock"></div>
    </div>
    <script>
        function startClock() {
            function updateClock() {
                var now = new Date();
                var hours = String(now.getHours()).padStart(2, '0');
                var minutes = String(now.getMinutes()).padStart(2, '0');
                var seconds = String(now.getSeconds()).padStart(2, '0');
                var timeString = hours + ':' + minutes + ':' + seconds;
                document.getElementById('clock').innerText = timeString;
            }
            updateClock(); // Show the clock immediately
            setInterval(updateClock, 1000); // Update the clock every second
        }
    </script>
</body>
</html>
