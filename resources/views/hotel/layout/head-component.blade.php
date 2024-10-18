<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="{{URL::to('/');}}/assets/logo_icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Miranda</title>

    @foreach ($styles as $style)
        <link rel="stylesheet" href="{{$style}}" />
    @endforeach

    @foreach ($scripts as $script)
        <script type="text/javascript" src="{{$script}}" defer></script>
    @endforeach
</head>
