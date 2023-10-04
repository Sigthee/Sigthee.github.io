<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="./navbar.css">
    <title>Navigation Bar</title>
</head>
<body>
    <nav>
        <div>
            <p>Soft UI PRO</p>
        </div>

        <ul>
            <li class="hidden"><box-icon name='menu' size="24px"></box-icon></li>
            <li class="hiddenmobile">Pages<box-icon name='chevron-down' ></box-icon></li>
            <li class="hiddenmobile">Account<box-icon name='chevron-down' ></box-icon></li>
            <li class="hiddenmobile">Blocks<box-icon name='chevron-down' ></box-icon></li>
            <li class="hiddenmobile">Docs<box-icon name='chevron-down' ></box-icon></li>
        </ul>

        <button class="hiddenmobile">
            BUY NOW
        </button>
    </nav>
</body>
</html>