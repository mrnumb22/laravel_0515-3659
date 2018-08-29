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
            text-transform: uppercase;
        }

        #tableList tbody tr td{
            font-size: 22px;
        }

        #tableList tbody tr td a{
            font-size: 22px;
            text-transform: none;
            text-decoration: none;
            color: black;
        }

        </style>
    </head>
    <body>

        <div class="wrapper">

            <div class="top">

                <p> 💑👀💖 MY CRUSHES 💋🤩💦</p> 
                
                <button type="button" id="button1" onClick="window.location.href='{{ route('crushes.create') }}'"> 👫 ADD NEW CRUSH 🤞</button> 

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
                                <td style="text-align: center;">
                                    <a href="{{ route('crushes.id.show', array('id'=>$crush->id))}}" style="text-decoration: none; font-weight: bold;" title="SHOW"> 💑 </a> &nbsp; |  &nbsp;
                                    <a href="{{ route('crushes.id.edit', array('id'=>$crush->id))}}" style="text-decoration: none; font-weight: bold;" title="EDIT"> 🌟 </a> &nbsp; |  &nbsp;
                                    <a href="{{ route('crushes.id.destroy', array('id'=>$crush->id))}}" style="text-decoration: none; font-weight: bold;" title="DELETE"> ❌ </a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        

        </div>

    </body>
</html>

