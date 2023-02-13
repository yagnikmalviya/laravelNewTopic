@component('Admin.subContentComponent')
    @slot('title'){{ __('messages.dependent') }}@endslot
    @slot('subTitle') {{ __('messages.country').', '.__('messages.state').', '.__('messages.city') }} @endslot
    @slot('content')
    <div class="row col-12 justify-content-between align-items-end my-4 m-0">
        <div class="col-4">
            {{-- @dump($countries) --}}
            <select class="form-control" id="country">
                <option value="">{{ __('messages.select').' '.__('messages.country').'...' }}</option>
                @foreach ($countries as $countrie)
                    <option value="{{$countrie['id']}}">{{'+'.$countrie['phonecode'].' '.$countrie['name']}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-4">
            <select class="form-control" id="state" disabled></select>
        </div>
        <div class="col-4">
            <select class="form-control" id="city" disabled></select>
        </div>
    </div>
    @endslot
    @slot('script')
        <script>
            $('#country').on('change', function () {
                var country_id = this.value;
                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var url = "{{ route('state',['id'=>':ids']) }}"
                url = url.replace(':ids',country_id);
                $.ajax({
                    type: 'GET',
                    url: url,
                    processData: false,
                    contentType: false,
                    dataType: 'json',
                    dataSrc: "",
                    success: function(data)
                    {
                       var states = '<option value="">{{ __('messages.select').' '.__('messages.state').'...' }}</option>';
                       $("#state").empty();
                       $("#city").empty();
                       var getData = data.state;
                       Object.keys(getData).forEach(key => {
                            console.log(key, getData[key]);
                            states += '<option value='+getData[key].id+'>'+getData[key].name+'</option>'
                       });
                       $("#state").append(states);
                       $("#state").prop('disabled', false);
                    }
                });
            })

            $('#state').on('change', function () {
                var state_id = this.value;
                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var url = "{{ route('city',['id'=>':ids']) }}"
                url = url.replace(':ids',state_id);
                $.ajax({
                    type: 'GET',
                    url: url,
                    processData: false,
                    contentType: false,
                    dataType: 'json',
                    dataSrc: "",
                    success: function(data)
                    {
                       var cities = '<option value="">{{ __('messages.select').' '.__('messages.city').'...' }}</option>';
                       $("#city").empty();
                       var getData = data.cities;
                       Object.keys(getData).forEach(key => {
                            console.log(key, getData[key]);
                            cities += '<option value='+getData[key].id+'>'+getData[key].name+'</option>'
                       });
                       $("#city").append(cities);
                       $("#city").prop('disabled', false);
                    }
                });
            })
        </script>
    @endslot
@endcomponent
