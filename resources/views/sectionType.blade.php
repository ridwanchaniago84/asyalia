<!-- Judul & Sub Judul -->
<div class="container text-center mt-5 mb-3">
    <div class="col-lg-9 col-12 mx-auto">
        <h2 class="text-noto text-pink-2">CUSTOM YOUR TYPE {{ $id }}</h2>
        <p class="card-text text-muted text-center" style="letter-spacing: 1px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim admin- im veniam, quis nostrud exerci tation</p>
    </div>
</div>

<!-- Daftar Card -->
<div class="container mb-5">
    <ul class="checkboxImg row p-0 justify-content-center">
        @foreach ($types as $type)
        <li class="checkboxImg col-lg-3 col-md-6">
            <input type="checkbox" id="type_{{ $type->id }}" name="typeCheck" />
            <label for="type_{{ $type->id }}" class="border">
                <div class="rounded-top imgcheckbox" style="height:200px; width:100%; background-image: url('/img/{{ $type->gambar }}');background-position: top; background-repeat: no-repeat; background-size: cover;"></div>
                <div class="rounded text-dark text-center pt-2 pb-1">
                    <h6 class="text-muted">{{ $type->nama_produk }}</h6>
                    {{-- <p class="text-pink-2 mb-1">
                        Rp. 200.000
                    </p> --}}
                </div>
            </label>
        </li>
        @endforeach

    </ul>
</div>

<script>
    $('input[type="checkbox"]').on('change', function() {
        $('input[name="' + this.name + '"]').not(this).prop('checked', false);

        let elementBTN = document.querySelector('.btnNext');

        if(!$(this).is(':checked')) {
            elementBTN.setAttribute('disabled', '');
        }

        if ($(this).prop('checked')) {
            elementBTN.removeAttribute('disabled');
        }

    });

    $('.btnNext').click(function() {
        $.each($('input[name="typeCheck"]:checked'), function() {
            var typeId = $(this).val()
            $.ajax({
                url: '/color/' + typeId,
                type: 'get',
                data: {
                    _token: $('#token').val(),
                },
                success: function(data) {
                    $('#dataSec').html(data)
                    $('.nav-tabs .active').parent().next('li').find('a').removeClass('disabled').trigger('click')
                }
            });
        })
    });
</script>