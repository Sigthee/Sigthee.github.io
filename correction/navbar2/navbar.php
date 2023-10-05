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
        <div>
            <box-icon name="world" color='#fff' size="30px"></box-icon>
            <span>Mondial World</span>
        </div>
        <ul>
            <li>About</li>
            <li>Services</li>
            <li>Testimonials</li>
        </ul>
        <div>
            <box-icon type='logo' name="github" color="#fff" size="30px"></box-icon>
            <box-icon id="menu" name="menu" color="#fff" size="30px"></box-icon>
            <box-icon name="x" color="#fff" size="30px"></box-icon>
        </div>
    </nav>

    <script>
        $('#menu').click(function() {
            if ($('nav ul').is(':hidden')) {
                $('nav ul').css({'display': 'flex'})
                $('nav').addClass('SwitchNav')
                $('nav').animate({
                    bottom: 0
                }, 1000)
            }
        })
        $('box-icon[name="x"]').click(function() {
            if ($('nav ul').is(':visible')) {
                $('nav').animate({
                    bottom: '93.5%'
                }, 1000, function () {
                    $('nav').removeClass('SwitchNav')
                })
                $('nav ul').hide()
            }
        })
    </script>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>