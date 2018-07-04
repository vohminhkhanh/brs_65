<footer class="sticky-footer">
    <div class="container">
        <div class="text-center">
            <small>{{ trans('messages.copyright_your_website_2018') }}</small>
        </div>
    </div>
</footer>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fa fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ trans('messages.ready_to_leave') }}</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">{{ trans('messages.select_logout_below_if_you_are_ready_to_end_your_current_session') }}</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">{{ trans('messages.cancel') }}</button>
                <a class="btn btn-primary" href="login.html">{{ trans('messages.logout') }}</a>
            </div>
        </div>
    </div>
</div>
