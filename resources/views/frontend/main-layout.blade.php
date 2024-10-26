<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sixteen Clothing
   </title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />

   @include('frontend.header_link')
</head>
<body>
@include('frontend.header')
@yield('content')
@include('frontend.footer_link')
@include('frontend.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
<script>
  AOS.init();
</script>

</body>
</html>