<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>A little kindness for you</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
		tailwind.config = {
			theme: {
				extend: {
					colors: {
						primary: '#da373d',
					}
				}
			}
		}
    </script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap');
        body{
            font-family: 'Quicksand', sans-serif;
        }
    </style>

</head>
<body class="antialiased bg-[#f7fafc]">
@yield('content')
</body>
</html>
