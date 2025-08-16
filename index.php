<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My First PHP Page</title>
    <style>
        body {
            background-color: #ffe6f2; /* Light pink background for a soft, bubbly feel */
            font-family: 'Comic Sans MS', cursive, sans-serif; /* A playful font */
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            text-align: center;
        }

        .content-box {
            background-color: #fff0f5; /* Lighter pink for the box */
            padding: 40px;
            border-radius: 50px; /* Large border-radius to create a bubble shape */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15); /* Soft, prominent shadow */
            color: #333; /* Dark gray text inside the box */
            border: 3px solid #ffb3e6; /* A soft pink border */
            transition: transform 0.3s ease-in-out; /* Smooth transition for hover effect */
        }

        .content-box:hover {
            transform: scale(1.05); /* Slightly enlarge the bubble on hover */
        }
        
        h1 {
            color: #ff69b4; /* Hot pink for a fun, vibrant title */
            font-size: 2.8em;
            margin-bottom: 10px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1); /* Subtle text shadow */
        }
        p {
            color: #d8bfd8; /* Thistle, a soft purple-gray */
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <div class="content-box">
        <h1>
            <?php echo "Welcome to my website!"; ?>
        </h1>
        <p>This page was generated with PHP.</p>
    </div>
</body>
</html>