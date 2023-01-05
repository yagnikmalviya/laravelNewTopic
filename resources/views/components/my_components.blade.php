<!DOCTYPE html>
<html>
<head>
    <title>How to create reusable blade components in Laravel - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css" />
</head>
<body>

<div class="container">
    <h3>How to create reusable blade components in Laravel - ItSolutionStuff.com</h3>

        <?php

            $mainLabel = 'components.card';
            $data = [
                [
                    'label' => 'Enter Your Name',
                    'class' => '',
                    'id' => '',
                    'type' => 'text',
                    'name' => 'name',
                    'placeholder' => 'Enter your name',
                ],
                [
                    'label' => 'Enter Your Email',
                    'class' => '',
                    'id' => '',
                    'type' => 'email',
                    'name' => 'email',
                    'placeholder' => 'Enter your email',
                ],
                [
                    'label' => 'Enter Your password',
                    'class' => '',
                    'id' => '',
                    'type' => 'password',
                    'name' => 'password',
                    'placeholder' => 'Enter your password',
                ],
                [
                    'label' => 'Enter Your city',
                    'class' => '',
                    'id' => '',
                    'type' => 'text',
                    'name' => 'city',
                    'placeholder' => 'Enter your city',
                ],
                [
                    'label' => 'Enter Your Taluko',
                    'class' => '',
                    'id' => '',
                    'type' => 'text',
                    'name' => 'taluko',
                    'placeholder' => 'Enter your Taluko',
                ],
                [
                    'label' => 'Enter Your District',
                    'class' => '',
                    'id' => '',
                    'type' => 'text',
                    'name' => 'district',
                    'placeholder' => 'Enter your district',
                ],
            ]
        ?>


        <form action="#" method="POST" onsubmit="return false;" name="form" >
            @foreach ($data as $dataKey => $dataValue)
                @component($mainLabel)
                    @foreach ( $dataValue as $fieldKey => $fieldValue)
                        @dump($fieldKey , $fieldValue)
                        @slot($fieldKey)
                            {{$fieldValue}}
                        @endslot
                    @endforeach
                @endcomponent
            @endforeach
            <button class="btn btn-success" type="submit" >Success</button>
        </form>


        {{-- DEMO EXAMPLE --}}

        {{-- @component('components.card')
            @slot('label')
                Enter Your Name
            @endslot

            @slot('class')
                Enter Your Name
            @endslot

            @slot('id')
                Enter Your Name
            @endslot

            @slot('type')
                text
            @endslot

            @slot('name')
                name
            @endslot

            @slot('placeholder')
                Enter Your Name
            @endslot
        @endcomponent --}}

</div>

</body>
</html>
