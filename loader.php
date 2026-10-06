<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* CSS for loader */
    #loader-wrapper {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.8);
      /* Optional: Light transparent background */
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
      /* Ensure loader is above all other content */
    }

    .loader {
      width: 65px;
      height: 117px;
      position: relative;
    }

    .loader:before,
    .loader:after {
      content: "";
      position: absolute;
      inset: 0;
      background: #ff8001;
      box-shadow: 0 0 0 50px;
      clip-path: polygon(100% 0, 23% 46%, 46% 44%, 15% 69%, 38% 67%, 0 100%, 76% 57%, 53% 58%, 88% 33%, 60% 37%);
      ;
    }

    .loader:after {
      animation: l8 1s infinite;
      transform: perspective(300px) translateZ(0px)
    }

    @keyframes l8 {
      to {
        transform: perspective(300px) translateZ(180px);
        opacity: 0
      }
    }
  </style>
</head>

<body>
  <!-- loader.php -->
  <div id="loader-wrapper">
    <div id="loader" class="loader"></div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Show the loader on page load (loader.php already includes this)
      document.getElementById("loader-wrapper").style.display = "flex"; // Ensure it's visible

      // Hide the loader after 5 seconds
      setTimeout(function () {
        document.getElementById("loader-wrapper").style.display = "none";
      }, 500); // 1000 milliseconds = 1 seconds
    });
  </script>

</body>

</html>