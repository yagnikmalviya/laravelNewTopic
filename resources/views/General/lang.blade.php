@component('Admin.subContentComponent')
    @slot('title') Change Language @endslot
    @slot('subTitle') Change Language @endslot
    @slot('content')
        <div class="d-flex flex-wrap justify-content-between">
            <h1>{{ __('messages.title') }}</h1>
        </div>
        <div class="row col-12 mt-4 align-items-center">
            <strong>Select Language: </strong>
            <div class="col-4">
                <select class="form-control changeLang">
                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                    <option value="hindi" {{ session()->get('locale') == 'hindi' ? 'selected' : '' }}>Hindi</option>
                    <option value="guj" {{ session()->get('locale') == 'guj' ? 'selected' : '' }}>Gujrati</option>
                </select>
            </div>
        </div>
    @endslot
    @slot('script')
        <script>
            var url = "{{ route('languageChange') }}";
            $(".changeLang").change(function(){
                window.location.href = url + "?lang="+ $(this).val();
            });
        </script>
    @endslot
@endcomponent
