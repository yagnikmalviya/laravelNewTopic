@component('Admin.subContentComponent')
    @slot('title'){{ __('messages.excel') }} {{ __('messages.table') }}@endslot
    @slot('subTitle') {{ __('messages.import').' '. __('messages.export').' '.__('messages.excel').' '. __('messages.and').' '.__('messages.csv').' '.__('messages.file').' '.__('messages.tutorial') }} @endslot
    {{-- Main Content --}}
    @slot('content')
        <div class="row col-12 justify-content-between align-items-end my-4 m-0">
            <form action="{{ route('xlsxImport') }}" method="POST" class="m-0" enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                        <input type="file" name="file" class="custom-file-input" id="inputGroupFile04">
                        <label class="custom-file-label" for="inputGroupFile04">{{__('messages.import').' '.__('messages.file')}}</label>
                    <div class="input-group-append">
                        <button class="btn btn-outline-success" >{{__('messages.import').' '.__('messages.excel')}}</button>
                    </div>
                </div>
            </form>
            <a href="{{ route('pdfExport') }}"><button class="btn btn-outline-danger">{{__('messages.export').' '.__('messages.pdf')}}</button></a>
            <a href="{{ route('xlsxExport') }}"><button class="btn btn-outline-warning">{{__('messages.export').' '.__('messages.excel')}}</button></a>
        </div>
        <div class="col-12">
            <table class="table table-bordered data-table my-3">
                <thead>
                    <tr>
                        <th>{{ __('messages.no') }}</th>
                        <th>{{ __('messages.name') }}</th>
                        <th>{{ __('messages.email') }}</th>
                        <th>{{ __('messages.mobile_no') }}</th>
                        <th>{{ __('messages.city') }}</th>
                        <th>{{ __('messages.district') }}</th>
                        <th>{{ __('messages.taluka') }}</th>
                        <th>{{ __('messages.address') }}</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    @endslot
    {{-- Script --}}
    @slot('script')
        <script type="text/javascript">
            $(function () {
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('xlsxTable') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'mobile', name: 'mobile'},
                    {data: 'city', name: 'city'},
                    {data: 'district', name: 'district'},
                    {data: 'taluka', name: 'taluka'},
                    {data: 'address', name: 'address'},
                ]
            });
            });
        </script>
    @endslot
@endcomponent
