<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: rgb(83, 96, 108);
        }

        .calc {
            border: 1px solid black;
            border-radius: 30px;
            width: 245px;
            margin: auto;
            background-color: rgb(65, 63, 63);
            border: 2px solid black;
            border-left-color: rgb(159, 157, 157);
            border-bottom-color: rgb(111, 111, 112);
            box-shadow: 10px 0px 15px 3px;
            margin-top: 100px;
        }

        .calc form {
            display: flex;
            flex-flow: column;
            align-items: center;
            margin: 20px 20px 4px 20px;
        }

        .head {
            display: flex;
            margin: 0px 0px 8px 0px;
            justify-content: flex-end;
        }

        .head label {
            color: white;
            font-family: sans-serif;
            font-weight: 700;
            margin-right: 80px;
        }

        .head .mirror {
            display: flex;
            background-color: rgb(82, 44, 44);
            width: 80%;
            height: 20px;
            border-radius: 5px;
            border: 2px solid black;
            border-right-color: rgb(142, 141, 141);
            border-top-color: rgb(96, 95, 95);
            border-left-color: rgb(0 0 0 0.1);
        }

        .input input {
            margin-bottom: 10px;
            height: 60px;
            width: 98%;
            background-color: rgb(81, 99, 99);
            text-align: end;
            font-size: 40px;
            border-radius: 7px;
            border-right-color: rgb(190, 190, 190);
        }

        .row input {
            border-radius: 10px;
            border: none;
            font-size: 20px;
            color: white;
            background-color: rgb(83, 83, 82);
            margin: 4px;
            height: 40px;
            width: 40px;
            border: 1px solid rgb(12, 12, 12);
            border-left-color: rgb(165, 160, 160);
            border-bottom-color: rgb(125, 119, 119);
            box-shadow: 0px 0px 3px 1px rgb(33, 32, 32);
            cursor: pointer;
        }

        .row .key {
            background-color: rgb(175, 33, 33);
        }

        .row .key:hover {
            background-color: rgb(224, 62, 62);
        }

        .row .eql {
            background-color: rgb(4, 113, 4);
        }

        .row .eql:hover {
            background-color: rgb(17, 131, 17);
        }

        .row input:hover {
            background-color: rgb(97, 97, 95);
        }
    </style>
</head>

<body>
    <div class="calc">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="input">
                <div class="head">
                    <label for="inp">Rabuyo</label>
                    <div class="mirror"></div>
                </div>
                <input type="text" id="inp" name="display">
            </div>
        
            <div class="row">
                <input type="button" class="key" value="C" name="clear" onclick="display.value = '' ">
                <input type="button" class="key" value="&leftarrow;" name="del" onclick="display.value = display.value.toString().slice(0,-1)">
                <input type="button" value="%" name="mod" onclick="display.value +='%'">
                <input type="button" value="/" name="/" onclick="display.value +='/'">

            </div>
            <div class="row">
                <input type="button" value="7" name="7" onclick="display.value+='7'">
                <input type="button" value="8" name="8" onclick="display.value+='8'">
                <input type="button" value="9" name="9" onclick="display.value+='9'">
                <input type="button" value="*" name="x" onclick="display.value+='*'">

            </div>
            <div class="row">
                <input type="button" value="4" name="4" onclick="display.value+='4'">
                <input type="button" value="5" name="5" onclick="display.value+='5'">
                <input type="button" value="6" name="6" onclick="display.value+='6'">
                <input type="button" value="&minus;" name="-" onclick="display.value+='-'">

            </div>
            <div class="row">
                <input type="button" value="1" name="1" onclick="display.value +='1'">
                <input type="button" value="2" name="2" onclick="display.value +='2'">
                <input type="button" value="3" name="3" onclick="display.value +='3'">
                <input type="button" value="+" name="+" onclick="display.value +='+'">

            </div>
            <div class="row">
                <input type="button" value="0" name="0" onclick="display.value +='0'">
                <input type="button" value="00" name="00" onclick="display.value +='00'">
                <input type="button" value="." name="." onclick="display.value +='.'">
                <input type="button" class="eql" value="=" name="=" onclick="display.value = eval(display.value)">

            </div>
            
                <div class="end">
                    
                </div>
            
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST['display'])) {
            $result = eval('return ' . $_POST['display'] . ';');
            echo '<div class="result">Result: ' . $result . '</div>';
        }
    }
    ?>
</body>

</html>
