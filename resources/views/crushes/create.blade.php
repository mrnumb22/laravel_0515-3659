<!doctype html>
<html>
    <head>
        <title>NEW CRUSHES || CRUD @ LARAVEL</title>
    </head>
    <body style="font-family: Calibri; text-align: center;">

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ $action }}" method="POST">

            {{ csrf_field() }}

                <label> FIRST NAME: </label>
                <input type="text" name="first_name" value="@if (old('first_name')) {{ old('first_name') }} @else {{ $crush->first_name }} @endif">
            <br>
            <br>
                <label> LAST NAME: </label>
                    <input type="text" name="last_name" value="@if (old('last_name')) {{ old('last_name') }} @else {{ $crush->last_name }} @endif">
            <br>
            <br>
                <label> FB USERNAME: </label>
                    <input type="text" name="fb_profile_link" value="@if (old('fb_profile_link')) {{ old('fb_profile_link') }} @else {{ $crush->fb_profile_link }} @endif">
            <br>
            <br>
                <label> CONTACT NUMBER: </label>
                    <input type="text" name="contact_number" value="@if (old('contact_number')) {{ old('contact_number') }} @else {{ $crush->contact_number }} @endif">
            <br>
            <br>
            <br>

            <button type="submit"> {{ $submit_text }} </button>

            
        </form>

    </body>
</html>