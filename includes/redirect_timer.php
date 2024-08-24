<body>
    <button class="redirect_button" id="redirect-button">You should be automatically redirected in 6 seconds...</button>
    <script>
        var button = document.getElementById('redirect-button');
        var count = 5;
        var interval = setInterval(function() {
            button.textContent = 'You should be automatically redirected in ' + count + ' seconds...';
            count--;
            if (count === 0) {
                clearInterval(interval);
                window.location.href = 'cart.php';
            }
        }, 1000);
    </script>
</body>