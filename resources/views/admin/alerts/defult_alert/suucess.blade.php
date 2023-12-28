@if (session('success'))
    <div class="modal fade show" tabindex="-1" id="modalAlertSuccess" style="display: none;" aria-modal="true"
        role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close pageClose" data-bs-dismiss="modal"><em class="icon ni ni-cross"></em></a>
                <div class="modal-body modal-body-lg text-center">
                    <div class="nk-modal">
                        <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-success"></em>
                        <h4 class="nk-modal-title"> انجام شد!</h4>
                        <div class="nk-modal-text">
                            <div class="caption-text">{{ session('success') }}
                            </div>
                        </div>
                        <div class="nk-modal-action">
                            <a href="#" class="btn btn-lg btn-mw btn-primary pageClose"
                                data-bs-dismiss="modal">باشه</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {

            var elementSuccess = $('#modalAlertSuccess')
            $(elementSuccess).css('display', 'block');


            $('.pageClose').click(function() {

                $(elementSuccess).css('display', 'none');

            });

            function close() {

            }
        });
    </script>
@endif
