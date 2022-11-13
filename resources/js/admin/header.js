<!-- js for menu hide and show-->

    $(document).ready(function (){
        $("#open-nav").click( function (){
            $(".admin-nav").toggleClass('animate');
        });

            $("#nav-users").click( function (){
            $(".user-group").toggleClass('remove-hidden');
        });

            $("#nav-resources").click( function (){
            $(".resources-group").toggleClass('remove-hidden');
        });

        $("#nav-stock").click( function (){
        $(".stock-group").toggleClass('remove-hidden');
    });

        $("#nav-feedback").click( function (){
        $(".feedback-group").toggleClass('remove-hidden');
    });
});
