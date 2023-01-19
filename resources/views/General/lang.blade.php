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
                    <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>France</option>
                    <option value="sp" {{ session()->get('locale') == 'sp' ? 'selected' : '' }}>Spanish</option>
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
