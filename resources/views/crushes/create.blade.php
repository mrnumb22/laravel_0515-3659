<!doctype html>
<html>
    <head>
        <title>{{$tab_title}}}</title>

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
            text-align: center;
            text-transform: capitalize;
        }

        .formfield1{
            width: 48.5%;
            text-align: right;
            padding: 10px;
            height: 450px;
            float: left;
        }

        .formfield2{
            width: 48.5%;
            padding: 10px;
            height: 450px;
            float: left;
            margin: 0 auto 0 auto;        
            text-align: center;    
        }

        .create_button{
            border: 0;
            width: 400px;
            height: 70px;
            font-size: 30px;
            font-family: Roboto Condensed;
            font-weight: bold;
            color: white;
            cursor: pointer;
            margin-top: 170px;
            background-color: green;
        }

        </style>
    </head>
    <body>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="wrapper">

            <div class="top">
                <p> 😍💖 {{ $title }} 💖😍 </p> <button type="button" id="button1" onClick="window.location.href='{{ route('crushes.index') }}'"> 😱 CANCEL ME SENPAI 😢</button> 
            </div>

            <div class="content">

                    <form action="{{ $action }}" method="POST" autocomplete="off">

                        {{ csrf_field() }}
                        <div class="formfield1">
                        <br>
                        <br>
                        <br>
                            <label class="textlabel"> FIRST NAME: </label>
                            <input type="text" name="first_name" class="textfield" value="@if(old('first_name')){{old('first_name')}}@else{{$crush->first_name}}@endif" autofocus>
                        <br><br>
                        <br>
                            <label class="textlabel"> LAST NAME: </label>
                                <input type="text" name="last_name" class="textfield" value="@if(old('last_name')){{old('last_name')}}@else{{$crush->last_name}}@endif" />
                        <br><br>
                        <br>
                            <label class="textlabel"> FACEBOOK LINK: </label>
                                <input type="text" name="fb_profile_link" class="textfield" value="@if(old('fb_profile_link')){{ old('fb_profile_link') }}@else{{$crush->fb_profile_link}}@endif" />
                        <br><br>
                        <br>
                            <label class="textlabel"> CONTACT NUMBER: </label>
                                <input type="text" name="contact_number" class="textfield" maxlength="11" value="@if(old('contact_number')){{old('contact_number')}}@else{{ $crush->contact_number}}@endif">
                        <br>
                        </div>
                        
                        <div class="formfield2">
                            <button type="submit" class="create_button"> {{ $submit_text }} </button>
                        </div>
                        


                    </form>

            </div>
        </div>
        

    </body>
</html>