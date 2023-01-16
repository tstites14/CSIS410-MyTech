<html>
    <head>
        <title>Main Menu</title>
        <meta charset="utf-8"/>

        <link rel="stylesheet" type="text/css" href="index.css" />
    </head>
    <body class='content'>
        <div class='content'>
            <div class='header'>
                <h1>Main Menu:</h1>
                <h2>Liberty University Online CSIS 410: Web Enterprise Technologies</h2>
            </div>
            <div class = 'menuList'>
                <ul>
                    <li><button>Module 1, Week 1: Foundations</button></li>
                    <li><button>Module 1, Week 1: Variables</button></li>
                    <li><button>Module 2, Week 2: Forms</button></li>
                    <li><button>Module 3, Week 3: Arrays</button></li>
                    <li><button>Module 4, Week 4: Sessions</button></li>
                    <li><button>Module 5, Week 5: CMS Sessions</button></li>
                    <li><button>Module 6, Week 6: Database</button></li>
                    <li><button>Module 8, Week 8: CMS Database</button></li>
                </ul>
            </div>
        </div>
        <footer class= 'footer'>
            <p><?php echo "This file was last modified on " . date("F d Y, H:i:s.", filemtime("index.php")) ?></p>
            <p>Copyright © 2023 Theodore Stites</p>
        </footer>
    </body>
</html>