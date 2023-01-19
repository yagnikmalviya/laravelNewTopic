@component('Admin.subContentComponent')
    @slot('title') Xlsx Table @endslot
    @slot('subTitle') Import Export Excel and CSV File Tutorial @endslot
    {{-- Main Content --}}
    @slot('content')
        <div class="row col-12 justify-content-between align-items-end my-4 m-0">
            <form action="{{ route('xlsxImport') }}" method="POST" class="m-0" enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                        <input type="file" name="file" class="custom-file-input" id="inputGroupFile04">
                        <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                    <div class="input-group-append">
                        <button class="btn btn-outline-success" >Import Xlsx</button>
                    </div>
                    </div>
            </form>
            <a href="{{ route('pdfExport') }}"><button class="btn btn-outline-danger">Export Pdf</button></a>
            <a href="{{ route('xlsxExport') }}"><button class="btn btn-outline-warning">Export Xlsx</button></a>
        </div>
        <div class="col-12">
            <table class="table table-bordered data-table my-3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile No.</th>
                        <th>City</th>
                        <th>District</th>
                        <th>taluka</th>
                        <th>Address</th>
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
