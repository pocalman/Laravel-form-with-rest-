$(document).ready(function () {

    $('.AddNew').click(function () {
        $(".TargetElements:first").clone().insertAfter('.TargetElements:last');
        $('.Remove').show(); // bouton de remove
    });

    $('.Remove').click(function () {
        if ($(".TargetElements").length > 1) {
            $(".TargetElements:last").remove();
        } else {
            $('.Remove').hide();
        }
    });

    $('#delete-url').click(function () {
        if ($(".urlSup").length > 1) {
            $(".urlSup:last").remove();
        }
    });

    $('.selectBox').click(function (event) {
        toggleDropdown(event);
    });



    $('.countryInput').on('change', function (event) {
        displayProvinceField(event);
    });
});

function displayProvinceField(event) {
    if ($(event.currentTarget).val() == 37) {
        $(event.currentTarget).siblings(".province").removeClass("disappear");
    } else {
        $(event.currentTarget).siblings(".province").addClass("disappear");
    }
}

$('input[type=radio][name=rechercheCoprod]').on('change', function () {
    switch ($(this).val()) {
        case '1':
            $(".recherchecoprod").removeClass("disappear");
            break;
        case '0':
            $(".recherchecoprod ").addClass("disappear");
            break;
    }
});

$('input[type=radio][name=coprod]').on('change', function () {
    switch ($(this).val()) {
        case '1':
            $(".coprod").removeClass("disappear");
            break;
        case '0':
            $(".coprod").addClass("disappear");
            break;
    }
});

function toggleDropdown(event) {
    var dropDown = event.currentTarget.getElementsByClassName('dropdown')[0];
    var wasExpanded = dropDown.classList.contains('expanded');

    // close all dropdown before
    for (selectboxChoices of document.getElementsByClassName('dropdown')) {
        selectboxChoices.classList.remove('expanded');
    }

    // open the selected one id it wasn't
    if (!wasExpanded) {
        dropDown.classList.add('expanded');
    }
}
