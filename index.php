<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Chat</title>
</head>

<style type="text/css">
@font-face {
    font-family: headFont;
    src: url('ui/fonts/Summer-Vibes-OTF.otf')
}

#wrapper {
    max-width: 900px;
    min-height: 500px;
    display: flex;
    margin: auto;
    color: white;
}

#left_panel {
    min-height: 500px;
    background-color: #22334b;
    flex: 1;
}

#right_panel {
    min-height: 500px;
    flex: 4;
}

#header {
    background-color: #485a6e;
    height: 70px;
    font-size: 40px;
    text-align: center;
    font-family: headFont;
}

#inner_left_panel {
    background-color: #313641;
    flex: 1;
    min-height: 430px;
}

#inner_right_panel {
    background-color: #f2f5f8;
    flex: 2;
    min-height: 430px;
}

#container {
    display: flex;
}
</style>

<body>
    <div id="wrapper">

        <div id="left_panel">
        </div>

        <div id="right_panel">
            <div id="header">My Chat</div>
            <div id="container">
                <div id="inner_left_panel"></div>
                <div id="inner_right_panel"></div>
            </div>

        </div>

    </div>

</body>

</html>