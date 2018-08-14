<!doctype html>
<html>
    <head>
        <title>CRUSHES || CRUD @ LARAVEL</title>
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
        }

        #button1{
            margin-top: 25px;
            height: 50px;
            width: 280px;
            border: 0;
            font-family: Roboto Condensed;
            font-size: 25px;
            color: black;
            cursor: pointer;
        }

        #tableList{
            text-align: center;
            width: 99.9%;
            font-size: 17px;
            margin: 0 auto 0 auto;
        }

        #tableList thead{
            background-color: grey;
            font-weight: bold;
            color: white;
        }

        </style>
    </head>
    <body>

        <div class="wrapper">

            <div class="top">
            
                <button type="button" id="button1" onClick="window.location.href='{{ route('crushes.create') }}'"> ADD NEW CRUSHES</button>

            </div>
            <div class="content">
                <table id="tableList">
                    <thead>
                            <tr>
                                    <td width="250px">First Name</td>
                                    <td width="250px">Last Name</td>
                                    <td width="350px">FB Profile</td>
                                    <td width="150px">Contact Number</td>
                                    <td width="150px">ACTIONS</td>
                            </tr>
                    </thead>
            
                    <tbody>

                        @foreach($crushes as $crush)
                            <tr>
                                <td>{{$crush->first_name}}</td>
                                <td>{{$crush->last_name}}</td>
                            <td><a href="{{$crush->fb_profile_link}}" target="_blank">{{$crush->fb_profile_link}}</a></td>
                                <td>{{$crush->contact_number}}</td>
                                <td style="text-align: center;"><a href="{{ route('crushes.id.edit', array('id'=>$crush->id))}}" style="text-decoration: none; font-weight: bold;"> EDIT </a> | 
                                <a href="{{ route('crushes.id.destroy', array('id'=>$crush->id))}}" style="text-decoration: none; font-weight: bold;"> DELETE </a> | 
                                <a href="{{ route('crushes.id.show', array('id'=>$crush->id))}}" style="text-decoration: none; font-weight: bold;"> SHOW </a></td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        

        </div>

    </body>
</html>

