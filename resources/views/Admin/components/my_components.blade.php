<?php
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

@component('Admin.subContentComponent')
    @slot('title') component @endslot
    @slot('subTitle') dynamic Form Design @endslot
    {{-- Main Content --}}
    @slot('content')

        <div class="col-lg-12">
            <form action="#" method="POST" onsubmit="return false;" name="form" >
                @foreach ($data as $dataKey => $dataValue)
                    @component('Admin.components.card')
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
        </div>

    @endslot
    {{-- Script --}}
    @slot('script')

    @endslot
@endcomponent


