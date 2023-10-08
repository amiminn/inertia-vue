<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
      window.Laravel = {
          csrfToken: '{{ csrf_token() }}',
          app_key : '{{ env("APP_KEY") }}'
        }
                
        @auth
        let user = {{ Js::from(auth()->user()) }};
        let token = {{ Js::from(session('token')) }};
        window.Auth = {
          user,token
        }
      @endauth
  </script>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @inertiaHead
  </head>
  <body>
    @inertia
  </body>
</html>