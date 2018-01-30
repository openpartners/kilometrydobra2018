<?php /* Template Name: Pay */ ?>

<?php get_header(); ?>

  <div id="single">
    <div class="container">
        <form id="payment-form" action="<?php bloginfo('template_url'); ?>/neworder.php" method="post">
                <div class="row">
                    <div class="twelve columns">
                        <div class="radio-wrapper">
                            <input type="radio" name="price" value="22.00">
                            <div class="description">
                                <p>
                                    Wpłacam <strong>22zł</strong>,
                                </p>
                                <p>
                                    czyli
                                </p>
                                <p>
                                    <strong>0,5</strong> METRA DOBRA
                                </p>
                            </div>
                        </div>
                        <div class="radio-wrapper active">
                            <input type="radio" name="price" value="44.00" checked>
                            <div class="description">
                                <p>
                                    Wpłacam <strong>44zł</strong>,
                                </p>
                                <p>
                                    czyli
                                </p>
                                <p>
                                    <strong>1</strong> METR DOBRA
                                </p>
                            </div>
                        </div>
                        <div class="radio-wrapper">
                            <input type="radio" name="price" value="176.00">
                            <div class="description">
                                <p>
                                    Wpłacam <strong>176zł</strong>,
                                </p>
                                <p>
                                    czyli
                                </p>
                                <p>
                                    <strong>4</strong> METRY DOBRA
                                </p>
                            </div>
                        </div>
                        <div class="radio-wrapper">
                            <input type="radio" name="price" value="444.00">
                            <div class="description">
                                <p>
                                    Wpłacam <strong>444zł</strong>,
                                </p>
                                <p>
                                    czyli
                                </p>
                                <p>
                                    <strong>10</strong> METRÓW DOBRA
                                </p>
                            </div>
                        </div>
                        <div class="radio-wrapper">
                            <input type="radio" name="price" value="">
                            <div class="field">
                                <input id="customPrice" type="text" placeholder="Wpłacam inną kwotę...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="twelve columns">
                        <div class="field-wrapper field">
                            <input type="text" name="firstname" id="name" placeholder="Imię" required minlength="3" />
                        </div>
                        <div class="field-wrapper field">
                            <input type="text" name="lastname" id="surname" placeholder="Nazwisko" required minlength="3" />
                        </div>
                        <div class="field-wrapper field">
                            <input type="email" name="email" placeholder="E-mail" required />
                        </div>
                        <div class="field-wrapper field">
                            <input type="text" name="phone" id="phone" placeholder="Numer telefonu" pattern="[+0-9 ]+" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="twelve columns">
                        <div class="select-wrapper">
                            <select id="organizations" name="oid"></select>
                        </div>
                        <div class="checkbox-wrapper">
                            <label class="checkbox-label">
                                <input type="checkbox" id="anon" />
                                <span>Chcę wpłacić anonimowo</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row mt-10">
                    <div class="twelve columns">
                        <label class="checkbox-label">
                            <input type="checkbox" name="regulations" value="1" required>
                            <span>Oświadczam, że zapoznałem/am się z obowiązującym <a href="/regulamin" target="_blank"><span class="text-bold">regulaminem</span></a> korzystania z serwisu www.kilometrydobra.pl i akceptuję wszystkie jego postanowienia.</span>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="twelve columns">
                        <label class="checkbox-label">
                            <input type="checkbox" name="data-processing" value="1" required><span>Wyrażam zgodę na przetwarzanie danych osobowych na zasadach i w zakresie określonym w <a href="/polityka-prywatnosci" target="_blank"><span class="text-bold">Polityce prywatności</span></a> serwisu www.kilometrydobra.pl, stanowiącej załącznik nr 1 do jego regulaminu.</span>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="twelve columns">
                        <label class="checkbox-label">
                            <input type="checkbox" name="commercial-information" value="1"><span>Wyrażam zgodę na otrzymywanie od Polskiego Instytutu Filantropii informacji handlowych drogą elektroniczną w <span class="text-bold text-underline">rozumieniu Art. 2 pkt 2</span> Ustawy o świadczeniu usług drogą elektroniczną z dnia 18 lipca 2002 r. (Dz.U.2002 Nr 144, poz. 1204 z późn. zm.)</span>
                        </label>
                    </div>
                </div>
                <div id="payment-type" class="row hidden mt-50">
                    <div class="row mb-50">
                        <div class="twelve columns">
                            <div class="text-bold">
                                Wybierz sposób płatności
                            </div>
                        </div>
                    </div>
                    <div class="row payment-row">
                        <div class="six columns bm">
                            <div class="">
                                <label>
                                    <input id="blue-media" class="payment-type" type="radio" name="payment-type" checked="checked" value="1">
                                    <img class="pull-auto"  src="<?php bloginfo('template_url'); ?>/images/bluemedia.jpg">
                                </label>
                            </div>
                        </div>
                        <div class="six columns paypal">
                            <div class="">
                                <label>
                                    <input id="paypal" class="payment-type" type="radio" name="payment-type" value="2">
                                    <img class="pull-auto" src="<?php bloginfo('template_url'); ?>/images/paypal.jpg">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="twelve columns">
                        <div class="submit-wrapper">
                            <input type="submit" class="action-button" value="Wpłacam!">
                        </div>
                    </div>
                </div>
        </form>
        <img src="<?php bloginfo('template_url'); ?>/images/bluemedia.png" class="imgcenter">
    </div>
</div>


<script>

var organizations = [];

$.ajax({
    url: '<?php bloginfo('wpurl'); ?>/wp-admin/admin-ajax.php',
    type: 'GET',
    data: {
        action: 'get-org'
    },
    complete: function (result) {
        var data = $.parseJSON(result.responseText);
        $.each(data, function(key, value){
            organizations[value.id] = {
                bm: value.bm,
                paypal: value.paypal
            };
        });
        var selectize = $('#organizations').selectize({
            searchField: 'name',
            valueField: 'id',
            labelField: 'name',
            options: data,
            placeholder: 'Wybierz organizację...',
            render: {
                item: function(item, escape) {
                    return '<div class="item">\
                    <div class="logotype" '+ ((item.imgUrl !== null)?'style="background-image: url(\''+item.imgUrl+'\')"':'') +'">&nbsp;</div>\
                    <div class="description">\
                    <p class="name">'+item.name+' - '+ item.city +'</p>\
                    <p class="goal">'+item.goal+'</p>\
                    </div>\
                    </div>';
                },
                option: function(item, escape) {
                    return '<div class="item">\
                    <div class="logotype" '+ ((item.imgUrl !== null)?'style="background-image: url(\''+item.imgUrl+'\')"':'') +'>&nbsp;</div>\
                    <div class="description">\
                    <p class="name">'+item.name+' - '+ item.city +'</p>\
                    <p class="goal">'+item.goal+'</p>\
                    </div>\
                    </div>';
                }
            }
        });

        selectize[0].selectize.setValue($.urlParam('id'));
        //selectize[0].selectize.disable();
        $('.selectize-input input').prop('required', true);
    }
});
</script>


<script>

function setupValidation()
{
    if ($('#anon').prop('checked')) {
        $('#name, #surname, #phone').val('');
        $('#name, #surname, #phone').removeAttr('required');
    } else {
        $('#name, #surname').attr('required', 'required');
    }
}

function handlePaymentType(organization) {

    if (organization.bm && organization.paypal) {
        $('#payment-type .payment-row').show();
        $('#payment-type .payment-row > div').removeClass('twelve');
        $('#payment-type .payment-row > div').addClass('six');
        $('#payment-type .payment-row > div').show();
        $("#blue-media").parent().parent().trigger('click');
    } else if (organization.bm) {
        $('#payment-type .payment-row').show();
        $('#payment-type .payment-row > div.paypal').hide();
        $('#payment-type .payment-row > div.bm').addClass('twelve');
        $('#payment-type .payment-row > div.bm').removeClass('six');
        $('#payment-type .payment-row > div.bm').show();
        $("#blue-media").parent().trigger('click');
    } else if (organization.paypal) {
        $('#payment-type .payment-row').show();
        $('#payment-type .payment-row > div.bm').hide();
        $('#payment-type .payment-row > div.paypal').addClass('twelve');
        $('#payment-type .payment-row > div.bm').removeClass('six');
        $('#payment-type .payment-row > div.paypal').show();
        $("#paypal").parent().trigger('click');
    } else {
        $('#payment-type .payment-row').hide();
    }
}

$(document).ready(function(){
    $('#anon').on('click', setupValidation);
    $('#payment-form')[0].reset();
});

$('#payment-form .action-button').on('click', function(){
    var selectizeInput = $('#payment-form .selectize-input input');
    if (selectizeInput.css('display') == 'none') {
        selectizeInput.prop('required', false);
    }
});

$('#payment-form #organizations').on('change', function() {
    //if ($(this).val() == 266) {
        $('#payment-form #payment-type').removeClass('hidden');
        handlePaymentType(organizations[$(this).val()]);
    // } else {
    //     $('#payment-form #payment-type').addClass('hidden');
    //     $('#payment-form #payment-type input[type="radio"]').prop('checked', false);
    //     $('#payment-form #payment-type #blue-media').prop('checked', true);
    // }
})
</script>

<?php get_footer(); ?>
