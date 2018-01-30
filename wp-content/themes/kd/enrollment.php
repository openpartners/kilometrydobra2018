<?php /* Template Name: Enrollment */ ?>
<?php get_header('new'); ?>





           





<div class="header enrollment">
    <div class="enrollment-form-wrapper">









        <div class="container">



<br>
                <div>
                    <a href="http://kilometrydobra.pl/wp-content/uploads/2016/05/KD-2018-informator.pdf" class="custom-button maroon pull-auto">
                        <div>
                            <span>Pobierz Informator 2018 PDF</span>
                        </div>
                    </a>
                </div>
<br>




            <h1 class="container-head"><?= getLangByKey('enrollmentFormCaption') ?></h1>
            <form id="enrollment-form" action="<?php bloginfo('template_url'); ?>/enroll.php" method="post">

                <div class="row">
                    <div class="four columns">
                        <div class="label">
                            <?= getLangByKey('enrollmentFormOrganizationNameLabel') ?>
                        </div>
                        <div class="label">
                            <?= getLangByKey('enrollmentFormCountryCityLabel') ?>
                        </div>
                        <div class="label">
                            <?= getLangByKey('enrollmentFormFirstNameLastNameLabel') ?>
                        </div>
                        <div class="label">
                            <?= getLangByKey('enrollmentFormEmailLabel') ?>
                        </div>
                        <div class="label">
                            <?= getLangByKey('enrollmentFormPhoneLabel') ?>
                        </div>
                    </div>
                    <div class="eight columns">
                        <div class="row">
                            <div class="twelve columns field">
                                <input type="text" name="enrollment-form[organization-name]" placeholder="<?= getLangByKey('enrollmentFormOrganizationNamePlaceholder') ?>" required minlength=3 />

                            </div>
                        </div>
                        <div class="row">
                            <div class="six columns field">
                                <input type="text" name="enrollment-form[country]" placeholder="<?= getLangByKey('enrollmentFormCountryPlaceholder') ?>" required minlength=3 />

                            </div>
                            <div class="six columns field">
                                <input type="text" name="enrollment-form[city]" placeholder="<?= getLangByKey('enrollmentFormCityPlaceholder') ?>" required minlength=3 />

                            </div>
                        </div>
                        <div class="row">
                            <div class="six columns field">
                                <input type="text" name="enrollment-form[first-name]" placeholder="<?= getLangByKey('enrollmentFormFirstNamePlaceholder') ?>" required minlength=3 />

                            </div>
                            <div class="six columns field">
                                <input type="text" name="enrollment-form[last-name]" placeholder="<?= getLangByKey('enrollmentFormLastNamePlaceholder') ?>" required minlength=3 />

                            </div>
                        </div>
                        <div class="row">
                            <div class="twelve columns field">
                                <input type="email" name="enrollment-form[email]" placeholder="<?= getLangByKey('enrollmentFormEmailPlaceholder') ?>" required minlength=3 />

                            </div>
                        </div>
                        <div class="row">
                            <div class="twelve columns field">
                                <input type="text" name="enrollment-form[phone]" placeholder="<?= getLangByKey('enrollmentFormPhonePlaceholder') ?>" required pattern="[+0-9 ]+" />

                            </div>
                        </div>
                        <div class="row position-relative">
                            <div class="one columns field agreement-checkbox">
                                <input id="agreement" class="cursor-pointer" type="checkbox" name="enrollment-form[agreement]" value="1" required />
                            </div>
                            <div class="eleven columns field agreement-text">
                                <label class="cursor-pointer no-select text-white" for="agreement"><?= getLangByKey('enrollmentAgreement') ?></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="twelve columns field">
                                <input type="submit" value="<?= getLangByKey('enrollmentFormSendButtonLabel') ?> >">
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>


    </div>
</div>















<script type="text/javascript">

function replaceValidationUI( form ) {
    // Suppress the default bubbles
    form.addEventListener( "invalid", function( event ) {
        event.preventDefault();
    }, true );

    // Support Safari, iOS Safari, and the Android browser—each of which do not prevent
    // form submissions by default
    form.addEventListener( "submit", function( event ) {
        if ( !this.checkValidity() ) {
            event.preventDefault();
        }
    });

    var submitButton = form.querySelector( "button:not([type=button]), input[type=submit]" );
    submitButton.addEventListener( "click", function( event ) {
        var invalidFields = form.querySelectorAll( ":invalid" ),
            errorMessages = form.querySelectorAll( ".error-message" ),
            parent;

        // Remove any existing messages
        for ( var i = 0; i < errorMessages.length; i++ ) {
            errorMessages[ i ].parentNode.removeChild( errorMessages[ i ] );
        }

        for ( var i = 0; i < invalidFields.length; i++ ) {
            parent = invalidFields[ i ].parentNode;
            parent.insertAdjacentHTML( "beforeend", "<div class='error-message'><span>" +
                invalidFields[ i ].validationMessage +
                "</span></div>" );
        }

        // If there are errors, give focus to the first invalid field
        if ( invalidFields.length > 0 ) {
            //invalidFields[ 0 ].focus();
        }
    });
}

// Replace the validation UI for all forms
var forms = document.querySelectorAll( "form" );
for ( var i = 0; i < forms.length; i++ ) {
    replaceValidationUI( forms[ i ] );
}

$('form#enrollment-form input').on('focus', function(){
    $(this).next('.error-message').remove();
});
</script>




<?php get_footer('new'); ?>
