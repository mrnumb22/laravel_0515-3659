<!doctype html>
<html>
    <head>
        <title>SHOWING SENPAI || CRUD @ LARAVEL</title>
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
            width: 90%;
            margin: 0 auto 0 auto;
            height: 600px;
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
            text-align: left;
            color: white;
            font-size: 70px;
            font-weight: bold;
            padding-left: 50px;
            width: 60%;
            margin: 0;
            font-family: Roboto Condensed;
            float: left; 
        }

        #button1{
            height: 50px;
            width: 350px;
            border: 0;
            font-family: Roboto Condensed;
            font-size: 25px;
            color: white;
            cursor: pointer;
            float: right;
            margin-top: 23px;
            margin-right: 50px;
            border-radius: 5px;
            font-weight: bold;
            background-color: red;
        }

        .textlabel{
            font-size: 22px;
            font-weight: bold;
            font-family: Roboto Condensed;
        }

        .textfield{
            width: 500px;
            height: 40px;
            font-size: 22px;
            margin-right: 30px;
            background-color: white;
            color: black;
            padding-left: 3px;
        }

        .formfield1{
            width: 42%;
            text-align: right;
            padding: 10px;
            height: 450px;
            float: left;
        }

        .formfield2{
            width: 30%;
            padding: 10px;
            height: 450px;
            float: left;
            margin: 0 auto 0 auto;   
            text-align: center;
        }

        .formfield2 label{
            font-size: 28px;
            font-weight: bold;
            font-family: Roboto Condensed;
        }
        
        .formfield2 table{
            border: 1;
            margin: 0 auto 0 auto;
            font-size: 25px;            
        }

        .formfield2 table tr td a{
            text-decoration: none;           
        }

        .formfield3{
            width: 23%;
            padding: 10px;
            height: 450px;
            float: left;
            margin: 0 auto 0 auto;   
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
            margin-top: 190px;
            background-color: green;
        }

        </style>
    </head>
    <body>

        <div class="wrapper">

            <div class="top">
                <p> 😍💖 SHOW ME MY SENPAI 💖😍 </p> <button type="button" id="button1" onClick="window.location.href='{{ route('crushes.index') }}'"> 👋 GO BACK 👋 </button> 
            </div>

        
            <form action="" method="POST" autocomplete="off">

                {{ csrf_field() }}
                <div class="formfield1">
                    <br>
                    <br>
                    <br>
                        <label class="textlabel"> FIRST NAME: </label>
                        <input type="text" name="first_name" class="textfield" value="{{ $crush->first_name }}" disabled>
                    <br><br>
                    <br>
                        <label class="textlabel"> LAST NAME: </label>
                            <input type="text" name="last_name" class="textfield" value="{{ $crush->last_name }}" disabled>
                    <br><br>
                    <br>
                        <label class="textlabel"> FACEBOOK LINK: </label>
                            <input type="text" name="fb_profile_link" class="textfield" value="{{ $crush->fb_profile_link }}" disabled>
                    <br><br>
                    <br>
                        <label class="textlabel"> CONTACT NUMBER: </label>
                            <input type="text" name="contact_number" class="textfield" value="{{ $crush->contact_number }}" disabled>
                    <br>
                </div>

                <div class="formfield2">
                <br><br>
                    <label> QUALITIES </label>
                <br>
                    <table>
                        @foreach($crush -> qualities as $quality)
                            <tr>
                                <td>{{ $loop -> iteration }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $quality -> personQuality }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{ route('crushes.id.destroy', array('id'=>$quality->id))}}" title="DELETE CRUSH QUALITY">❌</a></td>
                            </tr>
                        @endforeach 
                    </table>
                    <br>

                </div>

                <div class="formfield3">
                    <input type="button" value="😘 ADD MY QUALITIES 😍" class="addqualities_button1" name="addCrushQuality" onClick="window.location.href='{{ route('crushes.id.addqualities', array('id'=>$crush->id))}}'">
                </div>
        
             </form>
        </div>

    </body>
</html>