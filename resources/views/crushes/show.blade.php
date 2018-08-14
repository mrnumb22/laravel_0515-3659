<!doctype html>
<html>
    <head>
        <title>SHOW - CRUSHES || CRUD @ LARAVEL</title>
    </head>
    <body style="font-family: Calibri; text-align: center;">


        <form action="" method="POST">

                <label> FIRST NAME: </label>
                <input type="text" name="first_name" value="{{ $crush->first_name }}" />
            <br>
            <br>
                <label> LAST NAME: </label>
                    <input type="text" name="last_name" value="{{ $crush->last_name }}" />
            <br>
            <br>
                <label> FB USERNAME: </label>
                    <input type="text" name="fb_profile_link" value="{{ $crush->fb_profile_link }}" />
            <br>
            <br>
                <label> CONTACT NUMBER: </label>
                    <input type="text" name="contact_number" value="{{ $crush->contact_number }}" />
            <br>
            <br>
            <br>

                <label> Qualities: </label>
            <br>
            <br>

            <table style="margin: 0 auto 0 auto;" border="1">
                @foreach($crush -> qualities as $quality)
                    <tr>
                        <td>{{ $loop -> iteration }} | {{ $quality -> personQuality }}</td>
                    </tr>
                @endforeach 
            </table>
        <br>
            <button type="button" onClick="window.location.href='{{ route('crushes.id.addqualities', array('id'=>$crush->id))}}'"> ADD QUALITIES </button>
            



        
        </form>

    </body>
</html>