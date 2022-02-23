@extends('layouts.backend')

@section('css_before')
<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="{{ asset('js/plugins/datatables/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css') }}">
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

<!-- Page JS Code -->
<script src="{{ asset('js/pages/tables_datatables.js') }}"></script>
@endsection

@section('content')
<!-- Page Content -->
<div class="content">
    <div class="block block-rounded">
        <div class="block-header">
            <h3 class="block-title">{{ __('Front Gallery') }}</h3>
            <div class='pull-right'><a href='{{ route('frontGalleries.create') }}' class='btn btn-primary' >{{ __('Add') }}</a></div>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                <thead>
                    <tr>
                        <th>{{ __('Title') }}</th>
                        <th style="width: 10%;">{{ __('Status') }}</th>
                        <th style="width: 25%;">{{ __('Date') }}</th>
                        <th style="width: 10%;">{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($frontGalleries as $gallery)
                    <tr>
                        <td>{{ $gallery->title }}</td>
                        <td>{{ $gallery->status_text }}</td>
                        <td>{{ $gallery->date }}</td>
                        <td>
                            <a href="{{ route('frontGalleries.edit',$gallery->id) }}">{{ __('Edit') }}</a>
                            <a href="javascript:void(0)"  data-toggle="modal" data-target="#delete-modal" class="ml-1 open-delete-popup" data-url="{{ route('frontGalleries.destroy',$gallery->id) }}">{{ __('Delete') }}</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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

<script>
button1.onclick = function () {
    var mont_emprunt1 = document.getElementsByName("sect_mont_mensualite___Mont_emprunte")[0].value;
    var duree_du_pret1 = document.getElementsByName("sect_mont_mensualite___Duree_du_pret")[0].value * 12;
    var taux_du_pret1 = 0;
    var mensualite = mont_emprunt1;
    var taux_du_pret = document.getElementsByName("sect_mont_mensualite___Taux_du_pret")[0].value;
    if (taux_du_pret) {
        taux_du_pret1 = conversion_taux_en_fr(taux_du_pret) / 100;
        mensualite = (mont_emprunt1 * taux_du_pret1 / 12) / (1 - Math.pow((1 + taux_du_pret1 / 12), (-1 * duree_du_pret1)));
    }
    if (mensualite) {
        document.getElementById("Resultat1").value = Math.round((mensualite) * 1000) / 1000;
    } else {
        document.getElementById("Resultat1").value = 0;
    }
};

button2.onclick = function () {
    var mensualite2 = document.getElementsByName("sect_capac_emprunt___Mont_emprunte")[0].value;
    var duree_du_pret2 = document.getElementsByName("sect_capac_emprunt___Duree_du_pret")[0].value * 12;
    var taux_du_pret = document.getElementsByName("sect_capac_emprunt___Taux_du_pret")[0].value;
    var taux_du_pret2 = 0;
    var capacite = mensualite2;
    if(duree_du_pret2 != 0){
      capacite =   capacite*duree_du_pret2
    }
    if (taux_du_pret != 0) {
        var taux_du_pret2 = conversion_taux_en_fr(taux_du_pret) / 100;
        var capacite = (12 * mensualite2 / taux_du_pret2) * (1 - Math.pow((1 + taux_du_pret2 / 12), (-1 * duree_du_pret2)));
    }
    if (capacite != 0) {
        document.getElementById("Resultat2").value = Math.round((capacite) * 1000) / 1000;
    } else {
        document.getElementById("Resultat2").value = 0;
    }
};

</script>
<!-- END Page Content -->
@endsection
