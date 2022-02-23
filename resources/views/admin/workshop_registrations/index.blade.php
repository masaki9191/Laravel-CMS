@extends('layouts.backend')

@section('css_before')
<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="{{ asset('js/plugins/datatables/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('js/plugins/sweetalert2/sweetalert2.min.css') }}">
@endsection



@section('content')
<!-- Page Content -->
<div class="content">
    <div class="block block-rounded">
        <div class="block-header">
            <div class='col-md-12'>
                <div class='row'>
                    <div class='col-md-4 filter'>
                        <select class='form-control filtter mb-2'>
                            <option value='all'>全者</option>
                            <option value='7'>請求書発行済</option>
                            <option value='1'>未振込</option>
                            <option value='2'>振込済</option>
                            <option value='3'>受講票未発行</option>
                            <option value='4'>受講票発行済</option>
                            <option value='5'>未修了者</option>
                            <option value='6'>修了者</option>
                        </select>

                    </div>
                    <div class='col-md-4 text-center'>
                        <h3 class="block-title">{{ __('Student Registration') }}</h3>
                    </div>
                    @role('super-admin')
                    <div class='col-md-4 text-right'>
                        <select class='form-control mb-2 multiple-action-val' style="display: none">
                            <option value='1'>Send voucher to selected selected</option>
                            <option value='2'>Send invoice to selected selected</option>
                            <option value='3'>Delete selected applicants</option>
                        </select>
                        <div>
                            <button type='button' class="btn btn-primary multiple-action" style="display: none">{{ __('Send voucher/send invoice/ delete') }}</button>
                        </div>
                        <div>
                            <a href='{{ route('workshopRegistration.create',['kensyu_id'=>request()->get('kensyu_id')]) }}' class='btn btn-primary' >{{ __('Add student') }}</a>
                        </div>

                    </div>
                    @endrole
                </div>
            </div>
        </div>

        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->

            @include('admin.workshop_registrations.list')
            <!--            <div class='row'>
                            <div class='col-md-12 text-right mt-5'>
                                <button type='button' class="btn btn-primary multiple-action" style="display: none">{{ __('Send voucher/send invoice/ delete') }}</button>
                            </div>
                        </div>-->

        </div>
    </div>
    <!-- END Dynamic Table with Export Buttons -->
</div>

<div class="modal fade" id="delete-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure? you want to delete it</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button"  data-csrf_token="{{ csrf_token() }}" class="btn btn-primary delete-record">Ok</button>
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->
@endsection


@section('js_after')
<!-- Page JS Plugins -->
<script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/buttons/buttons.print.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/buttons/buttons.html5.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/buttons/buttons.flash.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/buttons/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

<!-- Page JS Code -->
<script src="{{ asset('js/pages/tables_datatables.js') }}"></script>
<script>
var kensyu_id = "{{ request()->get('kensyu_id') }}"
var url = "{{ route('workshopRegistration.index') }}"
jQuery(function ($) {
    One.helpers(['table-tools-checkable', 'table-tools-sections']);
    $('body').on('change', '.filtter', function () {
        var status = $(this).val();
        $.ajax({
            type: 'GET',
            url: url,
            data: {
                kensyu_id: kensyu_id,
                status: status,
            },
            success: function (response) {
                $('.block-content-full').html(response);
                pageTablesDatatables.init();
            }
        });
    });
    $('.filter').append($(".dataTables_filter"));


    $('body').on('change', '.custom-control-input', function () {
        var SlectedList = [];
        $(".custom-control-input:checked").each(function () {
            SlectedList.push($(this).val());
        });
        if (SlectedList.length) {
            $('.multiple-action, .multiple-action-val').show();
        } else {
            $('.multiple-action, .multiple-action-val').hide();
        }
    });

    $('body').on('click', '.multiple-action', function () {

        if ($('.multiple-action-val').val() == 3) {
            var message = "You want to delete selected records";
            var method = "delete";
            var route = "{{route('workshopRegistration.multipleDelete') }}"
            var buttonText = "Yes, delete it!";
        }
        if ($('.multiple-action-val').val() == 1) {
            var message = "You want to send voucher to selected  records";
            var method = "put";
            var route = "{{route('workshopRegistration.statusUpdate',8) }}"
            var buttonText = "Yes, send it!";
        }
        if ($('.multiple-action-val').val() == 2) {
            var message = "You want to send invoice to selected  records";
            var method = "put";
            var route = "{{route('workshopRegistration.statusUpdate',9) }}"
            var buttonText = "Yes, send it!";
        }

        Swal.fire({
            title: "Are you sure?",
            text: message,
            icon: "warning",
            showCancelButton: !0,
            customClass: {confirmButton: "btn btn-success m-1", cancelButton: "btn btn-secondary m-1"},
            confirmButtonText: buttonText,
            html: !1,
            preConfirm: function () {
                var SlectedList = [];
                $(".custom-control-input:checked").each(function () {
                    SlectedList.push($(this).val());
                });
                $.ajax({
                    type: method,
                    url: route,
                    data: {
                        '_token': "{{ csrf_token() }}",
                        'ids': SlectedList
                    },
                    success: function (response) {
                        if (response.status) {
                            if (response.redirect) {
                                location.reload(true);
                            }
                        } else {
                            Swal.fire("Error", response.message, "error")
                        }
                    }
                });
            },
        }).then(function (e) {
            //e.value ? Swal.fire("Deleted!", "Record deleted succefully", "success") : "cancel" === e.dismiss && Swal.fire("Cancelled", "Delete cancelled", "error");
        });
    });

    $('body').on('click', '.update-status', function () {
        var status = $(this).data('status');
        var message = '';
        var route = $(this).data('url');
        var id = $(this).data('id');
        if (status == 2) {
            var message = "You want to register payment";
        }
        if (status == 6) {
            var message = "You want to mark the attendance";
        }

        Swal.fire({
            title: "Are you sure?",
            text: message,
            icon: "success",
            showCancelButton: !0,
            customClass: {confirmButton: "btn btn-success m-1", cancelButton: "btn btn-secondary m-1"},
            confirmButtonText: "Yes!",
            html: !1,
            preConfirm: function () {
                $.ajax({
                    type: 'put',
                    url: route,
                    data: {
                        '_token': "{{ csrf_token() }}",
                        'ids': [id]
                    },
                    success: function (response) {
                        if (response.status) {
                            if (response.redirect) {
                                location.reload(true);
                            }
                        } else {
                            Swal.fire("Error", response.message, "error")
                        }
                    }
                });
            },
        }).then(function (e) {
            //e.value ? Swal.fire("Deleted!", "Record deleted succefully", "success") : "cancel" === e.dismiss && Swal.fire("Cancelled", "Delete cancelled", "error");
        });
    });

})
</script>



@endsection
