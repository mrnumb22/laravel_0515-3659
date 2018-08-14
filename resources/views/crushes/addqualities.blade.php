<!doctype html>
<html>
    <head>
        <title>ADD QUALITIES - CRUSHES || CRUD @ LARAVEL</title>
    </head>
    <body style="font-family: Calibri; text-align: center;">


        <form action="{{ route('crushes.id.store', array('id'=>$crush->id)) }}" method="POST">

            {{ csrf_field() }}

                <label> QUALITIES:  </label>
                <input type="text" name="crush_quality" />
            <br>

                <input type="submit" value="ADD" name="addCrushQuality">

        </form>

    </body>
</html>