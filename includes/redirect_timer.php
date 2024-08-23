<body>
    <button id="redirect-button">Redirecting to cart in 5 seconds...</button>
    <script>
        var button = document.getElementById('redirect-button');
        var count = 5;
        var interval = setInterval(function() {
            button.textContent = 'Redirecting to cart in ' + count + ' seconds...';
            count--;
            if (count === 0) {
                clearInterval(interval);
                window.location.href = 'cart.php';
            }
        }, 1000);
    </script>
</body>