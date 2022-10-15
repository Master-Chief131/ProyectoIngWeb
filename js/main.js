<script type="text/javascript">
    $(document).ready(function () {
        $('.navbar-nav li').click(function () {
            $('.navbar-nav li').removeClass('active');
            $(this).addClass('active');
        });
        $('.navbar-nav li').click(function (event) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top
            }, 500);
        }
    });
</script>