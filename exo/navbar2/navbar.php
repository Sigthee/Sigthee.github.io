<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="./navbar.css">
    <script src="../../scripts/jquery-3.7.1.min.js"></script>
    <title>navbar2</title>
</head>
<body>
    <nav>
        <div class="hidden">
            <box-icon name="world" color='#fff' size="30px"></box-icon>
            <span>Mondial World</span>
        </div>
        <ul>
            <li>About</li>
            <li>Services</li>
            <li>Testimonials</li>
        </ul>
        <div>
            <box-icon class="hidden" type='logo' name="github" color="#fff" size="30px"></box-icon>
            <box-icon class="hidden" id="menu" name="menu" color="#fff" size="30px"></box-icon> 
            <box-icon id="hiddenmob" name='x' color="#fff" size="50px"></box-icon>
        </div>
        
    </nav>

    <script>
        $('#menu').click(function() {
            if ($('nav ul').is(':visible')) {
                $('nav ul').animate({
                    opacity: 0,
                }, 500, function() {
                    $('nav ul').hide()
                })
            } else {
                $('nav ul').show()
                $('nav ul').animate({
                    opacity: 1,
                }, 500)
                $('nav').css({
                    'background-color': '#000D1A',
                    'bottom': 0,
                })
                $('.hidden').css({
                    'display': 'none'
                })
                $('#hiddenmob').css({
                    'display': 'contents',
                    'position': 'relative',
                    'top': 0,
                })
                $('nav').css({
                    'flex-direction': 'column-reverse',
                    'justify-content': 'center'
                })
            }
        })
    </script>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>