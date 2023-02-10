<?php
  $data = [
      [
          'label' => __('messages.enter_your').' '.__('messages.name'),
          'class' => '',
          'id' => '',
          'type' => 'text',
          'name' => 'name',
          'placeholder' =>  __('messages.enter_your').' '.__('messages.name'),
      ],
      [
          'label' => __('messages.enter_your').' '.__('messages.email'),
          'class' => '',
          'id' => '',
          'type' => 'email',
          'name' => 'email',
          'placeholder' => __('messages.enter_your').' '.__('messages.email'),
      ],
      [
          'label' => __('messages.enter_your').' '.__('messages.password'),
          'class' => '',
          'id' => '',
          'type' => 'password',
          'name' => 'password',
          'placeholder' => __('messages.enter_your').' '.__('messages.password'),
      ],
      [
          'label' => __('messages.enter_your').' '.__('messages.city'),
          'class' => '',
          'id' => '',
          'type' => 'text',
          'name' => 'city',
          'placeholder' => __('messages.enter_your').' '.__('messages.city'),
      ],
      [
          'label' => __('messages.enter_your').' '.__('messages.taluka'),
          'class' => '',
          'id' => '',
          'type' => 'text',
          'name' => 'taluko',
          'placeholder' => __('messages.enter_your').' '.__('messages.taluka'),
      ],
      [
          'label' => __('messages.enter_your').' '.__('messages.district'),
          'class' => '',
          'id' => '',
          'type' => 'text',
          'name' => 'district',
          'placeholder' => __('messages.enter_your').' '.__('messages.district'),
      ],
  ]
?>

@component('Admin.subContentComponent')
    @slot('title') {{__('messages.component')}} @endslot
    @slot('subTitle') {{__('messages.dynamic_form_design')}} @endslot
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
                <button class="btn btn-success" type="submit" >{{__('messages.success')}}</button>
            </form>
        </div>
    @endslot
    {{-- Script --}}
    @slot('script')

    @endslot
@endcomponent
