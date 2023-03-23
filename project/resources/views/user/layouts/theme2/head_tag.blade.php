<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<style>
    :root {
        --color1: {{ Config::get('settings')['color1'] }};
        --color2: {{ Config::get('settings')['color2'] }};
        --color3: {{ Config::get('settings')['color3'] }};
    }
    .right-side{margin-left: -32px !important;}
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- FAVICON -->
<link rel="shortcut icon" type="image/x-icon"
    href="{{ asset('storage/common/images/logo/' . Config::get('settings')['favicon']) }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/jquery-ui.css') }}">
<!-- GOOGLE FONTS -->
<link href="https://fonts.googleapis.com/css?family=Asap:400,400i%7CMontserrat:600,700,800" rel="stylesheet">
<!-- FONT AWESOME -->
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/fontawesome-all.min.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/fontawesome-5-all.min.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/font-awesome.min.css') }}">
<!-- Slider Revolution CSS Files -->
<link rel="stylesheet" href="{{ url('storage/theme/theme2/revolution/css/settings.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/revolution/css/layers.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/revolution/css/navigation.css') }}">
<!-- ARCHIVES CSS -->
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/search-form.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/search.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/animate.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/aos.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/aos2.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/lightcase.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/owl-carousel.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/menu.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/slick.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/map-animation.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/styles.css') }}">
<link rel="stylesheet" id="color" href="{{ url('storage/theme/theme2/css/default.css') }}">

<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/colors.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/swiper.min.css') }}">

<script src="{{ url('storage/theme/theme2/js/jquery-3.5.1.min.js') }}"></script>

<script src="{{ url('storage/theme/theme2/js/swiper.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/6.0.0/bootbox.all.min.js"></script>

<script>
    function submitContactSeller(business_id) {
            Swal.fire({
                title: 'Submit your detail',
                html: `
                    <input type="text" id="name" name="name" class="swal2-input" placeholder="Name"> </br>
                    <input type="text" id="phone" name="phone" class="swal2-input" placeholder="Phone Number"> </br>
                    <input type="email" id="email" name="email" class="swal2-input" placeholder="Email Id"> </br>
                    `,
                confirmButtonText: 'Submit Now',
                confirmButtonColor: '#397399',
                showCancelButton: true,
                cancelButtonText: 'Skip',
                focusConfirm: false,
                preConfirm: () => {
                    const name = Swal.getPopup().querySelector('#name').value
                    const phone = Swal.getPopup().querySelector('#phone').value
                    const email = Swal.getPopup().querySelector('#email').value
                    if (!name || !phone || !email) {
                        Swal.showValidationMessage(`Please fill all the field`)
                    } else {
                        Swal.showValidationMessage(`Submitting`)
                        $(".swal2-validation-message").addClass("green_before");

                        $.ajax({
                            type: "POST",
                            data: {
                                _token: "{{ csrf_token() }}",
                                business_id: business_id,
                                name: name,
                                phone: phone,
                                email: email,
                            },
                            url: "{{ route('contact_seller') }}",
                            success: function(res) {
                                if (res.status == 'submitted') {
                                    Swal.fire({
                                        title: 'Seller Detail',
                                        html: `
                                        <div class="my-2 text-left"> Following are the seller contact detail </div>
                                        <table>
                                            <tr class="text-left">
                                                <td> Phone </td>    
                                                <td> : `+res.data.contact_person_phone+`  </td>
                                            </tr>    
                                            <tr class="text-left">
                                                <td> Email </td>    
                                                <td> : `+res.data.contact_person_email+`  </td>
                                            </tr>    
                                        </table>
                                        `,
                                    })
                                } else {
                                    Swal.showValidationMessage(`Something went wrong`)
                                }
                                console.log(res);
                            },
                            error: function(errors) {
                                console.log(errors.responseJSON.message);
                            }
                        });
                    }
                }
            })
        }
</script>