<html>
    <head>
        <title> ARITHMETIC METHOD </title>
    </head>
    <body style="font-family: Calibri; font-style: capitalize;">

        @if($operator == "add")

        <h1> ADDITION </h1>

        <h3> addend: {{ $text1 }}</h3>
        <h3> adder: {{ $text2 }} </h3>
        <h3> sum: {{$text1 + $text2}}</h3>

        @elseif($operator == "sub")

        <h1> SUBTRACTION </h1>

        <h3> subtrahend: {{ $text1 }}</h3>
        <h3> minuend: {{ $text2 }} </h3>
        <h3> diiference: {{$text1 - $text2}}</h3>

        @elseif($operator == "mul")

        <h1> MULTIPLICATION </h1>

        <h3> multiplicand: {{ $text1 }}</h3>
        <h3> multiplier: {{ $text2 }} </h3>
        <h3> product: {{$text1 * $text2}}</h3>

        @elseif($operator == "div")

        <h1> DIVISION </h1>

        <h3> dividend: {{ $text1 }}</h3>
        <h3> divisor: {{ $text2 }} </h3>
        <h3> quotient: @if($text2 == 0)
                            "NOT ALLOWED"
                    @else
                            {{$text1 / $text2}}
                    @endif
        </h3>
        @endif
    </body>
</html>