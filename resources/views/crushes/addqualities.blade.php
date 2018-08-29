<!doctype html>
<html>
    <head>
        <title>ADD QUALITIES - CRUSHES || CRUD @ LARAVEL</title>
        <style>
        body{
            width: 100%;
            margin: 0;
            padding: 0;
            font-family: Roboto Condensed;
        }
        .wrapper{
            border-left: 4px solid black;
            border-right: 4px solid black;
            border-bottom: 4px solid black;
            width: 60%;
            margin: 0 auto 0 auto;
            height: 450px;
            margin-top: 50px;
            border-radius: 10px;
        }

        .top{
            height: 100px;
            width: 100%;
            background-color: black;
            text-align: center;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            padding: 1px;
        }

        .top p{
            text-align: center;
            color: white;
            font-size: 70px;
            font-weight: bold;
            width: 100%;
            margin: 0;
            font-family: Roboto Condensed;
            float: left; 
        }

        .content{
            text-align: center;
        }

        .addqualities_button1{
            border: 0;
            width: 400px;
            height: 50px;
            font-size: 30px;
            font-family: Roboto Condensed;
            font-weight: bold;
            color: white;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 50px;
            background-color: green;
        }

        .addqualities_button2{
            border: 0;
            width: 400px;
            height: 50px;
            font-size: 30px;
            font-family: Roboto Condensed;
            font-weight: bold;
            color: white;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 50px;
            background-color: red;
            margin-left: 20px;
        }

        .textfield{
            width: 500px;
            height: 40px;
            font-size: 22px;
            margin-top: 100px;
            background-color: white;
            color: black;
            padding-left: 3px;
            text-align: center;
        }

        </style>
    </head>
    <body>
    <div class="wrapper">

        <div class="top">
            <p> 😍💁‍ NEW QUALITIES 🙋‍😍 </p>
        </div>

            <div class="content">
                <form action="{{ route('crushes.id.store', array('id'=>$crush->id)) }}" method="POST" autocomplete="off">

                    {{ csrf_field() }}

                        <input type="text" name="crush_quality" class="textfield" autofocus/>

                    <br>

                        <input type="submit" value="😘 ADD TO MY QUALITIES 😍" class="addqualities_button1" name="addCrushQuality">

                        <input type="button" value="😱 CANCEL ME SENPAI 😢" class="addqualities_button2" name="cancelAddQualities"  onClick="window.location.href='{{ route('crushes.id.show', array('id'=>$crush->id))}}'">


                </form>
            </div>
        </div>
    </body>
</html>



heheheheh