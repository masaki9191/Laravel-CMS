<div class='row'>
    <div class='col-md-8'>
        <div class="form-group">
            <label for="title">{{ __('Title') }}</label>
            <input type="text" class="form-control" name="title" value='{{ $gallery->title ?? '' }}'>
        </div>
        <div class="form-group">
            <label for="status">{{ __('Status') }}</label>
            <select class="form-control" name="status">
                <option value="1" {{ $gallery->status == '1' ? 'selected':'' }}>Activate</option>
                <option value="0" {{ $gallery->status == '0' ? 'selected':'' }}>Deactivate</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">{{ __('Description') }}</label>
            <textarea id='js-ckeditor5-classic' name="description">{{ $gallery->description ?? '' }}</textarea>
        </div>
        <div class="form-group">
            <label for="date">{{ __('Date') }}</label>
            <input type="text" class="js-flatpickr form-control bg-white" name="date"  placeholder="Y-m-d" value="{{ $gallery->date ?? '' }}">
        </div>
        <div class="form-group">
            <label>{{ __('Files') }}</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input js-custom-file-input-enabled" data-toggle="custom-file-input" id="example-file-input-multiple-custom" name="file">
                <label class="custom-file-label" for="example-file-input-multiple-custom">Choose files</label>
            </div>
            @if ($gallery->model->count())
            <a href="{{ $gallery->model[0]->media_url }}" target="_blank">{{ __('Click here') }}</a>
            @endif
        </div>
    </div>

    <script>
        button2.onclick = function () {
            var mensualite2 = document.getElementsByName("sect_capac_emprunt___Mont_emprunte")[0].value;
            var duree_du_pret2 = document.getElementsByName("sect_capac_emprunt___Duree_du_pret")[0].value * 12;
            var taux_du_pret = document.getElementsByName("sect_capac_emprunt___Taux_du_pret")[0].value;
            var capacite = 0;
            if (taux_du_pret) {
                var taux_du_pret2 = conversion_taux_en_fr(taux_du_pret) / 100;
                capacite = (12 * mensualite2 / taux_du_pret2) * (1 - Math.pow((1 + taux_du_pret2 / 12), (-1 * duree_du_pret2)));
            }
            if (capacite) {
                document.getElementById("Resultat2").value = Math.round((capacite) * 1000) / 1000;
            } else {
                document.getElementById("Resultat2").value = 0;
            }
        };

        button1.onclick = function () {
            var mont_emprunt1 = document.getElementsByName("sect_mont_mensualite___Mont_emprunte")[0].value;
            var duree_du_pret1 = document.getElementsByName("sect_mont_mensualite___Duree_du_pret")[0].value * 12;
            var taux_du_pret = document.getElementsByName("sect_mont_mensualite___Taux_du_pret")[0].value;
            var taux_du_pret1 = 0;
            var mensualite = 0;
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


    </script>
</div>