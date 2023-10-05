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
        <div class="box2">
            <box-icon class="hidden" type='logo' name="github" color="#fff" size="30px"></box-icon>
            <box-icon class="hidden" id="menu" name="menu" color="#fff" size="30px"></box-icon> 
            <box-icon id="hiddenmob" name='x' color="#fff" size="50px"></box-icon>
        </div>
        
    </nav>

    <script>
        var menuOuvert = false;

        $('#menu').click(function() {
            changeMenu();
        });

        $('#hiddenmob').click(function() {
            changeMenu();
        });

        function changeMenu() {
        if (menuOuvert) {
            $('nav ul').animate({
                opacity: 0,
            }, 500, function() {
                $('nav ul').hide()
            });
            menuOuvert = false;
        } else {
            $('nav ul').show();
            $('nav ul').animate({
                opacity: 1,
            }, 500);
            menuOuvert = true;

            $('nav').css({
                'background-color': '#000D1A',
                'bottom': 0,
            })
            $('.hidden').css({
                'display': 'none'
            })
            $('#hiddenmob').css({
                'display': 'contents',
            })
            $('.box2').css({
                'position': 'absolute',
                'top': '30px',
                'right': '30px'
            })
            $('nav').css({
                'flex-direction': 'column-reverse',
                'justify-content': 'center'
            })
            $('ul').css({
                'font-size': '2em',
                'display': 'flex',
                'flex-direction': 'column',
                'align-items': 'center'
            })
            $('li').css({
                'margin': '20px 0',
            })
        }
    }
    </script>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>