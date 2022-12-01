$(function () {
    $(document).on('click', '#logout-link', function (e) {
       e.preventDefault();
       $('#logout-form').trigger('submit');
    });
});
